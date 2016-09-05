<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pais_mod extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
    }

    function ListarPaises()
    {
    	try 
    	{
    		$query = $this->db->get('pais');
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

    function Agregar($pais)
    {
        try 
        {
            if ($pais != null) 
            {
                $this->db->insert('pais', array('nombre' => $pais['nombre']));

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
