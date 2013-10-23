<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio_model extends CI_Model {

	public function validLogin($user,$pass){
		$this->db->select("id_usuario,user");
		$this->db->from("usuarios");
		$this->db->where("user = '$user'");
		$this->db->where("passwd = '".sha1($pass)."'");
		$query = $this->db->get();
		if($query->num_rows() > 0):
			return $query->result();
		else:
			return false;
		endif;
	}

}

/* End of file inicio_model.php */
/* Location: ./application/models/inicio_model.php */
