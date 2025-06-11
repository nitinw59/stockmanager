<?php
    include($_SERVER['DOCUMENT_ROOT']."/htaccess.php");
	
	include($_SERVER['DOCUMENT_ROOT']."/$stockManager/mysqlconnectdb.php");
	include($_SERVER['DOCUMENT_ROOT']."/$stockManager/var.php");
	


    
	
	$lotId=$_GET['lotId'];
	$brand=$_GET['brand'];
	$itemStyle=$_GET['item'];
	$SIZE=$_GET['size'];
	$received_qty=$_GET['quantity'];
	$TIMESTAMP=$_GET['TIMESTAMP'];

	$formated_TIMESTAMP= date("Y-m-d h:m:s",strtotime($TIMESTAMP));
	
	$selected = mysqli_select_db($dbhandle,$dbname) 
 		 or die("Could not select database1");

	$query_upload=" insert into generalized_items
						(BRAND,ITEM_STYLE,SIZE) VALUES
						('$brand','$itemStyle','$SIZE');";
	
	try{
		mysqli_query($dbhandle,$query_upload);
	}catch(Exception $e){
		echo "\nERROR ITEM ADDED-".$e->getMessage();
	}

	$status=0;
	try{
		$query_upload="insert into received_logger
					(timestamplogger,BRAND,ITEM_STYLE,SIZE,RECEIVED_QTY,LOT_ID) 
					VALUES
					('$formated_TIMESTAMP','$brand','$itemStyle','$SIZE','$received_qty','$lotId');";
					

	$status=mysqli_query($dbhandle,$query_upload) ; 

	}catch(Exception $e){
		echo "<br></br>ERROR RECEIVED LOG-".$e->getMessage();

	}

	
	
	

	
	
	
	if($status!=1){
	   	$message=("DUPLICATE  OR error in adding Style call 8087978196.");
        echo "<script type='text/javascript'>alert('$message');</script>";
	}

	$url="listReceivedLogger.php";
	echo "<meta http-equiv='refresh' content='0;url=".$url."'>";

	
	
	



?>

