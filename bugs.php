<?php
//start session

session_start();
?>
<?php
/**
 * Created by PhpStorm.
 * User: prosper
 * Date: 17/03/2016
 * Time: 22:35
 */
//get connection string
include ("connect.php");//Establishing connection with our database
{
//check emptyness of input boxies

if(empty($_GET["title"]) || empty($_GET["description"]))
{
    echo "All fields are required.";

}
elseif(isset($_POST['submit']))

{
    $uid=$_SESSION["userid"];
    $postdate= new DateTime();//get current date
    $tittle = $_POST['tittle'];
    $desc = $_POST['description'];

    //get bug tittles

    $sql="SELECT tittle FROM bugs WHERE  tittle='$tittle'";//select required dataset from database
    $result=mysqli_query($db,$sql);//fetch data from database
    $row=mysqli_fetch_array($result);//get the row of data

    if(mysqli_num_rows($result) == 1)
    {
        echo "Bug with the tittle ". $tittle. " already exists";
        echo "Duplicate bugs can not be submitted";
    }


}


else {
    //check connection
    if ($db==false)
    {die("could not connect");}

//attempt excuting query

//Build a query string to insert data into users table
    $qry="INSERT  INTO bugs(tittle, bugDesc, postDate,uid) VALUES ('$tittle', '$desc', '$postDate',$uid)";

    if(mysqli_query($db, $qry)){
       echo "Records added successfully.";

        //redirect user to login screen
       // header("location: index.php");
    } else{
        echo "ERROR: Could not be able to execute"/**$qry. mysqli_error($db)*/;
    }




    }



}



?>
