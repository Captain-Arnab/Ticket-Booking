<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
   $adminuser=$_POST['username'];
    $password=$_POST['password'];
    $query=mysqli_query($con,"select id from admin where  username='$adminuser' && password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['comsmsaid']=$ret['id'];
     echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
    }
    else{
  echo "<script>alert('Invalid Details');</script>";
    }
  }
  ?>
<!doctype html>
<html lang="en">

    <head>
        <title>admin login</title>       
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('assets/images/bg1.jpg');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card shadow-none">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box shadow-none p-4">
                            <div class="p-2">
                                <div class="text-center mt-4">
                                    <strong style="color: blue;font-size: 20px">PCS</strong>
                                </div>

                                <h4 class="font-size-18 mt-5 text-center">Welcome Admin!</h4>
                                <p class="text-muted text-center">Sign in to continue to admin panel.</p>

                              <form class="mt-4" method="post">

                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required="true">
                                </div>
    

                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <input type="password" class="form-control" id="userpassword" placeholder="Enter password" name="password">
                                </div>
    
                                <div class="form-group row">
                                   
                                    <div class="col-sm-6 text-right">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit" name="login">Log In</button>
                                    </div>
                                </div>

                               
                                <div class="form-group mt-2 mb-0 row">
                                    <div class="col-12 mt-3">
                                        <a href="../index.php"><i class="mdi mdi-home"></i> Back Home</a>
                                    </div>
                                </div>

                            </form>

                            <div class="mt-5 pt-4 text-center">
                                
                                <p>© <script>document.write(new Date().getFullYear())</script>  <i class="mdi mdi-heart text-danger"></i> PCS</p>
                            </div>

                        </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
