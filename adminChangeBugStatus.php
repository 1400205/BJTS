<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Change Bug Fixed-Status</title>
    <link rel="stylesheet"type="text/css" href="style1.css"/>
</head>
<body>
<a href="logout.php"> <li class="li">logout</li></ul> </a>
<div class="">

    <br><br>
    <section>
        <h3>Bugs & Jobs Tracking System(BJTS)</h3>
        <p></p>
<form method="post" action="adminChangeBugStatus.php">
    <fieldset>
        <legend>Admin Change Bug Status</legend>
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
    $sql="SELECT bugID,title,bugDesc FROM bugs WHERE adminBugFixed=0";//select required dataset from database
    //"SELECT bugID,title,bugDesc FROM bugs WHERE uid=1";//select required dataset from database
    $result=mysqli_query($db,$sql);//fetch data from database

    echo '<h3>Admin Change Bug Fixed-Status</h3>'.$_SESSION["$uid"];
    echo '<table border="1" style="width:60%">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<th>'.'Bug ID'.
        '</th>'.'<th>'.'Title'.'</th>'.'<th>'.'Description'.

        '</th>'.'<th>'.'Fixed?'.'</th>'.'</table>';
    //loop through the database and fetch all users with userStatus=0
    WHILE($row=mysqli_fetch_assoc($result))
    {
        //get the userid, userTpe,userStatus,username
        $bugid=$row['bugID'];
        $title=$row['title'];
        $bugdesc=$row['bugDesc'];
        // $username=$row['username];

        echo '<table border="1" style="width:60%">'.'<col width="60">'. '<col width="60">'.'<col width="60">'.'<col width="60">'.'<tr>'.
            '<a href="changeBugStatus.php?uid="'.$bugid.'>'.'<tr>'.'<td>'.$bugid.'</td>'.'<td>' . $title.'</td>'.'<td>'.
            $bugdesc.'</td>'.'<td>'.
            "<input type='checkbox' name='bugid[]' value = '$bugid'>".
            '</td>'.'</a>'.'<br>'.'</tr>'.'</table>';



    }
    ?>
<p></p>
    <input type="submit" name="submit" value="submit">
    <?php

    if(isset($_POST['submit'])){//to run PHP script on submit
        if(!empty($_POST['bugid'])){
            $fixedDate=date("Y/m/d");
// Loop to store and display values of individual checked checkbox.
            foreach($_POST['bugid'] as $bugid)
            {
                //get update query string
                $updatebugs="UPDATE bugs SET adminBugFixed = 1,bugFixedDate='$fixedDate' WHERE bugID='$bugid'";
                mysqli_query($db,  $updatebugs);
                if (mysqli_query($db,  $updatebugs)){


                }

                elseif(!(mysqli_query($db,  $updatebugs)))

                {
                    echo "ERROR: Could not be able to execute"/**$qry. mysqli_error($db)*/;
                }
                else
                {
                    echo "Record added successfully"/**$qry. mysqli_error($db)*/;
                }


                //echo $bugid."</br>";

                // Close connection
                //mysqli_close($db);
            }
            echo "Record added successfully"/**$qry. mysqli_error($db)*/;


        }else{echo "Please select Bug(s) before submitting"/**$qry. mysqli_error($db)*/;}

    }
    ?>
</fieldset>

</form>
    </section>
    <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>

</div>
</body>
