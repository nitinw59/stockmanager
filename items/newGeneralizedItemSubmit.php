<?php
    include($_SERVER['DOCUMENT_ROOT']."/htaccess.php");
	
	include($_SERVER['DOCUMENT_ROOT']."/$stockManager/mysqlconnectdb.php");
	include($_SERVER['DOCUMENT_ROOT']."/$stockManager/var.php");
	


    
	

	$brand=$_GET['BRAND'];
	$itemStyle=$_GET['ITEM'];
	$SIZE=$_GET['SIZE'];
	$SELLING_PRICE=$_GET['SELLING_PRICE'];
	

 	$query_upload=" insert into GENERALIZED_ITEMS(BRAND,ITEM_STYLE,SIZE,SELLING_PRICE) VALUES('$brand','$itemStyle','$SIZE','$SELLING_PRICE');";
	echo $query_upload;
	
	
	

	$selected = mysqli_select_db($dbhandle,$dbname) 
  or die("Could not select database1");

	$status=mysqli_query($dbhandle,$query_upload) ; 
	
	
	if($status!=1){
	   	$message=("DUPLICATE  OR error in adding Style call 8087978196.");
        echo "<script type='text/javascript'>alert('$message');</script>";
	}

	$url="listGeneralizedItems.php";
	echo "<meta http-equiv='refresh' content='0;url=".$url."'>";

	
	
	



?>

