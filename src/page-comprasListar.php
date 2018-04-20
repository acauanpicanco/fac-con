<?php 
include "inc-header.php";
?>

<section>
	
	<div class="container">
		<div class="row">
			<h2 class="col-md-12">Listagem de Compras</h2>

			<a class="col-md-2 btn btn-primary" href="facil-consulta/site/fac-con/src/compras/editar">Nova Compra</a>
			<div class="col-md-12">
				<h4 class="col-lg-4">Busca por data</h4>

				<div class="col-lg-6">
			    <div class="input-group">
			      <input type="text" class="form-control js-search-input js-data" placeholder="Buscar por data">
			      <span class="input-group-btn">
			        <button class="btn btn-secondary js-search" type="button" data-tipo="compra" >Buscar</button>
			      </span>
			    </div>
			  </div>
			</div>
			<div class="col-md-12">
				<ul class="list-group js-lista">
					<?=listaCompras()?>
				</ul>
			</div>
		</div>
		
	</div>

</section>


<?
include "inc-footer.php";

?>