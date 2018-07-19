<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 16.07.18
 * Time: 15:23
 */

namespace App;

class Model
{
    private $db;
    private $called_class_name;
    private $fillables_query;
    private $values_query;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $this->db = new Db;
        $this->get_class_name();
    }

    protected function get_class_name()
    {
        $this->called_class_name = substr(strrchr(get_called_class(), '\\'), 1);
        $this->called_class_name = strtolower($this->called_class_name);
    }

    private function prepare_query($values)
    {
        $keys = array_keys($values);
        $this->fillables_query = implode(', ', $keys);
        for ($count = 0; $count<sizeof($keys); $count++) {
            $keys[$count] = ':'.$keys[$count];
        }
        $this->values_query = implode(', ', $keys);
    }

    public function create($values)
    {
        $this->prepare_query($values);
        $result = $this->db->execute("INSERT INTO 
                                              $this->called_class_name ($this->fillables_query)
                                              VALUES($this->values_query)",$values);
        return($result);

    }

    public function find($values=null)
    {
        if (empty($values)){
            $result = $this->db->query("Select * FROM $this->called_class_name",$values);
            return $result;
        }
        $this->prepare_query($values);
        $result = $this->db->query("Select * FROM $this->called_class_name
                                              WHERE $this->fillables_query = $this->values_query",$values);
        if(sizeof($result) == 1){
            return $result[0];
        }
        return $result;

    }

    public function update($set, $where)
    {
        $values=array_merge($set, $where);
        $this->db->execute("UPDATE users SET remember_token=:remember_token WHERE id=:id",$values);
    }

    public function delete()
    {

    }
}
