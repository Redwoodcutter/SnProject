<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timeline extends CI_Controller {
	
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
            $query=$this->db->query("SELECT * FROM users WHERE id=".$this->session->Member_session['Id']);
            $data["veriler"]=$query->result();
            $this->load->view('home_page',$data);
	}
        public function text_send(){
            
            $data=array(
                'user_id'=>$this->session->Member_session["Id"], // user_id == session id
                'mesaj'=>$this->input->post('Message'),
                'begeni'=>$this->input->post('Like'),
                'username'=> $this->input->post('Username'),
                ); 
            
           $this->db->insert("timeline",$data);
           redirect(base_url().'/Home');  
             
        }
        
}