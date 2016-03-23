<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Bug Fix Status</title>
</head>
<body>
<form method="post" action="activateUsers.php">
    <?php
    /**
     * Created by PhpStorm.
     * User: prosper
     * Date: 15/03/2016
     * Time: 08:21
     *
     *
     */

    include ("connect.php");//Establishing connection with our database

    $sql="SELECT uid,userType,userStatus,username FROM users WHERE userStatus='0'";//select required dataset from database
    $result=mysqli_query($db,$sql);//fetch data from database

    echo '<h3>Change Bug Fix Status</h3>'.$_SESSION["$uid"];
    echo '<table border="1" style="width:60%">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<th>'.'Bug ID'.
        '</th>'.'<th>'.'Title'.'</th>'.'<th>'.'Description'.

        '</th>'.'<th>'.'Activate'.'</th>'.'</table>';
    //loop through the database and fetch all users with userStatus=0
    WHILE($row=mysqli_fetch_assoc($result))
    {
        //get the userid, userTpe,userStatus,username
        $uid=$row['uid'];
        $username=$row['$username'];
        $userType=$row['userType'];
        // $username=$row['username'];

        echo '<table border="1" style="width:60%">'.'<col width="60">'. '<col width="60">'.'<col width="60">'.'<col width="60">'.'<tr>'.
            '<a href="changeBugStatus.php?uid="'.$uid.'>'.'<tr>'.'<td>'.$uid.'</td>'.'<td>' . $username.'</td>'.'<td>'.
            $userType.'</td>'.'<td>'.
            "<input type='checkbox' name='bugid[]' value = '$uid'>".
            '</td>'.'</a>'.'<br>'.'</tr>'.'</table>';



    }
    ?>

    <input type="submit" name="submit" value="submit">
    <?php

    if(isset($_POST['submit'])){//to run PHP script on submit
        if(!empty($_POST['bugid'])){
// Loop to store and display values of individual checked checkbox.
            foreach($_POST['bugid'] as $bugid)
            {
                //get update query string
                $updatebugs="UPDATE bugs SET userBugFixed = 1 WHERE bugID='$bugid'";

                if(mysqli_query($db,  $updatebugs)){

                } else{
                    echo "ERROR: Could not be able to execute"/**$qry. mysqli_error($db)*/;
                }

                // Close connection
                // mysqli_close($db);
            }
        }
    }
    ?>


</form>

</body>
