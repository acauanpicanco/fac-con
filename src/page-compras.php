<?php 
include "inc-header.php";
	if(isset($_GET['id'])){
		$id 		= $_GET['id'];
		$tipo		= "editar";
		$status		= "1";
		$compra 	= consulta($id, 'compra');		
	}else{		
		$tipo		= "novo";
		
	}
?>


<section>
	
	<div class="container">
		<div class="row">
			<h2 class="col-md-12">Info de Compra</h2>
			<div class="form-container col-md-12">
				<form class="form-horizontal col-md-12" action='facil-consulta/site/fac-con/src/formCompra.php' method="POST">
				<input type="hidden" name="id" id="id" value="<?=$id?>">
			  <fieldset>
			    <div class="col-md-12 form-group ">
			      <label class="col-md-2" for="cliente">Cliente</label>
			      <div class="col-md-4">
			        <select required class="custom-select" id="cliente" name="cliente">
					    <option selected disabled>Selecione</option>
					    <?

						selectCliente();

					    ?>
					  </select>
			      </div>
			    </div>
			    <div class="col-md-12 form-group ">
			      <label class="col-md-2"  for="nome">Produto</label>
			      <div class="col-md-4">
			        <select required class="custom-select" id="produto" name="produto">
					    <option selected disabled>Selecione</option>
					    <?
						selectProduto();

					    ?>
					    </select>
			      </div>
			    </div>

			    <div class="form-group">
				  

				  <div class="col-md-4">
				    <button id="inserir" type="submit" name="inserir" class="btn btn-primary">Salvar</button>
				    <a href="facil-consulta/site/fac-con/src/compras" class="btn btn-primary">Voltar</a>
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