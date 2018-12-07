<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Bebidas extends CI_Controller {

         public function index()
	{
		$this->load->model('Bebidas_model');
		$data["bebidas"] = $this->Bebidas_model->SelectAll();

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('Cardapio/bebidas', $data);
        $this->load->view('footer');
       

	}

}