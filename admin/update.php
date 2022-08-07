<?php
    require_once("includes/dbconnection.php");
        $sql = $con->prepare("SELECT * FROM tbl_user t,enquiry e WHERE t.id=e.userid and e.id1=?");
        $sql->bind_param("i",$_GET["id1"]);          
        $sql->execute();
        $result = $sql->get_result();
        if ($result->num_rows > 0) 
        {        
            $row = $result->fetch_assoc();
        }
        if(isset($_POST["submit1"]))
        { 
        foreach ($_POST['item'] as $key=>$value)
        {
        $query1="INSERT INTO train(Train_Name,DEPARTURE,PRICE,customer_id)VALUES ('".$_POST['item'][$key]."','".$_POST['quantity'][$key]."','".$_POST['quantity1'][$key]."','".$_GET['id1']."')";
        $result1=mysqli_query($con,$query1);
        if(!$result1)
             echo '<script>alert("Problem in Updating Record")</script>';
        else {
             echo '<script>alert("Upadated Successfully")</script>';
        }
        
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
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body data-sidebar="dark">

   <div class="row">
                            <div class="col-12">
<form name="frmUser" method="post" action="">
<table border="0" class="table table-bordered dt-responsive nowrap">
    <thead>
        <tr>
            <div class="btn btn-warning"><a href="enquiry.php" >Back</a></div>
             <h4 class="font-size-40" align="center">Ticket Details</h4>
        </tr>
    </thead>
    <tbody>
        <tr class="table-row">
            <td><label >UserName</label></td>
            <td><?php echo $row["username"];?></td>
        </tr>
        <tr class="table-row">
            <td><label>Email</label></td>
            <td><?php echo $row["email"];?></td>
        </tr>
        <tr class="table-row">
            <td><label>Zip_code</label></td>
            <td><?php echo $row["Zip_code"];?></td>
        </tr>
        <tr>
            <td><label>Phone Number</label></td>
            <td><?php echo $row["phoneno"];?></td>
        </tr>
        <tr>
            <td><label>From</label></td>
            <td><?php echo $row["from1"];?></td>
        </tr>
        <tr>
            <td><label>To</label></td>
            <td><?php echo $row["to1"];?></td>
        </tr>
        <tr>
            <td><label>Date</label></td>
            <td><?php echo $row["date1"];?></td>
        </tr>
        <tr>
            <td><label>PREFERRED TIME</label></td>
            <td><?php echo $row["Pref_time"];?></td>
        </tr>
        <tr>
            <td><label>Coachselection</label></td>
            <td><?php echo $row["coachselection"];?></td>
        </tr>

        <tr>
            <td>
                <label>
                    Train Update
                </label>
            </td>
            
               
             <!--   <form method="post"> 
                <input type="text" name="t" class="form-control input-lg" >
                 <br>
                <input type="submit" name="submit" class="btn btn-danger btn-lg btn-block" value="Confirm">
                </form>-->
             

      <td>                 
<table class="table table-bordered" id="dynamic_field">
<tr>
            <td>TRAIN NAME/NUMBER</td>
            <td>DEPARTURE TIME</td>
            <td>PRICE</td>
        </tr> 

                            <td>
                                <input type="text" name="item[]" placeholder="TRAIN NAME/NUMBER" value="" class="form-control name_list" required /></td> 
                                          <td>
                                                 <!--  <select id="hrs" name="quantity[]"  value=""  class="form-control name_list">
                                                    <option>DEPARTURE TIME</option>
                                                    <option value="00:00 Hrs - 02:59 Hrs">00:00 Hrs - 02:59 Hrs</option>
                                                    <option value="03:00 Hrs - 05:59 Hrs">03:00 Hrs - 05:59 Hrs</option>
                                                    <option value="06:00 Hrs - 08:59 Hrs">06:00 Hrs - 08:59 Hrs</option>
                                                    <option value="09:00 Hrs - 11:59 Hrs">09:00 Hrs - 11:59 Hrs</option>
                                                    <option value="12:00 Hrs - 14:59 Hrs">12:00 Hrs - 14:59 Hrs</option>
                                                    <option value="15:00 Hrs - 17:59 Hrs">15:00 Hrs - 17:59 Hrs</option>
                                                    <option value="18:00 Hrs - 20:59 Hrs">18:00 Hrs - 20:59 Hrs</option>
                                                    <option value="21:00 Hrs - 23:59 Hrs">21:00 Hrs - 23:59 Hrs</option>
                                                  </select>  -->
                                                    <input type="time" name="quantity[]"  value="" placeholder="DEPARTURE TIME" class="form-control name_list" required />
                                                            <br>
                                                            </td>

 <td><input type="text" name="quantity1[]"  value="" placeholder="PRICE" class="form-control name_list" required /></td> 
                                       <td><button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus"></i></button></td>
                                       <td>
                                           <input type="submit" name="submit1" class="btn btn-danger btn-lg btn-block" value="Confirm">
                                       </td>
                                   </table>
             </td>                          
                              
        </tr>
    </tbody>    
</table>
</form>
</div>
</div>




<script>  

 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="item[]" placeholder="TRAIN NAME/NUMBER" class="form-control name_list" required /></td><td><input type="time" name="quantity[]"  value="" placeholder="DEPARTURE TIME" class="form-control name_list" required /></td><td><input type="text" name="quantity1[]" placeholder="PRICE" class="form-control name_list" required /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa fa-trash"></i></button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
         //  alert(button_id);
           $('#row'+button_id+'').remove();  
      });  
      
 });  
 </script>


</body>
</html>