<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->_isLogin();
        $this->load->model("inicio_model");
    }

    function _isLogin(){
        if($this->session->userdata("loginTrue")):
            redirect("panel");
        endif;
    }

    public function index()
    {
        $this->load->view("inicio_view");
    }

    public function login(){
        $user = $this->input->post("usuario");
        $pass = $this->input->post("clave");
        $query = $this->inicio_model->validLogin($user,$pass);
        if($query):
            $data = array(
                "user"=>$query->user,
                "id"=>$query->id_usuario,
                "loginTrue"=>TRUE
                );
            $this->session->set_userdata($data);
            redirect("panel");
        else:
            redirect("inicio");
        endif;
    }
}