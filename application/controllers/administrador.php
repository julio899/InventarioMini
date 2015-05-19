<?php
defined('BASEPATH') OR exit('No se permite acceso directo a script');

class Administrador extends CI_Controller {
	public function __construct() {        
    parent::__construct();
}
		public function index()
	{
		$this->load->view('html/head2');
		$this->load->view('contenido/panel_admin');
		$this->load->view('html/footer2');
	}
		public function reg_nueva_categoria($cat=""){
			if(strlen($cat)>3){
				//echo "Es valida: ";
				$cat=strtolower($cat);
				$this->load->model('data');
				$respuesta=$this->data->registrar_categoria($cat);
					
				if($respuesta==="existe"){
						# en caso que ya se encuetre registrada
						$this->session->set_flashdata('error',"lo sentimos esa categoria ya existe.");
				}//fin if $respuesta==="existe"
							
				if($respuesta===true){
						# Registro Satisfactorio
						$this->session->set_flashdata('ok',"Categoria registrada Satisfactoriamente.");
					}//fin if $respuesta===true
						
					if($respuesta===false){
						# No se pudo registrar error SQL
						$this->session->set_flashdata('error',"Error SQL no se puedo insertar la categoria.");
					}//fin if $respuesta===false

			}else{
				$this->session->set_flashdata('error',"Muy Corta o vacia es invalida debe contener almenos 4 caracteres");
			}
			redirect('administrador');
		}//reg_nueva_categoria

		public function reg_nuevo_producto()
		{
			$producto=array(	'codigo'=>'3',
							 	'descripcion'=>'camisa LG' ,
							 	/*'categoria'=>'sin categoria' ,*/
							 	'compra'=>80 ,
							 	'venta'=>100 ,
							 	'exento'=>0 ,
							 	/*'status'=>'A'*/
							 	/*,'cantidad'=>0*/
							);
				$this->load->model('data');
				$respuesta=$this->data->registrar_producto($producto);
				//var_dump($respuesta);

				if($respuesta==="existe"){
						# en caso que ya se encuetre registrado un producto con ese codigo
						$this->session->set_flashdata('error',"Un producto con este CODIGO ya existe.");
				}//fin if $respuesta==="existe"
							
				if($respuesta===true){
						# Registro Satisfactorio del producto
						$this->session->set_flashdata('ok',"Producto Creado Satisfactoriamente.");
					}//fin if $respuesta===true
						
					if($respuesta===false){
						# No se pudo registrar el producto error SQL
						$this->session->set_flashdata('error',"Error SQL no se puedo insertar el producto.");
					}//fin if $respuesta===false

			
				redirect('administrador');
		}
}