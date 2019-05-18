<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {
	
	public function __construct()
	{
		parent :: __construct();
                    $this->load->model('Database_Model');
                    $this->load->model('My_model');
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
                $config['max_size']             = 3000;
                $config['max_width']            = 3024;
                $config['max_height']           = 3024;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('picture'))
                {
                        //uyarı mesajı ekle html kısmında.
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata("mesaj","Yüklemede Hata oluştu".$error);
                        $this->load->view('Jobs_picture_add',$data);
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
        
        public function job_view($id){
            $query=$this->db->query("SELECT * FROM jobs ORDER BY RAND() LIMIT 5");
            $data["jobs"]=$query->result();
            $query=$this->db->query("SELECT * FROM jobs WHERE id=".$id);
            $data["veriler"]=$query->result();
            $this->load->view('job_page_view',$data);
            
         }
        public function search($durum){
             
            $query=$this->db->query("SELECT * FROM jobs WHERE id=".$id);
            $data["veriler"]=$query->result();
            $this->load->view('job_page_view',$data);
            
         }
         
        function search_keyword(){
        $keyword = $this->input->post('keyword');
        $data['results']=$this->My_model->search($keyword);
        $this->load->view('result_view',$data);
        }
        
        function search_keyword_jobs(){
        $keyword = $this->input->post('keyword');
        $data['results']=$this->My_model->search_jobs($keyword);
        $this->load->view('result_view',$data);
        }
        public function Job_save(){
             
              $data=array(
                'user_id'=>$this->session->Member_session["Id"],
                'user_name_l'=>$this->session->Member_session['username'],
                'user_name_f'=>$this->session->Member_session['lastname'],
                'job_id'=> $this->input->post('JobId'),
                'title'=> $this->input->post('JobTitle'),
                'company'=> $this->input->post('JobCompany'),
                'city'=> $this->input->post('JobCity'),
                'location'=> $this->input->post('JobLocation'),
                'picture'=> $this->input->post('Picture'),
                ); 
            $this->session->set_flashdata("mesaj","Başvurunuz Başariyla gönderildi");
            $this->db->insert("searchjob",$data);
            redirect(base_url().'Home'); 
             
        }
        
        public function Job_view_mine(){
            
        $query=$this->db->query("SELECT * FROM searchjob WHERE user_id=".$this->session->Member_session["Id"]);
        $data["mine_jobs"]=$query->result();
        
        $query=$this->db->query("SELECT * FROM jobs ORDER BY RAND() LIMIT 10");
        $data["jobs"]=$query->result();
        
        
        $this->load->view('contact_list',$data);
             
        }
        public function Job_publish(){
            
        $query=$this->db->query("SELECT * FROM jobs WHERE sender_id=".$this->session->Member_session["Id"]);
        $data["mine_jobs"]=$query->result();
        
        $this->load->view('mine_jobs_publish',$data);
             
        }
        
        }
           