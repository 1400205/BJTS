
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

    //strip special characters
    $username=mysqli_real_escape_string($db,$username);
    $password=mysqli_real_escape_string($db,$password);
    $email=mysqli_real_escape_string($db,$email);
    $phone=mysqli_real_escape_string($db,$phone);
    $password=md5($password);//data encryption using MD5 standard

    //check existing users
    $sql = "SELECT emailAddress FROM users WHERE emailAddress='$email'";

    //set the query to see if the entered email address matches any entered email
    $result=mysqli_query(db,$sql);
    $row=mysqli_fetch_array($result,mysqli_fetch_assoc);

    //run the query and see
    if((mysqli_num_rows($result))==1)
    {
        $msg="Sorry this email already exists";
    }
    else
    {

        //Build a query string to insert data into users table
        $qry="INSERT  INTO users(username, password, emailAddress, phoneExtention) VALUES ('$username', '$password', '$email', '$phone')";
        if (mysqli_query($db, $qry));
          $success= "Records added successfully.";
        echo "$success";

    }
}
