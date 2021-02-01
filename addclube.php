<?php
$dsnPDO = 'mysql:dbname=estgv17359;host=localhost:3306';
$userPDO = 'estgv17359';
$passwordPDO = 'estgv173592016';

try { $dbh = new PDO($dsnPDO, $userPDO, $passwordPDO); }
catch (PDOException $e) { echo 'Connection failed: ' . $e->getMessage(); }


$nomeclube= $_REQUEST['NOME_CLUBE'];
$dias= $_REQUEST['DIAS_CLUBE'];
$inicio= $_REQUEST['HORAINICIO_CLUBE'];
$fim= $_REQUEST['HORAFIM_CLUBE'];
$vagas= $_REQUEST['VAGAS_CLUBE'];
$docente= $_REQUEST['DOCENTE_CLUBE'];
$descricao= $_REQUEST['DESCRICAO_CLUBE'];




	if (isset($nomeclube))
	{
		$query = "INSERT INTO CLUBES (NOME_CLUBE, DIAS_CLUBE, HORAINICIO_CLUBE, HORAFIM_CLUBE, VAGAS_CLUBE, DOCENTE_CLUBE, DESCRICAO_CLUBE) VALUES (?,?,?)";
		$stmt = $dbh->prepare($query);
		$stmt->bindParam(1,$nomeclube,PDO::PARAM_STR);
		$stmt->bindParam(2,$dias,PDO::PARAM_STR);
        $stmt->bindParam(3,$inicio,PDO::PARAM_STR);
        $stmt->bindParam(3,$fim,PDO::PARAM_STR);
        $stmt->bindParam(3,$vagas,PDO::PARAM_STR);
        $stmt->bindParam(3,$docente,PDO::PARAM_STR);
        $stmt->bindParam(3,$descricao,PDO::PARAM_STR);
        
		

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