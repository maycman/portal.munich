$(document).ready(function(){
	//Implementación de juego de clases
	var pag = location.href.substring(location.href.lastIndexOf('/')+1, location.href.lastIndexOf(''));
	if (pag=="encuesta")
	{
		$('#'+pag).addClass("active");
	}
	else if(pag=='notas')
	{
		$('#'+pag).addClass("active");
	}
	else
	{
		$('#home').addClass("active");
	}
});