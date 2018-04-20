<?php 
include "inc-header.php";
?>

<section>
	
	<div class="container">
		<div class="row">
			<h2 class="col-md-12">Listagem de Clientes</h2>
			<a class="col-md-2 btn btn-primary" href="facil-consulta/site/fac-con/src/clientes/editar">Novo Cliente</a>

			<div class="col-md-12">
				<h4 class="col-lg-4">Busca por sexo</h4>

				<div class="col-lg-6">
			    <div class="input-group">
			      <select class="custom-select js-search-client" required id="sexoCliente" name="sexo" data-tipo="cliente">
					    <option selected disabled="">Selecione</option>
					    <option value="m">Masculino</option>
					    <option value="f">Feminino</option>
					  </select>
			    </div>
			  </div>
			</div>


			<div class="col-md-12">
				<ul class="list-group js-lista">
					<?=listaClientes()?>					
				</ul>
			</div>
		</div>
		
	</div>

</section>


<?
include "inc-footer.php";

?>