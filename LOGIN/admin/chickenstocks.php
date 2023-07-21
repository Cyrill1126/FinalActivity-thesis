<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
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
  max-width: 500px;
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
                    <a class="active" href="chickenstocks.php">Chicken Stocks</a>
                    <a href="chicken_stocks_record.php">Record</a>
                    </div>

    <div class="container">
        <h2 class="mt-4">Chicken Stocks</h2>
        
    <form method="post">
    <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br>
    </div>

    <div class="form-group">
        <label for="chicken_pen">Chicken Pen:</label>
        <input type="number" id="chicken_pen" name="chicken_pen" required><br>
    </div>

    <div class="form-group">
        <label for="no_of_pen">No of Pen:</label>
        <input type="number" id="no_of_pen" name="no_of_pen" required><br>
    </div>
        <input type="submit" value="Save">
    </form>
        
        
    </div>
                        <!-- End -->   

                                     <!-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
                                    </div>
                                </div>
                            </div>


                   
                      
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $date = $_POST['date'];
    $chickenPen = $_POST['chicken_pen'];
    $noOfPen = $_POST['no_of_pen'];

   
    if (!is_numeric($noOfPen)) {
        echo "Invalid input. Please enter a numeric value for No of Pen.";
        exit;
    }

   
    $totalChicken = $chickenPen * $noOfPen;

   
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "loginsystem"; 

   
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO chicken_stocks (date, chicken_pen, no_of_pen, total_chicken) VALUES ('$date', '$chickenPen', '$noOfPen', '$totalChicken')";

    if ($conn->query($sql) === TRUE) {
     
        echo "Data inserted into the database successfully.";
        echo "<script>";
        echo "window.onload = function() {";
        echo "   $('#successModal').modal('show');"; // Show the success modal
        echo "}";
        echo "</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


 
    $conn->close();
}
?>

<?php } ?>
