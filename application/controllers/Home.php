<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent :: __construct();
                    $this->load->model('Database_Model');
                    $this->load->model('Ajaxsearch_model');
                    $this->load->helper('url');
                    if(!$this->session->userdata("Member_session"))
                    redirect(base_url().'Login/login_ol');
                    
	}
	
	public function index()
	{        
            $query=$this->db->query("SELECT * FROM users WHERE id=".$this->session->Member_session['Id']);
            $data["veriler"]=$query->result();
            
            $query=$this->db->query("SELECT * FROM relations WHERE user_id=".$this->session->Member_session["Id"]." ORDER BY RAND() LIMIT 1");
            $data["timeline_relations"]=$query->result();
            
            $query=$this->db->query("SELECT * FROM timeline WHERE user_id=".$this->session->Member_session["Id"]." ORDER BY RAND() LIMIT 10");
            $data["timeline_post"]=$query->result();
            
            $query=$this->db->query("SELECT * FROM relations WHERE status='0' ORDER BY RAND() LIMIT 2");
            $data["guess"]=$query->result();

            $this->load->view('home_page_review',$data);
	}
         public function login_cik()
        { 
            $this->session->unset_userdata("Member_session");
            redirect(base_url().'Login');    
        }
        
         public function profile($id) // Profile Page all of users
        {       
            $query=$this->db->query("SELECT * FROM experiences WHERE user_id=$id");
            $data["user_id"]=$query->result();
            $query=$this->db->query("SELECT * FROM skills WHERE user_id=$id");
            $data["su_id"]=$query->result(); // su_id == skills user id 
            $query=$this->db->query("SELECT * FROM goals WHERE user_id=$id");
            $data["gu_id"]=$query->result(); // gu_id == goals user id
            $query=$this->db->query("SELECT * FROM educations WHERE user_id=$id");
            $data["eu_id"]=$query->result(); // eu_id == educations user id
            $query=$this->db->query("SELECT * FROM users WHERE id=$id");
            $data["veriler"]=$query->result();
           
            $query=$this->db->query("SELECT * FROM relations WHERE other_user_id=$id");
            $data["relations"]=$query->result();
            $query=$this->db->query("SELECT * FROM relations WHERE user_id=$id");
            $data["relation"]=$query->result();
             
             
            $this->load->view('profile_page',$data);
        }
         public function social()
        {
            $this->load->view('social_page');
        }
         public function job()
        {    
            $query=$this->db->query("SELECT * FROM jobs ORDER BY RAND() LIMIT 10");
            $data["jobs"]=$query->result();
            $query=$this->db->query("SELECT * FROM jobs");
            $data["Search"]=$query->result();
            $this->load->view('job_page',$data);
        }
         public function message()
        {
            $query=$this->db->query("SELECT * FROM relations WHERE other_user_id=".$this->session->Member_session["Id"]);
            $data["other_user_id"]=$query->result();
            $this->load->view('message_page',$data);
        }
        public function connections($id)
        {
            $query=$this->db->query("SELECT * FROM users WHERE id=$id");
            $data["veriler"]=$query->result();
            
            $query=$this->db->query("SELECT * FROM relations WHERE other_user_id=".$this->session->Member_session["Id"]);
            $data["other_user_id"]=$query->result();
             
             $this->load->view('social_page',$data);
        }  
        
        
        function fetch()
        {
             $output = '';
             $query = '';
             $this->load->model('ajaxsearch_model');
             if($this->input->post('query'))
             {
              $query = $this->input->post('query');
             }
             $data = $this->ajaxsearch_model->fetch_data($query);
             $output .= '
             <div class="table-responsive">
                <table class="table table-bordered table-striped">
                 <tr>
                  <th>id</th>
                  <th>user_id</th>
                  <th>first_name</th>
                  <th>last_name</th>
                  <th>e mail</th>
                 </tr>
             ';
             if($data->num_rows() > 0)
             {
              foreach($data->result() as $row)
              {
               $output .= '
                 <tr>
                  <td>'.$row->id.'</td>
                  <td>'.$row->user_id.'</td>
                  <td>'.$row->first_name.'</td>
                  <td>'.$row->last_name.'</td>
                  <td>'.$row->e_mail.'</td>
                 </tr>
               ';
              }
             }
             else
             {
              $output .= '<tr>
                  <td colspan="5">No Data Found</td>
                 </tr>';
             }
             $output .= '</table>';
             echo $output;
        }
        
        public function comments($id)
        {   
            $query=$this->db->query("SELECT * FROM timeline WHERE id=".$id);
            $data["veri"]=$query->result();
            $query=$this->db->query("SELECT * FROM comment WHERE timeline_id=".$id);
            $data["timeline_id"]=$query->result();
            
             
            $this->load->view('comment_page',$data);
        } 
        public function comments_add(){
             $id = $this->input->post('Id');
            $data=array(
                'sender_id'=>$this->session->Member_session["Id"],
                'timeline_id'=>$this->input->post('Id'),
                'msg'=>$this->input->post('Msg'),
                'user_name_f'=>$this->session->Member_session["username"],
                'user_name_l'=>$this->session->Member_session["lastname"],
                'user_pic'=>$this->session->Member_session["picture"]
                ); 
            
           $this->db->insert("comment",$data);
           redirect(base_url().'Home/comments/'.$id);    
        }
}