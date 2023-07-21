<?php session_start(); 
include_once('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>User Login | Registration and Login System</title>
    <link href="css/log.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

</head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="logo"></div>
                                            <div class="card-body">
                                                <form method="post">
                                                                                
                                                    <div align="center" class="form-floating mb-3">
                                                        <input class="form-control" name="uemail" type="email" placeholder="Username" required/>
                                                    </div>
                                                    <br>
                                                                                

                                                    <div align="center" class="form-floating mb-3">
                                                        <input class="form-control" name="password" type="password" placeholder="Password" required />
                                                    </div>
                                                    <br>

                                                    <div align="center" class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                        <button class="btn btn-primary" name="login" type="submit">Login</button><br><br>
                                                    </div>
                                                </form>
                                                        <?php
                                                        if(isset($_POST['login']))
                                                        {
                                                        $password=$_POST['password'];
                                                        $dec_password=$password;
                                                        $useremail=$_POST['uemail'];
                                                        $ret= mysqli_query($con,"SELECT * FROM users WHERE email='$useremail' and password='$password'");

                                                        while($row = mysqli_fetch_array($ret) ){
                                                            if($row>0)
                                                            {

                                                                if ($row['role']==="public") {
                                                                    $_SESSION['id']=$row['id'];
                                                                    $_SESSION['name']=$row['fname'];
                                                                    header("location:welcome.php");
                                                                }else if ($row['role']==="admin") {
                                                                    $_SESSION['id']=$row['id'];
                                                                    $_SESSION['name']=$row['fname'];
                                                                    header("location:admin/dashboard.php");
                                                                }

                                                            }
                                                            else
                                                            {
                                                            echo "<script>alert('Invalid username or password');</script>";
                                                            }
                                                        }
                                                        }
                                                        ?>
                                    </div>
                                    
                            </div>
                        </div>
                    </div>
                </main>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
