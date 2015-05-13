<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	/**
	 * Controlador Inicial que Arranca
	 */
	public function index()
	{
		$this->load->view('html/head');
		$this->load->view('inicio');
		$this->load->view('html/footer');
	}
}
