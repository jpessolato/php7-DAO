<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 14/03/2018
 * Time: 12:02
 */

class Sql extends PDO {
    private $conn;

    public function __construct($dsn, $username, $passwd, $options)
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=nfe_2_1", "root", "root");
    }
    private function setParams( $statment, $parameters = array())
    {
        foreach ($parameters as $key => $value) {
            $statment->setParam($key, $value);
        }
    }
    private function setParam( $statment, $key, $value)
    {

        $statment->bindParam($key, $value);

    }

    public function query( $rawQuery, $params = array())
    {
        $stmt = $this->conn->prepare( $rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;

    }

    public function select($rawQuery, $params = array())
    {
        $stmt = $this->query($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}