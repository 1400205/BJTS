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

    <form method="post" action="Registrations.php">
        <fieldset>
        <legend>Create Account</legend>
        <lable for="username">User Name</lable><br/>
        <input type="text" name="username"/>
        <p></p>
        <lable for="Email">Email</lable><br/>
        <input type="email" name="email"/>
        <p></p>

        <lable for="phone">Your Phone Number</lable><br/>
        <input type="number" maxlength="15" name="phone"/>
        <p></p>
        <lable for="password">Your Password</lable><br/>
        <input type="password" name="password"/>

        <p></p>

        <input type="submit" name="submit" Value="Create your BJTS Account"/>
        </fieldset>
    </form>

</section>

</body>
</html>