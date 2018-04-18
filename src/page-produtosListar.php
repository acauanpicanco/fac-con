<?php 
include "inc-header.php";
?>

<section>
	
	<div class="container">
		<div class="row">
			<h2 class="col-md-12">Listagem de Produtos</h2>
			<a class="col-md-2 btn btn-primary" href="facil-consulta/site/fac-con/src/produtos/editar">Novo Produto</a>
			<div class="col-md-12">
				<ul class="list-group">
					<?=listaProdutos()?>
					
				</ul>
			</div>
		</div>
		
	</div>

</section>


<?
include "inc-footer.php";

?>