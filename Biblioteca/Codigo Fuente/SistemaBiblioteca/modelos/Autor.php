<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Autor
{
	
	public function __construct()
	{

	}

	
	public function insertar($nombre,$descripcion,$imagen)
	{
		$sql="INSERT INTO autor (nombre,descripcion,imagen,condicion)
		VALUES ('$nombre','$descripcion','$imagen','1')";
		return ejecutarConsulta($sql);
	}

	
	public function editar($idautor,$nombre,$descripcion,$imagen)
	{
		$sql="UPDATE autor SET nombre='$nombre',descripcion='$descripcion',imagen='$imagen' WHERE idautor='$idautor'";
		return ejecutarConsulta($sql);
	}

	
	public function desactivar($idautor)
	{
		$sql="UPDATE autor SET condicion='0' WHERE idautor='$idautor'";
		return ejecutarConsulta($sql);
	}

	
	public function activar($idautor)
	{
		$sql="UPDATE autor SET condicion='1' WHERE idautor='$idautor'";
		return ejecutarConsulta($sql);
	}

	
	public function mostrar($idautor)
	{
		$sql="SELECT * FROM autor WHERE idautor='$idautor'";
		return ejecutarConsultaSimpleFila($sql);
	}

	
	public function listar()
	{
		$sql="SELECT * FROM autor";
		return ejecutarConsulta($sql);		
	}
	
	public function select()
	{
		$sql="SELECT * FROM autor where condicion=1";
		return ejecutarConsulta($sql);		
	}
}

?>