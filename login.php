<?php

require_once "dbconfig.php";


session_start();
if(isset($_POST["newemailmobile"]) && isset($_POST["newpassword"]))
{	
	

	$emailmobile =trim($_POST["newemailmobile"]);

	$password = trim($_POST["newpassword"]);
   

   
	$sql="SELECT * FROM tbl_user WHERE email=:email or phoneno= :email"; 
	
		
	$stmt=$db->prepare($sql);
	$params = ['email'=>$emailmobile];
	$stmt->execute($params);

	if($stmt->rowCount()> 0)
	{
		$getRow = $stmt->fetch(PDO::FETCH_ASSOC);
		//echo $password;
		if($password ==$getRow['password'])
		{
			unset($getRow['password']);
			$_SESSION = $getRow;
			echo "ok";
			//header('location:dashboard.php');
			
		
		}
		else
		{
		
		echo  '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button> 
				Wrong Email or Password 
			   </div>';			
		}

	}
	else
		{
		
		echo  '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button> 
				Wrong Email or Password 
			   </div>';			
		}
	
	
}

?>
