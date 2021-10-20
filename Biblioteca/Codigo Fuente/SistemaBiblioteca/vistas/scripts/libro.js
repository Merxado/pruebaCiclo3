var tabla;

function init(){
	mostrarform(false);
	listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	});
	
	$.post("../ajax/libro.php?op=SelectAutor", function(r){
	            $("#idautor").html(r);
	            $('#idautor').selectpicker('refresh');
	});
	
	$.post("../ajax/libro.php?op=SelectEditorial", function(r){
	            $("#ideditorial").html(r);
	            $('#ideditorial').selectpicker('refresh');
	});
	
	$.post("../ajax/libro.php?op=SelectMateria", function(r){
	            $("#idmateria").html(r);
	            $('#idmateria').selectpicker('refresh');
	});

	$("#imagenmuestra").hide();

}


function limpiar()
{
	$("#titulo").val("");
	$("#cantidad_disponible").val("");
	$("#numero_paginas").val("");
	$("#formato").val("");
	$("#peso").val("");
	$("#descripcion").val("");
	$("#imagenmuestra").attr("src","");
	$("#imagenactual").val("");
	$("#idlibro").val("");
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
					url: '../ajax/libro.php?op=listar',
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
		url: "../ajax/libro.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarform(false);
	    }

	});
	limpiar();
}

function mostrar(idlibro)
{
	$.post("../ajax/libro.php?op=mostrar",{idlibro : idlibro}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		$("#titulo").val(data.titulo);
		$("#cantidad_disponible").val(data.cantidad_disponible);
		$("#idautor").val(data.idautor);
        $('#idautor').selectpicker('refresh');
	    $("#ideditorial").val(data.ideditorial);
        $('#ideditorial').selectpicker('refresh');
		$("#year_edicion").val(data.year_edicion);
		$("#idmateria").val(data.idmateria);
        $('#idmateria').selectpicker('refresh');
		$("#numero_paginas").val(data.numero_paginas);
		$("#formato").val(data.formato);
		$("#peso").val(data.peso);
		$("#descripcion").val(data.descripcion);
		$("#imagenmuestra").show();
		$("#imagenmuestra").attr("src","../files/libros/"+data.imagen);
		$("#imagenactual").val(data.imagen);
 		$("#idlibro").val(data.idlibro);

 	})
}


function desactivar(idlibro)
{
	bootbox.confirm("¿Está Seguro de desactivar el libro?", function(result){
		if(result)
        {
        	$.post("../ajax/libro.php?op=desactivar", {idlibro : idlibro}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}


function activar(idlibro)
{
	bootbox.confirm("¿Está Seguro de activar el Libro?", function(result){
		if(result)
        {
        	$.post("../ajax/libro.php?op=activar", {idlibro : idlibro}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}
init();