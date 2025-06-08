
 <?php
	include($_SERVER['DOCUMENT_ROOT']."/htaccess.php");
	include($_SERVER['DOCUMENT_ROOT']."/$stockManager/var.php");
	include($_SERVER['DOCUMENT_ROOT']."/$stockManager/mysqlconnectdb.php");
 
 ?>
<title>
<?=$stockManager?>
	</title>
	
   
	
	<!-- Pushy Menu -->
<nav class="pushy pushy-left">
    <div class="pushy-content">
        <ul>
            <!-- Submenu -->
            
			


			<li class="pushy-submenu">
                <button>Items</button>
                <ul>
                    <li class="pushy-link"><a href="/<?=$stockManager?>/items/listGeneralizedItems.php">Items</a></li>
					<li class="pushy-link"><a href="/<?=$stockManager?>/items/listReceivedLogger.php">Received Logger</a></li>
					
					
					
					
				</ul>
            </li>
			
			
			
			
			
			
			
            
        </ul>
    </div>
</nav>

<!-- Site Overlay -->
<div class="site-overlay"></div>

<!-- Your Content -->
<div id="container">
    <!-- Menu Button -->
	<table><tr><td>
    <button class="menu-btn">&#9776; Menu</button></td><td width="95%"><font  size="30px" ><center>Stock </font><font  size="90px" >Manager</center></td></tr></table>
</div>

     
        

    


