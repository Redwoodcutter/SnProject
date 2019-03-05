<?php


class Database_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
		public function login($tablo,$email,$password)
		{
			$this->db->select("*");
			$this->db->from($tablo);
			$this->db->where('e_mail',$email);
			$this->db->where('password',$password);
			$this->db->limit(1);
			$query=$this->db->get();  // verileri getir
			
			if($query->num_rows()==1){
				return $query->result();
			}else{
				return false;
			}
			
			
		}
            public function update_data($tablo,$data,$id){
                $this->db->where('id',$id);
                $this->db->update($tablo,$data);
                return true;
            }
}

?>