<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function index() {
        // Fetch all users from the 'form' table
        $query = $this->db->get('form');
        $data['users'] = $query->result_array(); 

        // Load views
        $this->load->view('common/header');
        $this->load->view('register/form', $data); 
        $this->load->view('common/footer');
    }

    public function submit() {
        // Handle form submission for adding a new user
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $gender = $this->input->post('gender');
        $phone = $this->input->post('phone');

        $data = [
            'name' => $name,
            'email' => $email,
            'gender' => $gender,
            'phone' => $phone
        ];

        $this->db->insert('form', $data);
        redirect(base_url('RegisterController/index'));
    }

    public function edit($id) {
        // Fetch user data by ID
        $query = $this->db->get_where('form', ['Id' => $id]);
        $data['user'] = $query->row_array();

        if (!$data['user']) {
            show_404(); // Show 404 if user not found
        }

        // Load edit view with user data
        $this->load->view('common/header');
        $this->load->view('register/editpage', $data);
        $this->load->view('common/footer');
    }

    public function update($id) {
        // Update user data in the database
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $gender = $this->input->post('gender');
        $phone = $this->input->post('phone');

        $data = [
            'name' => $name,
            'email' => $email,
            'gender' => $gender,
            'phone' => $phone
        ];

        $this->db->where('Id', $id);
        $this->db->update('form', $data);

        redirect(base_url('RegisterController/index'));
    }

    public function delete($id) {
        // Delete user from the database
        $this->db->where('Id', $id);
        $this->db->delete('form');

        redirect(base_url('RegisterController/index'));
    }
}
