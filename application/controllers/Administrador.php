<?php
defined('BASEPATH') OR exit('No se permite acceso directo a script');

class Administrador extends CI_Controller {
	public function __construct() {        
    parent::__construct();
}
		public function index()
	{	# Inicializo y actualizo las categorias de los productos
		$this->session->set_userdata('categorias',$this->categorias());

		$this->load->view('html/head2');
		$this->load->view('contenido/panel_admin');
		$this->load->view('html/footer2');
	}
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
		

		public function actualizar_categoria(){
			$this->load->model('data');
			var_dump($this->data->actualizar_categoria('7',array('nombre_categoria'=>'ropa' )) );
		}


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

}//Fin de Clase