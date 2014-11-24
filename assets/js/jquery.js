function loadDetallesTour()
{
	var idTour  =$('#tour').val();
	
	$.getJSON(base_url+'ajaxito/getDetallesTour',{id:idTour}, function(resp){
		$('#dias').empty();
		$.each(resp,function(precio,dias){
			// alert(precio);
			$('#dias').val(dias);
			$('#precio').val(precio);
			loadFechaRetorno();
		});	
	});
}
function loadFechaRetorno()
{
	var fecha = $("#fecha").val();
	var dia = $("#dias").val();
	$.getJSON(base_url+'ajaxito/getFechaRetorno',{fecha:fecha,dias:dia}, function(resp){
		$.each(resp,function(fecha_nombre,fecha_retorno){
			$("#fecha_retorno").val(fecha_retorno);
		});	
	});
}

jQuery(function($)
{
	$.datepicker.regional['es'] = 
	{
		closeText: 'Cerrar',
		prevText: '&#x3c;Ant',
		nextText: 'Sig&#x3e;',
		currentText: 'Hoy',
		monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
		monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
		dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
		dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
		dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
		weekHeader: 'Sm',
		dateFormat: 'yy-mm-dd',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''
	};
	$.datepicker.setDefaults($.datepicker.regional['es']);
});  