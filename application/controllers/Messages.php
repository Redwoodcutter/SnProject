<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages extends CI_Controller {
	
	public function __construct()
	{
		parent :: __construct();
                    $this->load->model('Database_Model');
                    $this->load->helper('url');
                    if(!$this->session->userdata("Member_session"))
                    redirect(base_url().'Login/login_ol');
                    
	}
        public function message_list($id){
            
             $query=$this->db->query("SELECT * FROM relations WHERE other_user_id=".$this->session->Member_session["Id"]);
             $data["other_user_id"]=$query->result();
            
             $query=$this->db->query("SELECT * FROM messages WHERE user_id=".$this->session->Member_session['Id']);
             $data["user_id"]=$query->result();
             
             $query=$this->db->query("SELECT * FROM messages WHERE other_user_id=$id");
             $data["o_user_id"]=$query->result();
             
            $this->load->view('message_page',$data);
             
        }
           public function message_send($id){
            $query=$this->db->query("SELECT * FROM users WHERE id=$id");
            $data["user_id"]=$query->result();
             
            $data=array(
                'user_id'=>$this->session->Member_session["Id"], // user_id == session id
                'other_user_id'=>$this->input->post('Id'),
                'message'=>$this->input->post('Message'),
                ); 
            
           
           $this->db->insert("messages",$data);
             
        }
        
        
}