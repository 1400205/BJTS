<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Bug Fix Status</title>
    <link rel="stylesheet"type="text/css" href="style.css"/>
</head>
<body>
<form method="post" action="changeBugStatus.php">
    <fieldset>
        <legend>Change Bug Fixed-Status</legend>
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

        //$dg = new C_DataGrid("SELECT * FROM users", "uid", "users"); This code is not functioning the way i want
        $sql="SELECT bugID,title,bugDesc FROM bugs";//select required dataset from database

        //get the result
        $result=mysqli_query($db,$sql);//fetch data from database

        echo '<table border="1" style="width:60%">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<th>'.'Bug ID'.
            '</th>'.'<th>'.'Title'.'</th>'.'<th>'.'Description'.

            '</th>'.'<th>'.'Activate'.'</th>'.'</table>';
        //loop through the database and fetch all users with userStatus=0
        WHILE($row=mysqli_fetch_assoc($result))
        {
            //get the userid, userTpe,userStatus,username
            $bugid=$row['bugID'];
            $title=$row['title'];
            $bugdesc=$row['bugDesc'];
            // $username=$row['username'];

            echo
                '<a href="mybuglist.php?uid="'.$bugid.'<br>'.$bugid.'<br>' . $title.'<br>'. $bugdes.'</a>'.'</br>';





        }
        ?>

    </fieldset>

</form>

</body>
