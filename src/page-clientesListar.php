<?php 
include "inc-header.php";
?>

<section>
	
	<div class="container">
		<div class="row">
			<h2 class="col-md-12">Listagem de Clientes</h2>
			<a class="col-md-2 btn btn-primary" href="facil-consulta/site/fac-con/src/clientes/editar">Novo Cliente</a>
			<div class="col-md-12">
				<ul class="list-group">
					<?=listaClientes()?>					
				</ul>
			</div>
		</div>
		
	</div>

</section>


<?
include "inc-footer.php";

?>