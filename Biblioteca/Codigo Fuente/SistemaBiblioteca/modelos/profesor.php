<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class profesor
{
	
	public function __construct()
	{

	}

	
	public function insertar($codigo,$dni,$nombre,$direccion,$telefono,$email)
	{
		$sql="INSERT INTO profesor (codigo,dni,nombre,direccion,telefono,email,condicion)
		VALUES ('$codigo','$dni','$nombre',','$direccion','$telefono','$email','1')";
		return ejecutarConsulta($sql);
	}



	public function editar($idprofesor,$codigo,$dni,$nombre,$direccion,$telefono,$email)
	{
		$sql="UPDATE profesor SET codigo='$codigo',dni='$dni',nombre='$nombre',direccion='$direccion',telefono='$telefono',email='$email' WHERE idprofesor='$idprofesor'";
		return ejecutarConsulta($sql);
	}

	
	public function desactivar($idprofesor)
	{
		$sql="UPDATE profesor SET condicion='0' WHERE idprofesor='$idprofesor'";
		return ejecutarConsulta($sql);
	}

	public function activar($idprofesor)
	{
		$sql="UPDATE profesor SET condicion='1' WHERE idprofesor='$idprofesor'";
		return ejecutarConsulta($sql);
	}

	
	public function mostrar($idprofesor)
	{
		$sql="SELECT * FROM profesor WHERE idprofesor='$idprofesor'";
		return ejecutarConsultaSimpleFila($sql);
	}

	
	public function listar()
	{
		$sql="SELECT * FROM profesor";
		return ejecutarConsulta($sql);		
	}

	
	public function select()
	{
		$sql="SELECT * FROM profesor where condicion=1";
		return ejecutarConsulta($sql);		
	}
}

?>