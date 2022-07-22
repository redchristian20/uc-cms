<?php
class Main extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
    }
    public function home($page = 'home')
    {
            if ( ! file_exists(APPPATH.'views/'.$page.'.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }
            $this->load->view('header');
            $this->load->view($page);
            $this->load->view('footer');
    }
}