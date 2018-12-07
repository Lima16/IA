
<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Conta extends CI_Controller {

         public function index()
	{
		$this->load->model('Pedidos_model');
        $this->load->model('Entradas_model');
        $this->load->model('Refeicoes_model');
        $this->load->model('Bebidas_model');
        $this->load->model('Sobremesas_model');

		$data['pedidos'] = $this->Pedidos_model->SelectAll();
        $data['entradas'] = $this->Entradas_model->SelectAll();
        $data['refeicoes'] = $this->Refeicoes_model->SelectAll();
        $data['bebidas'] = $this->Bebidas_model->SelectAll();
        $data['sobremesas'] = $this->Sobremesas_model->SelectAll();

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('Conta/conta', $data);
        $this->load->view('footer');
       

	}

}