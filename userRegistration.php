<?php
/**
 * Created by PhpStorm.
 * User: prosper
 * Date: 07/03/2016
 * Time: 23:36
 */

//call connection string fucntion
include ("connect.php");//Establishing connection with our database


//check emptyness of input boxies

if(empty($_POST["username"]) || empty($_POST["password"])|| empty($_POST["email"])|| empty($_POST["phone"]))
{
    echo "All fields are required.";
}else {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    //check connection
    if ($db==false)
    {die("could not connect");}

//attempt excuting query

//Build a query string to insert data into users table
    $qry="INSERT  INTO users(username, password, emailAddress, phoneExtention) VALUES ('$username', '$password', '$email', '$phone')";

    if(mysqli_query($db, $qry)){
        echo "Records added successfully.";

        //redirect user to login screen
        header("location: index.php");
    } else{
        echo "ERROR: Could not able to execute $qry. " . mysqli_error($db);
    }

// Close connection
    mysqli_close(db);

//get user input data from form into variables
//$username = $_POST['username'];
//$password = $_POST['password'];
//$email = $_POST['email'];
// $phone = $_POST['phone'];

//Build a query string to insert data into users table
//$qry="INSERT  INTO users(username,password,emailAddress,phoneExtention) VALUES '$username','$password','$email','$phone'";

//assign query string and connection variables to sqli guiry function

}



?>
