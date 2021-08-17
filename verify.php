<?php
if (isset($_GET["vKey"])){
	
		$vKey=$_GET["vKey"];
		
require 'includes/sessions.inc.php';
				
	$result=$connection->query ("SELECT verified,vKey FROM `users` WHERE vKey = '$vKey' AND `verified`= 0 LIMIT 1");
		
		if($result->num_rows==1){
			
			$connection->query("UPDATE `users` SET `verified`= 1 WHERE vKey='$vKey' LIMIT 1");	
			
				echo '<script> alert("Successfully Verified!!")</script>';
					 echo '<script>window.location="user.php"</script>'; 
			}
			
			else{
				echo '<script> alert("failed to  be Verified!!")</script>'; 
			}	
		}
	
else{
	echo '<script> alert(Invalid parameters provided for account verification!")</script>';

}

?>