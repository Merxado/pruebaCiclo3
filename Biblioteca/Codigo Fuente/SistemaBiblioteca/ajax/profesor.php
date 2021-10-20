<?php 
require_once "../modelos/Profesor.php";

$profesor=new Profesor();

$idprofesor=isset($_POST["idprofesor"])? limpiarCadena($_POST["idprofesor"]):"";
$codigo=isset($_POST["codigo"])? limpiarCadena($_POST["codigo"]):"";
$dni=isset($_POST["dni"])? limpiarCadena($_POST["dni"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$direccion=isset($_POST["direccion"])? limpiarCadena($_POST["direccion"]):"";
$telefono=isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
$email=isset($_POST["email"])? limpiarCadena($_POST["email"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($idprofesor)){
			$rspta=$profesor->insertar($codigo,$dni,$nombre,,$direccion,$telefono,$email);
			echo $rspta ? "Profesor registrado" : "Profesor no se pudo registrar";
		}
		else {
			$rspta=$profesor->editar($idprofesor,$codigo,$dni,$nombre,,$direccion,$telefono,$email);
			echo $rspta ? "Profesor actualizado" : "Profesor no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$profesor->desactivar($idprofesor);
 		echo $rspta ? "Profesor Desactivado" : "Profesor no se puede desactivar";
	break;

	case 'activar':
		$rspta=$profesor->activar($idprofesor);
 		echo $rspta ? "Profesor activado" : "Profesor no se puede activar";
	break;

	case 'mostrar':
		$rspta=$profesor->mostrar($idprofesor);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$profesor->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idprofesor.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idprofesor.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idprofesor.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idprofesor.')"><i class="fa fa-check"></i></button>',
 				"1"=>$reg->codigo,
 				"2"=>$reg->dni,
 				"3"=>$reg->nombre,
 				"4"=>$reg->direccion,
 				"5"=>$reg->telefono,
 				"6"=>$reg->email,
 				"7"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
 				'<span class="label bg-red">Desactivado</span>'
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;
	
}

?>