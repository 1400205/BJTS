<?php

//start session

session_start();
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bugs Registration</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>

<header>
    <!--add header information such as title, images, ADs etc-->
    <!-- <img src="logo.jpg" alt="logo of BJTS"/>-->
    <h3>Add Bugs Discovered</h3>

</header>

<section>
    <!--displays input fields for  user inputs-->

        <form method="POST" action="bug.php">
            <fieldset>
            <legend>Please enter your bug details...</legend>
            <p></p>
            <label for="title">Title</label><br>
            <input type="text" name="title">
            <p></p>
            <label for="description">Description</label> <br>
            <textarea name="description"cols="45" rows="5"></textarea>
            <p></p>

            <input type="submit"name="submit" value="Submit"><br>
            <label for="attachment">Attachment</label>
            </fieldset>
        </form>




</section>

<?php
// Echo session variables that were set on previous page
echo "user name: " . $_SESSION["uname"] . ".<br>";
echo "password: " . $_SESSION["pwd"] . ".";

echo "<p>"."user type:". $_SESSION["usertype"]. "<br>";
echo "<p>"."user status:".$_SESSION["userstatus"]."<br>";
echo"<p>"."user ID:". $_SESSION["userid"]."<br>";

?>
</body>
</html>
