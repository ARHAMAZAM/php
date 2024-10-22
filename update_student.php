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
$id=$_GET['student_id'];
$sql="SELECT * FROM user WHERE id='$id' ";
$result=mysqli_query($data,$sql);
$info=$result->fetch_assoc();
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
        label{
            display: inline-block;
            width: 100px;
            text-align: right;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .div_deg{
            background-color: skyblue;
            width: 400px;
            padding-bottom: 70px;
            padding-top: 70px;
        }
    </style>
</head>
<body>
    <?php
    include 'admin_sidebar.php';
    ?>
    <div class="content">
        <h1>update student</h1>
        <div class="div_deg">
            <form action="updatestudent.php" method="POST">
                    <input type="hidden" name="sid" value="<?php echo "{$info['id']}"; ?>">
                <div>
                    <label>username</label>
                    <input type="text" name="name" value="<?php echo "{$info['username']}"; ?>">
                </div>
                <div>
                    <label>email</label>
                    <input type="email" name="email" value="<?php echo "{$info['email']}"; ?>">
                </div>
                <div>
                    <label>phone</label>
                    <input type="number" name="phone" value="<?php echo "{$info['phone']}"; ?>">
                </div>
                <div>
                    <label>password</label>
                    <input type="text" name="password" value="<?php echo "{$info['password']}"; ?>">
                </div>
                <div>
                    <input onClick="return confirm('update successfully')" class="btn btn-success" type="submit" name="update" value="Update">
                </div>
            </form>
        </div>
    </div>
</body>
</html>