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

}