<?php
session_start();
?>
<?php
/**
 * Created by PhpStorm.
 * User: prosper
 * Date: 23/03/2016
 * Time: 08:40
 */
$uid=$_SESSION["userid"];
?>

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
//"SELECT bugID,title,bugDesc FROM bugs WHERE uid=1";//select required dataset from database
$result=mysqli_query($db,$sql);//fetch data from database

echo '<h3>Comment on bugs </h3>'.$_SESSION["$userid"];
echo '<table border="1" style="width:60%">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<th>'.'Bug ID'.
    '</th>'.'<th>'.'Title'.'</th>'.'<th>'.'Description'.

    '</th>'.'<th>'.'Select Bug'.'</th>'.'</table>';

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
        "<input type='radio' name='commentRadio' value='$bugid'>".
        '</td>'.'</a>'.'<br>'.'</tr>'.'</table>';



}
//echo '<a href="commen">';
?>

<?php


//connection string
include("connect.php");


// Check if a file has been uploaded
if(isset($_FILES['uploaded_file'])) {

    // Make sure the file was sent without errors
    if($_FILES['uploaded_file']['error'] == 0) {

        // Gather all required data
        $name = $_FILES['uploaded_file']['name'];
        $mime = $_FILES['uploaded_file']['type'];
        $data =$_FILES  ['uploaded_file']['tmp_name'];
        $size = intval($_FILES['uploaded_file']['size']);
        echo $name."<br>";
        echo $mime."<br>";
        echo $data."<br>";
        echo $size."<br>";
        echo $uid."<br>";

        // Create the SQL query
        $qry="INSERT  INTO myfile(fname, fmime, fsize,fdata,uid) VALUES ('$name', '$mime','$size','$data','$uid')";

        // Execute the query
        // Check if it was successfull
        if (mysqli_query($db, $qry)){
            echo 'Success! Your file was successfully added!';
        }
        else {
            echo "ERROR: Could not be able to execute".$qry. mysqli_error($db);
        }
    }
    else {
        echo 'An error accured while the file was being uploaded. '
            . 'Error code: '. intval($_FILES['uploaded_file']['error']);
    }

    // Close the mysql connection
    mysqli_close($db);
}
else {
    echo 'Error! A file was not sent!';
}

// Echo a link back to the main page
echo '<p>Click <a href="index.html">here</a> to go back</p>';
?>
