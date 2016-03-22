<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inactive users</title>
</head>
<body>

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
$sql="SELECT bugID,title,bugDesc FROM users,bugs WHERE users.uid=1";//select required dataset from database
$result=mysqli_query($db,$sql);//fetch data from database

echo '<h3>Inactive Users Pending Activation</h3>';
echo '<table border="1" style="width:60%">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<th>'.'User ID'.
    '</th>'.'<th>'.'User Name'.'</th>'.'<th>'.'User Status'.

    '</th>'.'<th>'.'Activate'.'</th>'.'</table>';
//loop through the database and fetch all users with userStatus=0
WHILE($row=mysqli_fetch_assoc($result))
{
    //get the userid, userTpe,userStatus,username
    $bugid=$row["Bugid"];
    $title=$row['title'];
    $bugdesc=$row['bugDesc'];
   // $username=$row['username'];

    echo '<table border="1" style="width:60%">'.'<col width="60">'. '<col width="60">'.'<col width="60">'.'<col width="60">'.'<tr>'.
        '<a href="inactive.php?uid="'.$uid.'>'.'<tr>'.'<td>'.$bugidid.'</td>'.'<td>' . $title.'</td>'.'<td>'.
        $bugdesc.'</td>'.'<td>'."<input type='submit' name='submit' value = 'Activate'>".'</td>'.'</a>'.'<br>'.'</tr>'.'</table>';
}
?>
