<?php

/**
 * Created by PhpStorm.
 * User: jimuelpalaca
 * Date: 7/25/2016
 * Time: 2:54 AM
 */
include 'interfaces/DatabaseInterface.php';

class MySQLDatabase implements DatabaseInterface
{
    protected  $connection;

    function connect(){
        include '/../../../config/Database.php';
        $this->connection=mysqli_connect($servername, $username, $password, $dbname);
    }

    function disconnect(){
        $_connection=$this->connection;
        mysqli_close($_connection);
    }

    function select($table, $fields, $condition=null){
        $this->connect();
        $query="SELECT ".$fields." FROM ".$table.(($condition==null)? "":" WHERE ".$condition."");
        $result=mysqli_query($this->connection, $query);
        $this->disconnect();
        return $result;
    }

    function insert($table, $fields, $values){
        $this->connect();
        $query="INSERT INTO ".$table." (".$fields.") VALUES (".$values.")";
        mysqli_query($this->connection, $query);
        $this->disconnect();
    }

    function update($table, $field, $value, $condition){
        $this->connect();
        $query="UPDATE ".$table." SET ".$field."=".$value." WHERE ".$condition."";
        mysqli_query($this->connection, $query);
        $this->disconnect();
    }

    function delete($table, $condition){
        $this->connect();
        $query="DELETE FROM".$table." WHERE".$condition."";
        mysqli_query($this->connection, $query);
        $this->disconnect();
    }
}