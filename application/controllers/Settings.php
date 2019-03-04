<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
	
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
             $query=$this->db->query("SELECT * FROM users");
                $data["veri"]=$query->result();
            
            
		$this->load->view('settings_page',$data);
	}
                public function guncelle($id){
            $data=array(
		'id'=>$this->input->post('Id'),
                'user_id'=>$this->input->post('userId'),
                'first_name'=>$this->input->post('FirstName'),
                'last_name'=>$this->input->post('LastName'),    
                'password'=>$this->input->post('Password'),
                'job'=>$this->input->post('Job'),
                'location'=>$this->input->post('Location'),                     
                'experiance'=>$this->input->post('Expriance'),          
                'skill'=>$this->input->post('skill'), 
                'goal'=>$this->input->post('Goal'),  
                'e_mail	'=>$this->input->post('E_mail')
                ) ; 
               $this->Database_Model->update_data("users",$data,$id);
               $this->session->set_flashdata("mesaj","Üye Ekleme Başariyla Gerçekleştirildi..");     
               redirect(base_url().'Admin/ayarlar');
               
	}
	


}