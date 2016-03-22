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
$sql="SELECT bugID,title,bugDesc FROM bugs WHERE userBugFixed='0' AND uid=".$_SESSION["userid"];//select required dataset from database
    //"SELECT bugID,title,bugDesc FROM bugs WHERE uid=1";//select required dataset from database
$result=mysqli_query($db,$sql);//fetch data from database

echo '<h3>Change Bug Fix Status</h3>'.$_SESSION["$uid"];
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

    echo '<table border="1" style="width:60%">'.'<col width="60">'. '<col width="60">'.'<col width="60">'.'<col width="60">'.'<tr>'.
        '<a href="changeBugStatus.php?uid="'.$bugid.'>'.'<tr>'.'<td>'.$bugid.'</td>'.'<td>' . $title.'</td>'.'<td>'.
        $bugdesc.'</td>'.'<td>'.
        "<input type='checkbox' name='checklist[]' value = '$bugid'>".
        '</td>'.'</a>'.'<br>'.'</tr>'.'</table>';




}
echo '<form method="post" action="changeBugStatus.php">'.


    "<p></p>";
    "<input type='submit' name='submit' value = 'submit'>"
    .'</form>';

//  $sqlupdate = 'UPDATE bugs SET userBugFixed="1" WHERE bugID="$bugid"';

// if ($db->query($sqlupdate) === TRUE) {
//    echo "Record updated successfully";
//  } else {
// echo "Error updating record: " . $db->error;
//}

//$db->close();
?>
