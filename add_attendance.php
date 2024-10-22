<?php
session_start();
if(!isset($_SESSION['username']))
{
    // header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Student Attendance</title>
  </head>
  <body>
    <?php include 'teacher_sidebar.php' ?>
    <div class="content">
      <h1>Student Attendance System</h1>
      <form action="addattendance.php" method="POST">
        <label for="student_name">Student Name:</label>
        <input type="text" id="student_name" name="student_name" required>
        <br><br>
        <label for="attendance_status">Attendance:</label>
        <select id="attendance_status" name="attendance_status">
          <option value="">-</option>
          <option value="Present">Present</option>
          <option value="Absent">Absent</option>
          <option value="Late">Late</option>
          <option value="Leave">Leave</option>
        </select>
        <br><br>
        <div>
          <input onClick="return confirm('added successfully')" type="submit" class="btn btn-primary" name="add_attendance" value="add attendance">
        </div>
      </form>
    </div>
  </body>
</html>