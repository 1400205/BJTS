<?php
/**
 * Created by PhpStorm.
 * User: prosper
 * Date: 07/03/2016
 * Time: 23:25
 */
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
    <form method="post" action="userRegistration.php.php">
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