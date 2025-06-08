<?php
	include($_SERVER['DOCUMENT_ROOT']."/htaccess.php");
	
	include($_SERVER['DOCUMENT_ROOT']."/$stockManager/mysqlconnectdb.php");
	include($_SERVER['DOCUMENT_ROOT']."/$stockManager/var.php");
	
	
	$sizeArray;

    
	$printdata["LABEL"]=$_GET['LABEL'];
	$printdata["SIZE"]=$_GET['SIZE'];
	$printdata["Description"]=$_GET['Description'];
	$printdata["NAME"]=$_GET['NAME'];
	$printdata["Fit"]=$_GET['Fit'];
	$printdata["lotid"]=$_GET['lotid'];
	$printdata["28"]=$_GET['28'];
	$printdata["30"]=$_GET['30'];
	$printdata["32"]=$_GET['32'];
	$printdata["34"]=$_GET['34'];
	$printdata["36"]=$_GET['36'];
	$printdata["38"]=$_GET['38'];
	$printdata["40"]=$_GET['40'];
	$printdata["42"]=$_GET['42'];
	$printdata["44"]=$_GET['44'];
	



    print_r( $printdata);



 	$txt_file='labledata.txt';

	$handle=fopen($txt_file,'w') or die('cannot open data file.');
	$count=1;


    
	for($i=0;$i<$printdata["28"];$i++){
        $data=$printdata["Fit"].'-'.str_ireplace(" ","_" ,$printdata["Description"]).'-'.strtoupper(substr($printdata["NAME"],0,2)).' '.$printdata["lotid"].'-28- 1199'.PHP_EOL;
        echo $count.' . '.$data.'</br>';
        $count++;
        fwrite($handle,$data);
        
        }

    for($i=0;$i<$printdata["30"];$i++){
            $data=$printdata["Fit"].'-'.str_ireplace(" ","_" ,$printdata["Description"]).'-'.strtoupper(substr($printdata["NAME"],0,2)).' '.$printdata["lotid"].'-30- 1199'.PHP_EOL;
            echo $count.' . '.$data.'</br>';
            $count++;
            fwrite($handle,$data);
            
    }
    for($i=0;$i<$printdata["32"];$i++){
        $data=$printdata["Fit"].'-'.str_ireplace(" ","_" ,$printdata["Description"]).'-'.strtoupper(substr($printdata["NAME"],0,2)).' '.$printdata["lotid"].'-32- 1199'.PHP_EOL;
        echo $count.' . '.$data.'</br>';
        $count++;
        fwrite($handle,$data);
        
    }
    for($i=0;$i<$printdata["34"];$i++){
        $data=$printdata["Fit"].'-'.str_ireplace(" ","_" ,$printdata["Description"]).'-'.strtoupper(substr($printdata["NAME"],0,2)).' '.$printdata["lotid"].'-34- 1199'.PHP_EOL;
        echo $count.' . '.$data.'</br>';
        $count++;
        fwrite($handle,$data);
        
    }
    for($i=0;$i<$printdata["36"];$i++){
        $data=$printdata["Fit"].'-'.str_ireplace(" ","_" ,$printdata["Description"]).'-'.strtoupper(substr($printdata["NAME"],0,2)).' '.$printdata["lotid"].'-36- 1199'.PHP_EOL;
        echo $count.' . '.$data.'</br>';
        $count++;
        fwrite($handle,$data);
        
    }
    for($i=0;$i<$printdata["38"];$i++){
        $data=$printdata["Fit"].'-'.str_ireplace(" ","_" ,$printdata["Description"]).'-'.strtoupper(substr($printdata["NAME"],0,2)).' '.$printdata["lotid"].'-38- 1299'.PHP_EOL;
        echo $count.' . '.$data.'</br>';
        $count++;
        fwrite($handle,$data);
        
    }
    for($i=0;$i<$printdata["40"];$i++){
        $data=$printdata["Fit"].'-'.str_ireplace(" ","_" ,$printdata["Description"]).'-'.strtoupper(substr($printdata["NAME"],0,2)).' '.$printdata["lotid"].'-40- 1299'.PHP_EOL;
        echo $count.' . '.$data.'</br>';
        $count++;
        fwrite($handle,$data);
        
    }
    for($i=0;$i<$printdata["42"];$i++){
        $data=$printdata["Fit"].'-'.str_ireplace(" ","_" ,$printdata["Description"]).'-'.strtoupper(substr($printdata["NAME"],0,2)).' '.$printdata["lotid"].'-42- 1299'.PHP_EOL;
        echo $count.' . '.$data.'</br>';
        $count++;
        fwrite($handle,$data);
        
    }
    for($i=0;$i<$printdata["44"];$i++){
        $data=$printdata["Fit"].'-'.str_ireplace(" ","_" ,$printdata["Description"]).'-'.strtoupper(substr($printdata["NAME"],0,2)).' '.$printdata["lotid"].'-44- 1299'.PHP_EOL;
        echo $count.' . '.$data.'</br>';
        $count++;
        fwrite($handle,$data);
        
    }    
    
    $last_label="";
    if($printdata["28"]>0)
    $last_label.="28:".$printdata["28"];
    if($printdata["30"]>0)
    $last_label.="30:".$printdata["30"];
    if($printdata["32"]>0)
    $last_label.="32:".$printdata["32"];
    if($printdata["34"]>0)
    $last_label.="34:".$printdata["34"];
    if($printdata["36"]>0)
    $last_label.="36:".$printdata["36"];
    if($printdata["38"]>0)
    $last_label.="38:".$printdata["38"];
    if($printdata["40"]>0)
    $last_label.="40:".$printdata["40"];
    if($printdata["42"]>0)
    $last_label.="42:".$printdata["42"];
    if($printdata["44"]>0)
    $last_label.="44:".$printdata["44"];


    if(strlen($last_label)>10)
    $data="TOTAL:$count- ".substr($last_label,0,10)."-0-0- ".substr($last_label,10);
    else
    $data="TOTAL:$count- $last_label-0-0- 0";
    
    echo $count.' . '.$data.'</br>';
    $count++;
    fwrite($handle,$data);
 
 
	$url="showItem.php?
    LABEL=".$printdata["LABEL"]
            ."&SIZE=".$printdata["SIZE"]
            ."&Description=".$printdata["Description"]
            ."&NAME=".$printdata["NAME"]
            ."&Fit=".$printdata["Fit"]
            ."&lotid=".$printdata["lotid"]
            ."&28=".$printdata["28"]
            ."&30=".$printdata["30"]
            ."&32=".$printdata["32"]
            ."&34=".$printdata["34"]
            ."&36=".$printdata["36"]
            ."&38=".$printdata["38"]
            ."&40=".$printdata["40"]
            ."&42=".$printdata["42"]
            ."&44=".$printdata["44"]
            ;
            echo $url;
	echo "<meta http-equiv='refresh' content='0;url=".$url."'>";
    
 
 ?>


