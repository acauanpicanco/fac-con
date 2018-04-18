<?
session_start();

include("functions/core.php");

$id = $_POST['id'];
$id_cliente = $db->real_escape_string($_POST['cliente']);
$id_produto = $db->real_escape_string($_POST['produto']);

$tipo = $_POST['tipo'];

echo $id;
echo $id_cliente;
echo $id_produto;

echo $tipo;

if($tipo == "novo"){
	
	$db->query("INSERT INTO compra (id_cliente, id_produtos, data_compra, status) VALUES ($id_cliente, $id_produto, NOW(), 1) ") or die(mysql_error());
	
	header("Location: compras");
}

if($tipo == "editar"){

	$db->query("UPDATE compra SET id_cliente = $id_cliente, id_produtos = $id_produto, status = 1 WHERE id = $id") or die(mysql_error());	

	header("Location: compras");
}

?>


