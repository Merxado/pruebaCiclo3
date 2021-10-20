<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class profesor
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($codigo,$dni,$nombre,$direccion,$telefono,$email)
	{
		$sql="INSERT INTO profesor (codigo,dni,nombre,direccion,telefono,email,condicion)
		VALUES ('$codigo','$dni','$nombre',','$direccion','$telefono','$email','1')";
		return ejecutarConsulta($sql);
	}


	//Implementamos un método para editar registros
	public function editar($idprofesor,$codigo,$dni,$nombre,$direccion,$telefono,$email)
	{
		$sql="UPDATE profesor SET codigo='$codigo',dni='$dni',nombre='$nombre',direccion='$direccion',telefono='$telefono',email='$email' WHERE idprofesor='$idprofesor'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar categorías
	public function desactivar($idprofesor)
	{
		$sql="UPDATE profesor SET condicion='0' WHERE idprofesor='$idprofesor'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar categorías
	public function activar($idprofesor)
	{
		$sql="UPDATE profesor SET condicion='1' WHERE idprofesor='$idprofesor'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idprofesor)
	{
		$sql="SELECT * FROM profesor WHERE idprofesor='$idprofesor'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM profesor";
		return ejecutarConsulta($sql);		
	}

	//Implementar un método para listar los registros y mostrar en el select
	public function select()
	{
		$sql="SELECT * FROM profesor where condicion=1";
		return ejecutarConsulta($sql);		
	}
}

?>