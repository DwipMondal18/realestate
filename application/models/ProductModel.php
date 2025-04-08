<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductModel extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    
    public function getAllProduct()
    {
        $q= $this->db->get('products');

        return $q->result();
    }

    // public function insertProduct($data)
    // {
    //     $this->db->insert('products',$data);

        
    // }
}


