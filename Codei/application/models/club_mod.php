<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Club_mod extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
    }

    function ListarClubes()
    {
    	try 
    	{
    		$query = $this->db->get('club');
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

    function Agregar($club)
    {
        try 
        {
            if ($club != null) 
            {
                $this->db->insert('club', array(
                            'nombre' => $club['nombre'], 
                            'estadio' => $club['estadio']
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

    function ListarPorID($id)
    {
        try 
        {
            $query = $this->db->select('id, nombre, estadio')->from('club')->where('id', $id)->get();

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

    function Editar($id, $club)
    {
        try 
        {
            $club = array(
                'nombre'      => $club['nombre'], 
                'estadio'        => $club['estadio']
            );

            $this->db->where('id', $id);

            $query = $this->db->update('club', $club);
            
        } 
        catch (Exception $e) 
        {
            return $e;  
        }
    }

}