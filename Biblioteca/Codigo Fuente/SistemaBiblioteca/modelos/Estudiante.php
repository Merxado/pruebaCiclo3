<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Estudiante
{
	
	public function __construct()
	{

	}

	
	public function insertar($codigo,$dni,$nombre,$carrera,$direccion,$telefono,$email)
	{
		$sql="INSERT INTO estudiante (codigo,dni,nombre,carrera,direccion,telefono,email,condicion)
		VALUES ('$codigo','$dni','$nombre','$carrera','$direccion','$telefono','$email','1')";
		return ejecutarConsulta($sql);
	}


	
	public function editar($idestudiante,$codigo,$dni,$nombre,$carrera,$direccion,$telefono,$email)
	{
		$sql="UPDATE estudiante SET codigo='$codigo',dni='$dni',nombre='$nombre',carrera='$carrera',direccion='$direccion',telefono='$telefono',email='$email' WHERE idestudiante='$idestudiante'";
		return ejecutarConsulta($sql);
	}

	
	public function desactivar($idestudiante)
	{
		$sql="UPDATE estudiante SET condicion='0' WHERE idestudiante='$idestudiante'";
		return ejecutarConsulta($sql);
	}

	
	public function activar($idestudiante)
	{
		$sql="UPDATE estudiante SET condicion='1' WHERE idestudiante='$idestudiante'";
		return ejecutarConsulta($sql);
	}

	
	public function mostrar($idestudiante)
	{
		$sql="SELECT * FROM estudiante WHERE idestudiante='$idestudiante'";
		return ejecutarConsultaSimpleFila($sql);
	}

	
	public function listar()
	{
		$sql="SELECT * FROM estudiante";
		return ejecutarConsulta($sql);		
	}

	
	public function select()
	{
		$sql="SELECT * FROM estudiante where condicion=1";
		return ejecutarConsulta($sql);		
	}
}

?>