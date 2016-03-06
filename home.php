<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<h1>Hello</h1>

<?php
session_start();
$x = $username;
$_SESSION['sessionVar'] = $x;
echo "$x";
?>
</body>
</html>
