<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Panel extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("panel_model");
	}

	/*
	* Comprueba el login
	*/
	public function _isLogin(){
		if(!$this->session->userdata("loginTrue")):
			redirect("inicio");
		endif;
	}

		public function index(){
		
		$this->load->view("panel_view");
	}

	public function salir(){
		$this->session->sess_destroy();
		redirect("inicio");
	}

	public function error(){

		$this->load->view("error_view");

	}

		public function searchProducto(){

		$q = $this->input->post("bus");
		$data["productos"] = $this->panel_model->searchPro($q);
		$this->load->view("searchProducto_view",$data);
	}

	/*+++++++++++++ MODULO PRODUCTOS  +++++++++++++*/

	public function VistaProductos(){
		$data["productos"] = $this->panel_model->getVistaProductos();
		$this->load->view("productos_view",$data);
	}

	public function agregarProducto(){
		$this->load->view("agregarProducto_view");
	}

	public function insertProducto(){
		$query = $this->panel_model->insertProducto($this->input->post());
		if($query):
			redirect("panel/VistaProductos");
		else:
			redirect("panel/error");
		endif;
	}

	public function modCliente($idc){
		$data["productos"] = $this->panel_model->getVistaProductos($idc);
		$this->load->view("modProducto",$data);
	}

	public function updateProducto(){
		$update = $this->panel_model->updateProducto($this->input->post());
		if($update):
			redirect("panel/VistaProductos");
		else:
			redirect("error");
		endif;
	}

	public function delCliente($idc)
	{
		if($this->panel_model->deletCliente($idc))
		{
			redirect("panel/VistaProductos");
		}
		else
		{
			redirect("error");
		}
	}

	/////////////// MODULO DE AGENDA ///////////////

	public function VistaAgenda(){
		$data["agendas"] = $this->panel_model->getVistaAgenda();
		$this->load->view("agenda_view",$data);
	}

	public function agregarContacto(){
		$this->load->view("agregarContacto_view");
	}

	public function insertConctacto(){
		$query = $this->panel_model->insertContacto($this->input->post());
		if($query):
			redirect("panel/VistaAgenda");
		else:
			redirect("panel/error");
		endif;
	}

	public function modContacto($idc){
		$data["agendas"] = $this->panel_model->getVistaAgenda($idc);
		$this->load->view("modContacto",$data);
	}

	public function updateContacto(){
		$update = $this->panel_model->updateContacto($this->input->post());
		if($update):
			redirect("panel/VistaAgenda");
		else:
			redirect("error");
		endif;
	}

	public function delContacto($idc)
	{
		if($this->panel_model->deletContacto($idc))
		{
			redirect("panel/VistaAgenda");
		}
		else
		{
			redirect("error");
		}
	}

	/////////////// MODULO DE AGENDA ///////////////

	/////////////// MODULO DE EJEMPLO (SUBIR IMAGENES) ///////////////
	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '850';
		$config['max_height']  = '820';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('inicio_view', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('productos_view', $data);
		}
	}
	/////////////// MODULO DE EJEMPLO (SUBIR IMAGENES) ///////////////

	/////////////// MODULO DE FACTURACION ///////////////

	public function facturacion(){
		$data["productos"] = $this->panel_model->getProductos();
		$this->load->view("facturacion/facturacion.php",$data);
	}

	public function registrarProducto(){
		$cg = $this->input->post("prod");
		$productos = $this->panel_model->getProductos($cg);	
		$query = $this->panel_model->insertProdFactTemp($productos);
		if($query):
			$data["productos"] = $this->panel_model->getProductosFactTemp();	
		else:
			echo "error function registrarProductos";
		endif;
		$this->load->view("facturacion/ajax",$data);
	}

	public function facturarProducto(){
		$productos = $this->panel_model->getProductosFactTemp();
		foreach($productos as $row):
			$stock = $this->panel_model->getStockProd($row->codgen);
			$this->panel_model->updateProdFactTemp($row->codgen,$stock);
		endforeach;
		
		$query = $this->panel_model->truncateFactTemp();

		echo "La actualización de STOCK fue exitoso!";
	}

	public function clearFactTemp(){
		$query = $this->panel_model->truncateFactTemp();
		$data["productos"] = $this->panel_model->getProductosFactTemp();
		$this->load->view("facturacion/ajax",$data);
	}

}