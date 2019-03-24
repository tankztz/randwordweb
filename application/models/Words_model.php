<?php
class Words_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_words($seed = FALSE, $num = 25)
	{
		if ($seed == FALSE)
		{
			$seed = mt_rand(0, 9999)*10000 + 13;
		}

		if ($seed < 1000) throw new Exception('Invalid Seed.');

		//seed correct here
		$total = $seed % 10000;
		$trueSeed = $seed / 10000;
		$sql = 'SELECT word FROM allwords WHERE ';
		$output = [];
		for ($i = 0; $i < $num; $i++)
		{
			$thissql = $sql;
			$output = array_merge($output, $this->get_word_with_id($trueSeed % $total + 1));
			#echo $i." ".$trueSeed % $total." <br>";#echo $output[1];
			$trueSeed = $this->next_seed($trueSeed);
		}
		return $output;
	}

	public function get_word_with_id($id)
	{
		if ($id === FALSE) throw new Exception('id is FALSE.');

		$query = $this->db->query('SELECT word FROM allwords WHERE id='.$id);
		return $query->result_array();
	}

	public function next_seed($seed)
	{
		$seed *= 997;
		$seed += 12345;
		$seed %= 1000007;
		$seed *= 997;
		$seed += 12345;
		$seed %= 1000007;
		return $seed;
	}
}
