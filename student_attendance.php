<?php
session_start();
error_reporting(0);
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
$host="localhost";
$user="root";
$password="";
$db="schoolproject";
$data=mysqli_connect($host,$user,$password,$db);
$sql="SELECT * FROM attendance";
$result=mysqli_query($data,$sql);
if ($_GET['attendance_id']) {
    $id=$_GET['attendance_id'];
    $sql2="DELETE FROM attendance WHERE id='$id' ";
    $result2=mysqli_query($data,$sql2);
    if ($result2) {
        header('location:student_attendance.php');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Attendance Result</title>
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
    include 'student_sidebar.php'
    ?>
    <div class="content">
    <h1>Attendance Result</h1>
    <table>
        <tr>
            <th class="table_th">name</th>
            <th class="table_th">status</th>
        </tr>
        <?php
        while ($info=$result->fetch_assoc()) {
        ?>
            <tr>
                <td class="table_td"><?php echo "{$info['name']}" ?></td>
                <td class="table_td"><?php echo "{$info['status']}" ?></td>
            </tr>
            <?php
            }
            ?>
    </div>
</body>
</html>
