<?php

namespace Src\Database;

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
        require ROOT . 'configs/db.php';
        try {
            $this->pdo = new PDO("$prefix:host=$host;
                                        dbname=$database",
                $user, $password);
        } catch (PDOException $e) {
            echo $e;
        }
        return $this;
    }

    public function execute($sql_query,$values)
    {
        $this->pdo->prepare($sql_query);
        $query_id = $this->pdo->prepare($sql_query);
        $query_id->execute($values);
        return($this->pdo->lastInsertId());
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
