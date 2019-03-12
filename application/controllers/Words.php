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
        $data['words'] = $this->words_model->get_words();
        $data['title'] = 'ALL WORDS';
		$this->load->view('show_words');
	}
}
