<?php
	session_start();
	
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
	
	 $x=($valueC*$valueE-$valueB*$valueF)/($valueA*$valueE-$valueB*$valueD);
	$y=($valueA*$valueF-$valueC*$valueD)/($valueA*$valueE-$valueB*$valueD);
	
	$first=$valueB*$valueF;
	$second=$valueB*$valueD;
	$divide_by=$valueA-$second;
	//$x=$valueC-$first/$divide_by;
	//$y=$valueF-($x);
	
	$_SESSION['x']="$x";
	$_SESSION['y']="$y";
	
	header("Location: index_bk.php");
	exit();
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>