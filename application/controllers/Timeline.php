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
                'etiket'=>$this->input->post('tag'),
                'picture'=>$this->input->post('picture')
                ); 
            
           $this->db->insert("timeline",$data);
           redirect(base_url().'/Home');  
             
        }
       public function do_upload(){
                $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 3000;
                $config['max_width']            = 3024;
                $config['max_height']           = 3024;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('Picture'))
                {
                        //uyarı mesajı ekle html kısmında.
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata("mesaj","Yüklemede Hata oluştu".$error);
                          redirect(base_url().'home');
                }
                else
                {
                        $upload_data = $this->upload->data();
                        $data=array(
                          'picture'=>$upload_data["file_name"],
                            'begeni'=>$this->input->post('Like'),
                            'username'=> $this->input->post('Username'),
                            'user_id'=>$this->session->Member_session["Id"],
                            'etiket'=>$this->input->post('tag')
                        );
                        $this->db->insert("timeline",$data);
                        redirect(base_url().'home');
                        
                }
        }
          public function video_send(){
              
            $keyword = $this->input->post('keyword');
            
            $keyword = preg_replace("#.*youtube\.com/watch\?v=#", "", $keyword);
            $data=array(
                'user_id'=>$this->session->Member_session["Id"], // user_id == session id
                'video'=>$keyword
                ); 
            
           $this->db->insert("timeline",$data);
           redirect(base_url().'/Home');  
             
        }
        
}