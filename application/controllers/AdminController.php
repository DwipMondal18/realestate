<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
	
	public function index()
	{
        $this->load->view('admin_common/header');
        $this->load->view('admin/index');
        $this->load->view('admin_common/footer');

    }
}