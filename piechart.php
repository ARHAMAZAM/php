<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

// Create a database connection
$connection = new mysqli($host, $user, $password, $db);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Fetch data from the database
$query = "SELECT category, amount FROM attendance";
$result = $connection->query($query);

$data = array();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pie Chart Example</title>
    <!-- Include Google Charts API -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Category');
            data.addColumn('number', 'Amount');
            data.addRows([
                <?php
                foreach ($data as $row) {
                    echo "['" . $row['category'] . "', " . $row['amount'] . "],";
                }
                ?>
            ]);

            var options = {
                title: 'Sales by Category',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="piechart" style="width: 500px; height: 300px;"></div>
</body>
</html>
