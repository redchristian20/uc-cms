<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->library('csvimport');
    }


	public function index()
	{
        if ( ! file_exists(APPPATH.'views/main.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
		$this->load->view('header');
        $this->load->view('main');
	}

    public function home()
	{
		$this->load->view('header');
        $this->load->view('main');
	}
}
