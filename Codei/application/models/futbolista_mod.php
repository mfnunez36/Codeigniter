<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Futbolista_mod extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
    }

    function Agregar($futbolista)
    {
        try 
        {
            if ($futbolista != null) 
            {
                $this->db->insert('futbolista', array(
                            'nombre' => $futbolista['nombre'], 
                            'edad' => $futbolista['edad'], 
                            'id_posicion' => $futbolista['posicion'], 
                            'id_pais' => $futbolista['pais'], 
                            'id_club' => $futbolista['club']
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

    function ListarFutbolistas()
    {
        try 
    	{
            $query = $this->db->select('f.id, f.nombre as nombre, f.edad as edad, p.nombre as posicion, pa.nombre as pais, c.nombre as club, c.estadio as estadio')
    		->from('futbolista f')
            ->join('posicion p', 'f.id_posicion = p.id', 'inner')
            ->join('pais pa', 'f.id_pais = pa.id', 'inner')
            ->join('club c', 'f.id_club = c.id')->get();

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

    function ListarPorID($id)
    {
    	try 
    	{
            $query = $this->db->select('f.id, f.nombre as nombre, f.edad as edad, p.id as id_posicion, p.nombre as posicion, pa.id as id_pais, pa.nombre as pais, c.id as id_club, c.nombre as club')
            ->from('futbolista f')
            ->join('posicion p', 'f.id_posicion = p.id', 'inner')
            ->join('pais pa', 'f.id_pais = pa.id', 'inner')
            ->join('club c', 'f.id_club = c.id')
            ->where('f.id', $id)->get();

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

    function Editar($id, $futbolista)
    {
    	try 
    	{
            $futbolista = array(
                'nombre'      => $futbolista['nombre'], 
                'edad'        => $futbolista['edad'], 
                'id_posicion' => $futbolista['posicion'], 
                'id_pais'     => $futbolista['pais'], 
                'id_club'     => $futbolista['club']
            );

    		$this->db->where('id', $id);

    		$query = $this->db->update('futbolista', $futbolista);
	    	
    	} 
    	catch (Exception $e) 
    	{
    		return $e;	
    	}
    }

    function Eliminar($id)
    {
        try 
        {
            $this->db->delete('futbolista', array('id' => $id));            
        } 
        catch (Exception $e) 
        {            
            return $e;
        }
    }

}

?>