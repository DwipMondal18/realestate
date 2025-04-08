<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogController extends CI_Controller {
	
	public function index()
	{
		// $this->load->view('admin/login');
		$this->load->model('Usermodel');

		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if ($this->form_validation->run() == false){
			$this->load->view('admin/login');
			
		}
		else{
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$data=$this->Usermodel->ulogin($username,$password);

			if(!empty($data))
			{
				// echo "it is sucessfull";
				$this->session->set_userdata('user',$user);
				redirect(base_url('admincontroller'));
			}
			else
			{
				// echo "it not sucessfull";
				$this->session->set_flashdata('errorMsg','Username/Password incorrect');
				redirect(base_url('LogController'));
			}
		}
	}

	

}
