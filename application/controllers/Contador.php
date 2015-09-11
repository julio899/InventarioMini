<?php
defined('BASEPATH') OR exit('No se permite acceso directo a script');

class Contador extends CI_Controller {
	public function __construct() {        
    parent::__construct();
    $this->verifica_contador();
    }

		public function index()
	{	
		$this->load->view('html/head2');
		$this->load->view('contenido/panel_contador');
		$this->load->view('html/footer2');
	}
		public function verifica_contador(){
			if($this->session->userdata['datos_usuario']['tipo']!='C'){
				echo "<pre>Necesita acceder con una cuenta de tipo Contador para poder acceder a este modulo.</pre>";
				echo "<a href=\"".base_url()."\">Click Aqui para regresar</a>";
				exit();
			}
		}
}//fin de clase