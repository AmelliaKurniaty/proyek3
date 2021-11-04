<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login extends CI_Controller {
        
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
            $this->load->helper('url');
        }
        
        public function index()
        {
            $data['title'] = "Login";
            $this->load->view('template/header');
            $this->load->view('login');
            $this->load->view('template/footer');
        }
    
    }
    
    /* End of file LoginController.php */
    
?>