<?php
session_start();
error_reporting(0);
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
$sql="SELECT * FROM teacher";
$result=mysqli_query($data,$sql);
if ($_GET['teacher_id']) {
    $t_id=$_GET['teacher_id'];
    $sql2="DELETE FROM teacher WHERE id='$t_id' ";
    $result2=mysqli_query($data,$sql2);
    if ($result2) {
        header('location:admin_view_teacher.php');
    }
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
    <style type="text/css">
        .table_th{
            padding: 20px;
            font-size: 20px;
        }
        .table_td{
            padding: 20px;
            background-color: skyblue;
        }
    </style>
</head>
<body>
    <?php
    include 'admin_sidebar.php';
    ?>
    <div class="content">
        <h1>view all teacher data</h1>
        <table>
            <tr>
                <th class="table_th">teacher name</th>
                <th class="table_th">about</th>
                <th class="table_th">image</th>
                <th class="table_th">delete</th>
                <th class="table_th">update</th>
            </tr>
            <?php
            while ($info=$result->fetch_assoc()) {
            ?>
            <tr>
                <td class="table_td"><?php echo "{$info['name']}" ?></td>
                <td class="table_td"><?php echo "{$info['description']}" ?></td>
                <td class="table_td"><img height="100px" width="100px" src="<?php echo "{$info['image']}" ?>"></td>
                <td class="table_td"><?php echo "<a onClick=\"javascript:return confirm('are you sure to delete this');\" href='admin_view_teacher.php?teacher_id={$info['id']}' class='btn btn-danger'>delete</a>";?></td>
                <td class="table_td"><?php echo "<a href='admin_update_teacher.php?teacher_id={$info['id']}' class='btn btn-primary'>update</a>";?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>