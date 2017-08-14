$(document).ready(function(){
	classActive();
	//$('.date').datepicker('update', new Date());
	$('#age').datetimepicker();
});


/************************Funciones******************************/


function classActive()
{
	//Implementación de juego de clases
	var pag = location.href.substring(location.href.lastIndexOf('/')+1, location.href.lastIndexOf(''));
	if (pag=="encuesta")
	{
		$('#'+pag).addClass("active");
		$('#mdrop').addClass("active");
	}
	else if(pag=='notas')
	{
		$('#'+pag).addClass("active");
		$('#mdrop').addClass("active");
	}
	else if(pag=="")
	{
		$('#home').addClass("active");
	}
}
function aceptaEncuesta()
{
	var butt = $('#acepta');
	var form = $('#preguntas');
	if (butt.prop('checked'))
	{
        //Este removeClass hace que al darle click muchas veces siempre funcione el checkbox
        form.removeClass();
       	form.addClass('collapse in animated rollIn');
    }
    else
    {
        //Este removeClass hace que al darle click muchas veces siempre funcione el checkbox
        form.removeClass();
       	form.addClass('animated rollOut');
       	//setTimeout(function(){form.addClass('collapse');}, 500);
    }
}
function llamarLuego()
{
	var llamar = $('#llamar');
	var questions = $('#questions');
	var fecha = $('#agendar');
    if (llamar.prop('checked'))
    {
    	//Este removeClass hace que al darle click muchas veces siempre funcione el checkbox
    	questions.removeClass();
    	fecha.addClass('form-group collapse in animated flipInX');
    	questions.addClass('animated zoomOut');
        //setTimeout(function(){questions.addClass('collapse');}, 500);
    }
    else
    {
    	//Este removeClass hace que al darle click muchas veces siempre funcione el checkbox
        questions.removeClass();
        fecha.removeClass();
        questions.addClass('animated zoomIn');
        //fecha.addClass('form-group collapse');
    }
}
function pregunta2()
{
	var select = $("#p2");
	var content = $("#p2Negativo");
	if (select.val()<=7)
	{
		content.removeClass();
		content.addClass('collapse in separa');
	}
	else
	{
		content.removeClass();
		content.addClass("collapse");
	}
}

function pregunta3()
{
	var select = $("#p3");
	var content = $("#p3Negativa");
	if (!select.prop('checked'))
	{
		content.removeClass();
		content.addClass('collapse in separa');
	}
	else
	{
		content.removeClass();
		content.addClass("collapse");
	}
}
function respOtro()
{
	var check = $('#rh');
	var content = $('#textOtro');
	if(check.prop('checked'))
	{
		content.removeClass();
		content.addClass('row collapse in');
	}
	else
	{
		content.removeClass();
		content.addClass('row collapse');
	}
}
function pregunta4()
{
	var select = $('#p4');
	var content = $('#p4Negativa');
	if (select.val()<=7)
	{
		content.removeClass();
		content.addClass('collapse in separa');
	}
	else
	{
		content.removeClass();
		content.addClass("collapse");
	}
}