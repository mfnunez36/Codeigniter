<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Posicion_mod extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
    }

    function ListarPosiciones()
    {
    	try 
    	{
    		$query = $this->db->get('posicion');
	    	if ($query->num_rows() > 0)
	    	{
	    		return $query;
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

    function Agregar($posicion)
    {
        try 
        {
            if ($posicion != null) 
            {
                $this->db->insert('posicion', array('nombre' => $posicion['nombre']));

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