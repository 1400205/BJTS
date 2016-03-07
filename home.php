<?php
session_start();
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<h1>Hello</h1>

<?php
// Echo session variables that were set on previous page
echo "user name: " . $_SESSION["uname"] . ".<br>";
echo "password: " . $_SESSION["pwd"] . ".";

echo  $_SESSION["usertype"]. "<br>";
echo $_SESSION["userstatus"]."<br>";

?>
</body>
</html>
