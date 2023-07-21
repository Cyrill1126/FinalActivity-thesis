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
                
        <div class="content1">
            <li><a href="stocks1.php">Chicken</a></li></div>
            <div class="content2">
                <li><a href="#">Feeds</a></li>
            </div>
            <div class="content3">
                <li><a href="#">Vitamins</a></li>
            </div>
            <div class="content6">
                <li><a href="#">Stocks</a></li>
            </div>
            <div class="content7">
                <li><a href="#">Records</a></li>
            </div>
            <div class="contents">
            <h3>Chicken In</h3>
                    <h4>Month:  <input type=""></h4>
                    <h4>Date:  <input type=""></h4>
                    <h4>Year: <input type=""></h4>
            <div class="box">
                <h3>Price/Tray: <input type=""></h3>
                <div class="box1">
                    <h4>Quantity of Chick:  <input type=""></h4>
                    <h4>No. of Tray:  <input type=""></h4>
                    <h4>Total No. of Chick: <input type=""></h4> 
                    <button>Compute</button>
                </div>
                <h2>Total Price: <input type="">
                <button>Compute</button></h2>
                <button class="my-button">Save</button>
            </div>
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
<?php } ?>
