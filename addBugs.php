
<?php
//open start session

session_start();
?>

<?php
/**
 * Created by PhpStorm.
 * User: prosper
 * Date: 21/03/2016
 * Time: 17:43
 */
//get connection string
include("connect.php");
$uid=$_SESSION["userid"];

//check if form is fill, collect form variables
if( $_POST["submit"])
{
    //collect form variables

    $title = $_POST['title'];
    $bugdDesc = $_POST['bugDesc'];

    //strip special characters
    $title=mysqli_real_escape_string($db,$title);
    $bugDesc=mysqli_real_escape_string($db,$bugdDesc);
    $uid=mysqli_real_escape_string($db,$uid);

    //check existing users
    $sql = "SELECT title FROM bugs WHERE title='$title'";

    //set the query to see if the entered email address matches any entered email
    $result=mysqli_query(db,$sql);
    $row=mysqli_fetch_array($result,mysqli_fetch_assoc);

    //run the query and see
    if((mysqli_num_rows($result))==1)
    {
        $msg="Sorry this bug already exists";
    }
    else
    {

        //Build a query string to insert data into users table
        $qry="INSERT  INTO bugs(uid, title, bugDesc) VALUES ('$uid', '$title', '$bugDesc')";
        if (mysqli_query($db, $qry)) {
            $success = "Records added successfully.";
            echo "$success";

        }else{
            {
                echo "ERROR: Could not be able to execute. Please check duplicate record entry". mysqli_error($db);
            }

// Close connection
            mysqli_close(db);
        }
    }
}
