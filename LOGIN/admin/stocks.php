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

input[type="submit"]:hover {
  background-color: #82cf3d;
}

.error-message {
  color: red;
  margin-top: 10px;
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
                    <a class="active" href="#">Chicken</a>
                    <a href="#">Feeds</a>
                    <a href="#">Vitamins</a>
                    </div>

                    <div class="pill-nav">
                    <a class="active" href="stocks.php">Chicken In</a>
                    <a href="chicken_out.php">Chicken Out</a>
                    </div>

                    

    <div class="container">
    <div class="pill-nav" align="right">
        <a class="active" href="chicken_in_record.php">Chicken In Record</a>
    </div>
        <h2 class="mt-4">Chicken In</h2>
      
        <form method="post" class="mt-4">
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required class="form-control">
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" step="0.01" id="price" name="price" required class="form-control">
            </div>

            <div class="form-group">
                <label for="quantityOfChick">Quantity of Chick:</label>
                <input type="number" id="quantityOfChick" name="quantityOfChick" required class="form-control">
            </div>

            <div class="form-group">
                <label for="numberOfTray">Number of Tray:</label>
                <input type="number" id="numberOfTray" name="numberOfTray" required class="form-control">
            </div>

            <input type="submit" value="Submit" class="btn btn-primary">
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
  $price = $_POST['price'];
  $quantityOfChick = $_POST['quantityOfChick'];
  $numberOfTray = $_POST['numberOfTray'];

  
  if (!is_numeric($price) || !is_numeric($quantityOfChick) || !is_numeric($numberOfTray)) {
    echo "<div class='container mt-4'>";
    echo "<div class='alert alert-danger'>Invalid input. Please enter numeric values for Price, Quantity of Chick, and Number of Tray.</div>";
    echo "</div>";
    exit;
  }


      
  $totalOfChick = $quantityOfChick * $numberOfTray;
  $totalPrice = $price * $numberOfTray;

   
  $servername = "localhost"; 
  $username = "root"; 
  $password = ""; 
  $dbname = "loginsystem"; 

  
  $conn = new mysqli($servername, $username, $password, $dbname);


  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }


  $sql = "INSERT INTO chickens (date, price, quantity, trays, total_chick, total_price) VALUES ('$date', '$price', '$quantityOfChick', '$numberOfTray', '$totalOfChick', '$totalPrice')";

  if ($conn->query($sql) === TRUE) {
 
      echo "Data inserted into the database successfully.";
  } else {
    
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

 
  $conn->close();
}
   
    
?>

<?php } ?>
