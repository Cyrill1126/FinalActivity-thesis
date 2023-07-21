<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>Processing...</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Dashboard | Registration and Login System </title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

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

.container {
  max-width: 1200px;
  margin: 0 auto;
  background-color: #72A06A8C;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

/*  */
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
/*  */
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body{
    background: url("../img/chick_bg.jpg") no-repeat;
    background-position: center;
    background-size: cover;
    height: 200vh;
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
  }
  .container{
    padding: 20px 20px;
    transition: .5s;
  }
  .container header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: auto;
    padding: 17px 30px;
    background: hsl(81, 77%, 57%);
    opacity: 50%;
    box-shadow: 0 2px 10px rgba(0, 0, 0, .4);
  }
  .container li {
    font-size: 20px;
    color: black;
  }
 .menu{
  position: fixed;
  left: 0;
  width: 180px;
  height: 100%;
  background: green;
  opacity: 80%;
  transition: all .5s ease;
 }
 .menu ul a{
  display: block;
  height: 100%;
  width: 100%;
  line-height: 65px;
  font-size: 18px;
  color: white;
  padding-left: 40px;
  box-sizing: border-box;
  border-top: 1px solid rgba(255, 255, 255, .1);
  border-bottom: 1px solid black;
  transition: .4s;
 }
 ul li:hover a{
  padding-left: 30px;
 }
 .menu ul a i{
  margin: 16px;
 }
 #check{
  display: none;
 }
label #btn{
  position: absolute;
  cursor: pointer;
}
label #btn{
  left: 40px;
  top: 25px;
  font-size: 35px;
  color: black;
  padding: 6px 12px;
  transition: all .5s;
}
#check:checked ~ .menu{
  left: 0;
}
#check:checked ~ label #btn{
  left: 250px;
  opacity: 0;
  pointer-events: none;
}
.content{
  border-radius: 10px;
  position: fixed;
  background: #72A06A8C;
  opacity: 90%;
  height: 81%;
  width: 81%;
  opacity: 95%;
}
.content h3{
  padding: 20px;
  margin-bottom: 10px;
  margin-top: 10px;
  font-size: 30px;
  text-align: center;
}
h1 {
  margin-top: 20px;
  margin-left: 20px;
  margin-right: 20px;
  box-sizing: border-box;
  border-bottom: 2px solid black;
  border-top: 1px solid rgba(255, 255, 255, .1);
}
.sales-summary {
  margin-top: 20px;
  border-radius: 10px;
  display: flex;
  justify-content: space-evenly;
  margin-bottom: 20px;
}
.summary-box {
  margin-top: 15px;
  border-radius: 10px;
  height: 70%;
  width: 50%;
  flex-basis: 25%;
  padding: 10px;
  background-color: white;
  border: 1px solid black;
}
.summary-title {
  font-size: 20px;
  font-weight: bold;
}
.graph{
  justify-content: space-between;
}
h2{
  margin-bottom: 20px;
  justify-content: space-evenly;
  margin-left: 20px;
}
table {
  margin-top: 10px;
  margin-right: 80px;
  width: 20%;
  height: 80%;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: center;
  border-top: 1px solid black;
  border-right: 1px solid black;
  border-left: 1px solid black;
  border-bottom: 1px solid black;
}
th, tr{
  background-color: white;
  font-weight: bold;
}
tr:hover {
  cursor: pointer;
  background-color: white;
}
.graph{
  display: flex;
  justify-content: space-evenly;
}
.box {
  display: inline;
  border-radius: 10px;
  margin-top: 20px;
  width: 600px;
  height: 300px;
  background-color: white;
  border: 1px solid black;
  margin-right: 20px;
}



/*  */
</style>

</head>
<body class="sb-nav-fixed">
    <?php include_once('includes/navbar.php');?>
    <div id="layoutSidenav">
    <?php include_once('includes/sidebar.php');?>
    <div id="layoutSidenav_content">
        <main>
        <div class="container-fluid px-4" align="center">
                        
                        <!--Start -->
                        <?php
    // Retrieve form submission data
    $date = $_POST['date'];
    $pricePerKilo = $_POST['price'];
    $totalKilo = $_POST['totalKilo'];
    $totalChickens = $_POST['totalChickens'];

    // Validate input data (you can add more specific validation if required)
    if (!is_numeric($pricePerKilo) || !is_numeric($totalKilo) || !is_numeric($totalChickens)) {
        echo "<div class='container mt-4'>";
        echo "<div class='alert alert-danger'>Invalid input. Please enter numeric values for Price, Quantity of Chick, and Number of Tray.</div>";
        echo "</div>";
        exit;
    }

    // Perform the computation
    $totalPrice = $pricePerKilo * $totalKilo;

    // Connect to the database (adjust the connection details as needed)
    $servername = "localhost"; // Replace with your database server name
    $username = "root"; // Replace with your database username
    $password = ""; // Replace with your database password
    $dbname = "loginsystem"; // Replace with your database name

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query to insert the data into the database
    $sql = "INSERT INTO chickenout (date, price_per_kilo, total_kilo, total_chickens, total_price) VALUES ('$date', '$pricePerKilo', '$totalKilo', '$totalChickens', '$totalPrice')";

    if ($conn->query($sql) === TRUE) {
        // Data inserted successfully
        echo "<div class='container mt-4'>";
        echo "<div class='alert alert-success'>Data inserted into the database successfully.</div>";
        echo "<p>Total Price: " . $totalPrice . "</p>";
        echo "</div>";
        echo "<script>";
        echo "window.onload = function() {";
        echo "   $('#successModal').modal('show');"; // Show the success modal
        echo "}";
        echo "</script>";
    } else {
        // Error inserting data
        echo "<div class='container mt-4'>";
        echo "<div class='alert alert-danger'>Error: $sql <br>" . $conn->error . "</div>";
        echo "</div>";
    }

    ?>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Data inserted into the database successfully.</p>
                    <p>Total Price: <?php echo $totalPrice; ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <?php

    // Retrieve records from the database
    $sql = "SELECT * FROM chickenout";
    $result = $conn->query($sql);

    // Check if any rows were returned
    if ($result->num_rows > 0) {
        echo "<div class='container mt-4'>";
        echo "<h4>Chicken Out</h4>";
        echo "<table class='table'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Date</th>";
        echo "<th>Price per Kilo</th>";
        echo "<th>Total Kilo</th>";
        echo "<th>Total Chicken</th>";
        echo "<th>Total Price</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        // Loop through each row of data
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
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
        echo "<div class='alert alert-info'>No records found.</div>";
        echo "</div>";
    }

    // Close the database connection
    $conn->close();
    ?>

                         
        </main>
    </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
</body>
</html>
<?php } ?>