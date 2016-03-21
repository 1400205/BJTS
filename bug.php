
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
    $row = mysqli_fetch_array($result,mysqli_fetch_assoc);//get the row of data
   // echo $row["title"];
    if( (mysqli_num_rows($row))<1  )
    {
       // echo 'add records';
        $qry="INSERT INTO bugs(uid,title,bugDesc)VALUES('$uid','$title','$description')";

        if(mysqli_query($db, $qry)){
            //$_SESSION['success']= "Records added successfully.";

            //redirect user to login screen
            header("location: index.php");
            echo $title;
        } else{
            echo "ERROR: Could not be able to execute"/**$qry. mysqli_error($db)*/;
        }

// Close connection
        mysqli_close($db);


    }


}elseif( (mysqli_num_rows($row)==1) ||( mysqli_num_rows($row>1) ))
{
   $errormsg="Record Already Exist. Duplicate Bug entry is Not Allowed";
    echo  "$errormsg";

}