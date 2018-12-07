<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Home extends CI_Controller {

         public function index()
	{

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('home');
        $this->load->view('footer');
       

	}

	
}