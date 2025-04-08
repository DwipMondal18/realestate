<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutModel extends CI_Model {

  

    
    public function first_section1()
    {
        $query = $this->db->get('first_section1');
		return $query->row_array();
    }

    public function first_section2()
    {
        $query = $this->db->get('first_section2');
		return $query->result_array();
    }

    public function second_section1()
    {
        $query = $this->db->get('second_section1');
		return $query->row_array();
    }

    public function third_section1()
    {
        $query = $this->db->get('third_section1');
		return $query->row_array();
    }

    
    public function forth_section()
    {
        $query = $this->db->get('forth_section');
		return $query->row_array();
    }

    public function five_section()
    {
        $query = $this->db->get('five_section');
		return $query->result_array();
    }

    public function five_section2()
    {
        $query = $this->db->get('five_section2');
		return $query->row_array();
    }

    public function five_section3()
    {
        $query = $this->db->get('five_section3');
		return $query->result_array();
    }

    public function six_section1()
    {
        $query = $this->db->get('six_section1');
		return $query->row_array();
    }

    public function six_section2()
    {
        $query = $this->db->get('six_section2');
		return $query->result_array();
    }

    public function seven_section1()
    {
        $query = $this->db->get('seven_section1');
		return $query->row_array();
    }

    public function seven_section2()
    {
        $query = $this->db->get('seven_section2');
		return $query->result_array();
    }

    public function eight_section()
    {
        $query = $this->db->get('eight_section');
		return $query->row_array();
    }
    public function eight_section2()
    {
        $query = $this->db->get('eight_section2');
		return $query->row_array();
    }
    public function eight_section3()
    {
        $query = $this->db->get('eight_section3');
		return $query->result_array();
    }

    
}