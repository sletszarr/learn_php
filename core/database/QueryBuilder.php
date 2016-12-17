<?php
/**
 * Created by PhpStorm.
 * User: bnamora
 * Date: 11/24/16
 * Time: 5:40 PM
 */

class QueryBuilder {
    
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($tableName)
    {
        $statement = $this->pdo->prepare('select * from '.$tableName);

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);

    }

    public function insert($tablename, $parameters)
    {
        $sql = sprintf(
            "insert into %s (%s) values (%s)",
            $tablename,
            implode(array_keys($parameters), ', '),
            ':'.implode(array_keys($parameters), ', :')
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

}

