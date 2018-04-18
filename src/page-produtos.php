<?php 
include "inc-header.php";
	if(isset($_GET['id'])){
		$id 		= $_GET['id'];
		$tipo		= "editar";
		$status		= "1";
		$produto 	= consulta($id, 'produto');		
	}else{		
		$tipo		= "novo";
	}
?>

<section>
	
	<div class="container">
		<div class="row">
			<h2 class="col-md-12">Info de produto</h2>

			<div class="form-container col-md-12">
				<form class="form-horizontal col-md-12" action='facil-consulta/site/fac-con/src/formProduto.php' method="POST">
				<input type="hidden" name="id" id="id" value="<?=$id?>">

			  <fieldset>
			    <div class="col-md-12 form-group ">
			      <label class="col-md-2"  for="titulo">titulo</label>
			      <div class="col-md-4">
			        <input type="text" required id="titulo" name="titulo" placeholder="Título do produto" class="form-control" value="<?=$produto['titulo']?>">
			      </div>
			    </div>

			    <div class="col-md-12 form-group ">
			      <label class="col-md-2"  for="descricao">Descrição</label>
			      <div class="col-md-4">
			        <input type="text" required id="descricao" name="descricao" placeholder="Descrição do produto" class="form-control" value="<?=$produto['descricao']?>">
			      </div>
			    </div>

			   

			    
			    <div class="form-group">
			  
				  <div class="col-md-4">
				    <button id="inserir" type="submit" name="inserir" class="btn btn-primary">Salvar</button>
				   
				    <a href="facil-consulta/site/fac-con/src/produtos" id="inserir" name="inserir" class="btn btn-primary">Voltar</a>
				  </div>
				</div>
				
			   </fieldset>

			   <input type="hidden" value="<?=$tipo?>" name="tipo">
			  <form>
			</div>
				
		</div>
		
	</div>

</section>


<?
include "inc-footer.php";

?>