<?
session_start();

include("functions/core.php");

$id = $_POST['id'];
$titulo = $db->real_escape_string($_POST['titulo']);
$descricao = $db->real_escape_string($_POST['descricao']);


$tipo = $_POST['tipo'];

if($tipo == "novo"){
	
	$db->query("INSERT INTO produto (titulo, descricao, status) VALUES ('$titulo', '$descricao', 1) ") or die(mysql_error());
	
	header("Location: produtos");
}

if($tipo == "editar"){

	$db->query("UPDATE produto SET titulo = '$titulo', descricao = '$descricao', status = 1 WHERE id = $id") or die(mysql_error());	

	header("Location: produtos");
}

?>

