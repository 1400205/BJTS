<?php
/**
 * Created by PhpStorm.
 * User: prosper
 * Date: 25/03/2016
 * Time: 12:08
 */
?>

<?php
session_start();
if(session_destroy())
{
    header("Location: index.php");
}

?>