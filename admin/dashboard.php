<?php

session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['comsmsaid']==0)) {
  header('location:logout.php');
  } else{
    
   
?>
<!doctype html>
<html lang="en">

    <head>
        
        <title>Admin Dashboard</title>
       

        <?php include_once('includes/css.php'); ?>

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php include_once('includes/header.php');?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php include_once('includes/sidebar.php');?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="page-title-box">
                                    <h4 class="font-size-18">Admin Dashboard</h4>
                                    <?php
$aid=$_SESSION['comsmsaid'];
$ret=mysqli_query($con,"select * from admin where id='$aid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item active"><?php  echo $row['username'];?> , Welcome to Dashboard</li><?php  } ?>
                                    </ol>
                                </div>
                            </div>

                        
                        </div>
                        <!-- end page title -->

                       
                            <div class="col-xl-4 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <img src="assets/images/services-icon/02.png" alt="">
                                            </div>
                                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Total Users</h5>
                                            <?php
                 $query=mysqli_query($con,"Select * from tbl_user");
$totuser=mysqli_num_rows($query);
?>
                                            <h4 class="font-weight-medium font-size-24"><?php echo $totuser;?> <i
                                                    class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                                            
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-right">
                                                <a href="customer-list.php" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                            </div>

                                            <p class="text-white-50 mb-0 mt-1">View All</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                          
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                
             <?php include_once('includes/footer.php');?>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
     <?php include_once('includes/js.php');?>

    </body>

</html><?php  } ?>