$(function(){
	
	var ident = "";
	var name = "";
	var ap = "";
	var am = "";
	var tecPrincipal = 0;
	var tecSecundaria = 0;
	var puesto = 0;
	var status = 0;

	$("#estatus").on('change',function(){
		status = $('#estatus').val();
	});

	$("#tp").on('change',function(){
		tecPrincipal = $('#tp').val();
	});

	$("#ts").on('change',function(){
		tecSecundaria = $('#ts').val();
	});

	$("#ps").on('change',function(){
		puesto = $('#ps').val();
	});


	$("#saveRecurso").click(function(){

		ident = $("#identi").val();
		name = $("#nom").val();
		ap = $("#pater").val();
		am = $("#mater").val();
	
		$.ajax({
			url : "Recursos/recursoDo",
			type : "POST",
			dataType : "json",
			data:{identificador:ident, nombre:name, paterno:ap, materno:am, id_estatus:status, tec_ini:tecPrincipal, tec_sec:tecSecundaria, id_puesto:puesto},
			success : function(json){
				if(json.response_code == '200'){
					alert("Registro correcto");
					limpiaCampos();
				}
			},
			error : function(xhr){
				alert("Algo salio Mal");
			}
		});

	});

	$("#tabla_recurso").on("click",".editar-rec",function(){

		var idRecurso = $(this).attr('data-id');

		$.ajax({
			url : "Recursos/getRecurso",
			type : "POST",
			dataType : "json",
			data:{idRec : idRecurso},
			success : function(json){
				if(json.response_code == '200'){
					alert("Registro correcto");
					limpiaCampos();
				}
			},
			error : function(xhr){
				alert("Algo salio Mal");
			}
		});
	});

	function limpiaCampos(){
		$("#identi").val("");
		$("#nom").val("");
		$("#pater").val("");
		$("#mater").val("");
		$('#estatus').val('0');
		$('#tp').val('0');
		$('#ts').val('0');
		$('#ps').val('0');
	}
});