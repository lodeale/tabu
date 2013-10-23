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

}
