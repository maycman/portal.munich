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
	var input = $('input');
	var select = $('select');
	var text = $('textarea');
	var id = $('#id_registro');
	var token = $("input[name$='_token']");
	if (butt.prop('checked'))
	{
        //Este removeClass hace que al darle click muchas veces siempre funcione el checkbox
        form.removeClass();
       	form.addClass('collapse in animated fadeInDown');
       	//input.prop('disabled', false);
       	//select.prop('disabled', false);
       	//text.prop('disabled', false);
    }
    else
    {
        //Este removeClass hace que al darle click muchas veces siempre funcione el checkbox
        form.removeClass();
       	form.addClass('collapse');
       	//input.prop('disabled', true);
       	//select.prop('disabled', true);
       	//text.prop('disabled', true);
       	//butt.prop('disabled', false);
       	//id.prop('disabled', false);
       	//token.prop('disabled', false);
    }
}
function llamarLuego()
{
	var butt = $('#acepta');
	var llamar = $('#llamar');
	var questions = $('#questions');
	var fecha = $('#agendar');
	var reprogramar = $('#reprogramar');
	var input = $('input');
	var select = $('select');
	var text = $('textarea');
	var id = $('#id_registro');
	var token = $("input[name$='_token']");
    if (llamar.prop('checked'))
    {
    	//Reprogramar
    	//Este removeClass hace que al darle click muchas veces siempre funcione el checkbox
    	questions.removeClass();
    	fecha.removeClass();
        questions.addClass('collapse');
        fecha.addClass('form-group collapse in animated fadeInDown');
        //input.prop('disabled', true);
        //select.prop('disabled', true);
        //text.prop('disabled', true);
        //reprogramar.prop('disabled', false);
        //token.prop('disabled', false);
        //id.prop('disabled', false);
        //llamar.prop('disabled', false);
        //butt.prop('disabled', false);
    }
    else
    {
    	//Este removeClass hace que al darle click muchas veces siempre funcione el checkbox
        questions.removeClass();
        fecha.removeClass();
        questions.addClass('collapse in animated fadeInDown');
        fecha.addClass('form-group collapse');
        //input.prop('disabled', false);
        //select.prop('disabled', false);
        //text.prop('disabled', false);
        //reprogramar.prop('disabled', true);
    }
}
function pregunta2()
{
	var select = $("#p2");
	var content = $("#p2Negativo");
	if (select.val()<=7)
	{
		//alert("Chi");
		content.removeClass();
		content.addClass('collapse in separa');
	}
	else
	{
		//alert("Nope: ",select.val());
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
		//alert("Chi");
		content.removeClass();
		content.addClass('collapse in separa');
	}
	else
	{
		//alert("Nope: ",select.val());
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
		//alert("Chi");
		content.removeClass();
		content.addClass('collapse in separa');
	}
	else
	{
		//alert("Nope: ",select.val());
		content.removeClass();
		content.addClass("collapse");
	}
}