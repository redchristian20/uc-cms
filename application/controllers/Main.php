<?php
class Main extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model("workshops_model");
                $this->load->helper('url_helper');
                $this->load->helper('url');
        }

        public function view($page = 'home')
        {
                if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                        // Whoops, we don't have a page for that!
                        show_404();
                }
                $data['workshops'] = $this->workshops_model->get_workshops();
                $this->load->view('templates/header', $data);
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer', $data);
        }
}