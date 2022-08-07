<?php
session_start();
error_reporting(0);
require_once("includes/dbcon.php");
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
  
   
?>
<!doctype html>
<html lang="en">

    <head>
        <title>Customer List </title>
       
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
                                    <h4 class="font-size-18">Customer List</h4>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item">Customers</li>
                                        <li class="breadcrumb-item">View Customer Details</li>
                                       
                                    </ol>
                                </div>
                            </div>

                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Customer Details</h4>
                                       

                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>username</th>
                                                <td><?php

$var=$_SESSION['id'];
//echo $var;
$sql=mysqli_query($con,"SELECT * FROM tbl_user t,enquiry e WHERE t.id=e.userid and e.userid='$var'");
$cnt=1;
while ($row=mysqli_fetch_array($sql)) {

?>
                                                <?php  echo $row['username'];?></td>
                                            </tr>
                                            <tr>
                                                <th>FROM</th>
                                                    <td><?php echo $row['from1'];?></td>
                                                <th>TO</th>
                                                    <td><?php echo $row['to1'];?></td>
                                                </tr>
                                                </thead>
                                                <thead>
                                                    <?php

$var1=$_SESSION['id'];
$var2=$row['id1'];
//echo $var;
$sql1=mysqli_query($con,"SELECT * FROM enquiry e,train t WHERE e.id1=t.customer_id and e.id1='$var2' and e.userid='$var1'");
$cnt=1;
while ($row1=mysqli_fetch_array($sql1)) {

?>
                                            <tbody>
                                            <tr>
                                                <td>DATE: <?php echo $row1['date1'];?></td>
                                                <td>TRAIN ID: <?php 
                                                                $var3=$row1['train_id'];
                                                                echo $var3;?></td>
                                                <td>TRAIN NAME: <?php echo $row1['Train_Name'];?></td>
                                                <td>DEPARTURE :<?php echo $row1['DEPARTURE'];?></td>
                                                <td>PRICE : <?php echo $row1['PRICE'];?></td>
                                                <td><a href="update1.php?train_id=<?php echo $var3;?>"><button class="btn btn-info">Update</button></a>
                                                </td>
                                                <td><a class="btn btn-primary" href="download-ticket.php?train_id=' . $row['train_id'] . '">Download</a></h4></a>
                                                </td>
                                            </tr>
                                        <?php
                                    }
$cnt=$cnt+1;

}?>
                                         
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

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
<?php include_once('includes/js.php');?>

    </body>
</html>
<?php  } ?>