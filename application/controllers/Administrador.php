<?php
defined('BASEPATH') OR exit('No se permite acceso directo a script');

class Administrador extends CI_Controller {
	public function __construct() {        
    parent::__construct();
    $this->verifica_administrador();
    }

		public function index()
	{	# Inicializo y actualizo las categorias de los productos
		$this->session->set_userdata('categorias',$this->categorias());

		$this->load->view('html/head2');
		$this->load->view('contenido/panel_admin');
		$this->load->view('html/footer2');
	}
		public function verifica_administrador(){
			if($this->session->userdata['datos_usuario']['tipo']!='A'){
				echo "<pre>Necesita acceder con una cuenta de tipo Administrador para poder acceder a este modulo.</pre>";
				echo "<a href=\"".base_url()."\">Click Aqui para regresar</a>";
				exit();
			}
		}

		public function cargar_factura()
	{	
		$this->load->model('data');
		$data=array('proveedores'=>$this->data->get_proveedores() );
		
		$this->load->view('html/head2');
		$this->load->view('contenido/panel_carga_facturas',$data);
		$this->load->view('html/footer2');
	}

		public function nueva_venta(){
			$this->load->view('html/head2');
			$this->load->view('contenido/new_fac_ventas');
			$this->load->view('html/footer2');
		}// new_venta  es cargar una factura

		public function reg_nueva_categoria(){
			$cat=$this->input->post('txtCategoria');
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
				$this->session->set_flashdata('error',"Categoria Muy Corta o vacia es invalida debe contener almenos 4 caracteres");
			}
			redirect('administrador');
		}//reg_nueva_categoria
		
		public function reg_nuevo_proveedor(){
			$this->load->model('data');
			# si existe_cod_proveedor devuelve NULL quiere decir que no existe ese cod de proveedor
			if(  $this->data->existe_cod_proveedor( $this->input->post('codigo') ) == NULL){
				$datos=array( 	'razon'		=>$this->input->post('proveedor'), 
								'rif'		=>$this->input->post('rif'), 
								'direccion'	=>$this->input->post('direccion'), 
								'telefono'	=>$this->input->post('telefono'),
								'codigo'	=>$this->input->post('codigo')
							);
				if($this->data->registrar_proveedor($datos) == true){
		
					$this->session->set_flashdata('ok',"Proveedor Creado Satisfactoriamente.");

				}//fin de if registrar_proveedor
			}else{ $this->session->set_flashdata('error',"ERROR: Ha ocurrido un error ya que Un Proveedor con ese CODIGO ya existe."); }
			redirect('administrador');
		}//fin de reg_nuevo_proveedor

		public function actualizar_categoria(){
			$this->load->model('data');
			var_dump($this->data->actualizar_categoria('7',array('nombre_categoria'=>'ropa' )) );
		}

		public function proveedor_existe($cod=""){			
			$this->load->model('data');
			var_dump( $this->data->existe_cod_proveedor( $cod ) );
		}//fin de proveedor_existe


		public function actualizar_producto($idp){
			$this->load->model('data');
			$this->data->actualizar_producto($idp,$this->input->post() );
			redirect('administrador');
		}

		public function productos(){
			$this->load->model('data');
			//$data['data']=$this->data->get_productos();
			$data=$this->data->get_productos();
			echo "{\n \"data\":[";
			foreach ($data as $key => $value) {
				if($key>0){echo ",\n";}
				$categoria=$this->data->get_categoria( $value['categoria'] );
				echo  "[ \"".$value['codigo'] ."\", \"".$value['descripcion'] ."\", \"". $categoria->nombre_categoria ."\", \"".$value['cantidad'] ."\", \"". number_format($value['compra'], 2, ',', '.')  ."\", \"". number_format($value['venta'], 2, ',', '.') ."\", \"".$value['id']."\", \"".$value['categoria']."\" , \"".$value['exento']."\" ]";
			}
			echo "\n]  \n}";
		}


		public function categorias(){
			# cargo modelo que me trae los datos de la BD
			$this->load->model('data');
			return $this->data->get_categorias();
		}//fin de funcion categorias

		public function reg_nuevo_producto()
		{
				$this->load->model('data');
				$respuesta=$this->data->registrar_producto($this->input->post());
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

		public function reg_nuevo_cliente(){
			$this->load->library('form_validation');

			$this->form_validation->set_rules('razon', 'RAZON SOCIAL', 'required');
			$this->form_validation->set_rules('rif', 'RIF', 'required');
			$this->form_validation->set_rules('direccion', 'DIRECCION', 'required');
			 if ($this->form_validation->run() == FALSE)
    			{

					$this->session->set_flashdata('error',"Error en Validacion de datos. ".validation_errors('<div class="error">', '</div>'));
    				redirect('administrador');
    			}else{
    				//id del Vendedor de quien es este cliente o quien lo creo
    				var_dump($this->session->userdata('datos_usuario')['idu']);
    				var_dump($this->input->post());	
    			}
		}
}//Fin de Clase