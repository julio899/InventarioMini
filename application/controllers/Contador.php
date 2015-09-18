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
		$datos=array('empresas'=>$this->data->get_empresas() , 'cuentas'=>$this->cuentas() );
		$this->load->view('html/head2');
		$this->load->view('contenido/panel_contador',$datos);
		$this->load->view('html/footer2');
	}


	public function verifica_contador()
	{
		if(!isset($this->session->userdata['datos_usuario']))
			{
					echo "ha expirado el tiempo de sesión ó cerrado la sesión...<br>";
					echo "<a href=\"".base_url()."\">Click Aqui para regresar</a>";
			}else{

				if($this->session->userdata['datos_usuario']['tipo']!='C')
				{
					echo "<pre>Necesita acceder con una cuenta de tipo Contador para poder acceder a este modulo.</pre>";
					echo "<a href=\"".base_url()."\">Click Aqui para regresar</a>";
					exit();
				}
			}
		
	}

	public function reg_nueva_empresa()
	{

			$this->load->library('form_validation');

			$this->form_validation->set_rules('codigo', 'CODIGO', 'trim|required');
			$this->form_validation->set_rules('razon', 'RAZON SOCIAL', 'trim|required');
			$this->form_validation->set_rules('rif', 'RIF', 'trim|required');
			$this->form_validation->set_rules('direccion', 'DIRECCION', 'trim|required');
			 if ($this->form_validation->run() == FALSE)
    			{

					$this->session->set_flashdata('error',"Error en Validacion de datos. ".validation_errors('<div class="error">', '</div>'));
    				redirect('contador');
    			}else{
    					$datos_empresa = array(
					   'codigo' => $this->input->post('codigo') ,
					   'razon' => $this->input->post('razon') ,
					   'rif' => $this->input->post('rif'),
					   'direccion'=>$this->input->post('direccion'),
					   'usuario'=>$this->session->userdata('datos_usuario')['usuario']
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

	public function reg_nueva_cuenta()
	{

			$this->load->library('form_validation');

			$this->form_validation->set_rules('nombreCuenta', 'Nombre de la Cuenta', 'trim|required');
			$this->form_validation->set_rules('naturaleza', 'Naturaleza', 'trim|required');
			$this->form_validation->set_rules('codigo', 'CODIGO', 'trim|required');
			$this->form_validation->set_rules('usuario', 'USUARIO', 'trim|required');

			if ($this->form_validation->run() == FALSE)
    			{

					$this->session->set_flashdata('error',"Error en Validacion de datos. ".validation_errors('<div class="error">', '</div>'));
    				redirect('contador');
    			}else{
    				$datos=array(
    								'nombre'=>$this->input->post('nombreCuenta'),
    								'naturaleza'=>$this->input->post('naturaleza'),
    								'codigo'=>$this->input->post('codigo'),
    								'usuario'=>$this->input->post('usuario')
    							);
    				$this->load->model('data');
    					if($this->data->existe_cod_cuenta($datos['codigo'])==NULL){
    					# "No Existe" ahora Insertamos los datos
    						if($this->data->reg_cuenta($datos)){
    							$this->session->set_flashdata('ok',"Ha sido registrada una nueva CUENTA satisfactoriamente");
				    		}else{
    							$this->session->set_flashdata('error',"ha ocurrido un Error en insercion SQL");
				    		}
    					}else{
    						$this->session->set_flashdata('error',"el codigo que intenta registrar para esa cuenta Ya Existe.");
				    	}
    			}
    			redirect('contador');

	}//fin de funcion reg_nueva_cuenta

	public function seleccionar_empresa($codigo="")
	{	
		$this->session->set_userdata('pagina','home');
		$this->load->model('data');
		$empresa=$this->data->get_empresa($codigo);
		if(count($empresa)==0){
			$this->session->set_flashdata('error',"codigo de empresa invalido");
			redirect('contador');
		}else{
			$this->session->set_userdata('empresa_seleccionada',$empresa[0]);
			redirect('contador');
		}

		//$this->session->set_userdata['empresa_seleccionada']=
	}

	public function pagina($pagina="")
	{
		$this->session->set_userdata('pagina',$pagina);
		redirect('contador');
	}
	
	public function cuentas()
	{
		$this->load->model('data');
		return $this->data->get_tipos_cuentas( $this->session->userdata('datos_usuario')['usuario'] );

	}

	public function prueba()
	{	# Prueba de una plantilla
		$this->parser->parse('prueba', array(
												'nombre'=>'Julio Vinachi',
												'mensaje'=>"Bienvenido a la libreria parser",
												'titulo'=>'prueba de plantilla',
												'datos'=> array(
													                array('obj' => array('name'=>'equis','ape'=>'vinachi'), 'body' => 'Body 1'),
													                array('obj' => array('name'=>'raqueta','ape'=>'ochoa'), 'body' => 'Body 2'),
													                array('obj' => array('name'=>'balon','ape'=>'carapa'), 'body' => 'Body 3'),
													                array('obj' => array('name'=>'cesta','ape'=>'velazquez'), 'body' => 'Body 4'),
													                array('obj' => array('name'=>'gorra','ape'=>'abc'), 'body' => 'Body 5')
                												)
											)
							);
	}

	public function get_proveedor($nombre=""){

		$this->load->model('data');
		$respuesta=$this->data->get_proveedor_nombre($nombre);
		/*$datos=null;
		foreach ($respuesta as $key => $value) {
				$datos[]=array('id'=>$value['id'],'razon'=>$value['razon'],'rif'=>$value['rif']);
		}*/
		echo json_encode($respuesta);
	}// fin de get_proveedor

}//fin de clase