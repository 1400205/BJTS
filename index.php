<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bugs and Jobs Tracking System</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<h1>Bugs & Jobs Tracking System(BJTS)</h1>
<div class="loginBox">
    <h3>LOGIN TO BJTS</h3>
    <br><br>
    <form method="post" action="login.php">
        <label>Username:</label><br>
        <input type="text" name="username" placeholder="username" /><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="password" />  <br><br>
        <input type="submit" name="submit" value = "login"/>
    </form>
    <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>

</div>

<footer>
    <a href="registerUser.php">New user? Please Register</a>

</footer>
</body>
</html>
