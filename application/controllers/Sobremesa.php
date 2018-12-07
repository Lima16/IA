<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Sobremesa extends CI_Controller {

         public function index()
	{
		$this->load->model('Sobremesas_model');
		$data["sobremesas"] = $this->Sobremesas_model->SelectAll();

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('Cardapio/sobremesa', $data);
        $this->load->view('footer');
       

	}

}