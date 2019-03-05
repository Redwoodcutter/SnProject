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
                $query=$this->db->query("SELECT * FROM users WHERE id=".$this->session->Member_session["Id"]);
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
               redirect(base_url().'Settings');
               
	}
         public function picture($id){
        
             $data["id"]=$id;
             $this->load->view('profile_picture',$data);
	}
         public function picture_save($id){
               $data["id"]=$id;
                 
                $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 300;
                $config['max_width']            = 1024;
                $config['max_height']           = 1024;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('picture'))
                {
                        //uyarı mesajı ekle html kısmında.
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata("mesaj","Yüklemede Hata oluştu".$error);
                        $this->load->view('profile_picture',$data);
                }
                else
                {
                        $upload_data = $this->upload->data();
                        $data=array(
                          'Picture'=>$upload_data["file_name"]  
                        );
                        $this->load->model('Database_Model');
                        $this->Database_Model->update_data("users",$data,$id);
                        redirect(base_url().'Settings');
                        
                }
        
            
	}
	


}