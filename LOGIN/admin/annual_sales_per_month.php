<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT YEAR(date) AS year, MONTH(date) AS month, SUM(total_price) AS monthly_sales FROM chickenout GROUP BY YEAR(date), MONTH(date) ORDER BY YEAR(date), MONTH(date)";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table>";
    echo "<tr><th>Year</th><th>Month</th><th>Monthly Sales</th></tr>";
    while ($row = $result->fetch_assoc()) {
        $year = $row['year'];
        $month = date("F", mktime(0, 0, 0, $row['month'], 1));
        $monthlySales = $row['monthly_sales'];

        echo "<tr>";
        echo "<td>" . $year . "</td>";
        echo "<td>" . $month . "</td>";
        echo "<td>" . $monthlySales . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No sales data available.";
}

$conn->close();
?>
