<?php

require_once "dbconfig.php";

if(!empty($_POST["newusername"]) && !empty($_POST["newemail"]) && !empty($_POST["newpassword"])  && !empty($_POST["newcmpassword"]) && !empty($_POST["newzip"]) && !empty($_POST["newphoneno"]))
{



if(isset($_POST["newusername"]) && isset($_POST["newemail"]) && isset($_POST["newpassword"])  && isset($_POST["newcmpassword"]) && isset($_POST["newzip"]) && isset($_POST["newphoneno"]))
{	
	$username = $_POST["newusername"];

	$email = $_POST["newemail"];

	$password = $_POST["newpassword"];

	$conpassword = $_POST["newcmpassword"];

	$zip= $_POST["newzip"];

	$phoneno = $_POST["newphoneno"];
	
	$stmt=$db->prepare("INSERT INTO tbl_user(username,email, password,confirm_password,Zip_code,phoneno) VALUES(:uname,:uemail,:upassword,:ucmpassword,:uzip,:uphoneno)"); 
	
		
	$stmt->bindParam(":uname",$username);
	$stmt->bindParam(":uemail",$email);
	$stmt->bindParam(":upassword",$password);
	$stmt->bindParam(":ucmpassword",$conpassword);	 
	$stmt->bindParam(":uzip",$zip);
	$stmt->bindParam(":uphoneno",$phoneno);		
	if($stmt->execute())
	{
		
echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button> 
					Register Successfully  
			 </div>';	
	}	
	else
	{
		
	echo  '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button> 
					Fail to Register  
			   </div>';			
	}
}
else
echo  '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button> 
					Fail to Register  
			   </div>';	
}

?>
