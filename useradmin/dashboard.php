<?php

session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (!$_SESSION['id']) {
  header('location:logout.php');
  } else{
    
   
?>
<!doctype html>
<html lang="en">

    <head>
        
        <title>Dashboard</title>
       

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
                                    <h4 class="font-size-18">Dashboard</h4>
                                    <?php
$aid=$_SESSION['id'];
$ret=mysqli_query($con,"select * from tbl_user where ID='$aid'");
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