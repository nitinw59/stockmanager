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

.center2 {
  max-width: 400px;
  margin: 10px auto;
  padding: 10px 20px;
  background: Red;
  border-radius: 8px;
}
</style>

<body>
<?php
		

		include($_SERVER['DOCUMENT_ROOT']."/$stockManager/index.php");
		?>

<div class='center2'>
<font color='white' size='6'> Item Failed to Added.</font>
<font color='white' size='3'>
please varify all details added are correct and unique.</font>
</div>


 <script src="/<?=$stockManager?>/js/pushy.min.js"></script>

</body>