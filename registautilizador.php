<?php
$dsnPDO = 'mysql:dbname=estgv17359;host=localhost:3306';
$userPDO = 'estgv17359';
$passwordPDO = 'estgv173592016';

try { $dbh = new PDO($dsnPDO, $userPDO, $passwordPDO); }
catch (PDOException $e) { echo 'Connection failed: ' . $e->getMessage(); }


/*$nome= $_REQUEST['Nome'];
$sobrenome= $_REQUEST['Sobrenome'];
$email= $_REQUEST['Email'];
$password= md5($_REQUEST['Password']);
$pais = $_REQUEST['Pais'];
$cidade= $_REQUEST['Cidade'];
$dataNascimento= $_REQUEST['Data_Nascimento'];
$tipo= $_REQUEST['Tipo'];
$pontos= $_REQUEST['Pontos'];
$biografia= $_REQUEST['Biografia'];
$links= $_REQUEST['Links'];


if(Verificaruser($email))
{
	if (isset($email))
	{
		$query = "INSERT INTO Utilizadores(Nome, Sobrenome, Email, Password,Pais,Cidade,Data_Nascimento,Tipo,Pontos,Biografia,Links,Interesses) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
		$stmt = $dbh->prepare($query);
		$stmt->bindParam(1,$nome,PDO::PARAM_STR);
		$stmt->bindParam(2,$sobrenome,PDO::PARAM_STR);
		$stmt->bindParam(3,$email,PDO::PARAM_STR);
		$stmt->bindParam(4,$password,PDO::PARAM_STR);
		$stmt->bindParam(5,$pais,PDO::PARAM_STR);
		$stmt->bindParam(6,$cidade,PDO::PARAM_STR);
		$stmt->bindParam(7,$dataNascimento,PDO::PARAM_STR);
		$stmt->bindParam(8,$tipo,PDO::PARAM_INT);
		$stmt->bindParam(9,$pontos,PDO::PARAM_STR);
		$stmt->bindParam(10,$biografia,PDO::PARAM_STR);
		$stmt->bindParam(11,$links,PDO::PARAM_STR);
		$stmt->bindParam(12,$interesses,PDO::PARAM_STR);

		if ($stmt->execute())
		{
			echo "Utilizador registado com sucesso!";

			
		}
		else {
			echo "NO1";
		}
	}
	else echo "NO2";
}else echo "\nExiste";


function Verificaruser($email)
{
	global $dbh;
	$query = "SELECT * FROM utilizadores WHERE Email=?";
	$stmt = $dbh->prepare($query);
	$stmt->bindParam(1,$email,PDO::PARAM_STR);
	$result = $stmt->execute();
	$row_count = $stmt->rowCount();
	if($row_count == 0)
	{
		return true;
	}
	else
	{
		return false;
	}
}*/
?>