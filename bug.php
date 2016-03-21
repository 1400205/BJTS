
<?php
//open start session

session_start();
?>

<?php
/**
 * Created by PhpStorm.
 * User: prosper
 * Date: 21/03/2016
 * Time: 15:39
 */

//call connection string fucntion
include ("connect.php");//Establishing connection with our database

if ((empty($_POST["title"])) OR (empty($_POST["description"])))
{
    echo "Please all fields are required";
}

elseif(isset($_POST["submit"])) {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $uid = $_SESSION["userid"];

//strip variables of all sql injections
    $title = mysqli_real_escape_string($db, $title);
    $description = mysqli_real_escape_string($db, $description);
    $uid = mysqli_real_escape_string($db, $uid);

    $sql = "SELECT title FROM bugs WHERE title='$title'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result);//get the row of data
   // echo $row["title"];
    if (mysqli_num_rows($row)==1   OR  (mysqli_num_rows($row)>1  ) ){

        echo $row["title"];


    }
}