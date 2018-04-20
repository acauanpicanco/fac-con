<?
session_start();

include("functions/core.php");

$busca 	= $db->real_escape_string($_POST['busca']);
$tipo 	= $db->real_escape_string($_POST['tipo']);

if($tipo == 'produto'){
	listaProdutos($busca);
}

if($tipo == 'cliente'){
	listaClientes($busca);
}

if($tipo == 'compra'){
	
	$busca = dataBanco($busca);

	listaCompras($busca);
}



?>