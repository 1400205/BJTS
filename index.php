<?php

//start session

session_start();
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet"type="text/css" href="style.css"/>
    <title>Bugs and Jobs Tracking System</title>


</head>

<body>


<div class="loginBox">

    <br><br>
    <section>
        <h3>Bugs & Jobs Tracking System(BJTS)</h3><p></p>
    <form method="post" action="login.php">
        <fieldset>
            <legend>LOGIN TO BJTS</legend>
        <label>Username:</label><br>
        <input type="text" name="username" placeholder="username" /><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="password" />  <br><br>
        <input type="submit" name="submit" value = "login"/>

        </fieldset>
        <footer>
            <a href="registerUser.php">New user? Please Register</a>

        </footer>
    </form>



</div>

</section>
</body>
</html>
