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
					$this->creacion_session($datos);
			}else{
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
	}
	public function redireccionar(){
		$session=$this->session->userdata('datos_usuario');
		if($session != NULL && $session['validado']==TRUE){
				echo "Espere mientras es Redireccionado...";
		}else{
					$this->session->set_flashdata('error', 'Usuario o Clave Invalidos');
					redirect();
		}

	}//fin de redireccionar
}//Fin de Clase