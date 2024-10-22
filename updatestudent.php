<?php
$host="localhost";
$user="root";
$password="";
$db="schoolproject";
$data=mysqli_connect($host,$user,$password,$db);
if (isset($_POST['update'])) {
    $id = $_POST['sid'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    echo $name;
    $query="UPDATE user SET username='$name',email='$email',phone='$phone',password='$password' WHERE id='$id' ";
    $result2=mysqli_query($data,$query);
    if ($result2) {
        header("location:view_student.php");
    }
}
?>