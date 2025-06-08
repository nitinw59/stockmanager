<?php
include($_SERVER['DOCUMENT_ROOT']."/htaccess.php");
	
	include($_SERVER['DOCUMENT_ROOT']."/$stockManager/mysqlconnectdb.php");
	include($_SERVER['DOCUMENT_ROOT']."/$stockManager/var.php");
	include($_SERVER['DOCUMENT_ROOT']."/$stockManager/index.php");
	
  $sql = "SELECT fitname FROM fittypes";
	$fitnames = array();
	if($result = mysqli_query($dbhandle,$sql) ){
		$count=0;
		
		while($row = mysqli_fetch_array($result)) {
		$fitnames[$count] = $row['fitname'];
		$count++;
		}
				
	}



  $sql = "SELECT stylename FROM styletypes";
	$stylenames = array();
	if($result = mysqli_query($dbhandle,$sql) ){
		$count=0;
		
		while($row = mysqli_fetch_array($result)) {
		$stylenames[$count] = $row['stylename'];
		$count++;
		}
	
	}



  

  $sql = "SELECT alias FROM jobworker";
	$jobworkername = array();
	if($result = mysqli_query($dbhandle,$sql) ){
		$count=0;
		
		while($row = mysqli_fetch_array($result)) {
		$jobworkername[$count] = $row['alias'];
		$count++;
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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
		    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
		
   </head>



  <script>



  
      $(document).ready(function() {
				
				

				var fitnames = <?php echo json_encode($fitnames); ?>;
				$("#Ftype").select2({
				  data: fitnames
				});
				
				
				
				var stylenames = <?php echo json_encode($stylenames); ?>;
				$("#Fstyle").select2({
				  data: stylenames
				});
				
				
				
				var jobworkername = <?php echo json_encode($jobworkername); ?>;
				$("#Fmaker").select2({
				  data: jobworkername
				});
				
				



        
				$("#Fstyle").change(function(){
					
          var Fstyle=$("#Fstyle").val();



                $.ajax({
                    type:"post",
                    url:"itemAction.php",
                    data:"stylename="+Fstyle+"&action=getStyleAvailableQuantity",
                    success:function(data){
                   
                      
                      var result=JSON.parse(data);
                      $("#style_available_qty").html(result["QTY"]);
   
                    }
                });
        });

				
				
      });


   // 1.NEW  2.ADD  3.DELETENEW
  
   function verifyLot() {
    
    var lotID=$("#lotID").val();
    
    $.ajax({
          type:"post",
          url:"itemAction.php",
          data:"item_no="+lotID+"&action=checkItem",
          success:function(data){
            alert(data);
            var result=JSON.parse(data);
            alert(result["FOUND"]);
					  if(result["FOUND"]==true){
              $("#available_qty").html("AVAILABLE QTY: "+result["QTY"]);
                 $.confirm({
                    buttons: {
                        opt1:{
                          text:"ADD QTY",
                          action:function(){
                            $("#insert_type").val("ADD");
                          }
                        },
                    opt2: {
                        text: 'Delete OLD and Add New' , // With spaces and symbols
                        action: function () {
                          $("#insert_type").val("DELETENEW");
                        }
                    }
                  },
                  title: "ITEM FOUND",
                  content: false
                  });
                }else
              $("#insert_type").val("NEW");
                
					}
    });
						
    
  
  
  
  
  
  
  
  
  }
    







    </script>

    <body>
	  <form action="addItemSubmit.php" enctype="multipart/form-data" method="post">
    
    <input type="text" id="insert_type" name="insert_type" value="NEW" >
    
    
    <h1>Labels Data</h1>
        
        
        <label for="mail">Fit</label>
			  <td><select name='Ftype' id='Ftype' required>
	      </select>
        <br></br>
		
		
		<label for="mail">Style[Generalized]</label>
		
		
	
	<td><select name='Fstyle' id='Fstyle' required>
	</select>
  	
	<label id="style_available_qty" ></label>
	
		<br></br>
			<label for="mail">Maker</label>
			
	<td><select name='Fmaker' id='Fmaker' required>
	</select>
  <br></br>
	
	
	
	<label for="mail">Lot Id :  <input type="number" id="lotID" name="lotID" value="0" onfocusout="verifyLot()" required></label>
			
	<label id="available_qty" ></label>
	
	
	<label for="mail">22 :  <input type="number" id="size22" name="size22" value="0" required></label>
	
	<label for="mail">24 :  <input type="number" id="size24" name="size24" value="0" required></label>
	
	<label for="mail">26 :  <input type="number" id="size26" name="size26" value="0" required></label>
	
	<label for="mail">28 :  <input type="number" id="size28" name="size28" value="0" required></label>
			
	
	
	<label for="mail">30 :  <input type="number" id="size30" name="size30" value="0" required></label>
			
	
	
	<label for="mail">32 :  <input type="number" id="size32" name="size32" value="0" required></label>
			
	
	
	<label for="mail">34 :  <input type="number" id="size34" name="size34" value="0" required></label>
			
	
	
	<label for="mail">36 :  <input type="number" id="size36" name="size36" value="0" required></label>
			
	
	
	<label for="mail">38 :  <input type="number" id="size38" name="size38" value="0" required></label>
			
	
	
	<label for="mail">40 :  <input type="number" id="size40" name="size40" value="0" required></label>
			
	
	
	<label for="mail">42 :  <input type="number" id="size42" name="size42" value="0" required></label>
			
	
	
	<label for="mail">44 :  <input type="number" id="size44" name="size44" value="0" required></label>
	
	
	
	<label for="mail">46 :  <input type="number" id="size46" name="size46" value="0" required></label>
	
	
	
	<label for="mail">Rate</label>
    <input type="number" id="rate" name="rate" value=-1 required>
	</fieldset>
    
    <fieldset>

        <label for="job">File :</label>
    <input name="uploadedimage" type="file" value=null required>
	
   
   
	
	
	
	</fieldset>
  <button id="btnSubmit" type="submit">Generate</button>
      </form>
      



	<!-- Pushy JS -->
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




