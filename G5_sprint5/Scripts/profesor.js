var tabla;


function init(){
	mostrarform(false);
	listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	});

}


function limpiar()
{
	$("#codigo").val("");
	$("#dni").val("");
	$("#nombre").val("");
	$("#carrera").val("");
	$("#direccion").val("");
	$("#telefono").val("");
	$("#email").val("");
	$("#idestudiante").val("");
}


function mostrarform(flag)
{
	limpiar();
	if (flag)
	{
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled",false);
		$("#btnagregar").hide();
	}
	else
	{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
	}
}


function cancelarform()
{
	limpiar();
	mostrarform(false);
}


function listar()
{
	tabla=$('#tbllistado').dataTable(
	{
		"lengthMenu": [ 5, 10, 25, 75, 100],
		"aProcessing": true,
	    "aServerSide": true,
	    dom: '<Bl<f>rtip>',
	    buttons: [		          
		        ],
		"ajax":
				{
					url: '../ajax/estudiante.php?op=listar',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"language": {
            "lengthMenu": "Mostrar : _MENU_ registros",
            "buttons": {
            "copyTitle": "Tabla Copiada",
            "copySuccess": {
                    _: '%d líneas copiadas',
                    1: '1 línea copiada'
                }
            }
        },
		"bDestroy": true,
		"iDisplayLength": 5,
	    "order": [[ 0, "desc" ]]
	}).DataTable();
}


function guardaryeditar(e)
{
	e.preventDefault(); 
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/estudiante.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarform(false);
	          tabla.ajax.reload();
	    }

	});
	limpiar();
}

function mostrar(idestudiante)
{
	$.post("../ajax/estudiante.php?op=mostrar",{idestudiante : idestudiante}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		$("#codigo").val(data.codigo);
		$("#dni").val(data.dni);
		$("#nombre").val(data.nombre);
		$("#carrera").val(data.carrera);
		$("#carrera").selectpicker('refresh');
		$("#direccion").val(data.direccion);
		$("#telefono").val(data.telefono);
		$("#email").val(data.email);
 		$("#idestudiante").val(data.idestudiante);

 	})
}


function desactivar(idestudiante)
{
	bootbox.confirm("¿Está Seguro de desactivar el Profesor?", function(result){
		if(result)
        {
        	$.post("../ajax/estudiante.php?op=desactivar", {idestudiante : idestudiante}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}


function activar(idestudiante)
{
	bootbox.confirm("¿Está Seguro de activar el Profesor?", function(result){
		if(result)
        {
        	$.post("../ajax/estudiante.php?op=activar", {idestudiante : idestudiante}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}


init();