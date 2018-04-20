<?php 
include "inc-header.php";
?>

<section>
	
	<div class="container">
		<div class="row">
			<h2 class="col-md-12">Listagem de Produtos</h2>
			<a class="col-md-2 btn btn-primary" href="
			facil-consulta/site/fac-con/src/produtos/editar">Novo Produto</a>

			<div class="col-md-12">
				<h4 class="col-lg-4">Busca por descrição</h4>

				<div class="col-lg-6">
			    <div class="input-group">
			      <input type="text" class="form-control js-search-input" placeholder="Buscar por nome">
			      <span class="input-group-btn">
			        <button class="btn btn-secondary js-search" type="button" data-tipo="produto" >Buscar</button>
			      </span>
			    </div>
			  </div>
			</div>
			<div class="col-md-12">
				<ul class="list-group js-lista">

					<?=listaProdutos()?>
					
				</ul>
			</div>
		</div>
		
	</div>

</section>


<?
include "inc-footer.php";

?>