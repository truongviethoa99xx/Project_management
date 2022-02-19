<?php
session_start();
// gọi session 

	if(isset($_SESSION['user']) && $_SESSION['user'] != NULL){
		unset($_SESSION['user']);
		header("location: index.html");
	}
?>