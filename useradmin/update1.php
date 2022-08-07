<?php
require_once("includes/dbcon.php");
$sql = mysqli_query($con,"select * from train t, enquiry e where t.customer_id=e.id1 and t.train_id='".$_GET["train_id"]."'");
$row = mysqli_fetch_array($sql);       
$var4=$row['train_id'];
        if(isset($_POST['select']))
        {

            $sql2="UPDATE train SET SELECTION='SELECTED' WHERE train_id='$var4'";
            $result4=mysqli_query($con,$sql2);
            if(!$result4)
                     echo '<script>alert("Problem in Updating Record")</script>';
                else {
                     echo '<script>alert("Upadated Successfully")</script>';
                }
        }
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

<form method="post" action="">
<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
     <thead>
        <tr>
            <div class="btn btn-warning"><a href="manage-services.php" >Back</a></div>
             <h4 class="font-size-40" align="center">Ticket Details</h4>
        </tr>
    </thead>
    <tbody>
<tr>                            
                                                 <td>FROM :<?php  echo $row['from1'];?></td>
                                                 <td>TO: <?php  echo $row['to1'];?></td>
                                                  <td>DATE : <?php  echo $row['date1'];?></td>
                                                <td>TRAIN ID: <?php  $var4=$row['train_id'];
                                                                      echo $var4;              ?></td>
                                                <td>TRAIN NAME: <?php  echo $row['Train_Name'];?></td>
                                                <td>PRICE: <?php  echo $row['PRICE'];?></td>
                                                <td>
                                                    <input type="submit" name="select" class="btn btn-danger btn-lg btn-block" value="Confirm">
                                                </td>
                                            </tr>
</form>
</body>
</html>
<?php

?>