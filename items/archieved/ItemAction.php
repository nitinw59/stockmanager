<?php
	include($_SERVER['DOCUMENT_ROOT']."/htaccess.php");
	
	include($_SERVER['DOCUMENT_ROOT']."/$stockManager/mysqlconnectdb.php");
	 
  $action=$_POST["action"];
 
   if($action=="checkItem"){
	$result["FOUND"]=false;
	$result["QTY"]=0;

	$item_no=$_POST["item_no"];
	$sqlquery="select * from items_tbl where items_id=$item_no";
	$show=mysqli_query($dbhandle,$sqlquery);
	 while($row=mysqli_fetch_array($show)){
				$result["FOUND"]=true;
				$result["QTY"]=$row["QUANTITY_RECEIVED"];
	
		}
		
		
	echo json_encode($result);
		
  	}elseif($action=="getStyleAvailableQuantity"){
		$result["QTY"]=0;
		$stylename=$_POST["stylename"];
		$sqlquery="select AVAILABLE_QTY from styletypes where stylename='$stylename'";
		$show=mysqli_query($dbhandle,$sqlquery);
		 while($row=mysqli_fetch_array($show)){
					
					$result["QTY"]=$row["AVAILABLE_QTY"];
		
			}
			
			
		echo json_encode($result);
			
  }elseif($action=="loadItemData"){

		$item_no=$_POST["item_no"];
		$sqlquery="select * from items_tbl where items_id=$item_no";
		$show=mysqli_query($dbhandle,$sqlquery);
			 while($row=mysqli_fetch_array($show)){
				$itemData["DESCRIPTION"]=$row["DESCRIPTION"];
				$itemData["images_path"]=$row["images_path"];
				$itemData["maker"]=$row["MAKER"];
				$itemData["quantity_alter"]=$row["QUANTITY_ALTER"];
				$itemData["quantity_received"]=$row["QUANTITY_RECEIVED"];
				$itemData["rate"]=$row["RATE"];
				$itemData["tax_rate"]=$row["TAX_RATE"];
				
			}


			$sqlquery="select SUM(QUANTITY) AS QTY,SIZE from item_SIZES where item_id=$item_no GROUP BY SIZE";
			$show=mysqli_query($dbhandle,$sqlquery);
			 while($row=mysqli_fetch_array($show)){
				$SIZE=$row["SIZE"];
				$itemData["$SIZE"]=$row["QTY"];
				
			}
			echo json_encode($itemData);
	}
		
  
?>
