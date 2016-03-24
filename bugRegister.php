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
        <h3>Bugs & Jobs Tracking System(BJTS)</h3>
<p></p>
        <form method="post" action="addBugs.php">
            <fieldset>
                <legend>ADD BUGS</legend><br>
                <label>Title:</label><br>
                <input type="text" name="title" placeholder="title" /><br><br>
                <label>Description:</label><br>
                <input type="text" name="bugDesc" placeholder="description" />  <br><br>
                <input type="submit" name="submit" value = "Submit"/>
                <p></p>
                <footer>


                </footer>
            </fieldset>
        </form>

    </section>
    <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>

</div>


</body>
</html>
