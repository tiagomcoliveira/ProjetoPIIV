<?php
$dsnPDO = 'mysql:dbname=estgv17359;host=localhost:3306';
$userPDO = 'estgv17359';
$passwordPDO = 'estgv173592016';

try { $dbh = new PDO($dsnPDO, $userPDO, $passwordPDO); }
catch (PDOException $e) { echo 'Connection failed: ' . $e->getMessage(); }


$titulo= $_REQUEST['TITULO_NOTI'];
$data= $_REQUEST['DATA_NOTI'];
$corpo= $_REQUEST['CONTEUDO_NOTI'];




    if (isset($titulo))
	{
		$query = "INSERT INTO NOTICIAS (TITULO_NOTI, DATA_NOTI, CONTEUDO_NOTI) VALUES (?,?,?)";
		$stmt = $dbh->prepare($query);
		$stmt->bindParam(1,$titulo,PDO::PARAM_STR);
		$stmt->bindParam(2,$data,PDO::PARAM_STR);
        $stmt->bindParam(3,$corpo,PDO::PARAM_STR);
        
		

		if ($stmt->execute())
		{
			echo "Inscrição bem sucedida!";

			
		}
		else {
			echo "NO1";
		}
	}
	else echo "NO2";



?>