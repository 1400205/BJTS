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
unset($_SESSION['username']);
session_destroy();

header("Location: login.php");
exit;
?>

