<?php
class Words_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_words($id = FALSE, $seed = FALSE)
	{
		if ($seed === FALSE)
		{
			$query = $this->db->query('SELECT word FROM allwords LIMIT 10');
			return $query->result_array();
		}
		else
		{
			//TODO
			$query = $this->db->get_where('allwords', array('word' => $id));
			return $query->row_array();
		}
	}

}
