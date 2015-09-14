<?php
defined('BASEPATH') OR exit('No se permite acceso directo a script');

class Contador extends CI_Controller {
	public function __construct() {        
    parent::__construct();
    $this->verifica_contador();
    }

		public function index()
	{	
		$this->load->model('data');
		$datos=array('empresas'=>$this->data->get_empresas() );
		$this->load->view('html/head2');
		$this->load->view('contenido/panel_contador',$datos);
		$this->load->view('html/footer2');
	}


	public function verifica_contador()
	{
		if($this->session->userdata['datos_usuario']['tipo']!='C'){
			echo "<pre>Necesita acceder con una cuenta de tipo Contador para poder acceder a este modulo.</pre>";
			echo "<a href=\"".base_url()."\">Click Aqui para regresar</a>";
			exit();
		}
	}

	public function reg_nueva_empresa()
	{

			$this->load->library('form_validation');

			$this->form_validation->set_rules('codigo', 'CODIGO', 'required');
			$this->form_validation->set_rules('razon', 'RAZON SOCIAL', 'required');
			$this->form_validation->set_rules('rif', 'RIF', 'required');
			$this->form_validation->set_rules('direccion', 'DIRECCION', 'required');
			 if ($this->form_validation->run() == FALSE)
    			{

					$this->session->set_flashdata('error',"Error en Validacion de datos. ".validation_errors('<div class="error">', '</div>'));
    				redirect('contador');
    			}else{
    					$datos_empresa = array(
					   'codigo' => $this->input->post('codigo') ,
					   'razon' => $this->input->post('razon') ,
					   'rif' => $this->input->post('rif'),
					   'direccion'=>$this->input->post('direccion')
					);

					$this->load->model('data');
					if( $this->data->existe_empresa($datos_empresa)!=NULL )
					{
							$this->session->set_flashdata('error',"Error en Validacion de datos. "."<div class=\"error\">Verifique que los datos no esten duplicados ya que el codico que intenta registrar se encuentra registrado</div>" );
		    				redirect('contador');
					}else{

		    				if( $this->data->reg_empresa($datos_empresa) ){

									$this->session->set_flashdata('ok',"Exito Registro procesado satisfactoriamente.");
				    				redirect('contador');
		    				}else{
		    						$this->session->set_flashdata('error',"ha ocurrido un error al intentar registrar una empresa");
				    				redirect('contador');
		    				}	
					}
				
    			}
	}



}//fin de clase