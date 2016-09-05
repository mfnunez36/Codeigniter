<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Futbolista extends CI_Controller
{
	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('futbolista_mod');
		$this->load->model('pais_mod');
		$this->load->model('club_mod');
		$this->load->model('posicion_mod');
    }

	function index()
	{
		$this->load->view("Shared/head", array("title" => "Futbolistas", "estilo" => array("grayscale.css")));
		$this->load->view("Shared/nav");

		$resultado['data'] = $this->futbolista_mod->ListarFutbolistas();
		$this->load->view('Futbolista/index', $resultado);

		$this->load->view("Shared/footer", array("scripts" => array("grayscale.js", "jquery.easing.min.js")));
	}

	function Agregar()
	{
		$this->load->view("Shared/head", array("title" => "Agregar_Futbolista", "estilo" => array("grayscale.css")));
		$this->load->view("Shared/nav");

		$resultados = array(
			'posiciones' => $this->posicion_mod->ListarPosiciones(),
			'paises'     => $this->pais_mod->ListarPaises(),
			'clubes'     => $this->club_mod->ListarClubes()
		);

		$this->load->view('Futbolista/Agregar', $resultados);


		$futbolista = $this->input->post();

		$this->futbolista_mod->Agregar($futbolista);

	}

	function Editar()
	{
		$this->load->view("Shared/head", array("title" => "Ver_Futbolista", "estilo" => array("grayscale.css")));
		$this->load->view("Shared/nav");
		$id = $this->uri->segment(3);
		$resultados = array(
			'data' 		 => $this->futbolista_mod->ListarPorID($id),
			'posiciones' => $this->posicion_mod->ListarPosiciones(),
			'paises'     => $this->pais_mod->ListarPaises(),
			'clubes'     => $this->club_mod->ListarClubes()
		);

		$this->load->view('Futbolista/Editar', $resultados);

	}

	function Actualizar()
	{
		$futbolista = $this->input->post();

		$id = $this->uri->segment(3);
		
		$this->futbolista_mod->Editar($id, $futbolista);
		redirect(site_url('Futbolista/index'));
	}

	function Eliminar()
	{
		$id = $this->uri->segment(3);
		$this->futbolista_mod->Eliminar($id);
		redirect(site_url('Futbolista/index'));
	}
}
?>