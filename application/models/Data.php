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

	function registrar_producto($producto=""){
		/* Retornos (existe -> En caso que ya exista )
					(TRUE -> cuando se Registre )
					(FALSE -> Error en insercion )
		*/			$retorno=FALSE;
		if ($this->existe_cod_producto($producto['codigo'])!=NULL) {
			# quiere decir que hay un producto con ese codigo
			$retorno="existe";
		}else{
				$retorno=$this->db->insert('productos',$producto);
		}

		return $retorno;
	}//fin de registrar_producto

	function registrar_proveedor($proveedor){
		return $this->db->insert('proveedores',$proveedor);
	}//fin de registrar_proveedor

	function get_categoria($id){
		$this->db->select('nombre_categoria');
		$query = $this->db->where('id',$id); 
		$query = $this->db->get('categorias');
		return $query->row(); 
	}//fin de get_categoria

	function get_categorias(){
		$this->db->order_by("id", "asc");
		$query = $this->db->get('categorias');
		return $query->result_array(); 
	}//fin de get_categorias

	function get_proveedores(){
		$this->db->order_by("razon", "asc");
		$query = $this->db->get('proveedores');
		return $query->result_array(); 
	}//fin de get_proveedores

	function get_productos(){
		$this->db->order_by("descripcion", "asc");
		$this->db->select('id');
		$this->db->select('codigo');
		$this->db->select('descripcion');
		$this->db->select('categoria');
		$this->db->select('cantidad');
		$this->db->select('compra');
		$this->db->select('venta');
		$this->db->select('exento');
		$query = $this->db->get('productos');

		return $query->result_array(); 
	}//fin de get_productos

	function registrar_categoria($cat=""){
		/* Retornos (existe -> En caso que ya exista )
					(TRUE -> cuando se Registre )
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

	function existe_cod_producto($cod=""){
		$query = $this->db->where('codigo',$cod);
		$query = $this->db->get('productos');
		return $query->row(); 
	}//fin de existe_categoria

	function existe_categoria($cat=""){
		$query = $this->db->where('nombre_categoria',$cat);
		$query = $this->db->get('categorias');
		return $query->row(); 
	}//fin de existe_categoria

	function existe_cod_proveedor($cod=""){
		$query = $this->db->where('codigo',$cod);
		$query = $this->db->get('proveedores');
		return $query->row(); 
	}//fin de existe_cod_proveedor

	function actualizar_categoria($id,$data){
		$this->db->where('id',$id);
		return $this->db->update('categorias', $data); 
	}//fin de actualizar_categoria

	function actualizar_producto($id,$data){
		//var_dump($data);
		$this->db->where('id',$id);
		return $this->db->update('productos', $data); 
	}//fin de actualizar_producto

	function get_empresas(){
		$this->db->order_by("codigo", "asc");
		$query = $this->db->get('empresas');

		return $query->result_array(); 
	}//fin de get_empresas


	function reg_empresa($datos){
		return $this->db->insert('empresas', $datos);
	}//fin de reg_empresa

	function existe_empresa($datos)
	{
		$this->db->where('codigo',$datos['codigo']);
		$query = $this->db->get('empresas');
		return $query->row(); 
	}//fin de existe_empresa
}

?>