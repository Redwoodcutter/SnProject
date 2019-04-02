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
               
               redirect(base_url().'Home/profile/'.$this->session->Member_session["Id"]);        
        
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
              redirect(base_url().'Home/profile/'.$this->session->Member_session["Id"]);        
               
        
        }
          public function education_add(){
               
               $data=array(
                'user_id'=>$this->session->Member_session["Id"], // user_id == session id
                'school'=>$this->input->post('School'),
                'department'=>$this->input->post('Department'),
                'degree'=>$this->input->post('Degree'),
                'point'=>$this->input->post('Point'),
                'start_month'=>$this->input->post('StartMonth'),
                'start_year'=>$this->input->post('StartYear'),
                'finish_month'=>$this->input->post('FinishMonth'),
                'finish_year'=>$this->input->post('FinishYear')   
                );
               
                $this->db->insert("educations",$data);
                redirect(base_url().'Home/profile/'.$this->session->Member_session["Id"]);        
        }
        public function education_edit(){
               
               $data=array(
                'user_id'=>$this->session->Member_session["Id"], // user_id == session id
                'school'=>$this->input->post('School'),
                'department'=>$this->input->post('Department'),
                'degree'=>$this->input->post('Degree'),
                'point'=>$this->input->post('Point'),
                'start_month'=>$this->input->post('StartMonth'),
                'start_year'=>$this->input->post('StartYear'),
                'finish_month'=>$this->input->post('FinishMonth'),
                'finish_year'=>$this->input->post('FinishYear')   
                );
               
               $this->Database_Model->update_data("educations",$data,$this->input->post('id'));
                redirect(base_url().'Home/profile/'.$this->session->Member_session["Id"]);        
        }
        public function skill_add(){
               
               $data=array(
                'user_id'=>$this->session->Member_session["Id"], // user_id == session id
                'school'=>$this->input->post('School'),
                'department'=>$this->input->post('Department'),
                'degree'=>$this->input->post('Degree'),
                'point'=>$this->input->post('Point'),
                'start_month'=>$this->input->post('StartMonth'),
                'start_year'=>$this->input->post('StartYear'),
                'finish_month'=>$this->input->post('FinishMonth'),
                'finish_year'=>$this->input->post('FinishYear')   
                );
               
              $this->db->insert("skills",$data);
                redirect(base_url().'Home/profile/'.$this->session->Member_session["Id"]);        
        }
        public function goal_add(){
               
               $data=array(
                'user_id'=>$this->session->Member_session["Id"], // user_id == session id
                'title'=>$this->input->post('Title'),
                'start_month'=>$this->input->post('StartMonth'),
                'start_year'=>$this->input->post('StartYear'),
                'finish_month'=>$this->input->post('FinishMonth'),
                'finish_year'=>$this->input->post('FinishYear'),
                'goal_text'=>$this->input->post('GoalText') 
                );
               
               $this->db->insert("goals",$data);
                redirect(base_url().'Home/profile/'.$this->session->Member_session["Id"]);        
        }
        public function goal_edit(){
               
               $data=array(
                'user_id'=>$this->session->Member_session["Id"], // user_id == session id
                'title'=>$this->input->post('Title'),
                'start_month'=>$this->input->post('StartMonth'),
                'start_year'=>$this->input->post('StartYear'),
                'finish_month'=>$this->input->post('FinishMonth'),
                'finish_year'=>$this->input->post('FinishYear'),
                'goal_text'=>$this->input->post('GoalText') 
                );
               
               $this->Database_Model->update_data("goals",$data,$this->input->post('id'));
                redirect(base_url().'Home/profile/'.$this->session->Member_session["Id"]);        
        }
        public function relation($id){
            
          $query=$this->db->query("SELECT * FROM users WHERE id=$id");
          $data["users"]=$query->result();
          
            $data=array(
                'user_id'=>$this->session->Member_session["Id"], // user_id == session id
                'other_user_id'=>$this->input->post('Id'),
                'user_firstname'=>$this->session->Member_session["username"],
                'user_lastname'=>$this->session->Member_session["lastname"],
                'status'=>$this->input->post('Status'),
                );
           
            $data1=array(
                'other_user_id'=>$this->session->Member_session["Id"],
                'user_id'=>$this->input->post('Id'),
                'user_firstname'=>$this->input->post('Firstname'),
                'user_lastname'=>$this->input->post('Lastname'),
                'status'=>$this->input->post('Status1'),
                );
            
            $this->db->insert("relations",$data);
            $this->db->insert("relations",$data1);
            redirect(base_url().'Home/profile/'.$this->session->Member_session["Id"]);
        }
        
        public function relation_edit($id){
            
            
            $data1=array(
                'status'=>$this->input->post('Status1'),
                );
            
            $this->Database_Model->update_data("relations",$data1,$id);
            $this->load->view('message_page');
            
            
        }
        
        
         public function liste($durum)
	{
            $query=$this->db->query("SELECT * FROM  WHERE ='$durum'");
            $data["durum"]=$query->result();
            
            $this->load->view("",$data);
		
		
	}
}