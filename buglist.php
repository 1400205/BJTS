<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bug and Job Tracking System</title>
</head>
<body>
<h1>Bug List</h1>
<div id="content">
    <?php
    //Establishing connection with database
    include("connect.php");

    //select everything from bug table
    $sql="SELECT bugID,title,bugDesc FROM bugs";

    //fetch result from database
    $result=mysqli_query($db,$sl);



    //scan through each row in the response
    while ($row=mysqli_fetch_assoc($result)){
        //get title and id from the bug
        //get the userid, userTpe,userStatus,username
        $bugid=$row['bugID'];
        $title=$row['title'];
        $bugdesc=$row['bugDesc'];
        // $username=$row['username'];
        //Write the link to the page
        echo "<a href=bug.php?id=".$bugid.">".$title."</a></br>";

    }
   // echo $bugTitle;
   // echo $bugID;
    ?>

</div>



</body>
</html>