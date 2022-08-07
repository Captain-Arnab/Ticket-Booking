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
       
        <title>Enquiry</title>
        
     <?php include_once('includes/css.php'); ?>

    

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style type="text/css">
    

     #additionalOptions{display:none;}
     #additionalOptions2{display:none;}
      #another{display:none;}
      #birth{display: none;}
      #ac{display: none;}
      #another2{display:none;}
       #ac2{display: none;}
        #a3{display: none;}
         #a2{display: none;}
          #a1{display: none;}
</style>


 

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
                                    <h4 class="font-size-18">ticket</h4>
                                </div>
                            </div>

                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
        
                                        <form class="custom-validation"  method="post" enctype="multipart/form-data">
                                            
                                            <div class="form-group">
                                                <label>FROM</label>
                                                <select id="from" class="form-control name_list" value="" required='true'>
                                                    <option value="RAJASTHAN">RAJASTHAN</option>
                                                    <option value="MADHYA PRADESH">MADHYA PRADESH</option>
                                                    <option value="MAHARASHTRA">MAHARASHTRA</option>
                                                    <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                                                    <option value="GUJARAT">GUJARAT</option>
                                                    <option value="KARNATAKA">KARNATAKA</option>
                                                    <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
                                                    <option value="ODISHA">ODISHA</option>
                                                    <option value="CHHATTISGARH">CHHATTISGARH</option>
                                                    <option value="TAMIL NADU">TAMIL NADU</option>
                                                    <option value="TELANGANA">TELANGANA</option>
                                                    <option value="BIHAR">BIHAR</option>
                                                    <option value="WEST BENGAL">WEST BENGAL</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Jharkhand">Jharkhand</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Ladakh">Ladakh</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option value="Uttarakhand">Uttarakhand</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Meghalaya">Meghalaya</option>
                                                    <option value="Manipur">Manipur</option>
                                                    <option value="Mizoram">Mizoram</option>
                                                    <option value="Nagaland">Nagaland</option>
                                                    <option value="Tripura">Tripura</option>
                                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                    <option value="Sikkim">Sikkim</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                                                    <option value="Puducherry">Puducherry</option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Lakshadweep">Lakshadweep</option>
                                                </select>
                                            </div>
                                        <div class="form-group">
                                                <label>TO</label>
                                                <select id="to" class="form-control name_list" value="" required='true'>
                                                    <option value="RAJASTHAN">RAJASTHAN</option>
                                                    <option value="MADHYA PRADESH">MADHYA PRADESH</option>
                                                    <option value="MAHARASHTRA">MAHARASHTRA</option>
                                                    <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                                                    <option value="GUJARAT">GUJARAT</option>
                                                    <option value="KARNATAKA">KARNATAKA</option>
                                                    <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
                                                    <option value="ODISHA">ODISHA</option>
                                                    <option value="CHHATTISGARH">CHHATTISGARH</option>
                                                    <option value="TAMIL NADU">TAMIL NADU</option>
                                                    <option value="TELANGANA">TELANGANA</option>
                                                    <option value="BIHAR">BIHAR</option>
                                                    <option value="WEST BENGAL">WEST BENGAL</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Jharkhand">Jharkhand</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Ladakh">Ladakh</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option value="Uttarakhand">Uttarakhand</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Meghalaya">Meghalaya</option>
                                                    <option value="Manipur">Manipur</option>
                                                    <option value="Mizoram">Mizoram</option>
                                                    <option value="Nagaland">Nagaland</option>
                                                    <option value="Tripura">Tripura</option>
                                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                    <option value="Sikkim">Sikkim</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                                                    <option value="Puducherry">Puducherry</option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Lakshadweep">Lakshadweep</option>
                                                </select>
                                            </div>
                                         <div class="form-group">
                                                <label>PREFERENCE TIME</label>
                                                <select id="hrs" name="quantity[]"  value=""  class="form-control name_list" required='true'>
                                                    <option>PREFERENCE TIME</option>
                                                    <option value="00:00 Hrs - 02:59 Hrs">00:00 Hrs - 02:59 Hrs</option>
                                                    <option value="03:00 Hrs - 05:59 Hrs">03:00 Hrs - 05:59 Hrs</option>
                                                    <option value="06:00 Hrs - 08:59 Hrs">06:00 Hrs - 08:59 Hrs</option>
                                                    <option value="09:00 Hrs - 11:59 Hrs">09:00 Hrs - 11:59 Hrs</option>
                                                    <option value="12:00 Hrs - 14:59 Hrs">12:00 Hrs - 14:59 Hrs</option>
                                                    <option value="15:00 Hrs - 17:59 Hrs">15:00 Hrs - 17:59 Hrs</option>
                                                    <option value="18:00 Hrs - 20:59 Hrs">18:00 Hrs - 20:59 Hrs</option>
                                                    <option value="21:00 Hrs - 23:59 Hrs">21:00 Hrs - 23:59 Hrs</option>
                                                  </select>
                                            </div>
                                        <div class="form-group">
                                                <label>DATE</label>
                                                <input type="date" class="form-control" id="date" value="" required='true'>
                                            </div>
 <div class="form-group">
