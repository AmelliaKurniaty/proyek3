<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class DashboardController extends CI_Controller {
    
        public function index()
        {
            $this->load->view('welcome_page');
        }
    
    }
    
    /* End of file DashboardController.php */
?>