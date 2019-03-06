<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent :: __construct();
                    $this->load->model('Database_Model');
                    $this->load->helper('url');
                    if(!$this->session->userdata("Member_session"))
                    redirect(base_url().'Login/login_ol');
                    
	}
	
	public function index()
	{        
		$this->load->view('home_page');
	}
         public function login_cik()
        { 
            $this->session->unset_userdata("Member_session");
            redirect(base_url().'Login');    
        }
        
         public function profile($id)
        { 
             $query=$this->db->query("SELECT * FROM users WHERE id=$id");
             $data["veriler"]=$query->result();
             
             $this->load->view('profile_page',$data);
        }
         public function social()
        {
             $this->load->view('social_page');
        }
         public function job()
        {
             $this->load->view('job_page');
        }
         public function message()
        {
             $this->load->view('message_page');
        }
}