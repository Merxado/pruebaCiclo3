<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Materia
{
	
	public function __construct()
	{

	}

	
	public function insertar($nombre,$descripcion)
	{
		$sql="INSERT INTO materia (nombre,descripcion,condicion)
		VALUES ('$nombre','$descripcion','1')";
		return ejecutarConsulta($sql);
	}

	
	public function editar($idmateria,$nombre,$descripcion)
	{
		$sql="UPDATE materia SET nombre='$nombre',descripcion='$descripcion' WHERE idmateria='$idmateria'";
		return ejecutarConsulta($sql);
	}

	
	public function desactivar($idmateria)
	{
		$sql="UPDATE materia SET condicion='0' WHERE idmateria='$idmateria'";
		return ejecutarConsulta($sql);
	}

	
	public function activar($idmateria)
	{
		$sql="UPDATE materia SET condicion='1' WHERE idmateria='$idmateria'";
		return ejecutarConsulta($sql);
	}

	
	public function mostrar($idmateria)
	{
		$sql="SELECT * FROM materia WHERE idmateria='$idmateria'";
		return ejecutarConsultaSimpleFila($sql);
	}

	
	public function listar()
	{
		$sql="SELECT * FROM materia";
		return ejecutarConsulta($sql);		
	}
	
	public function Select()
	{
		$sql="SELECT * FROM materia where condicion=1";
		return ejecutarConsulta($sql);		
	}
}

?>