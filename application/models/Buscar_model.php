<?php 
/**
* 
*/
class Buscar_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	public function get_eventos($slug = FALSE)
	{
        if ($slug === FALSE)
        {
                $query = $this->db->get('evento');
                return $query->result_array();
        }

        $query = $this->db->get_where('evento', array('id_evento' => $slug));
        return $query->row_array();
	}

}


 ?>