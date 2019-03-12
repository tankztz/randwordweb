<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Words extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('words_model');
        $this->load->helper('url_helper');
	}
	
	public function index()
	{
        $data['title'] = 'ALL WORDS';
        $data['words'] = $this->words_model->get_words();
		$this->load->view('view/show_words', $data);
	}

	public function view($key = NULL)
	{
			$data['this_word'] = $this->news_model->get_words($key);
	}
}
