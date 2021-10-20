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
	$("#numero_trabajador").val("");
	$("#dni").val("");
	$("#nombre").val("");
	$("#profesion").val("");
	$("#cargo").val("");
	$("#direccion").val("");
	$("#telefono").val("");
	$("#email").val("");
	$("#login").val("");
	$("#clave").val("");
	$("#idusuario").val("");
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
					url: '../ajax/usuario.php?op=listar',
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
		url: "../ajax/usuario.php?op=guardaryeditar",
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

function mostrar(idusuario)
{
	$.post("../ajax/usuario.php?op=mostrar",{idusuario : idusuario}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		$("#numero_trabajador").val(data.numero_trabajador);
		$("#dni").val(data.dni);
		$("#nombre").val(data.nombre);
		$("#profesion").val(data.profesion);
		$("#cargo").val(data.cargo);
		$("#direccion").val(data.direccion);
		$("#telefono").val(data.telefono);
		$("#email").val(data.email);
		$("#login").val(data.login);
		$("#clave").val(data.clave);
 		$("#idusuario").val(data.idusuario);

 	})
}

function eliminarFila(idusuario)
{
	bootbox.confirm("¿Está Seguro de eliminar el Usuario?", function(result)
	{ 
        if(result)
        {
            $.post("../ajax/usuario.php?op=eliminar", {idusuario : idusuario}, function(e)
            {
	            bootbox.alert(e);
	            tabla.ajax.reload();
            });
        }
        
    })
}
init();