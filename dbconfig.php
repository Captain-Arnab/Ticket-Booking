<?php

$db_host="localhost"; 
$db_user="root";	
$db_password="";	
$db_name="project";	

try
{
	$db=new PDO("mysql:host={$db_host};dbname={$db_name};port=3308;",$db_user,$db_password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}

?>