<select class="form-select form-select-sm" aria-label=".form-select-sm example" id="options">
  <option selected> SELECTION AC/NON AC</option>
  <option value="AC">AC</option>
  <option value="NON AC">NON AC</option>

</select>
</div>
 <div class="form-group">

<select class="form-select form-select-sm" aria-label=".form-select-sm example" id="additionalOptions">
   <option selected> PREFERENCE</option>
  <option value="NON AC SEATER">NON AC SEATER</option>
  <option value="NON AC SLEEPER">NON AC SLEEPER</option>

</select>
</div>

 <div class="form-group">
<select class="form-select form-select-sm" aria-label=".form-select-sm example" id="another">
  <option selected> PREFERENCE</option>
  <option value="WINDOW SIDE">WINDOW SIDE</option>

</select>
</div>


 <div class="form-group">
<select class="form-select form-select-sm" aria-label=".form-select-sm example" id="birth">
  <option selected> PREFERENCE</option>
  <option value="LOWER BIRTH">LOWER BIRTH</option>
    <option value="MIDDLE BIRTH">MIDDLE BIRTH</option>
      <option value="UPPER BIRTH">UPPER BIRTH</option>
        <option value="SIDE UPPER">SIDE UPPER</option>
          <option value="SIDE LOWER">SIDE LOWER</option> 
</select>
</div>

 <div class="form-group">
<select class="form-select form-select-sm" aria-label=".form-select-sm example" id="ac">
  <option selected> PREFERENCE</option>
  <option value="AC SEATER">AC SEATER</option>
   <option value="AC SLEEPER">AC SLEEPER</option> 
</select>
</div>

<div class="form-group">
<select class="form-select form-select-sm" aria-label=".form-select-sm example" id="another2">
  <option selected> PREFERENCE</option>
  <option value="WINDOW SIDE">WINDOW SIDE</option>
</select>
</div>

<div class="form-group">
<select class="form-select form-select-sm" aria-label=".form-select-sm example" id="ac2">
  <option selected> PREFERENCE</option>
  <option value="3A">3A</option>
   <option value="2A">2A</option> 
    <option value="1A">1A</option> 
</select>
</div>


<div class="form-group">
<select class="form-select form-select-sm" aria-label=".form-select-sm example" id="a3">
  <option selected> PREFERENCE</option>
  <option value="LOWER BIRTH">LOWER BIRTH</option>
    <option value="MIDDLE BIRTH">MIDDLE BIRTH</option>
      <option value="UPPER BIRTH">UPPER BIRTH</option>
        <option value="SIDE UPPER">SIDE UPPER</option>
          <option value="SIDE LOWER">SIDE LOWER</option> 
</select>
</div>

<div class="form-group">
<select class="form-select form-select-sm" aria-label=".form-select-sm example" id="a2">
  <option selected> PREFERENCE</option>
  <option value="LOWER BIRTH">LOWER BIRTH</option>
      <option value="UPPER BIRTH">UPPER BIRTH</option>
        <option value="SIDE UPPER">SIDE UPPER</option>
          <option value="SIDE LOWER">SIDE LOWER</option> 
