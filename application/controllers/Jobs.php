<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {
	
	public function __construct()
	{
		parent :: __construct();
                    $this->load->model('Database_Model');
                    $this->load->helper('url');
                    if(!$this->session->userdata("Member_session"))
                    redirect(base_url().'Login/login_ol');
                    
	}
	
	public function Saved()
	{        
            $query=$this->db->query("SELECT * FROM users WHERE id=".$this->session->Member_session['Id']);
            $data["veriler"]=$query->result();
            $this->load->view('job_add',$data);
	}
        
        public function Interesting()
	{        
            $query=$this->db->query("SELECT * FROM users WHERE id=".$this->session->Member_session['Id']);
            $data["veriler"]=$query->result();
            $this->load->view('job_add',$data);
	}
        public function Search()
	{        
            $query=$this->db->query("SELECT * FROM users WHERE id=".$this->session->Member_session['Id']);
            $data["veriler"]=$query->result();
            $this->load->view('job_add',$data);
	}
        public function Add()
	{        
            $query=$this->db->query("SELECT * FROM users WHERE id=".$this->session->Member_session['Id']);
            $data["veriler"]=$query->result();
            $this->load->view('job_add',$data);
	}
        public function add_save(){
            
             $data=array(
                'sender_id'=>$this->session->Member_session["Id"], // user_id == session id
                'title'=>$this->input->post('Unvan'),
                'company'=>$this->input->post('Company'),
                'city'=> $this->input->post('City'),
                'country'=>$this->input->post('Country'),
                'experiance'=> $this->input->post('Status'),
                'sector'=>$this->input->post('WorkStatus'),
                'work_time'=> $this->input->post('WorkPlace'),
                'work_status'=>$this->input->post('WorkInteresting'),
                'status_text'=> $this->input->post('editor1')
                ); 
            $this->db->insert("jobs",$data);
            redirect(base_url().'Jobs/job_picture'); 
        }
        public function job_picture(){
            
            $query=$this->db->query("SELECT * FROM jobs WHERE sender_id=".$this->session->Member_session['Id']." ORDER BY id DESC LIMIT 1");
            $data["veriler"]=$query->result();
            $this->load->view('Jobs_picture_add',$data);
            
        }
         public function job_picture_save($id){
            
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
                        $this->load->view('job_profile_picture',$data);
                }
                else
                {
                        $upload_data = $this->upload->data();
                        $data=array(
                          'picture'=>$upload_data["file_name"]  
                        );
                        $this->Database_Model->update_data("jobs",$data,$id);
                        redirect(base_url().'Jobs/job_picture_status');
                        
                }
        }
         public function job_picture_status(){
            $query=$this->db->query("SELECT * FROM jobs WHERE sender_id=".$this->session->Member_session['Id']." ORDER BY id DESC LIMIT 1");
            $data["veriler"]=$query->result();
            $this->load->view('jobs_share',$data);
        }
         public function job_picture_status_save($id){
             $data=array(
                'status'=> $this->input->post('Status')
                ); 
             $this->Database_Model->update_data("jobs",$data,$id);
              redirect(base_url().'Home');
        }
        
        
        
            
        }
           