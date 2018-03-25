<?php
	session_start();
	
	$link=isset($_GET['link']) ? trim($_GET['link']) : "";
	
	$valueA=isset($_POST['valueA']) ? trim($_POST['valueA']) : "";
	$valueB=isset($_POST['valueB']) ? trim($_POST['valueB']) : "";
	$operation1=isset($_POST['operation1']) ? trim($_POST['operation1']) : "";
	$valueC=isset($_POST['valueC']) ? trim($_POST['valueC']) : "";
	$valueD=isset($_POST['valueD']) ? trim($_POST['valueD']) : "";
	$valueE=isset($_POST['valueE']) ? trim($_POST['valueE']) : "";
	$operation2=isset($_POST['operation2']) ? trim($_POST['operation2']) : "";
	$valueF=isset($_POST['valueF']) ? trim($_POST['valueF']) : "";
	
	$_SESSION['valueA']="$valueA";
	$_SESSION['valueB']="$valueB";
	$_SESSION['operation1']="$operation1";
	$_SESSION['valueC']="$valueC";
	$_SESSION['valueD']="$valueD";
	$_SESSION['valueE']="$valueE";
	$_SESSION['operation2']="$operation2";
	$_SESSION['valueF']="$valueF";
	
	
	$valueA1=isset($_POST['valueA1']) ? trim($_POST['valueA1']) : "";
	$valueB1=isset($_POST['valueB1']) ? trim($_POST['valueB1']) : "";
	$valueC1=isset($_POST['valueC1']) ? trim($_POST['valueC1']) : "";
	$valueD1=isset($_POST['valueD1']) ? trim($_POST['valueD1']) : "";
	$valueE1=isset($_POST['valueE1']) ? trim($_POST['valueE1']) : "";
	$valueF1=isset($_POST['valueF1']) ? trim($_POST['valueF1']) : "";
	
	$_SESSION['valueA1']="$valueA1";
	$_SESSION['valueB1']="$valueB1";
	$_SESSION['valueC1']="$valueC1";
	$_SESSION['valueD1']="$valueD1";
	$_SESSION['valueE1']="$valueE1";
	$_SESSION['valueF1']="$valueF1";
	
	
	$valueA2=isset($_POST['valueA2']) ? trim($_POST['valueA2']) : "";
	$valueB2=isset($_POST['valueB2']) ? trim($_POST['valueB2']) : "";
	$valueC2=isset($_POST['valueC2']) ? trim($_POST['valueC2']) : "";
	$valueD2=isset($_POST['valueD2']) ? trim($_POST['valueD2']) : "";
	$valueE2=isset($_POST['valueE2']) ? trim($_POST['valueE2']) : "";
	$valueF2=isset($_POST['valueF2']) ? trim($_POST['valueF2']) : "";
	
	$_SESSION['valueA2']="$valueA2";
	$_SESSION['valueB2']="$valueB2";
	$_SESSION['valueC2']="$valueC2";
	$_SESSION['valueD2']="$valueD2";
	$_SESSION['valueE2']="$valueE2";
	$_SESSION['valueF2']="$valueF2";
	
	header("Location: simultaneous_equation.php?link=$link");
	exit();
?>