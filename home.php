<?php
session_start();
?>
<?php
$username= $_SESSION["uname"];

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<div class="formbox">

    <br><br>
    <section>
<form>


    <fieldset>
        <legend><H2>WELCOME</H2></legend>
        <div id="container">

            <div id="nav">
                <h3><marquee direction="down"> <?php echo "User Name: ". $username.";"; ?>

                        WLECOME TO BJTS
                    </marquee>


                </h3><br>
                <h4>Add Records</h4>
                <ul>
                    <a href="activateUsers.php">  <li>Activate Users</li></a>
                    <a href="bugRegister.php">  <li>Add Bug</li></a>
                    <a href="comments.php">  <li>Comment on Bugs</li></a>
                    <a href="adminChangeBugStatus.php">  <li>Admin Approve Bug Changes</li></a>
                    <a href="changeBugStatus.php">  <li>User Change Bug Status</li></a>
                    <a href="upload.php">  <li>Attached File to Bug</li></a>
                </ul>
                <h4>View All</h4>
                <ul>
                    <a href="mybuglist.php">  <li>View All Bugs</li></a>
                    <a href="buglist.php">  <li>View Fixed Bugs</li></a>
                    <a href="">  <li>View Unfixed Bugs</li></a>
                    <a href="">  <li>Bugs With Comments</li></a>
                    <a href="">  <li>View Bugs Pending Approval</li></a>

                </ul>
            </div>
            <div id="main">


            </div>
            <dev id="footer">


            </dev>
        </div>
        </div>
    </fieldset>
</form>


</section>
<div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>

</div>
</body>
</html>
