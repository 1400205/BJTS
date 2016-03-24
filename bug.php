<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bug and Job Tracking System</title>
</head>
<body>

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



</body>
</html>