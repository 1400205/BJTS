<?php

//start session

session_start();
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bugs Registration</title>
    <link rel="stylesheet"type="text/css" href="style.css"/>
</head>

<body>

<header>
    <!--add header information such as title, images, ADs etc-->
    <!-- <img src="logo.jpg" alt="logo of BJTS"/>-->
    <h3>Add Bugs Discovered</h3>

</header>


<div class="addbug">

    <br><br>



    <section>

        <form method="post" action="addBugs.php">
            <fieldset>
                <legend>ENTER BUG DETAILS</legend>
                <label>Title:</label><br>
                <input type="text" name="title" placeholder="title" /><br>
                <label>Description:</label><br>
                <textarea name="bugDesc"cols="45" rows="5"></textarea> <br>
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
