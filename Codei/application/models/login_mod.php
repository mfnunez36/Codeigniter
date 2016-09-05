<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_mod extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
    }



	function Autenticar($usuario)
	{
		try 
		{
			$this->db->where('correo', $usuario['correo']);
			$this->db->where('contraseña', $usuario['contraseña']);
			$query = $this->db->get('usuario');
			
			if ($query->num_rows() > 0) 
			{
				return $query->row();
			} 
			else 
			{
				return null;
			}
		} 
		catch (Exception $e) 
		{
			return $e;
		}
				
	}

	function Registrar($usuario)
	{
		try 
		{
			if ($usuario != null) 
			{
				$this->db->insert('usuario', array(
					'nombre' => $usuario['nombre'], 
					'correo' => $usuario['correo'], 
					'contraseña' => $usuario['contraseña']
				));
				
				return true;
			}
			else
			{
				return false;
			}
																			
		} 
		catch (Exception $e) 
		{
			return $e;	
		}
		

	}

}

