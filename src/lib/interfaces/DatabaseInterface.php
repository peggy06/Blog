<?php

/**
 * Created by PhpStorm.
 * User: jimuelpalaca
 * Date: 7/25/2016
 * Time: 2:56 AM
 *
 * note: try to use interface, please check if i use it right. thanks sir cadag
 */
interface DatabaseInterface
{
    public function connect();
    public function disconnect();
    public function select($tbl, $fld, $cond);
    public function insert($tbl, $fld, $val);
    public function update($tbl, $fld, $val, $cond);
    public function delete($tbl, $fld, $val, $cond);
}