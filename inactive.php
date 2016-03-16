<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inactive users</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: prosper
 * Date: 15/03/2016
 * Time: 08:21
 *
 *
 */
include ("connect.php");//Establishing connection with our database
//$dg = new C_DataGrid("SELECT * FROM users", "uid", "users"); This code is not functioning the way i want
$sql="SELECT uid,userType,userStatus,username FROM users WHERE userStatus='0'";//select required dataset from database
$result=mysqli_query($db,$sql);//fetch data from database

//loop through the database and fetch all users with userStatus=0
WHILE($row=mysqli_fetch_assoc($result))
{
    //get the userid, userTpe,userStatus,username
    $uid=$row['uid'];
    $userType=$row['userType'];
    $userStatus=$row['userStatus'];
    $username=$row['username'];
    echo '<a href="inactive.php?uid="'.$uid.'>' .$username.','. $userType. $uid.','.'</a>'.'<br>';
}
?>
