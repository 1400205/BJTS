<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Activate Users</title>
    <link rel="stylesheet"type="text/css" href="style.css"/>
</head>
<body>
<form method="post" action="activateUsers.php">
    <fieldset>
        <legend>Activate Users </legend>
        <p></p>

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

    echo '<table border="1" style="width:60%">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<th>'.'User ID'.
        '</th>'.'<th>'.'User Name'.'</th>'.'<th>'.'User Type'.

        '</th>'.'<th>'.'Activate'.'</th>'.'</table>';
    //loop through the database and fetch all users with userStatus=0
    WHILE($row=mysqli_fetch_assoc($result))
    {
        //get the userid, userTpe,userStatus,username
        $uid=$row['uid'];
        $username=$row['username'];
        $userType=$row['userType'];
        // $username=$row['username'];

        echo '<table border="1" style="width:60%">'.'<col width="60">'. '<col width="60">'.'<col width="60">'.'<col width="60">'.'<tr>'.
            '<a href="changeBugStatus.php?uid="'.$uid.'>'.'<tr>'.'<td>'.$uid.'</td>'.'<td>' . $username.'</td>'.'<td>'.
            $userType.'</td>'.'<td>'.
            "<input type='checkbox' name='uid[]' value = '$uid'>".
            '</td>'.'</a>'.'<br>'.'</tr>'.'</table>';



    }
    ?>
<p></p>
    <input type="submit" name="submit" value="submit">
    <?php

    if(isset($_POST['submit'])){//to run PHP script on submit
        if(!empty($_POST['uid'])){
// Loop to store and display values of individual checked checkbox.
            foreach($_POST['uid'] as $uid)
            {
                //get update query string
                $updateusers="UPDATE users SET userStatus = 1 WHERE uid='$uid'";

                if(mysqli_query($db,  $updateusers)){

                } else{
                    echo "ERROR: Could not be able to execute"/**$qry. mysqli_error($db)*/;
                }

                // Close connection
                // mysqli_close($db);
            }
            echo "Update was successful";
        }
    }
    ?>
            </fieldset>



</form>

</body>
