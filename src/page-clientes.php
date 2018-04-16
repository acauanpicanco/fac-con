<?php 
include "inc-header.php";
?>

<section>
	
	<div class="container">
		<div class="row">
			<h2 class="col-md-12">Info de cliente</h2>
			<div class="form-container col-md-12">
				<form class="form-horizontal col-md-12" action='' method="POST">
			  <fieldset>
			    <div class="col-md-12 form-group ">
			      <label class="col-md-2"  for="nome">Nome</label>
			      <div class="col-md-4">
			        <input type="text" id="nome" name="nome" placeholder="Nome do cliente" class="form-control">
			      </div>
			    </div>

			    <div class="col-md-12 form-group ">
			      <label class="col-md-2" for="telefone">Telefone</label>
			      <div class="col-md-4">
			        <input type="text" id="telefone" name="telefone" placeholder="Telefone" class="form-control">
			      </div>
			    </div>

			    <div class="col-md-12 form-group ">
			      <label class="col-md-2"  for="nome">Sexo</label>
			      <div class="col-md-4">
			        <select class="custom-select" id="sexoCliente" name="sexo">
					    <option selected>Selecione</option>
					    <option value="m">Masculino</option>
					    <option value="f">Feminino</option>
					    
					  </select>
			      </div>
			    </div>

			    

			    <div class="form-group">
				  

				  <div class="col-md-4">
				    <button id="inserir" name="inserir" class="btn btn-primary">Salvar</button>
				    <button id="inserir" name="inserir" class="btn btn-primary">Excluir</button>
				    <a href="facil-consulta/site/fac-con/src/home" id="inserir" name="inserir" class="btn btn-primary">Voltar</a>
				  </div>
				</div>
				
			   </fieldset>
			  <form>
			</div>
				
		</div>
		
	</div>

</section>


<?
include "inc-footer.php";

?>