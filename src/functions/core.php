<?php
// ERROS
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR);


include_once "db.php";
include_once "functions.php";

//HASH
$hash = "1q2rt6y-";
$salt = "1q2rt6y-";

//UPLOAD DIR
$uploaddir = 'upload/';



function dataBanco($data){
	return implode("-", array_reverse(explode("/", $data)));
}

function dataExibe($data){
	return implode("/", array_reverse(explode("-", $data)));
}

function timestamp($timestamp){
	$timestamp = explode(" ", $timestamp);
	$timestamp[0] = dataExibe($timestamp[0]);
	return $timestamp;
}






function dataRegistro($tipo, $data){
	if($tipo == "novo"){
		echo date("d/m/Y");
	}
	if($tipo == "editar"){
		echo dataExibe($data);
	}
}

function selectCheck($a, $b){
	if($a == $b){
		echo "selected";
	}
}

function selectEstado($id){
	global $db;
	
	$consulta = $db->query("SELECT * FROM u_estado");
	while($resultado = $consulta->fetch_assoc()){
		?>
		<option value="<?=$resultado['id']?>" <?if($id == $resultado['id']) echo "selected"?>><?=$resultado['nome']?></option>
	<?}
}

function selectCliente($id){
	global $db;
	
	$consulta = $db->query("SELECT * FROM cliente WHERE status != 3");
	while($resultado = $consulta->fetch_assoc()){
		?>
		<option value="<?=$resultado['id']?>" <?if($id == $resultado['id']) echo "selected"?>><?=$resultado['nome']?></option>
	<?}
}

function selectProduto($id){
	global $db;
	
	$consulta = $db->query("SELECT * FROM produto WHERE status != 3");
	while($resultado = $consulta->fetch_assoc()){
		?>
		<option value="<?=$resultado['id']?>" <?if($id == $resultado['id']) echo "selected"?>><?=$resultado['titulo']?></option>
	<?}
}





function consulta($id, $tabela){
	global $db;
	
	$consulta = $db->query("SELECT * FROM ".$tabela." WHERE id = $id") or die(mysqli_error($db));
	$resultado = $consulta->fetch_assoc();
	return $resultado;
}


function listaClientes($s){
	global $db;
	global $config;

	if($s != ""){
		$s = "sexo LIKE '%$s%' AND";
	}

	$consulta = $db->query("SELECT * FROM cliente WHERE ".$s." status != 3 ORDER BY nome ASC");

	if($consulta->num_rows != 0){
		while($res = $consulta->fetch_assoc()){?>
			<li class="list-group-item col-md-6">
				<p class="col-md-12">Nome: <?=$res['nome']?></p>
				<p class="col-md-12">Telefone: <?=$res['telefone']?></p>
				<p class="col-md-12">Sexo: <?=$res['sexo'] == "m" ? "Masculino" : "Feminino";?></p>
			   <a href="facil-consulta/site/fac-con/src/clientes/editar?id=<?=$res['id']?>" id="inserir" name="inserir" class="btn btn-primary col-xs-2 ">Editar</a>
			    <button id="excluir" name="excluir" class="btn btn-primary col-xs-2 js-excluir" data-id="<?=$res['id']?>" data-item="cliente">Excluir</button>
			</li>
		<?}
	}else{
		?><li class="list-group-item col-md-6">Nenhum resultado encontrado</li><?
	}
}

function listaProdutos($s){
	global $db;
	global $config;

	if($s != ""){
		$s = "titulo LIKE '%$s%' AND";
	}

	$consulta = $db->query("SELECT * FROM produto WHERE ".$s." status != 3 ORDER BY titulo ASC");

	if($consulta->num_rows != 0){
		while($res = $consulta->fetch_assoc()){?>
			

			<li class="list-group-item">
				<p class="col-xs-12">Titulo do produto: <?=$res['titulo']?></p>
				<p class="col-xs-12">Descrição do produto: <?=$res['descricao']?></p>
			   	<a href="facil-consulta/site/fac-con/src/produtos/editar?id=<?=$res['id']?>" id="inserir" name="inserir" class="btn btn-primary col-xs-2 ">Editar</a>
			    <button id="excluir" name="excluir" class="btn btn-primary col-xs-2 js-excluir" data-id="<?=$res['id']?>" data-item="produto">Excluir</button>
			   
			  
			</li>
		<?}
	}else{
		?><li class="list-group-item col-md-6">Nenhum resultado encontrado</li><?
	}
}


function listaCompras($s){
	global $db;
	global $config;

	if($s != ""){
		$s = "data_compra LIKE '%$s%' AND";
	}

	$consulta = $db->query("SELECT * FROM compra WHERE ".$s." status != 3 ORDER BY data_compra ASC");

	if($consulta->num_rows != 0){
		while($res = $consulta->fetch_assoc()){



		$consulta_cliente = $db->query("SELECT * FROM cliente WHERE id = ".$res['id_cliente']." ");

		$res_cliente = $consulta_cliente->fetch_assoc();

		$consulta_produto = $db->query("SELECT * FROM produto WHERE id = ".$res['id_produtos']." ");
		$res_produto = $consulta_produto->fetch_assoc();

			

	?>
			

			<li class="list-group-item">
				<p>Nome do Cliente :<?=$res_cliente['nome']?></p>
				<p>Nome do Produto: <?=$res_produto['titulo']?></p>
				<p>Data da compra: <?=date('d/m/y', strtotime($res_produto['timestamp'])); ?></p>
			   	<a href="facil-consulta/site/fac-con/src/compras/editar?id=<?=$res['id']?>" id="inserir" name="inserir" class="btn btn-primary col-xs-2 ">Editar</a>
			    <button id="excluir" name="excluir" class="btn btn-primary col-xs-2 js-excluir" data-id="<?=$res['id']?>" data-item="compra">Excluir</button>


			</li>

			


		<?}
	}else{
		?><li class="list-group-item col-md-6">Nenhum resultado encontrado</li><?
	}
}






?>