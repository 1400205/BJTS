<?php
/**
 * Created by PhpStorm.
 * User: prosper
 * Date: 24/03/2016
 * Time: 22:19
 */
?>

<?php
/**
 * Created by PhpStorm.
 * User: prosper
 * Date: 24/03/2016
 * Time: 22:01
 */
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Bug Fix Status</title>
    <link rel="stylesheet"type="text/css" href="style1.css"/>
</head>
<body>
<div class="">

    <br><br>
    <section>

        <form method="post" action="changeBugStatus.php">
            <fieldset>

                <legend>List of Bugs</legend>
                <h3>Bugs & Jobs Tracking System(BJTS)</h3>
                <h4>List of Unfixed Bugs</h4>
                <p>--------------------------------------------------------</p>
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

                //get the result
                $result=mysqli_query($db,$sql);//fetch data from database


                //loop through the database and fetch all users with userStatus=0
                WHILE($row=mysqli_fetch_assoc($result))
                {
                    //get the userid, userTpe,userStatus,username
                    $bugid=$row['bugID'];
                    $title=$row['title'];
                    $bugdesc=$row['bugDesc'];
                    // $username=$row['username'];

                    // echo'<a href="mybuglist.php?uid="'.$bugid.'<br>'.$bugid.'<br>' . $title.'<br>'. $bugdes.'</a>'.'</br>';
                    echo '<td><a href="viewunfixedbug.php?id=',$bugid,'">',$title,'</a></td>'.'<p>'.'</P>';





                }
                ?>

            </fieldset>

        </form>
    </section>
    <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>

</div>
</body>

