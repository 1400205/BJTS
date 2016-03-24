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
    <link rel="stylesheet"type="text/css" href="style.css"/>
</head>
<body>

<div class="formBox">

    <h3>Bug & Job Tracking System</h3><br>

<section>

    <form method="post" action="Registrations.php">
        <fieldset>
        <legend>Create Account</legend>
            <label>Username:</label><br><br/>
        <input type="text" name="username"/>
        <p></p>
            <label>Email:</label><br><br/>
        <input type="email" name="email"/>
        <p></p>

            <label>Phone:</label><br><br/>
        <input type="number" maxlength="15" name="phone"/>
        <p></p>
            <label>Password:</label><br><br/>
        <input type="password" name="password"/>

        <p></p>

        <input type="submit" name="submit" Value="Create your BJTS Account"/>
        </fieldset>
    </form>
</div>
</section>

</body>
</html>