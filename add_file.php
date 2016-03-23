<?php
include("connect.php");
// Check if a file has been uploaded
if(isset($_FILES['uploaded_file'])) {
    // Make sure the file was sent without errors
    if($_FILES['uploaded_file']['error'] == 0) {
        // Connect to the database
        //$dbLink = new mysqli('127.0.0.1', 'user', 'pwd', 'myTable');
       // if(mysqli_connect_errno()) {
          //  die("MySQL connection failed: ". mysqli_connect_error());
       // }

        // Gather all required data
        $name = mysqli_real_escape_string($_FILES['uploaded_file']['name']);
        $mime = mysqli_real_escape_string($_FILES['uploaded_file']['type']);
        $data = mysqli_real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
        $size = intval($_FILES['uploaded_file']['size']);

        // Create the SQL query
       // $sql = "INSERT INTO file (name,mime, size, data, created VALUES ('$name', '$mime', '$size', '$data')";
         echo fname."<br>";
        echo $mime."<br>";
        echo $size."<br>";
        echo $data."<br>";

        $qry="INSERT  INTO myfile(fname, fmime, fsize,fdata) VALUES ('$name', '$mime','$size','$data')";

        // Execute the query
       // $result = $dbLink->query($query);

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