$(document).ready(function(){
	$(".menujs").click(function(){
		var id;
	
	
		id = $(this).attr('id');

		$('.conteudo').addClass('escondido');

		$("."+id).toggleClass('escondido');

		$(".menujs").removeClass('ativo');

		$("#"+id).addClass('ativo');

	})
})

$(document).ready(function(){
	$(".drpdwn").click(function(){
		var id;

		id = $(this).attr('id');


	})





})