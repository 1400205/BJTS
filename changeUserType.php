<?php
/**
 * Created by PhpStorm.
 * User: prosper
 * Date: 25/03/2016
 * Time: 11:35
 */
?>

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change User Type</title>
    <link rel="stylesheet"type="text/css" href="style.css"/>
</head>
<body>

<div class="tableBox">

    <br><br>
    <section>
        <h3>Bugs & Jobs Tracking System(BJTS)</h3>
        <p></p>
        <form method="post" action="changeUserType.php">
            <fieldset>
                <legend>Change User to Admin </legend>
                <p></p>

                <?php

                include ("connect.php");//Establishing connection with our database

                $sql="SELECT uid,userType,userStatus,username FROM users WHERE userType=2";//select required dataset from database
                $result=mysqli_query($db,$sql);//fetch data from database

                echo '<table border="1" style="width:60%">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<th>'.'User ID'.
                    '</th>'.'<th>'.'User Name'.'</th>'.'<th>'.'Change to Admin'.

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
                        $userType.'</td>'.'<td>'. "<input type='checkbox' name='userType[]' value = '$userType'>".
                        '</td>'.'</a>'.'<br>'.'</tr>'.'</table>';



                }
                ?>
                <p></p>
                <input type="submit" name="submit" value="submit">
                <?php

                if(isset($_POST['submit'])){//to run PHP script on submit
                    if(!empty($_POST['userType'])){
// Loop to store and display values of individual checked checkbox.
                        foreach($_POST['userType'] as $userType)
                        {
                            //get update query string
                            $updateusers="UPDATE users SET userType = 1 WHERE uid='$uid'";

                            if(mysqli_query($db,  $updateusers)){

                            } else{
                                echo "ERROR: Could not be able to execute"/**$qry. mysqli_error($db)*/;
                            }

                            // Close connection
                            // mysqli_close($db);
                        }
                        echo "Update was successful";
                    }else{echo "Select a User Before Updating";}
                }
                ?>
            </fieldset>



        </form>
    </section>
    <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>

</div>

</body>

