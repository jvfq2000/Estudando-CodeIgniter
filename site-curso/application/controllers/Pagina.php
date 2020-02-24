<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$dados['titulo'] = 'João Entendendo CodeIgniter';
		$this->load->view('home', $dados);
	}
}
