<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller
{
	function __construct() 
	{
		parent::__construct();
    }
    
	function index()
	{
		$this->load->helper("url");
		$this->load->view("Shared/head", array("title" => "Bienvenido a Futbolistas", "estilo" => array("grayscale.css", "base.css")));
		$this->load->view("Shared/nav");
		$this->load->view("Shared/header");
		$this->load->view("Home/index");
		$this->load->view("Shared/footer", array("scripts" => array("grayscale.js", "jquery.easing.min.js")));
	}
}
?>