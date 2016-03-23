<?php
session_start();
?>
<?php

//connection string
include("connect.php");
$uid=$_SESSION["userid"];

// Check if a file has been uploaded
if(isset($_FILES['uploaded_file'])) {

    // Make sure the file was sent without errors
    if($_FILES['uploaded_file']['error'] == 0) {

        // Gather all required data
        $name = $_FILES['uploaded_file']['name'];
        $mime = $_FILES['uploaded_file']['type'];
        $data =$_FILES  ['uploaded_file']['tmp_name'];
        $size = intval($_FILES['uploaded_file']['size']);

        // Create the SQL query
        $qry="INSERT  INTO myfile(fname, fmime, fsize,fdata,uid) VALUES ('$name', '$mime','$size','$data','$uid')";

        // Execute the query
        // Check if it was successfull
        if (mysqli_query($db, $qry)){
            echo 'Success! Your file was successfully added!';
        }
        else {
            echo "ERROR: Could not be able to execute";//.$qry. mysqli_error($db);
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