$(document).ready(function(){
	classActive();
	//$('.date').datepicker('update', new Date());
	$('#agenda').datetimepicker();
	$('.age').datetimepicker({
		format: 'L'
	});
	$("#datosServicio").css("display","none");
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
function agregarServicio()
{
	var button = $("#boton");
	var campos = $("#datosServicio");
	var input1 = $("#ultimo_servicio");
	var input2 = $("#fecha_ultimo_servicio");
	var input3 = $("#servicio_pendiente");
	var input4 = $("#proximo_servicio");
	var input5 = $("#fecha_proximo_servicio");
	if (button.prop('checked'))
	{
		campos.css("display","block");
	}
	else
	{
		campos.css("display","none");
	}
}
function liberarAuto()
{
	document.getElementById('liberar').click();
}
function modificarFecha(param)
{
    idInput = param.substring(8);
	idAge = idInput.replace(/_/g,'-');
	alert(idInput);
	alert(idAge);


	input = $('#'+idInput);
	divAge = $('#'+idAge);
	

	input.removeAttr("readonly");
	divAge.addClass('input-group date age');
	$('.age').datetimepicker({
		format: 'L'
	});
}