</select>
</div>

<div class="form-group">
<select class="form-select form-select-sm" aria-label=".form-select-sm example" id="a1">
  <option selected> PREFERENCE</option>
  <option value="LOWER BIRTH">LOWER BIRTH</option>
      <option value="UPPER BIRTH">UPPER BIRTH</option>
        <option value="CABIN">CABIN</option>
          <option value="COUPE">COUPE</option> 
</select>
</div>                       

                                               <div class="form-group mb-0">
                                                <div>
                                                    <button type="submit" id="submit" class="btn btn-primary waves-effect waves-light mr-1" name="submit">
                                                       Enquiry
                                                    </button>
                                                </div>
                                            </div>
                                            <br>

                                             <div class="form-group">
          <div id="message"></div>
        </div>
                                        </form>
        
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

        <div class="rightbar-overlay"></div>
 <?php include_once('includes/js.php');?>


<script>
  

   
    $( "#options" ).change(function() {
         all=" ";
        if(this.value=="NON AC")
        {
            all+=this.value+ " & ";
        $("#additionalOptions").show();
          $("#ac").hide();
           $("#a3").hide();
          $("#a2").hide();
           $("#a1").hide(); 
            $("#ac2").hide(); 
    }
       else
       {
        all+=this.value+ " & ";
         $("#additionalOptions").hide();
         $("#another").hide();
          $("#birth").hide();  
         $("#ac").show();

       }
    });

    $( "#additionalOptions" ).change(function() {
        if(this.value=="NON AC SEATER")
       {
        all+=this.value+ " & ";
        $("#another").show();

       $("#birth").hide(); 

         $("#a3").hide();
          $("#a2").hide();
           $("#a1").hide(); 
    }
        else
       { 
       all+=this.value+ " & ";    
         $("#birth").show();    
       $("#another").hide();
     }
    });
   
     $( "#another" ).change(function() {

all+=this.value+ ".";
       }); 
    $( "#birth" ).change(function() {

all+=this.value+ ".";
       }); 



    $( "#ac" ).change(function() {
     
   
      if(this.value=="AC SEATER")
       {
         all+=this.value+ " & ";
        $("#another2").show();
         $("#ac2").hide();
     
       }
        else
       {    
        all+=this.value+ " & "; 
         $("#ac2").show(); 

         $("#another2").hide();   
     
     }

    });

     $( "#another2" ).change(function() {

all+=this.value+ " . ";
       }); 
 
    $( "#ac2" ).change(function() {

    if(this.value=="3A")
    {
        all+=this.value+ " ";
         $("#a3").show();
          $("#a2").hide();
           $("#a1").hide();
    }
    if(this.value=="2A")
    {
        all+=this.value+ " ";
          $("#a2").show();
           $("#a3").hide();
           $("#a1").hide();
    }
    if(this.value=="1A")
    {
        all+=this.value+ " ";
         $("#a1").show();
          $("#a2").hide();
           $("#a3").hide();
    }

  });

    $( "#a3" ).change(function() {

all+=this.value+ " . ";
       }); 

 $( "#a2" ).change(function() {

all+=this.value+ " . ";
       }); 
  $( "#a1" ).change(function() {

all+=this.value+ " . ";
       }); 



     $(document).on('click','#submit',function(e)
     {
    
    e.preventDefault();

   // alert(all);

    var from = $('#from').val();
    var to = $('#to').val();
    var date = $('#date').val();
    var pref=$('#hrs').val();
    var coachselection= all;
    // alert(from);
    // alert(to);
    // alert(date);
    // alert(coachselection);

     $.ajax({
        url: 'insert.php',
        type: 'post',
        data: 
          {newfrom:from, 
           newto:to, 
           newdate:date,
           newcoachselection:coachselection,
           newpref:pref
          },
        success: function(response){
        
          $('#message').html(response);
         
          
        }
      });



     });

    
</script>




    </body>
</html>
<?php }  ?>