<?php
require_once("includes/dbcon.php");
$sql = mysqli_query($con,"select * from train where train_id='".$_GET["train_id"]."'");
$row = mysqli_fetch_array($sql);
$con->close();  
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Download</title>
<body data-sidebar="dark">
    <!--<a href="receive1.php?train_id=<?php echo $row['train_id'];?>"><button class="btn btn-info">Download</button></a>


       <h4 class="details"><a class="btn btn-primary" href="../invoice/example.php?aid=' . $_GET['eid'] . '&sid=' . $_SESSION['uid'] . '">Download your invoice</a></h4>

-->
       <h4 class="details"><b>Your question paper:</b> <a class="btn btn-primary" href="receive1.php?upload=' . $row['upload'] . '">Download</a></h4>

</body>
</html>