<?php
include($_SERVER['DOCUMENT_ROOT']."/htaccess.php");
	
	include($_SERVER['DOCUMENT_ROOT']."/$stockManager/mysqlconnectdb.php");
	include($_SERVER['DOCUMENT_ROOT']."/$stockManager/var.php");
  include($_SERVER['DOCUMENT_ROOT']."/$omenNX/index.php");

	$items_id=$_GET['items_id'];



    $querry="select BRAND,ITEM_STYLE,SIZE,AVAIALABLE_QTY,SELLING_PRICE from GENERALIZED_ITEMS where items_id='$items_id'";
    
    if($result=mysqli_query($dbhandle,$querry)){
        while($row=mysqli_fetch_array($result)){
            $BRAND= $row["BRAND"];
            $ITEM_STYLE= $row["ITEM_STYLE"];
            $SIZE= $row["SIZE"];
            $AVAIALABLE_QTY= $row["AVAIALABLE_QTY"];
            $SELLING_PRICE= $row["SELLING_PRICE"];

            }
    }

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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
		
   </head>
   <script type="text/javascript">
	
	
	
  $(document).ready(function() {
    
     
    $("#btnUpdate").click(function(){
     
      
      var items_id=$("#items_id").val();
      var BRAND=$("#BRAND").val();
      var ITEM_STYLE=$("#ITEM_STYLE").val();
      var SIZE=$("#SIZE").val();
      var AVAIALABLE_QTY=$("#AVAIALABLE_QTY").val();
      var SELLING_PRICE=$("#SELLING_PRICE").val();
       
      $.ajax({
                    type:"post",
                    url:"generalizedItemAction.php",
                    data:"items_id="+items_id+"&BRAND="+BRAND+"&ITEM_STYLE="+ITEM_STYLE+"&SIZE="+SIZE+"&AVAIALABLE_QTY="+AVAIALABLE_QTY+"&SELLING_PRICE="+SELLING_PRICE+"&action=updateGeneralizedItem",
                    success:function(data){
                    
                    var status = JSON.parse(data);
        
                    if(status["STATUS"]==1){
                      alert("Update Made Successfuly.");
                      window.location.replace("listGeneralizedItems.php");
                    }else{
                      alert("Update Failed.");
                    }
                
                    }
                });
      
    });
    
    
    
   
   
    
    
    
  });
</script>


	

 

    <body>
	   
    <div class="buyerdetailst" id="buyerdetailst">
    <center><h3>Update Generalized Item </h3></center>
	
	<label for="mail" hidden>items_id:  <input type="text" id="items_id" name="items_id" value="<?=$items_id?>" hidden></label>
	
    
    <label for="mail">BRAND:  <input type="text" id="BRAND" name="BRAND" value="<?=$BRAND?>" required></label>
    
    <label for="mail">ITEM_STYLE:  <input type="text" id="ITEM_STYLE" name="ITEM_STYLE" value="<?=$ITEM_STYLE?>" required></label>
	
	<label for="mail">SIZE :  <input type="text" id="SIZE" name="SIZE" value="<?=$SIZE?>" ></label>
	
    <label for="mail">AVAIALABLE_QTY :  <input type="text" id="AVAIALABLE_QTY" name="AVAIALABLE_QTY" value="<?=$AVAIALABLE_QTY?>" ></label>
    
    <label for="mail">SELLING_PRICE :  <input type="text" id="SELLING_PRICE" name="SELLING_PRICE" value="<?=$SELLING_PRICE?>" ></label>
	
    <button id="btnUpdate">Update</button>
</div>



	<!-- Pushy JS -->
        <script src="/<?=$stockManager?>/js/pushy.min.js"></script>


    </body>





    <style>
	*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}



.buyerdetailst {
  max-width: 450px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #e8e8df;
  border-radius: 8px;
}
body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
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

button {
  padding: 19px 39px 18px 39px;
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

	</style>
</html>




