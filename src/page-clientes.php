<?php 
include "inc-header.php";
	if(isset($_GET['id'])){
		$id 		= $_GET['id'];
		$tipo		= "editar";
		$status		= "1";
		$cliente 	= consulta($id, 'cliente');		
	}else{		
		$tipo		= "novo";
	}
?>

<section>
	
	<div class="container">
		<div class="row">
			<h2 class="col-md-12">Info de cliente</h2>

			<div class="form-container col-md-12">
				<form class="form-horizontal col-md-12" action='facil-consulta/site/fac-con/src/formCliente.php' method="POST">
				<input type="hidden" name="id" id="id" value="<?=$id?>">

			  <fieldset>
			    <div class="col-md-12 form-group ">
			      <label class="col-md-2"  for="nome">Nome</label>
			      <div class="col-md-4">
			        <input type="text" required id="nome" name="nome" placeholder="Nome do cliente" class="form-control" value="<?=$cliente['nome']?>">
			      </div>
			    </div>

			    <div class="col-md-12 form-group ">
			      <label class="col-md-2" for="telefone">Telefone</label>
			      <div class="col-md-4">
			        <input type="text" required id="telefone" name="telefone" placeholder="Telefone" class="form-control js-telefone" value="<?=$cliente['telefone']?>">
			      </div>
			    </div>

			    <div class="col-md-12 form-group ">
			      <label class="col-md-2"  for="nome">Sexo</label>
			      <div class="col-md-4">
			        <select class="custom-select" required id="sexoCliente" name="sexo">
					    <option selected disabled="">Selecione</option>
					    <option value="m" <? selectCheck(m, $cliente['sexo']) ?>>Masculino</option>
					    <option value="f" <? selectCheck(f, $cliente['sexo']) ?>>Feminino</option>
					  </select>
			      </div>
			    </div>
			    
			    <div class="form-group">
			  
				  <div class="col-md-4">
				    <button id="inserir" type="submit" name="inserir" class="btn btn-primary">Salvar</button>
				    
				    <a href="facil-consulta/site/fac-con/src/home" id="inserir" name="inserir" class="btn btn-primary">Voltar</a>
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