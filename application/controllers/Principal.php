<?php
defined('BASEPATH') OR exit('No se permite acceso directo a script');

class Principal extends CI_Controller {
	public function __construct() {        
    parent::__construct();
}

	/**
	 * Controlador Inicial que Arranca
	 */
	public function index()
	{
		$this->load->view('html/head');
		$this->load->view('inicio');
		$this->load->view('html/footer');
	}

	/* Funcion que consulta el usuario y la clave en l BD*/
	public function validar_ingreso(){
		$this->load->model('data');
		$datos=(array) $this->data->validacion($this->input->post("user_login"),$this->input->post("user_password"));
		//var_dump($datos);
		if(count($datos) > 0 )
			{		//si el usuario y clave estan correctos creo la session
					$this->session->set_userdata('validado',TRUE);
					$this->creacion_session($datos);
			}else{
					$this->session->set_userdata('validado',FALSE);
					$this->cerrar_session();
			}
			$this->redireccionar();
	} // fin de validar_ingreso

	public function creacion_session($datos){
		 $datos_usuario=array(
		 						'usuario' => $datos['usuario'], 
		 						'nombre_completo'=>$datos['nombre_completo'], 
		 						'validado'=>TRUE
		 						);

		 $this->session->set_userdata('datos_usuario',$datos_usuario);
	}//fin creacion_session

	public function cerrar_session(){
		$this->session->unset_userdata('datos_usuario');
		$this->redireccionar();
	}
	public function redireccionar(){
		$session=$this->session->userdata('datos_usuario');
		$es_valido=$this->session->userdata('validado');

		if($session['validado']==TRUE){
					redirect('administrador');
		}
		if($session == NULL && $es_valido == TRUE){
					$this->session->set_flashdata('info', 'Identifiquese par poder acceder');
					redirect();			
		}
		if(  $es_valido != TRUE){
					$this->session->set_flashdata('error', 'Usuario o Clave Invalidos');
					redirect();
		}

	}//fin de redireccionar
}//Fin de Clase
