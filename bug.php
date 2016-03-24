<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bug and Job Tracking System</title>
    <link rel="stylesheet"type="text/css" href="style1.css"/>
</head>
<body>

<div class="">

    <br><br>
    <section>
<form method="post" action="bug.php">

<fieldset>
    <legend>Bug Details</legend>

    <h3>Bugs & Jobs Tracking System(BJTS)</h3>
    <h4> Bug Details</h4>
    <p>--------------------------------------------------------</p>
<div id="content">
    <?php
    //Establishing connection with database
    include("connect.php");

    //select everything from bug table
    $sql="SELECT * FROM bugs WHERE bugID=".$_GET["id"];

    //fetch result from database
    $result=mysqli_query($db,$sql);

    //scan through each row in the response
    $row=mysqli_fetch_assoc($result);
        //get title and id from the bug
        $bugTitle=$row['title'];
        $bugID=$row['bugID'];
    $bugDesc=$row['bugDesc'];
        //Write the link to the page
        echo "<h2>".$bugTitle."</h2>";
    echo "<p2>".$bugDesc."</p2>";




    ?>

</div>

</fieldset>

</form>
    </section>
    <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>

</div>
</body>
</html>