<?php

Class My_model Extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function search($keyword)
    {
        $this->db->or_like('city',$keyword);
        $this->db->or_like('country',$keyword);
        $query = $this->db->get('jobs');
        return $query->result();
    }
      function search_jobs($keyword)
    {
        $this->db->or_like('title',$keyword);
        $this->db->or_like('company',$keyword);
        $this->db->or_like('work_status',$keyword);
        $this->db->or_like('experiance',$keyword);
        $this->db->or_like('sector',$keyword);
        $query = $this->db->get('jobs');
        return $query->result();
    }
}   