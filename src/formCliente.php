<?
session_start();

include("functions/core.php");

$id = $_POST['id'];
$nome = $db->real_escape_string($_POST['nome']);
$telefone = $db->real_escape_string($_POST['telefone']);
$sexo = $db->real_escape_string($_POST['sexo']);

$tipo = $_POST['tipo'];

if($tipo == "novo"){
	
	$db->query("INSERT INTO cliente (nome, telefone, sexo, status) VALUES ('$nome', '$telefone', '$sexo', 1) ") or die(mysql_error());
	
	header("Location: clientes");
}

if($tipo == "editar"){

	$db->query("UPDATE cliente SET nome = '$nome', sexo = '$sexo', telefone = '$telefone', status = 1 WHERE id = $id") or die(mysql_error());	

	header("Location: clientes");
}

?>

