<?php
// Start the session
session_start();
?>
<?php
/**
 * Created by PhpStorm.
 * User: prosper
 * Date: 02/03/2016
 * Time: 15:47
 */

include ("connect.php");//Establishing connection with our database

if(empty($_POST["username"]) || empty($_POST["password"]))
{
    echo "Both fields are required.";
}else {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

$sql="SELECT uid,userType,userStatus FROM users WHERE username='$username' and password='$password'";
$result=mysqli_query($db,$sql);

$row=mysqli_fetch_array($result);//get the row of data

$usertype = $row['userType'];//get user type
$userstatus = $row['userStatus'];//get user status
$userid = $row['userid'];//get user id

if(mysqli_num_rows($result) == 1 and $usertype=='Admin' and $userstatus==1) {

    $usertype = $row['userType'];//get user type
    $userstatus = $row['userStatus'];//get user status
    header("location: adminHome.php"); // Redirecting To another Page

    $_SESSION["uname"] = $username;
    $_SESSION["pwd"] = $password;

    $_SESSION["usertype"] = $usertype;
    $_SESSION["userstatus"] = $userstatus;
}
elseif (mysqli_num_rows($result) == 1 and $usertype=='Non-Admin' and $userstatus==1)
    {
        header("location: userHome.php"); // Redirecting To another Page
    }
else
{
    echo "Incorrect username or password.";


}

?>
