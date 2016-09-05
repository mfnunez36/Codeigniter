<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pais extends CI_Controller
{
	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('pais_mod');
    }

    function index()
	{
		$this->load->view("Shared/head", array("title" => "Paises", "estilo" => array("grayscale.css")));
		$this->load->view("Shared/nav");

		$resultado['data'] = $this->pais_mod->ListarPaises();
		$this->load->view('Pais/index', $resultado);

		$this->load->view("Shared/footer", array("scripts" => array("grayscale.js", "jquery.easing.min.js")));
	}

	function Agregar()
	{
		$this->load->view("Shared/head", array("title" => "Agregar_Pais", "estilo" => array("grayscale.css")));
		$this->load->view("Shared/nav");

		$this->load->view('Pais/Agregar');


		$pais = $this->input->post();

		$this->pais_mod->Agregar($pais);

	}

}