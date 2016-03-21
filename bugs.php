
<?php
//open start session

session_start();
?>

<?php
/**
 * Created by PhpStorm.
 * User: prosper
 * Date: 07/03/2016
 * Time: 23:36
 */

//call connection string fucntion
include ("connect.php");//Establishing connection with our database


//check emptyness of input boxies

if( empty($_POST["title"])|| empty($_POST["description"]))
{
    echo "All fields are required.";
}

elseif(isset($_POST['submit']))
{
    $title = $_POST['title'];
    $description = $_POST['description'];
    $uid=$_SESSION["userid"];

//strip variables of all sql injections
    $title=mysqli_real_escape_string($db,$title);
    $description=mysqli_real_escape_string($db,$description);
    $uid=mysqli_real_escape_string($db,$uid);

    $sql="SELECT title FROM bugs WHERE title='$title'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result);//get the row of data



    if (mysqli_num_rows($result)==1)
    {

        header("location: bugRegister.php"); // Redirecting To another Page

        $msg="Sorry This Bug already exists";
        print '$msg';
    }else
    {

        //check connection
        if ($db==false)
        {die("could not connect");}

//attempt excuting query

//Build a query string to insert data into users table
        $qry="INSERT INTO bugs(uid,title,bugDesc)VALUES('$uid','$title','$description')";

        if(mysqli_query($db, $qry)){
            //$_SESSION['success']= "Records added successfully.";

            //redirect user to login screen
            header("location: index.php");
            echo '$title';
        } else{
            echo "ERROR: Could not be able to execute"/**$qry. mysqli_error($db)*/;
        }

// Close connection
        mysqli_close($db);

    }



}


else {







//get user input data from form into variables
//$username = $_POST['username'];
//$password = $_POST['password'];
//$email = $_POST['email'];
// $phone = $_POST['phone'];

//Build a query string to insert data into users table
//$qry="INSERT  INTO users(username,password,emailAddress,phoneExtention) VALUES '$username','$password','$email','$phone'";

//assign query string and connection variables to sqli guiry function

}




