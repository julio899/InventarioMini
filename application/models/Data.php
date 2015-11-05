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

	function cuentas_desembolso(){
		$this->db->order_by('nombre','asc');
		$this->db->where('categoria',2);//CATEGORIA DE DESEMBOLSO EN BD
		$y_tambien_que=array('usuario'=>$this->session->userdata['datos_usuario']['usuario']);
		$this->db->like($y_tambien_que);
		$query = $this->db->get('cuentas');
		return $query->result_array();
	}

	function asientos_compras($mes_year){
		$query = $this->db->query("SELECT  `idProveedor` , SUM( monto ) ,  `tipo_cuenta` , COUNT( * ) 
FROM  `compras` WHERE  `afecta` LIKE  '$mes_year' GROUP BY  `tipo_cuenta` ,  `idProveedor`");
		return $query->result_array();
	}

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


	function existe_cod_cuenta($cod){
		$query = $this->db->where('codigo',$cod);
		$query = $this->db->get('cuentas');
		return $query->row(); 
	}//fin de existe_cod_cuenta

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

	function get_fac_compras(){		
		//$this->db->where('fecha >=', date('Y-m-01'));
		 	$y_tambien_que = array('afecta' => date('m-Y'), 'cod_compa'=>$this->session->userdata('empresa_seleccionada')['codigo'] );
			$this->db->like($y_tambien_que); 
		$this->db->order_by("fecha", "asc");
		$query = $this->db->get('compras');

		return $query->result_array(); 
	}//fin de get_fac_compras

	function get_compras_mes_especifico($datos){
		//$this->db->where('fecha > ', $datos['year'].'-'.$datos['mes'].'-01' );
		//$this->db->where('fecha <=', $datos['year'].'-'.$datos['mes'].'-31' );
		$y_tambien_que = array('afecta' => $datos['mes'].'-'.$datos['year'], 'cod_compa'=>$this->session->userdata('empresa_seleccionada')['codigo'] );
		$this->db->like($y_tambien_que); 
		$this->db->order_by("fecha", "asc");
		$query = $this->db->get('compras');
		return $query->result_array();

	}

	//Recibe el id
	function get_proveedor($id){

		$this->db->where('id',$id);
		$query = $this->db->get('proveedores');

		return $query->row(); 
	}


		// recibe fecha_afectada, id_proveedor ,cod_categoria,
	function get_fact_prov_cta($datos){
			//Renorna las facturas de un proveedor en una misma categoria
		$query = $this->db->query("SELECT  `nro_fac`, `monto` FROM  `compras` WHERE  `afecta` LIKE  '".$datos['afecta']."'
AND  `idProveedor` =".$datos['idP']." AND  `tipo_cuenta` LIKE  '".$datos['cta']."'");
		return $query->result_array();
		

	}

	function get_name_cuenta($codigo){

		$this->db->where('codigo',$codigo);
		$query = $this->db->get('cuentas');

		return $query->row(); 	
	}

	function get_empresa($cod){		
		$this->db->where('codigo',$cod);
		$query = $this->db->get('empresas');		
		return $query->result_array(); 
	}

	function reg_empresa($datos){
		return $this->db->insert('empresas', $datos);
	}//fin de reg_empresa

	function reg_cuenta($datos){
		return $this->db->insert('cuentas', $datos);
	}//fin de reg_cuenta

	function reg_fac_compra($datos){
		return $this->db->insert('compras', $datos);
	}//fin de reg_fac_compra

	function existe_empresa($datos)
	{
		$this->db->where('codigo',$datos['codigo']);
		$this->db->where('status','A');
		$query = $this->db->get('empresas');
		return $query->row(); 
	}//fin de existe_empresa

	function get_tipos_cuentas($usuario){
		$this->db->where('usuario',$usuario);
		$query = $this->db->get('cuentas');
		return $query->result_array();
	}
	
	function get_proveedor_nombre($nombre){
		$this->db->like('razon',$nombre);
		$query = $this->db->get('proveedores');
		return $query->result_array();
	}
}

?>