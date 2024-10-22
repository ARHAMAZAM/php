<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    <link rel="stylesheet" href="admin.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">
        <a href="adminhome.php">admin dashboard</a>
        <div class="logout">
            <a href="logout.php" class="btn btn-primary">logout</a>
        </div>
    </header>
    <aside>
        <ul>
            <li>
                <a href="admission.php">addmission</a>
            </li>
            <li>
                <a href="add_student.php">add student</a>
            </li>
            <li>
                <a href="view_student.php">view student</a>
            </li>
            <li>
                <a href="admin_add_teacher.php">add teacher</a>
            </li>
            <li>
                <a href="admin_view_teacher.php">view teacher</a>
            </li>
            <li>
                <a href="add_attendance.php">add attendance</a>
            </li>
            <li>
                <a href="view_attendance.php">view attendance</a>
            </li>
            <li>
                <a href="teacherhome.php">teacher</a>
            </li>
        </ul>
    </aside>
    <div class="content"></div>
</body>
</html>