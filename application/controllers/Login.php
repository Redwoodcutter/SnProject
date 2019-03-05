<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent :: __construct();
                    $this->load->helper('url');
                    $this->load->database();
	}
	
	public function index()
	{
		$this->load->view('login_form');
	}
        public function login_ol()
	{	
		
		$email=$this->input->post("Email");
		$password=$this->input->post("Password");
		
		$email=$this->security->xss_clean($email);
		$password=$this->security->xss_clean($password);
		$this->load->model('Database_Model');
		
		$result= $this->Database_Model->login("users",$email,$password);
		
		if($result)
		{
                    $sess_array = array(
                        'Id' => $result[0]->id,
                        'email' => $result[0]->email,
                        'username' => $result[0]->first_name,
                        'picture' => $result[0]->picture,
                    );
                    //session degiskenine atama
                     $this->session->set_userdata("Member_session",$sess_array);
                     redirect(base_url().'Home');        
                }
			else
		{
                        $this->session->set_flashdata("mesaj","Yanlış kullanıcı adı ya da şifre");
			redirect(base_url().'Login');
		}
                
	}
        public function register()
        {    
            $this->load->view('Member_register');
        }
        public function register_add()
        {    
            $data=array(
                'first_name'=>$this->input->post('FirstName'),
                'last_name'=>$this->input->post('LastName'),
                'e_mail'=>$this->input->post('InputEmail'),
                'password'=>$this->input->post('Password')   
                );     
                        
               $this->db->insert("users",$data);
               
               
               $this->session->set_flashdata("mesaj","Kaydiniz Tamamlanmıştır");
               redirect(base_url().'Login');        
               
        }

}

?>