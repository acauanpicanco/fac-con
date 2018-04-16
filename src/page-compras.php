<?php 
include "inc-header.php";
?>

<section>
	
	<div class="container">
		<div class="row">
			<h2 class="col-md-12">Info de Compra</h2>
			<div class="form-container col-md-12">
				<form class="form-horizontal col-md-12" action='' method="POST">
			  <fieldset>
			    <div class="col-md-12 form-group ">
			      <label class="col-md-2" for="cliente">Cliente</label>
			      <div class="col-md-4">
			        <select class="custom-select" id="cliente" name="cliente">
					    <option selected>Selecione</option>
					    <option value="idCliente">nome cliente</option>
					  </select>
			      </div>
			    </div>
			    <div class="col-md-12 form-group ">
			      <label class="col-md-2"  for="nome">Produto</label>
			      <div class="col-md-4">
			        <select class="custom-select" id="produto" name="produto">
					    <option selected>Selecione</option>
					    <option value="idproduto">nome do produto</option>
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