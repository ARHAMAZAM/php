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
$host="localhost";
$user="root";
$password="";
$db="schoolproject";
$data=mysqli_connect($host,$user,$password,$db);
$sql="SELECT * from admission";
$result=mysqli_query($data,$sql);
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
        <h1>applied for admission</h1>
        <br>
        <table>
            <tr>
                <th style="padding: 20px; font-size: 15px;">name</th>
                <th style="padding: 20px; font-size: 15px;">email</th>
                <th style="padding: 20px; font-size: 15px;">phone</th>
                <th style="padding: 20px; font-size: 15px;">message</th>
            </tr>
            <?php
            while ($info=$result->fetch_assoc()) {
            ?>
            <tr>
                <td style="padding: 20px;"><?php echo "{$info['name']}"; ?></td>
                <td style="padding: 20px;"><?php echo "{$info['email']}"; ?></td>
                <td style="padding: 20px;"><?php echo "{$info['phone']}"; ?></td>
                <td style="padding: 20px;"><?php echo "{$info['message']}"; ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>