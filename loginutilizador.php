<?php
$dsnPDO = 'mysql:dbname=estgv17359;host=localhost:3306';
$userPDO = 'estgv17359';
$passwordPDO = 'estgv173592016';

try { $dbh = new PDO($dsnPDO, $userPDO, $passwordPDO); }
catch (PDOException $e) { echo 'Connection failed: ' . $e->getMessage(); }



$username= $_REQUEST['USERNAME'];
$password= $_REQUEST['PALAVRA_PASS'];
$url='Primerpage.html';
$url='Primerpage.html';
	$COMANDO = "SELECT * FROM UTILIZADOR WHERE USERNAME=? AND PALAVRA_PASS=?";

	
	$stmt = $dbh->prepare($COMANDO);
	$stmt->bindParam(1,$username,PDO::PARAM_STR);
	$stmt->bindParam(2,$password,PDO::PARAM_STR);
	$result = $stmt->execute();
	$row_count = $stmt->rowCount();

	if($row_count>0)
	{
		echo '<script>window.location = "'.$url.'";</script>';
		die;
	}
	else
	{
		echo '<script>window.location = "'.$url2.'";</script>';
		die;

	}
	
?>