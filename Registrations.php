
<?php
//open start session

session_start();
?>

<?php
/**
 * Created by PhpStorm.
 * User: prosper
 * Date: 21/03/2016
 * Time: 17:43
 */
//get connection string
include("connect.php");

//check if form is fill, collect form variables
if( $_POST["submit"])
{
    //collect form variables

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    echo '$email';
}
