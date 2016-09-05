<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Club extends CI_Controller
{
	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('club_mod');
    }

    function index()
	{
		$this->load->view("Shared/head", array("title" => "Clubes", "estilo" => array("grayscale.css")));
		$this->load->view("Shared/nav");

		$resultado['data'] = $this->club_mod->ListarClubes();
		$this->load->view('Club/index', $resultado);

		$this->load->view("Shared/footer", array("scripts" => array("grayscale.js", "jquery.easing.min.js")));
	}

	function Agregar()
	{
		$this->load->view("Shared/head", array("title" => "Agregar_Club", "estilo" => array("grayscale.css")));
		$this->load->view("Shared/nav");

		$this->load->view('Club/Agregar');


		$club = $this->input->post();

		$this->club_mod->Agregar($club);

	}

	function Editar()
	{
		$this->load->view("Shared/head", array("title" => "Ver_Futbolista", "estilo" => array("grayscale.css")));
		$this->load->view("Shared/nav");
		$id = $this->uri->segment(3);

		$resultado = array('data' => $this->club_mod->ListarPorID($id));

		$this->load->view('Club/Editar', $resultado);

	}

	function Actualizar()
	{
		$club = $this->input->post();

		$id = $this->uri->segment(3);
		
		$this->club_mod->Editar($id, $club);
		redirect(site_url('Club/index'));
	}

}