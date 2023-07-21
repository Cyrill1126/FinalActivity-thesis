<!DOCTYPE html>
<html>
<head>
    <title>Chicken Stocks</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Additional CSS styles if needed -->
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Dashboard | Registration and Login System </title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css copy/themee.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        

        <!-- Style dito -->
        <style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.pill-nav a {
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px;
  text-decoration: none;
  font-size: 17px;
  border-radius: 5px;
}

.pill-nav a:hover {
  background-color: rgba(65, 100, 34, 0.76);
  color: black;
}

.pill-nav a.active {
  background-color: rgba(65, 100, 34, 0.76);
  color: white;
}


/* Custom CSS for Chicken Management System */

body {
  font-family: Arial, sans-serif;
  background-color: #f8f8f8;
  padding: 20px;
}

.container {
  max-width: 900px;
  margin: 0 auto;
  background-color: #72A06A8C;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

h2 {
  text-align: center;
}

form {
  margin-top: 20px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  font-weight: bold;
}

input[type="date"],
input[type="number"] {
  width: 100%;
  padding: 10px;
  border-radius: 4px;
  border: 1px solid #ccc;
}

input[type="submit"]:hover {
  background-color: #82cf3d;
}

.error-message {
  color: red;
  margin-top: 10px;
}
.btn-primary {
    color: #fff;
    background-color: rgba(65, 100, 34, 0.76);
    border-color: rgba(65, 100, 34, 0.76);
}

input[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    font-weight: bold;
    text-transform: uppercase;
    background-color: rgba(65, 100, 34, 0.76);
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

</style>
</head>
<body class="sb-nav-fixed">
<?php include_once('includes/navbar.php');?>
        <div id="layoutSidenav">
          <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    
                    <div class="container-fluid px-4">
                    <!--Start -->
                    <div class="pill-nav" align="center">
                    <a class="active" href="chickenstocks.php">Chicken</a>
                    <a href="feedsstocks.php">Feeds</a>
                    <a href="vitaminsstocks.php">Vitamins</a>
                    </div>
                    <div class="pill-nav">
                    <a href="stocks.php">Chicken In</a>
                    <a class="active" href="chicken_out.php">Chicken Out</a>
                    </div>

   

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "loginsystem"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM chickenout";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<div class='container mt-4'>";
    echo "<h2>Chicken Out Record</h2>";
    echo "<table class='table table-bordered table-striped'>";
    echo "<thead class='thead-light'>";
    echo "<tr><th>ID</th><th>Date</th><th>Price Per Kilo</th><th>Total Kilo</th><th>Total Chickens</th><th>Total Price</th></tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['price_per_kilo'] . "</td>";
        echo "<td>" . $row['total_kilo'] . "</td>";
        echo "<td>" . $row['total_chickens'] . "</td>";
        echo "<td>" . $row['total_price'] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
} else {
    echo "<div class='container mt-4'>";
    echo "<div class='alert alert-info'>No chicken stocks data available.</div>";
    echo "</div>";
}


$conn->close();
?>