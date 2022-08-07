<?php
require_once("includes/dbconnection.php");
$sql = mysqli_query($con,"select * from train t, enquiry e,tbl_user td where t.SELECTION='SELECTED' and t.customer_id=e.id1 and e.userid=td.id and e.id1='".$_GET["id1"]."'");
$row = mysqli_fetch_array($sql);    
$con->close();  
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> update</title>
      <?php include_once('includes/css.php'); ?>
<body data-sidebar="dark">

<form action="upload-manager.php" method="POST" enctype="multipart/form-data">
<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
     <thead>
        <tr>
            <div class="btn btn-warning"><a href="enquiry.php" >Back</a></div>
             <h4 class="font-size-40" align="center">Ticket Details</h4>
        </tr>
    </thead>
    <tbody>
        
<tr>
    
                                                <td>USERNAME :<?php  echo $row['username'];?></td>                            
                                                 <td>FROM :<?php  echo $row['from1'];?></td>
                                                 <td>TO: <?php  echo $row['to1'];?></td>
                                                  <td>DATE : <?php  echo $row['date1'];?></td>
                                                <td>TRAIN NAME: <?php  echo $row['Train_Name'];?></td>
                                                <td>TRAIN DEPARTURE: <?php  echo $row['DEPARTURE'];?></td>
                                                <td>PRICE: <?php  echo $row['PRICE'];?></td>
                                                <td>
                                                    
                                                        <input type="file" name="photo">
                                                        <input type="submit" name="submit" class="btn btn-danger btn-lg btn-block" value="UPLOAD">
                                                    
                                                </td>
                                            </tr>
</form>
</body>
</html>