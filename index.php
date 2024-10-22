<?php
error_reporting(0);
session_start();
session_destroy();
if($_SESSION['message'])
{
    $message=$_SESSION['message'];
    echo"<script type='text/javascript'>alert('$message');
    </script>";
}
$host="localhost";
$user="root";
$password="";
$db="schoolproject";
$data=mysqli_connect($host,$user,$password,$db);
$sql="SELECT * FROM teacher";
$result=mysqli_query($data,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student management system</title>
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <label class="logo">w-school</label>
        <ul>
            <li><a href="#">home</a></li>
            <li><a href="login.php" class="btn btn-success">login</a></li>
        </ul>
    </nav>
    <div class="section1">
        <label class="img-text">we teach students with care</label>
        <img class="main_img" src="school_management.jpg">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="welcome_img" src="school2.jpg">
            </div>
            <div class="col-md-8">
                <h1>welcome to w-school</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste porro tenetur commodi aliquam assumenda, magnam error ipsum sint voluptate est facere consectetur architecto expedita vel iure ratione suscipit mollitia maiores.</p>
            </div>
        </div>
    </div>
    <h1 class="center">our teachers</h1>
    <div class="container">
        <div class="row">
        <?php
            while ($info=$result->fetch_assoc()) {
            ?>
            <div class="col-md-4">
                <img class="teacher" src="<?php echo "{$info['image']}" ?>">
                <h3><?php echo "{$info['name']}" ?></h3>
                <h5><?php echo "{$info['description']}" ?></h5>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    <h1 class="center">our courses</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="web.jpg">
                <h1>web development</h1>
            </div>
        </div>
    </div>
    <h1 class="adm">addmission form</h1>
    <div class="admission_form">
        <form action="data_check.php" method="POST">
            <div class="adm_int">
                <label class="label_text">name</label>
                <input class="input_deg" type="text" name="name">
            </div>
            <div class="adm_int">
                <label class="label_text">email</label>
                <input class="input_deg" type="text" name="email">
            </div>
            <div class="adm_int">
                <label class="label_text">phone</label>
                <input class="input_deg" type="text" name="phone">
            </div>
            <div class="adm_int">
                <label class="label_text">message</label>
                <textarea class="input_txt" name="message"></textarea>
            </div>
            <div class="adm_int">
                <input class="btn btn-primary" id="submit" type="submit" value="apply" name="apply">
            </div>
        </form>
    </div>
    <footer>
        <h3 class="footer_text">all @copyright reserved by web tech knowledge</h3>
    </footer>
</body>
</html>