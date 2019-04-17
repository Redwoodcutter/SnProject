<?php
class Ajaxsearch_model extends CI_Model
{
        function fetch_data($query)
        {
            $this->db->select("*");
            $this->db->from("users");
            if($query != '')
            {
             $this->db->like('id', $query);
             $this->db->or_like('user_id', $query);
             $this->db->or_like('first_name', $query);
             $this->db->or_like('last_name', $query);
             $this->db->or_like('e_mail', $query);
            }
            $this->db->order_by('id', 'DESC');
            return $this->db->get();
        }
}
?>