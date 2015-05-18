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

}