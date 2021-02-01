<?php
$dsnPDO = 'mysql:dbname=estgv17359;host=localhost:3306';
$userPDO = 'estgv17359';
$passwordPDO = 'estgv173592016';

try { $dbh = new PDO($dsnPDO, $userPDO, $passwordPDO); }
catch (PDOException $e) { echo 'Connection failed: ' . $e->getMessage(); }


$nomealuno= $_REQUEST['NOME_USER'];
$anoaluno= $_REQUEST['ANO_USER'];
$turmaaluno= $_REQUEST['TURMA_USER'];
$emaildt= $_REQUEST['EMAIL_USER'];
$url='lista-alunos.php';
$url2='novoaluno.php';




    if (isset($newstudent))
	{
		$query = "INSERT INTO UTILIZADOR (NOME_USER, ANO_USER, TURMA_USER, EMAIL_USER) VALUES (?, ?, ?, ?)";
        $stmt = $dbh->prepare($query);
        $stmt->execute(['NOME_USER'=>$nomealuno, 'ANO_USER'=>$anoaluno, 'TURMA_USER'=>$turmaaluno, 'EMAIL_USER'=>$emaildt]);
		$stmt->bindParam(1,$nomealuno,PDO::PARAM_STR);
		$stmt->bindParam(2,$anoaluno,PDO::PARAM_STR);
        $stmt->bindParam(3,$turmaaluno,PDO::PARAM_STR);
        $stmt->bindParam(4,$emaildt,PDO::PARAM_STR);
        
		

		if ($stmt->execute())
		{
            echo '<script>window.location = "'.$url.'";</script>';
		    die;

			
		}
		else {
            echo "NO1";
            echo '<script>window.location = "'.$url2.'";</script>';
		die;
		}
	}
	else echo "NO2";



?>