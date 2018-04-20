$(document).ready(function(){


//all

$('.js-telefone').mask('(00) 00000-0000');

$('.js-data').mask("00/00/0000", {selectOnFocus: true});



$('.js-excluir').click(function(){

	var id = $(this).data('id');
	var item = $(this).data('item');



	if(id != "" && item != ""){
		$.ajax({
			type: "POST",
			url: "facil-consulta/site/fac-con/src/ajaxExcluir.php",
			data: { id: id, item: item },
			success: function(data){
				
				location.href = location.href;
			}
		});
	}

});

$('.js-search').click(function(){

	var busca = $('.js-search-input').val();
	var tipo = $(this).data('tipo');

	console.log(tipo);
	console.log(busca);

	$.ajax({
	    type: "POST",
	    url: "facil-consulta/site/fac-con/src/ajaxBusca.php",
			data: { busca: busca, tipo:tipo },
	    	success: function(data) {
	    		console.log(data);
	  				$('.js-lista').html(data);
	  				
	  			}
	  	});

});

$('.js-search-client').change(function(){

	var busca = $(this).val();
	var tipo = $(this).data('tipo');

	console.log(tipo);
	console.log(busca);

	$.ajax({
	    type: "POST",
	    url: "facil-consulta/site/fac-con/src/ajaxBusca.php",
			data: { busca: busca, tipo:tipo },
	    success: function(data) {
	  				$('.js-lista').html(data);
	  				
	  			}
	  	});

});




  // DESKTOP

  if (window.matchMedia("(min-device-width: 1024px)").matches) {

    

  }

});