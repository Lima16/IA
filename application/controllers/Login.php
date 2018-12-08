
<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Login extends CI_Controller {

         public function index()
	{
		
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('Login/login');
        $this->load->view('footer');
        
       

	}

	public function viewregistro(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('registro');
		$this->load->view('footer');

	}

	public function actregistro(){

		$this->load->library('session');
        $this->load->helper('url');
        $this->load->model('Clientes_model');

        if($this->input->method() === 'post'){
        	
        	$data["nome"] = $this->input->post("nome");
        	$data["email"] = $this->input->post("email");
        	$data["senha"] = $this->input->post("senha");

        	$this->Clientes_model->insert($data);
        	$this->load->view('header');
        	$this->load->view('Login/login');
        	$this->load->view('footer');

        }

	}

	public function logar(){

		$data["email"] = $this->input->post("email");
		$data["senha"] = $this->input->post("senha");

		$this->load->library('session');
        $this->load->helper('url');
		$this->load->model('Clientes_model');
		
	    $this->session->set_userdata("cliente", $this->Clientes_model->selectByEmailSenha($data["email"], $data["senha"]));



		if(count($this->session->userdata('cliente'))>0){
      
    
        	$this->load->view('header');
            $this->load->view('menu');
            $this->load->view('home');
            $this->load->view('footer');
           
        }else{
        	
            echo "<script> window.location.href='" . base_url() . "index.php/login';</script>";

            
        }


	}

}