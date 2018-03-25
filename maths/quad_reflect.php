<?php
	session_start();
	
	$valueA=isset($_POST['valueA']) ? trim($_POST['valueA']) : "";
	$valueB=isset($_POST['valueB']) ? trim($_POST['valueB']) : "";
	$valueC=isset($_POST['valueC']) ? trim($_POST['valueC']) : "";
	
	$_SESSION['valueA']="$valueA";
	$_SESSION['valueB']="$valueB";
	$_SESSION['valueC']="$valueC";
	
	header("Location: quadratic_equation.php");
	exit();
?>