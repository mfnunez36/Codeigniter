<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Posicion extends CI_Controller
{
	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('posicion_mod');
    }

    function index()
	{
		$this->load->view("Shared/head", array("title" => "Paises", "estilo" => array("grayscale.css")));
		$this->load->view("Shared/nav");

		$resultado['data'] = $this->posicion_mod->ListarPosiciones();
		$this->load->view('Posicion/index', $resultado);

		$this->load->view("Shared/footer", array("scripts" => array("grayscale.js", "jquery.easing.min.js")));
	}

	function Agregar()
	{
		$this->load->view("Shared/head", array("title" => "Agregar_Posicion", "estilo" => array("grayscale.css")));
		$this->load->view("Shared/nav");

		$this->load->view('Posicion/Agregar');


		$posicion = $this->input->post();

		$this->posicion_mod->Agregar($posicion);
	}

}