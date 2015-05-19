<?php
	
defined('BASEPATH') OR exit('No se permite acceso directo a script');

class Data extends CI_Model {
	var $sql="";

public function __construct() {        
    parent::__construct();
}
	function validacion($u="",$p=""){
		$query = $this->db->where('usuario',$u); 
		$query = $this->db->where('clave',SHA1($p)); 
		$query = $this->db->get('usuarios');
		return $query->row(); 
	}//fin de funcion validacion

	function registrar_categoria($cat=""){
		/* Retornos (existe -> En caso que ya exista )
					(TRUE -> cuando de Registre )
					(FALSE -> Error en insercion )
		*/
					$retorno=FALSE;
		if ($this->existe_categoria($cat)!=NULL) {
			$retorno="existe";
		}else{
					$data=array('nombre_categoria'=>strtolower($cat));
					$retorno=$this->db->insert('categorias', $data);
		}//fin del else
		return $retorno;

	}//fin de funcion registrar_categoria

	function existe_categoria($cat=""){
		$query = $this->db->where('nombre_categoria',$cat);
		$query = $this->db->get('categorias');
		return $query->row(); 
	}//fin de existe_categoria
}

?>