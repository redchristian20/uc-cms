<?php
class Pages extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
        }

        public function index()
        {
                $data['workshops'] = $this->workshops_model->get_workshops();
                $this->load->view('templates/header', $data);
                $this->load->view('pages/home', $data);
                $this->load->view('templates/footer', $data);  
        }

        public function view($page)
        {
                if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                        // Whoops, we don't have a page for that!
                        show_404();
                }

                if($page == 'home')
                {
                        $data['workshops'] = $this->workshops_model->get_workshops();
                        $this->load->view('templates/header', $data);
                        $this->load->view('pages/'.$page, $data);
                        $this->load->view('templates/footer', $data);
                }

                else if($page == 'events')
                {
                        $data['workshops'] = $this->workshops_model->get_workshops();
                        $this->load->view('templates/header', $data);
                        $this->load->view('pages/events', $data);
                        $this->load->view('templates/footer');
                }
                
                else if($page == 'certificates')
                {
                        $data['workshops'] = $this->participants_model->get_participants();
                        $this->load->view('templates/header', $data);
                        $this->load->view('pages/certificates', $data);
                        $this->load->view('templates/footer');
                } 

        }
        public function show($slug = NULL)
        {
                $data['workshop'] = $this->workshops_model->get_workshop_by_id($slug);
                if (empty($data['workshop']))
                {
                        show_404();
                }
                $this->load->view('templates/header',$data);
                $this->load->view('pages/show',$data);
                $this->load->view('templates/footer');
        }
}