<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 16.07.18
 * Time: 13:38
 */

namespace App;

use PDO;

class Db
{

    private $pdo;

    public function __construct()
    {
        $this->connection();
    }

    /**
     * @return $this
     */
    private function connection()
    {
        require_once ROOT.'configs/db.php';
        try{
            $this->pdo = new PDO("mysql:host=$host;dbname=$database",$user,$password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            exit($e->getMessage());
        }

        return $this;
    }

    /**
     * @param $sql
     * @return mixed
     */

    public function execute($sql)
    {
        $query_id = $this->pdo->prepare($sql);
        return $query_id->execute();
    }

    /**
     * @param $sql
     * @return array
     */

    public function query($sql)
    {
        $query_id = $this->pdo->prepare($sql);
        $query_id ->execute();
        $result = $query_id->fetchAll(PDO::FETCH_ASSOC);
        if ($result === false){
            return [];
        }
        return $result;

    }
}

//$db = new Db();
//$db->execute("INSERT Into cars (title,description) values('130','120');");
//$result = $db->query("Select * from cars;");
//print_r($result);
