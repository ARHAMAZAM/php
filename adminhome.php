<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student')
{
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    <?php
    include 'admin_css.php';
    ?>
</head>
<body>
    <?php
    include 'admin_sidebar.php';
    ?>
    <div class="content">
        <h1>welcome to admin dashboard</h1>
        <iframe src="piechart.php" width="950" height="525"></iframe>
    </div>
</body>
</html>