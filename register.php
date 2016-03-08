<?php
/**
 * Created by PhpStorm.
 * User: prosper
 * Date: 07/03/2016
 * Time: 23:36
 */

//call connection string fucntion
include ("connect.php");//Establishing connection with our database

//check for emptyness of user inputs

if(empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["email"])|| empty($_POST["phone"]) )
{
    echo "Both fields are required.";
}else {

    //get user input data from form into variables
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
}

//Build a query string to insert data into users table
$qry="INSERT  INTO users(username,password,emailAddress,phoneExtention) VALUES '$username','$password','$email','$phone'";

//assign query string and connection variables to sqli guiry function

$result= mysqli_query($db,$sql);

mysqli_select_db('BJTS');


//test connection
if(! $db){
    die("could not connect to database");
}elseif($result)
{
die("could not enter data");
}else
{
    echo "Entered data successfully\n";
    mysqli_close($db);
}


