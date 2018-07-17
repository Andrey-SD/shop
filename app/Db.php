<?php

namespace App;

use PDO;

class Db
{

    private $pdo;

    public function __construct()
    {
        $this->connection();
    }

    private function connection()
    {
        require_once ROOT . 'configs/db.php';
        try {
            $this->pdo = new PDO("$prefix:host=$host;
                                        dbname=$database",
                $user, $password);
        } catch (PDOException $e) { }

        return $this;
    }

    public function execute($sql_query,$values)
    {
        $query_id = $this->pdo->prepare($sql_query);
        $query_id->execute($values);
        return($query_id->lastInsertId());
    }

    public function query($sql_query,$values)
    {
        $query_id = $this->pdo->prepare($sql_query);
        $query_id->execute($values);
        $result = $query_id->fetchAll(PDO::FETCH_ASSOC);
        if ($result === false) {
            return [];
        }
        return $result;

    }
}
