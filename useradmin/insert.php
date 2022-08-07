<?php
session_start();
require_once "../dbconfig.php";

if(!empty($_POST["newfrom"]) && !empty($_POST["newto"]) && !empty($_POST["newdate"]) && !empty($_POST["newcoachselection"]) && !empty($_POST["newpref"]))
{


if(isset($_POST["newfrom"]) && isset($_POST["newto"]) && isset($_POST["newdate"]) && isset($_POST["newcoachselection"]) && isset($_POST["newpref"]))
{	
	$from = $_POST["newfrom"];

	$to = $_POST["newto"];



	$date= $_POST["newdate"];

	$pref= $_POST["newpref"];

	$coachselection = $_POST["newcoachselection"];

	//echo($from.$date.$to.$coachselection);

	if($from==$to)
	{
	echo '<script> alert("EQUAL") </script>';	
			}
	else	
	{

	$userid=$_SESSION['id'];
	
	$stmt=$db->prepare("INSERT INTO enquiry(from1,to1,date1,coachselection,Pref_time,userid) VALUES(:ufrom,:uto1,:udate1,:ucoachselection,:pref,:uuserid)"); 
	
		
	$stmt->bindParam(":ufrom",$from);
	$stmt->bindParam(":uto1",$to);
	$stmt->bindParam(":udate1",$date);	 
	$stmt->bindParam(":ucoachselection",$coachselection);
	$stmt->bindParam(":pref",$pref);	
	$stmt->bindParam(":uuserid",$userid);	

	if($stmt->execute())
	{
		
echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button> 
				 Successfully  Submitted
			 </div>';	
	}	
	else
	{
		
	echo  '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button> 
					Fail  
			   </div>';			
	}
}
}
else
echo  '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button> 
					Fail  
			   </div>';	
}

?>
