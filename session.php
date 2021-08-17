<?php
require 'includes/dbh.inc.php';

session_start();

$user_check = $_SESSION['login_user']; 


$query = "SELECT usersEmail from users where usersEmail = '$user_check'"; 

$result = $connection->query($query);

if ($result->num_rows!=0){

	$row = $result->fetch_assoc();
	$login_session = $row["usersEmail"];
}

?>