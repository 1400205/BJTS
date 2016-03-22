<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Bug Status</title>
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

//get user ID in session

$utype=$_SESSION["usertype"];//user type assigned to session global variable
$_SESSION["userstatus"] = $userstatus;//user stautus assigned to session global variable
$_SESSION["userid"] = $userid;//user id assigned to session global variable
include ("connect.php");//Establishing connection with our database
//$dg = new C_DataGrid("SELECT * FROM users", "uid", "users"); This code is not functioning the way i want
$sql='SELECT users.uid,users.userStatus,bugs.title,bugs.bugDesc FROM users,bugs  WHERE bugs.uid=$_SESSION["$uid"] AND users.userStatus=1';//select required dataset from database
$result=mysqli_query($db,$sql);//fetch data from database

echo '<h3>Unfixed Bugs</h3>';
echo '<table border="1" style="width:60%">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<th>'.'User ID'.
    '</th>'.'<th>'.'Bug Title'.'</th>'.'<th>'.'Bug Descrition'.

    '</th>'.'<th>'.'Fixed Bug?'.'</th>'.'</table>';
//loop through the database and fetch all users with userStatus=0
WHILE($row=mysqli_fetch_assoc($result))
{
    //get the userid, userTpe,userStatus,username
    $uid=$row['users.uid'];
    // $userType=$row['userType'];
    $btitle=$row['bugs.title'];
    $ustatus=$row['users.userStatus'];
    $bdesc=$row['bugs.bugDesc'];


    echo '<table border="1" style="width:60%">'.'<col width="60">'. '<col width="60">'.'<col width="60">'.'<col width="60">'.'<tr>'.
        '<a href="changeBugStatus.php?uid="'.$uid.'>'.'<tr>'.'<td>'.$uid.'</td>'.'<td>' . $btitle.'</td>'.'<td>'.
        $bdesc.'</td>'.'<td>'."<input type='submit' name='submit' value = 'Activate'>".'</td>'.'</a>'.'<br>'.'</tr>'.'</table>';
}
?>
