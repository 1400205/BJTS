<?php
/**
 * Created by PhpStorm.
 * User: prosper
 * Date: 15/03/2016
 * Time: 02:17
 */
include ("connect.php");

$dg = new C_DataGrid("SELECT * FROM users","uid","users");
$dg->display();