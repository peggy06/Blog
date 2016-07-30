<?php

/**
 * Created by PhpStorm.
 * User: jimuelpalaca
 * Date: 7/30/2016
 * Time: 8:10 PM
 */
interface DatabaseInterface
{
    public function connect();
    public function disconnect();
    public function select($tbl,$field,$cond);
    public function insert($tbl,$field,$val);
    public function update($tbl,$field,$val,$cond);
    public function delete($tbl,$cond);
}