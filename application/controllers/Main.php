<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('csv_import_model');
        $this->load->library('csvimport');
        $this->load->library("form_validation");
    }
	public function index()
	{
        $this->load->view('create_event');
	}

    public function insert_workshop()
    {
        echo 'insert_workshop';
    }
}
