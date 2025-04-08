<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceModel extends CI_Model {

  

    
    public function se1()
    {
        $query = $this->db->get('se1');
		return $query->row_array();
    }

    public function se2()
    {
        $query = $this->db->get('se2');
		return $query->result_array();
    }

    
}