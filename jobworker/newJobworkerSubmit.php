<?php
    include($_SERVER['DOCUMENT_ROOT']."/htaccess.php");
	
	include($_SERVER['DOCUMENT_ROOT']."/$stockManager/mysqlconnectdb.php");
	include($_SERVER['DOCUMENT_ROOT']."/$stockManager/var.php");
	


    
	

	$jobworker=$_POST['jobworker'];
	$Description=$_POST['Decription'];
	

 	$query_upload=" insert into jobworker(jobworkername,alias) VALUES('$jobworker','$Description');";
	echo $query_upload;
	
	
	

	$selected = mysqli_select_db($dbhandle,$dbname) 
  or die("Could not select database1");

	$status=mysqli_query($dbhandle,$query_upload) ; 
	
	
	if($status!=1){
	   	$message=("error in adding jobworker call 8087978196.");
        echo "<script type='text/javascript'>alert('$message');</script>";
	}

	$url="listAlljobworkerTypes.php";
	echo "<meta http-equiv='refresh' content='0;url=".$url."'>";

	
	
	



?>

