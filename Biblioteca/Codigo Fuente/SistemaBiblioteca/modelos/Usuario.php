<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class usuario
{
	
	public function __construct()
	{

	}

	
	public function insertar($numero_trabajador,$dni,$nombre,$profesion,$cargo,$direccion,$telefono,$email,$login,$clave)
	{
		$sql="INSERT INTO usuario (numero_trabajador,dni,nombre,profesion,cargo,direccion,telefono,email,login,clave)
		VALUES ('$numero_trabajador','$dni','$nombre','$profesion','$cargo','$direccion','$telefono','$email','$login','$clave')";
		return ejecutarConsulta($sql);
	}

	
	public function editar($idusuario,$numero_trabajador,$dni,$nombre,$profesion,$cargo,$direccion,$telefono,$email,$login,$clave)
	{
		$sql="UPDATE usuario SET numero_trabajador='$numero_trabajador',dni='$dni',nombre='$nombre',profesion='$profesion',cargo='$cargo',direccion='$direccion',telefono='$telefono',email='$email',login='$login',clave='$clave' WHERE idusuario='$idusuario'";
		return ejecutarConsulta($sql);
	}


	
	public function mostrar($idusuario)
	{
		$sql="SELECT * FROM usuario WHERE idusuario='$idusuario'";
		return ejecutarConsultaSimpleFila($sql);
	}

	
	public function listar()
	{
		$sql="SELECT * FROM usuario";
		return ejecutarConsulta($sql);		
	}

    //Función que va a verficar si existe 
        //la cuenta de usuario
        public function verificar($login,$clave)
        {
            $sql="SELECT nombre, login, clave FROM usuario WHERE login='$login' AND clave='$clave'";
            
            return ejecutarConsulta($sql);
        }

     //Implementamos nuestro método para insertar registros 
        public function eliminar($idusuario)
        {
            $sql ="DELETE FROM usuario
            WHERE idusuario='$idusuario'";
            return ejecutarConsulta($sql);
        }
    }

?>