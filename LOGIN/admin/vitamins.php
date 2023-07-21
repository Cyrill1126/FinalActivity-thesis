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
    height: 100vh;
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
  position: relative;
  margin-left: 50px;
  width: 30%;
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

.dropbtn {
  background-color: rgba(65, 100, 34, 0.76);
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: rgba(65, 100, 34, 0.76);
}

.dropdown {
  position: relative;
  display: inline-block;
  box-sizing: 
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
    </head>
    <body class="sb-nav-fixed">
   <?php include_once('includes/navbar.php');?>
        <div id="layoutSidenav">
          <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <!--  -->
                    <div class="dropdown">
                      <button onclick="myFunction()" class="dropbtn">Selection</button>
                      <div id="myDropdown" class="dropdown-content">
                        <a href="sales.php">Chicken</a>
                        <a href="feeds.php">Feeds</a>
                        <a href="vitamins.php">Vitamins</a>
                      </div>
                    </div>

                    <!--Start -->
                    <div class="content">
            <h1>Sales Dashboard</h1>
            <div class="sales-summary">
            <h3>Vitamins Consumption</h3>
      <div class="summary-box">
        <div class="summary-title">Total Sales For This Month: </div>
        <div class="summary-value">$10,000</div>
      </div>
      <div class="summary-box">
        <div class="summary-title">Total Sales For This Year: </div>
        <div class="summary-value">100</div>
      </div>
      </div>
      <h2>Graph Representation: </h2>
      <div class="graph">
    <div class="box">
    <div class="chart-container">
    <canvas id="line-chart"></canvas>
  </div>
  <?php
  // Your PHP code to retrieve chart data from a data source
  $labels = ['January', 'February', 'March', 'April', 'May'];
  $data = [10, 20, 30, 25, 40];
  ?>

  <script>
    // Chart.js configuration
    var ctx = document.getElementById('line-chart').getContext('2d');
    var chart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: <?php echo json_encode($labels); ?>,
        datasets: [{
          label: 'Data',
          data: <?php echo json_encode($data); ?>,
          backgroundColor: 'rgba(0, 123, 255, 0.2)',
          borderColor: 'rgba(0, 123, 255, 1)',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
    </div>
    <!-- <h2>Anual Sales (Tabulated): </h2> -->
    <table>
    <thead>
      <tr>
        <th>Month</th>
        <th>Year</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <td>January</td>
        <td>2021</td>
      </tr>
      <td>January</td>
        <td>2021</td>
      </tr>
      <td>January</td>
        <td>2021</td>
      </tr>
      <td>January</td>
        <td>2021</td>
      </tr>
      <td>January</td>
        <td>2021</td>
      </tr>
      <td>January</td>
        <td>2021</td>
      </tr>
      <td>January</td>
        <td>2021</td>
      </tr>
      <td>January</td>
        <td>2021</td>
      </tr>
      <td>January</td>
        <td>2021</td>
      </tr>
      <td>January</td>
        <td>2021</td>
      </tr>
      <td>January</td>
        <td>2021</td>
      </tr>
      <td>January</td>
        <td>2021</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
</div>



                        <!-- End -->   

                                     <!-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
                                    </div>
                                </div>
                            </div>
<script>
  function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

</script>

                   
                      
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
