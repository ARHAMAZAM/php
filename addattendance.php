<?php
$host="localhost";
$user="root";
$password="";
$db="schoolproject";
$data=mysqli_connect($host,$user,$password,$db);
if (isset($_POST['add_attendance'])) {
    $s_name=$_POST['student_name'];
    $s_status=$_POST['attendance_status'];
    $sql="INSERT INTO attendance(name, status) VALUES ('$s_name','$s_status')";
    $result=mysqli_query($data,$sql);
    if ($result) {
        header("location:view_attendance.php");
        header2("location:student_attendance.php");
    }
}
?>