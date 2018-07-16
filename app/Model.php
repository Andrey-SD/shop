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

    /**
     * Model constructor.
     */
//    public function __construct()
//    {
//        $this->get_class_name();
//        $this->get_class_properties();
//        $this->db = new Db;
//    }
//
//    protected function get_class_name()
//    {
//        $this->called_class_name = substr(strrchr(get_called_class(), '\\'), 1);
//        $this->called_class_name = strtolower($this->called_class_name);
//    }
//
    protected function get_class_properties()
    {
        $obj =
        var_dump(get_object_vars();

    }

    public function create($object)
    {
//        $this->db = new Db;
//        $this->db->execute("INSERT INTO $this->called_class_name
//                                SET name='id',email = 'aaaa',password='123';");
    }

    public function find()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
