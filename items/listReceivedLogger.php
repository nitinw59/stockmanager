<?php
	include($_SERVER['DOCUMENT_ROOT']."/htaccess.php");
	
	include($_SERVER['DOCUMENT_ROOT']."/$stockManager/mysqlconnectdb.php");
	include($_SERVER['DOCUMENT_ROOT']."/$stockManager/var.php");
?>

  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="Pushy is an off-canvas navigation menu for your website.">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

        <link rel="stylesheet" href="/<?=$stockManager?>/css/normalize.css">
        <link rel="stylesheet" href="/<?=$stockManager?>/css/demo.css">
        <!-- Pushy CSS -->
        <link rel="stylesheet" href="/<?=$stockManager?>/css/pushy.css">
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
   
    </head>




<script>
		$(document).ready(function(){
			$(".updateStyle").click(function(){
		  	window.location.replace("updateStyle.php?StyleType="+$(this).val());
        });
		 



      $(".deleteStyle").click(function(){
    
     
     var Style=$(this).val();
    
     
     $.ajax({
                   type:"post",
                   url:"styleAction.php",
                   data:"Style="+Style+"&action=deleteStyle",
                   success:function(data){
      
       var status = JSON.parse(data);
       
       if(status["STATUS"]==1){
        $("#"+Style).remove();
         alert("Deleted Successfuly.");
         window.location.reload();
       
       }else{
         alert("Update Failed.");
       }
               
                   }
               });
     
   });





  });
</script>

<body>
<?php
		
		include($_SERVER['DOCUMENT_ROOT']."/$omenNX/index.php");

		?>


<div class='center'>
<center><h3> Receied Logger</h3></center>

<div class='center1'>


<table>
  <th>Log Id</th>
  <th>BRAND</th>
  <th>Style Description</th>
  <th>Size</th>
  <th>Received Qty</th>
  <th>Update</th>
  <th>Delete</th>

<?php
    
    $selected = mysqli_select_db($dbhandle,$dbname) 
                        or die(mysql_error());

    $querry="select received_logger_id,BRAND,ITEM_STYLE,SIZE,RECEIVED_QTY from received_logger  order by received_logger_id desc";

    if($result=mysqli_query($dbhandle,$querry)){
        while($row=mysqli_fetch_array($result)){
            $a= $row[0];
            $b= $row[1];
            $c= $row[2];
            $d= $row[3];
            $e= $row[4];


            if($a==null)
            $a="-";
            if($b==null)
            $b="-";
            if($c==null)
            $c="-";
            if($d==null)
            $d="-";
            if($e==null)
            $e="-";
            
            echo "<tr  id='$a'><td >  $a  </td> <td>$b</td><td>$c</td><td>$d</td><td>$e</td> <td><center><button type='submit' class='updateStyle' value=$a>UPDATE</button><center></td><td><center><button type='submit' class='deleteStyle' value=$a>Delete</button><center></td></tr>";
            echo "";
				
        }
    }

  

?>


</table>
</div>
</div>
 

 <script src="/<?=$stockManager?>/js/pushy.min.js"></script>

</body>

<style>
	*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

.center {
  max-width: 80%;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}



.center1 {
  max-width: 60%;
  margin: 10px auto;
  padding: 10px 20px;
  background: #FDFEFE;
  border-radius: 8px;
}




h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

.updateStyle {
  padding: 5px 5px 5px 5px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}
.deleteStyle {
  padding: 5px 5px 5px 5px;
  color: #000;
  background-color: #FF8282;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #FF8282;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}



table {
    border-collapse: collapse;
    width: 100%;
}

td {
    text-align: left;
    padding: 8px;
}

th {
    background-color: #4CAF50;
    color: white;
}



tr:nth-child(even){background-color: #f2f2f2}


	</style>




