<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Refeicoes extends CI_Controller {

         public function index()
	{
		$this->load->model('Refeicoes_model');
		$data["refeicoes"] = $this->Refeicoes_model->SelectAll();

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('Cardapio/refeicoes', $data);
        $this->load->view('footer');
       

	}

}