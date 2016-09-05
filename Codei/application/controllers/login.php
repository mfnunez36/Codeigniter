<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
	function __construct() 
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('login_mod');
    }

	function index()
	{
		$this->load->view("Shared/head", array("title" => "Iniciar Sesion", "estilo" => array("grayscale.css")));
		$this->load->view("Shared/nav");
		$this->load->view('Login/index');

	}

	function InicioSession()
	{
		$usuario = array('correo' => $this->input->post('correo'),
						 'contraseña' => $this->input->post('contraseña'));

		$dato = $this->login_mod->Autenticar($usuario);
		
		if($dato == TRUE)
		{
			echo $dato->nombre, $dato->id, $dato->correo;

			//$this->session->set_userdata($datalogin);
			//redirect(site_url('Home'));
		}					
		else
		{			
			redirect(site_url('Login'));
		}
	}

	function Logout()
	{
		$this->session->sess_destroy();
		redirect(site_url('Login'));
	}

	function Registrate()
	{
		$this->load->view("Shared/head", array("title" => "Registrate", "estilo" => array("grayscale.css")));
		$this->load->view("Shared/nav");
		$this->load->view('Login/Registrate');

		$usuario = $this->input->post(); 

		$this->login_mod->Registrar($usuario);
	}
	
}