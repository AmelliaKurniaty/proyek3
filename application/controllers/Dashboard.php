<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Dashboard extends CI_Controller {
        
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
            $this->load->helper('url');
        }
        
        public function index()
        {
            $this->load->view('template/header');
            $this->load->view('welcome_page');
            $this->load->view('template/footer');
        }
    
    }
    
    /* End of file DashboardController.php */
?>