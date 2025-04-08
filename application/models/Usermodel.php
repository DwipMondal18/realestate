<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermodel extends CI_Model {

    public function ulogin($username,$password)
    {
        
        $this->db->where('name',$username);
        $this->db->where('pass',$password);
        $qure=$this->db->get('login');
       
        return $qure->result();
        

    }
}