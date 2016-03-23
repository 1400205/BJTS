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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Change Bug Fixed-Status</title>
</head>
<body>

    <form method="post" enctype="multipart/form-data"  action="upload.php">
    <?php
    if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0) {
        $fileName = $_FILES['userfile']['name'];
        $tmpName = $_FILES['userfile']['tmp_name'];
        $fileSize = $_FILES['userfile']['size'];
        $fileType = $_FILES['userfile']['type'];

        $fp = fopen($tmpName, 'r');
        $content = fread($fp, filesize($tmpName));
        $content = addslashes($content);
        fclose($fp);

         {

                $fileName = addslashes($fileName);
            }
            include 'library/config.php';
            include 'library/opendb.php';


            $qry = "INSERT  INTO upload(fname, fsize, ftype,content) VALUES ('$fileName', '$fileSize','$fileType','$content')";

            (mysqli_query($db, $qry)) or die('Error, query failed');
            include 'library/closedb.php';

            echo "<br>File $fileName uploaded<br>";

        }

    ?>






        <table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
            <tr>
                <td width="246">
                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                    <input name="userfile" type="file" id="userfile">
                </td>
                <td width="80"><input name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
            </tr>
        </table>



</form>

</body>
