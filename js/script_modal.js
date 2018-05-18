$(document).ready(function(){
	$('.clicavel').click(function(){
		var id;
		id = $(this).attr('id')
		$('.'+id).removeClass('escondido');
	
	})

	$('.fechar').click(function(){
		$('.moda1').addClass('escondido');
	})
})