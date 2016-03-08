<?php
/**
 * Created by PhpStorm.
 * User: prosper
 * Date: 07/03/2016
 * Time: 23:25
 */
?>

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bug and Job Tracking System</title>
</head>
<body>

<header>

    <h3>Bug & Job Tracking System</h3>
</header>

<section>
    <form method="post" action="userRegistration.php">
        <h3>Create Account</h3>
        <lable for="username">User Name</lable><br/>
        <input type="text" name="username"/>
        <p></p>
        <lable for="Email">Email</lable><br/>
        <input type="email" name="email"/>
        <p></p>

        <lable for="Email">Email Again</lable><br/>
        <input type="email" name="Email1"/>
        <p></p>
        <lable for="phone">Your Phone Number</lable><br/>
        <input type="tel" name="phone"/>
        <p></p>
        <lable for="password">Your Password</lable><br/>
        <input type="password" name="password"/>
        <p></p>
        <lable for="password">Your Password Again</lable><br/>
        <input type="password" name="password1"/>
        <p></p>

        <input type="submit" Value="Create your BJTS Account"/>

    </form>
</section>

</body>
</html>