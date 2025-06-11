<?php
include($_SERVER['DOCUMENT_ROOT']."/htaccess.php");
	include($_SERVER['DOCUMENT_ROOT']."/$stockManager/var.php");
	include($_SERVER['DOCUMENT_ROOT']."/$stockManager/mysqlconnectdb.php");
 
  $action=$_POST["action"];
 if($action=="deleteFit"){
	$fit=$_POST["fit"];
	 
	$sqlquery="DELETE FROM fitTypes WHERE  fitname='$fit'" ;
    $show['STATUS']=mysqli_query($dbhandle,$sqlquery);
    
	echo json_encode($show);
  }else if($action=="updateGeneralizedItem"){
	
	$items_id=$_POST["items_id"];
	$BRAND=$_POST["BRAND"];
	$ITEM_STYLE=$_POST["ITEM_STYLE"];
	$SIZE=$_POST["SIZE"];
	$AVAIALABLE_QTY=$_POST["AVAIALABLE_QTY"];
	$SELLING_PRICE=$_POST["SELLING_PRICE"];
	
	$query_upload=" update 
                        generalized_items 
                        set 
                        BRAND='$BRAND',
                        ITEM_STYLE='$ITEM_STYLE',
                        SIZE='$SIZE',
                        AVAIALABLE_QTY=$AVAIALABLE_QTY,
                        SELLING_PRICE=$SELLING_PRICE
                        where items_id='$items_id';";
	

	$show['STATUS']=mysqli_query($dbhandle,$query_upload);
	echo json_encode($show);
  
  }else if($action=="updateGeneralizedItem_rate"){
	
	$items_id=$_POST["items_id"];
	$SELLING_PRICE=$_POST["SELLING_PRICE"];
	
	$query_upload=" update 
                        generalized_items 
                        set 
                        SELLING_PRICE=$SELLING_PRICE
                        where items_id='$items_id';";
	

	$show['STATUS']=mysqli_query($dbhandle,$query_upload);
	echo json_encode($show);
  
  }
?>
