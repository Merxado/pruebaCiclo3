<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Editorial
{
	
	public function __construct()
	{

	}


	public function insertar($nombre,$descripcion)
	{
		$sql="INSERT INTO editorial (nombre,descripcion,condicion)
		VALUES ('$nombre','$descripcion','1')";
		return ejecutarConsulta($sql);
	}

	
	public function editar($ideditorial,$nombre,$descripcion)
	{
		$sql="UPDATE editorial SET nombre='$nombre',descripcion='$descripcion' WHERE ideditorial='$ideditorial'";
		return ejecutarConsulta($sql);
	}

	
	public function desactivar($ideditorial)
	{
		$sql="UPDATE editorial SET condicion='0' WHERE ideditorial='$ideditorial'";
		return ejecutarConsulta($sql);
	}


	public function activar($ideditorial)
	{
		$sql="UPDATE editorial SET condicion='1' WHERE ideditorial='$ideditorial'";
		return ejecutarConsulta($sql);
	}

	
	public function mostrar($ideditorial)
	{
		$sql="SELECT * FROM editorial WHERE ideditorial='$ideditorial'";
		return ejecutarConsultaSimpleFila($sql);
	}


	public function listar()
	{
		$sql="SELECT * FROM editorial";
		return ejecutarConsulta($sql);		
	}
	
	public function select()
	{
		$sql="SELECT * FROM editorial where condicion=1";
		return ejecutarConsulta($sql);		
	}
}

?>