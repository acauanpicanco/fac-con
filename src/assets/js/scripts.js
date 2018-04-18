$(document).ready(function(){


//all

$('.js-telefone').mask('(00) 00000-0000');


$('.js-excluir').click(function(){

	var id = $(this).data('id');
	var item = $(this).data('item');

	

	if(id != "" && item != ""){
		$.ajax({
			type: "POST",
			url: "facil-consulta/site/fac-con/src/ajaxExcluir.php",
			data: { id: id, item: item },
			success: function(data){
				//console.log(data);
				location.href = location.href;
			}
		});
	}

});



  // DESKTOP

  if (window.matchMedia("(min-device-width: 1024px)").matches) {

    

  }

});