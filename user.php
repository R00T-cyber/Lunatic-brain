<?php
require 'includes/dbh.inc.php';
session_start();

if(isset($_SESSION['login_user'])){
header("location: home.php"); // Redirecting To Profile Page
}

?>
<?php

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
	if (isset ($_POST["submit"])){
	require 'SignIn.php';	
	}
	
	elseif (isset($_POST["submit"])){
		require 'SignUp.php';
	}
	
}	
?>	
