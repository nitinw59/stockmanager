<?php
	include($_SERVER['DOCUMENT_ROOT']."/htaccess.php");
	
	include($_SERVER['DOCUMENT_ROOT']."/$stockManager/mysqlconnectdb.php");
	include($_SERVER['DOCUMENT_ROOT']."/$stockManager/var.php");
	
	
	$sizeArray;
    function GetImageExtension($imagetype)
   	 {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }


	


if (!empty($_FILES["uploadedimage"]["name"])) {
	
	$insert_type=$_POST['insert_type'];
	// 1.NEW  2.ADD  3.DELETENEW
   
	
	$Ftype=$_POST['Ftype'];
	$Fstyle=$_POST['Fstyle'];
	$Fmaker=$_POST['Fmaker'];
	$lotID=$_POST['lotID'];
	$size22=$_POST['size22'];
	$size24=$_POST['size24'];
	$size26=$_POST['size26'];
	$size28=$_POST['size28'];
	
	$size30=$_POST['size30'];
	$size32=$_POST['size32'];
	$size34=$_POST['size34'];
	$size36=$_POST['size36'];
	$size38=$_POST['size38'];
	$size40=$_POST['size40'];
	$size42=$_POST['size42'];
	$size44=$_POST['size44'];
	$size46=$_POST['size46'];
	
	

	$items_id=$_POST['lotID'];
	$Fstyle=strtoupper($Fstyle);
	$Ftype=strtoupper($Ftype);
	$maker=$_POST['Fmaker'];
	$Size="";
	$quantity=0;
	$quantityrec=0;
	$quantityalt=0;
	$rate= (int)$_POST['rate'];
	$taxrate= 0;
	
	
	
 	$txt_file='labledata.txt';
	$handle=fopen($txt_file,'w') or die('cannot open data file.');
	$count=1;
	
	
	
	$sizeCount=0;
	if($size22>0){
		$sizeArray[$sizeCount][0]=22;
		$sizeArray[$sizeCount][1]=$size22;
		$sizeCount++;
	}			
	if($size24>0){
		$sizeArray[$sizeCount][0]=24;
		$sizeArray[$sizeCount][1]=$size24;
		$sizeCount++;
	}	
	if($size26>0){
		$sizeArray[$sizeCount][0]=26;
		$sizeArray[$sizeCount][1]=$size26;
		$sizeCount++;
	}	
	if($size28>0){
		$sizeArray[$sizeCount][0]=28;
		$sizeArray[$sizeCount][1]=$size28;
		$sizeCount++;
	}	
	if($size30>0){
		$sizeArray[$sizeCount][0]=30;
		$sizeArray[$sizeCount][1]=$size30;
		$sizeCount++;
	}	
	if($size32>0){
		$sizeArray[$sizeCount][0]=32;
		$sizeArray[$sizeCount][1]=$size32;
		$sizeCount++;
	}	
	if($size34>0){
		$sizeArray[$sizeCount][0]=34;
		$sizeArray[$sizeCount][1]=$size34;
		$sizeCount++;
	}	
	if($size36>0){
		$sizeArray[$sizeCount][0]=36;
		$sizeArray[$sizeCount][1]=$size36;
		$sizeCount++;
	}	
	if($size38>0){
		$sizeArray[$sizeCount][0]=38;
		$sizeArray[$sizeCount][1]=$size38;
		$sizeCount++;
	}	
	if($size40>0){
		$sizeArray[$sizeCount][0]=40;
		$sizeArray[$sizeCount][1]=$size40;
		$sizeCount++;
	}	
	if($size42>0){
		$sizeArray[$sizeCount][0]=42;
		$sizeArray[$sizeCount][1]=$size42;
		$sizeCount++;
	}	
	if($size44>0){
		$sizeArray[$sizeCount][0]=44;
		$sizeArray[$sizeCount][1]=$size44;
		$sizeCount++;
	}	
	if($size46>0){
		$sizeArray[$sizeCount][0]=46;
		$sizeArray[$sizeCount][1]=$size46;
		$sizeCount++;
	}	
		
		
	
	

	for($i=0;$i<$size22;$i++){
	$data=$Ftype.'-'.$Fstyle.'-'.$Fmaker.' '.$lotID.'-22- 1199'.PHP_EOL;
	echo $count.' . '.$data.'</br>';
	$count++;
	fwrite($handle,$data);
	}

	

	for($i=0;$i<$size24;$i++){
	$data=$Ftype.'-'.$Fstyle.'-'.$Fmaker.' '.$lotID.'-24- 1199'.PHP_EOL;
	echo $count.' . '.$data.'</br>';
	$count++;
	fwrite($handle,$data);
	
	}



	for($i=0;$i<$size26;$i++){
	$data=$Ftype.'-'.$Fstyle.'-'.$Fmaker.' '.$lotID.'-26- 1199'.PHP_EOL;
	echo $count.' . '.$data.'</br>';
	$count++;
	fwrite($handle,$data);
	
	}



	for($i=0;$i<$size28;$i++){
	$data=$Ftype.'-'.$Fstyle.'-'.$Fmaker.' '.$lotID.'-28- 1199'.PHP_EOL;
	echo $count.' . '.$data.'</br>';
	$count++;
	fwrite($handle,$data);
	
	}




	for($i=0;$i<$size30;$i++){
	$data=$Ftype.'-'.$Fstyle.'-'.$Fmaker.' '.$lotID.'-30- 1199'.PHP_EOL;
	echo $count.' . '.$data.'</br>';
	$count++;
	fwrite($handle,$data);
	
	}



	for($i=0;$i<$size32;$i++){
	$data=$Ftype.'-'.$Fstyle.'-'.$Fmaker.' '.$lotID.'-32- 1199'.PHP_EOL;
	echo $count.' . '.$data.'</br>';
	$count++;
	fwrite($handle,$data);
	
	}




	for($i=0;$i<$size34;$i++){
	$data=$Ftype.'-'.$Fstyle.'-'.$Fmaker.' '.$lotID.'-34- 1199'.PHP_EOL;
	echo $count.' . '.$data.'</br>';
	$count++;
	fwrite($handle,$data);
	
	}




	for($i=0;$i<$size36;$i++){
	$data=$Ftype.'-'.$Fstyle.'-'.$Fmaker.' '.$lotID.'-36- 1199'.PHP_EOL;
	echo $count.' . '.$data.'</br>';
	$count++;
	fwrite($handle,$data);
	
	}



	for($i=0;$i<$size38;$i++){
	$data=$Ftype.'-'.$Fstyle.'-'.$Fmaker.' '.$lotID.'-38- 1099'.PHP_EOL;
	echo $count.' . '.$data.'</br>';
	$count++;
	fwrite($handle,$data);
	
	}
	
	
	
	
	for($i=0;$i<$size40;$i++){
	$data=$Ftype.'-'.$Fstyle.'-'.$Fmaker.' '.$lotID.'-40- 1099'.PHP_EOL;
	echo $count.' . '.$data.'</br>';
	$count++;
	fwrite($handle,$data);
	
	}
	
	
	
	for($i=0;$i<$size42;$i++){
	$data=$Ftype.'-'.$Fstyle.'-'.$Fmaker.' '.$lotID.'-42- 1099'.PHP_EOL;
	echo $count.' . '.$data.'</br>';
	$count++;
	fwrite($handle,$data);
	
	}
	
	
	
	
	
	for($i=0;$i<$size44;$i++){
	$data=$Ftype.'-'.$Fstyle.'-'.$Fmaker.' '.$lotID.'-44- 1099'.PHP_EOL;
	echo $count.' . '.$data.'</br>';
	$count++;
	fwrite($handle,$data);
	
	}
	
	for($i=0;$i<$size46;$i++){
	$data=$Ftype.'-'.$Fstyle.'-'.$Fmaker.' '.$lotID.'-46- 1099'.PHP_EOL;
	echo $count.' . '.$data.'</br>';
	$count++;
	fwrite($handle,$data);
	
	}
	
	
	
	$message='Write Success. Records-'.$count;
	$quantity=$count;	
	$quantityrec=$count-1;	
	echo "<script type='text/javascript'>alert('$message');</script>";
	
	
	$file_name=$_FILES["uploadedimage"]["name"];
	$temp_name=$_FILES["uploadedimage"]["tmp_name"];
	$imgtype=$_FILES["uploadedimage"]["type"];
	$ext= GetImageExtension($imgtype);
	$imagename=date("d-m-Y")."-".time()."-".rand(10,1000).$ext;
	$target_path = "../data/items/".$imagename;
	

if(move_uploaded_file($temp_name, $target_path)) {
	$status=0;
	
	$s1=true;
	$s2=true;
	echo "</br>insert type".$insert_type;
	
								if($insert_type=="ADD"){
									$query_upload="UPDATE items_tbl 
													SET 
													fitname='$Ftype',
													stylename='$Fstyle',
													MAKER='$maker',
													QUANTITY_ALTER=$quantityalt,
													QUANTITY_RECEIVED=$quantityrec,
													RATE=$rate,
													TAX_RATE=$taxrate,
													images_path='$imagename'
													WHERE items_id=$items_id";
													echo "</br>UPDAT QUERRY--".$query_upload;

								}
								elseif($s1==true and $s2==true){ 
									
									$query_upload="DELETE  FROM ITEM_SIZES WHERE ITEM_ID=$items_id";
									$s1=mysqli_query($dbhandle,$query_upload); 
									echo "</br>DELETED--".$query_upload;
									$query_upload="DELETE  FROM items_tbl WHERE ITEMs_ID=$items_id";
									$s2=mysqli_query($dbhandle,$query_upload);
									echo "</br>DELETED--".$query_upload;
									
									$query_upload="insert into 
													items_tbl (
														items_id,
														fitname,
														stylename,
														MAKER,
														QUANTITY_ALTER,
														QUANTITY_RECEIVED,
														RATE,
														TAX_RATE,
														images_path) 
														
														values(
															".$items_id.",
															'".$Ftype."',
															'".$Fstyle."',
															'".$maker."',
															".$quantityalt.",
															".$quantityrec.",
															".$rate.",
															".$taxrate.",
															'".$imagename."')";
									
									
									echo "</br>INSERT QUERRY--".$query_upload;
								}
		

									$status=mysqli_query($dbhandle,$query_upload); 
									
									
									for($i=0;$i<count($sizeArray);$i++){
										$a=$sizeArray[$i][0];
										$b=$sizeArray[$i][1];
										$query_upload="insert into ITEM_SIZES values($items_id,$a,$b)";
										$status=mysqli_query($dbhandle,$query_upload); 
										echo "</br>INSERT SIZES--".$query_upload;
									}

								
								
								

		
	if($status==1){
	$url="showItem.php?itemid=".$items_id;
	}elseif($status==2){
	
	$url="itemAddError.php";
	
	}
	
	//echo "<meta http-equiv='refresh' content='0;url=".$url."'>";
	}
 
	
}else{

   //exit("Error While uploading image on the server");
} 



?>

