
<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Entradas extends CI_Controller {

         public function index()
	{
		$this->load->model('Entradas_model');
		$data["entradas"] = $this->Entradas_model->SelectAll();


        $this->load->library('session');
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('Cardapio/entradas', $data);
        $this->load->view('footer');
       

	}

}