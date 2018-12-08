<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cliente extends CI_Controller
{

	public function index()
	{

		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('Clientes_model');
		$this->load->view('header');

		$cliente = $this->session->userdata('cliente')[0];

		$this->load->view('footer');

	}
}