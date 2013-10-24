<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Panel_model extends CI_Model {

	function getVistaProductos($idc=null){
		
		if($idc != null):
			$this->db->where("Id_producto = ".$idc);
		endif;
		
		$query = $this->db->get("productos");
		
		if($query->num_rows > 0):
			return $query->result();
		else:
			return false;
		endif;
	}

	function insertProducto($post){
		
		$this->db->set("Id_producto",$post["id_producto"]);
		$this->db->set("modelo",$post["modelo"]);
		$this->db->set("talle",$post["talle"]);
		$this->db->set("tipo",$post["tipo"]);
		$this->db->set("color",$post["color"]);
		$this->db->set("precio",$post["precio"]);
		$this->db->set("codgen",$post["codgen"]);
		$this->db->set("stock",$post["stock"]);
		
		$query = $this->db->insert("productos");
		
		if($query):
			return true;
		else:
			return false;
		endif;
	}

	function updateProducto($post){
		
		$this->db->set("Id_producto",$post["id_producto"]);
		$this->db->set("modelo",$post["modelo"]);
		$this->db->set("talle",$post["talle"]);
		$this->db->set("tipo",$post["tipo"]);
		$this->db->set("color",$post["color"]);
		$this->db->set("precio",$post["precio"]);
		$this->db->set("codgen",$post["codgen"]);
		$this->db->set("stock",$post["stock"]);

		$this->db->where("Id_producto",$post["id_producto"]);

		$query = $this->db->update("productos");
		if($query):
			return true;
		else:
			return false;
		endif;
	}

	function deletCliente($idc)
	{
		$this->db->where("Id_producto = $idc");
		$query = $this->db->delete("productos");
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}	

	/////////////// MODULO DE AGENDA ///////////////

	function getVistaAgenda($idc=null){
		
		if($idc != null):
			$this->db->where("IdCli = ".$idc);
		endif;
		
		$query = $this->db->get("agendas");
		
		if($query->num_rows > 0):
			return $query->result();
		else:
			return false;
		endif;
	}

	function insertContacto($post){

		$this->db->set("id_cliente",$post["id_cliente"]);
		$this->db->set("nom_compania",$post["nomcompania"]);
		$this->db->set("nom_contacto",$post["nomcontacto"]);
		$this->db->set("dir_fac",$post["dirfacturacion"]);
		$this->db->set("cuidad",$post["cuidad"]);
		$this->db->set("provincia",$post["provincia"]);
		$this->db->set("cod_pos",$post["cp"]);
		$this->db->set("pais",$post["pais"]);
		$this->db->set("tit_contacto",$post["titcontacto"]);
		$this->db->set("nro_tel",$post["nrotel"]);
		$this->db->set("nro_cel",$post["nrocel"]);
		
		$query = $this->db->insert("agendas");
		
		if($query):
			return true;
		else:
			return false;
		endif;
	}

	function updateContacto($post){
		
		$this->db->set("id_cliente",$post["id_cliente"]);
		$this->db->set("nom_compania",$post["nomcompania"]);
		$this->db->set("nom_contacto",$post["nomcontacto"]);
		$this->db->set("dir_fac",$post["dirfacturacion"]);
		$this->db->set("cuidad",$post["cuidad"]);
		$this->db->set("provincia",$post["provincia"]);
		$this->db->set("cod_pos",$post["cp"]);
		$this->db->set("pais",$post["pais"]);
		$this->db->set("tit_contacto",$post["titcontacto"]);
		$this->db->set("nro_tel",$post["nrotel"]);
		$this->db->set("nro_cel",$post["nrocel"]);

		$this->db->where("IdCli",$post["IdCli"]);

		$query = $this->db->update("agendas");
		if($query):
			return true;
		else:
			return false;
		endif;
	}

	function deletContacto($idc)
	{
		
		$this->db->where("IdCli = $idc");
		
		$query = $this->db->delete("agendas");
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	/////////////// FIN - MODULO DE AGENDA ///////////////

		function searchPro($q){

		$this->db->like("modelo",$q);
		
		$query = $this->db->get("productos");
		
		if($query->num_rows > 0):
			return $query->result();
		else:
			return false;
		endif;

	}


	/////////////// FIN - MODULO DE FACTURACION ///////////////

	public function getProductos($cg=null){

		if($cg != null):
			$this->db->where("codgen",$cg);
		endif;
		$query =$this->db->get("productos");
		if($query->num_rows > 0):
			return $query->result();
		else:
			return false;
		endif;
	}

	public function insertProdFactTemp($post=null){
		$this->db->set("modelo",$post[0]->modelo);
		$this->db->set("talle",$post[0]->talle);
		$this->db->set("tipo",$post[0]->tipo);
		$this->db->set("color",$post[0]->color);
		$this->db->set("precio",$post[0]->precio);
		$this->db->set("codgen",$post[0]->codgen);
		$this->db->set("stock",$post[0]->stock);
		
		$query = $this->db->insert("fact_temp");
		if($query):
			return True;
		else:
			return False;
		endif;
	}

	public function getProductosFactTemp(){
		$query =$this->db->get("fact_temp");
		if($query->num_rows > 0):
			return $query->result();
		else:
			return array();
		endif;
	}

	public function updateProdFactTemp($cg, $st){
		$st = $st - 1;
		$this->db->set("stock",$st);
		$this->db->where("codgen",$cg);

		$query = $this->db->update("productos");
		if($query):
			return true;
		else:
			return false;
		endif;
	}

	public function getStockProd($cg=null){
		$this->db->select("stock");
		$this->db->where("codgen",$cg);
		$query =$this->db->get("productos");
		if($query->num_rows > 0):
			$prod = $query->result();
			return $prod[0]->stock;
		else:
			return false;
		endif;
	}

	public function truncateFactTemp(){
		$this->db->truncate("fact_temp");
	}

}
