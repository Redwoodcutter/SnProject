<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	
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
        public function experience_add(){
            
             $data=array(
                'user_id'=>$this->session->Member_session["Id"], // user_id == session id
                'title'=>$this->input->post('Title'),
                'company'=>$this->input->post('Company'),
                'start_month'=>$this->input->post('StartMonth'),
                'start_year'=>$this->input->post('StartYear'),
                'finish_month'=>$this->input->post('FinishMonth'),
                'finish_year'=>$this->input->post('FinishYear'),
                'e_location'=>$this->input->post('Location'),
                'e_city'=>$this->input->post('City')   
                );     
                        
               $this->db->insert("experiences",$data);
               
               $this->session->set_flashdata("mesaj","Experiences Added");       
               
                redirect(base_url().'Home');        
        
        }
           public function experience_edit(){
               
               $data=array(
                'user_id'=>$this->session->Member_session["Id"], // user_id == session id
                'title'=>$this->input->post('Title'),
                'company'=>$this->input->post('Company'),
                'start_month'=>$this->input->post('StartMonth'),
                'start_year'=>$this->input->post('StartYear'),
                'finish_month'=>$this->input->post('FinishMonth'),
                'finish_year'=>$this->input->post('FinishYear'),
                'e_location'=>$this->input->post('Location'),
                'e_city'=>$this->input->post('City')   
                );
               
               $this->Database_Model->update_data("experiences",$data,$this->input->post('id'));
               redirect(base_url().'Home');        
               
        
        }
}