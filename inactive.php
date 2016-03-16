<?php
/**
 * Created by PhpStorm.
 * User: prosper
 * Date: 15/03/2016
 * Time: 08:21
 */
$dg = new C_DataGrid("SELECT * FROM users", "uid", "users");

// change column titles
$dg->set_col_title("userName", "User Name.");
$dg->set_col_title("orderDate", "Order Date");
$dg->set_col_title("shippedDate", "Shipped Date");
$dg->set_col_title("customerNumber", "Customer No.");

// hide a column
$dg -> set_col_hidden("requiredDate");

// change default caption
$dg -> set_caption("Orders List");

$dg -> display();