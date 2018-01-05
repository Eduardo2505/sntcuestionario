<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuestionario extends CI_Controller {



	function __construct() {
		parent::__construct();

		$this->load->helper('url');
	}
	public function preguntas()
	{
		$datam['activar'] ='index';
		$data['menu'] = $this->load->view('plantilla/menu', $datam, true);
		$this->load->view('formulario',$data);
	}

	

	



}
