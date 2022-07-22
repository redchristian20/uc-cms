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
        if ( ! file_exists(APPPATH.'views/home.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
		$this->load->view('header');
        $this->load->view('home');
	}

    public function view($page)
	{

        if (!file_exists(APPPATH.'views/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
        switch($page)
        {
            case 'home':
                $this->load->view('header');
                $this->load->view($page);
                break;
            case 'events':
                $this->load->view('header');
                $this->load->view($page);
                break;
            case 'certificate_verification':
                $this->load->view('header');
                $this->load->view($page);
                break;
            case 'create_event':
                $this->load->view('header');
                $this->load->view($page);
                break;
            case 'admin_login':
                $this->load->view('header');
                $this->load->view($page);
                break;
            default:
                $this->load->view('header');
                $this->load->view($page);
                break;
        }
	}
}
