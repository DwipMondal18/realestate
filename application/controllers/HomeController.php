<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {
	
	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('kalimpage/homepage');
		$this->load->view('common/footer');
	}


	public function about()
	{
		$this->load->model('aboutmodel');
		
		$data['first_section1'] = $this->aboutmodel->first_section1();
		$data['first_section2'] = $this->aboutmodel->first_section2();
		$data['second_section1'] = $this->aboutmodel->second_section1();
		$data['third_section1'] = $this->aboutmodel->third_section1();
		$data['forth_section'] = $this->aboutmodel->forth_section();
		$data['five_section'] = $this->aboutmodel->five_section();
		$data['five_section2'] = $this->aboutmodel->five_section2();
		$data['five_section3'] = $this->aboutmodel->five_section3();
		$data['six_section1'] = $this->aboutmodel->six_section1();
		$data['six_section2'] = $this->aboutmodel->six_section2();
		$data['seven_section1'] = $this->aboutmodel->seven_section1();
		$data['seven_section2'] = $this->aboutmodel->seven_section2();
		$data['eight_section'] = $this->aboutmodel->eight_section();
		$data['eight_section2'] = $this->aboutmodel->eight_section2();
		$data['eight_section3'] = $this->aboutmodel->eight_section3();

	
		
		
		$this->load->view('common/header');
		$this->load->view('kalimpage/aboutpage',$data);
		$this->load->view('common/footer');
	}


	public function Agent_details()
	{ 
		$this->load->view('common/header');
		$this->load->view('kalimpage/agent_detailspage');
		$this->load->view('common/footer');
	}


	public function Agent_grid_view()
	{   $this->load->view('common/header');
		$this->load->view('kalimpage/agent_grid_viewpage');
		$this->load->view('common/footer');
	}


	public function Blog_details()
	{
		$this->load->view('common/header');
		$this->load->view('kalimpage/blog_detailspage');
		$this->load->view('common/footer');
	}


	public function Blog_grid_v4()
	{
		$this->load->view('common/header');
		$this->load->view('kalimpage/blog_grid_v4page');
		$this->load->view('common/footer');
	}


	public function Blog_single_v1()
	{
		$this->load->view('common/header');
		$this->load->view('kalimpage/blog_single_v1page');
		$this->load->view('common/footer');
	}


	public function Career()
	{
		$this->load->view('common/header');
		$this->load->view('kalimpage/careerpage');
		$this->load->view('common/footer');
	}


	public function Contact()
	{
		$this->load->view('common/header');
		$this->load->view('kalimpage/contactpage');
		$this->load->view('common/footer');
	}


	public function Error()
	{
		$this->load->view('common/header');
		$this->load->view('kalimpage/errorpage');
		$this->load->view('common/footer');

	}


	public function Faq()
	{
		$this->load->view('common/header');
		$this->load->view('kalimpage/aqpage');
		$this->load->view('common/footer');
	}


	public function Our_services()
	{

		$this->load->model('servicemodel');
		
		$data['se1'] = $this->servicemodel->se1();
		$data['se2'] = $this->servicemodel->se2();
	
	

		$this->load->view('common/header');
		$this->load->view('kalimpage/our_servicespage',$data);
		$this->load->view('common/footer');
	}


	public function Photo_gallery_v5()
	{
		$this->load->view('common/header');
		$this->load->view('kalimpage/photo_galary_v5page');
		$this->load->view('common/footer');
	}


	public function Property_grid_v1()
	{
		$this->load->view('common/header');
		$this->load->view('kalimpage/property-grid-v1page');
		$this->load->view('common/footer');
	}


	public function property_single_v1()
	{
		$this->load->view('common/header');
		$this->load->view('kalimpage/property_single_v1page');
		$this->load->view('common/footer');
	}

	
	public function Term_and_condition()
	{
		$this->load->view('common/header');
		$this->load->view('kalimpage/term_and_conditionpage');
		$this->load->view('common/footer');
	}



	
}

