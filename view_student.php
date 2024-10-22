<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
$host="localhost";
$user="root";
$password="";
$db="schoolproject";
$data=mysqli_connect($host,$user,$password,$db);
$sql="SELECT * FROM user WHERE usertype='student' ";
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
        <h1>student data</h1>
        <?php
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
        }
        unset($_SESSION['message']);
        ?>
        <br><br>
        <table>
            <tr>
                <th class="table_th">username</th>
                <th class="table_th">email</th>
                <th class="table_th">phone</th>
                <th class="table_th">password</th>
                <th class="table_th">delete</th>
                <th class="table_th">update</th>
            </tr>
            <?php
            while ($info=$result->fetch_assoc()) 
            {                
            ?>
            <tr>
                <td class="table_td">
                    <?php echo "{$info['username']}"; ?>
                </td>
                <td class="table_td">
                <?php echo "{$info['email']}"; ?>
                </td>
                <td class="table_td">
                    <?php echo "{$info['phone']}"; ?>
                </td>
                <td class="table_td">
                    <?php echo "{$info['password']}"; ?>
                </td>
                <td class="table_td">
                    <?php echo "<a onClick=\" javascript:return confirm('are you sure to delete this') \" class='btn btn-danger' href='delete.php?student_id={$info['id']}'>delete</a>"; ?>
                </td>
                <td class="table_td">
                    <?php echo "<a class='btn btn-primary' href='update_student.php?student_id={$info['id']}'> Update</a>"; ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>