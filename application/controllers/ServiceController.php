<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceController extends CI_Controller {

  
    public function index() {

        if ($this->input->post('save2')) {
            $id = $this->input->post('save2'); // Get the ID of the edited row
            $title2 = $this->input->post('title');
            $container = $this->input->post('con');
            
    
            // Update the record in the database
            $this->db->where('id', $id);
            $this->db->update('se1', ['title' => $title2, 'con' => $container]);
        }

        if($this->input->post('save'))
        {
            $id = $this->input->post('save'); // Get the ID of the edited row
          
            $title = $this->input->post('title');
            $description = $this->input->post('description');
            
    
            // Update the record in the database
            $this->db->where('id', $id);
            $this->db->update('se2', ['title' => $title,'description' => $description]);
    
        }


        $query = $this->db->get('se1');
        $data['users'] = $query->result(); 
        // echo "<pre>";
        // print_r($data);

        $query = $this->db->get('se2');
        $data['use'] = $query->result();
    
        
        $this->load->view('admin_common/header');

        $this->load->view('admin/controll/service/servicepage',$data);
        // $this->load->view('admin/controll/about/aboutpage');
        
        $this->load->view('admin_common/footer');



        

       
    }

    public function submit()
    {
        $Mheading=$this->input->post('mheading');
        $heading=$this->input->post('heading');
        $title=$this->input->post('title');
        $discription=$this->input->post('discription');
     


        $data=[
            'mheading'=>$Mheading,
            'heading'=>$heading,
            'title'=>$title,
            'dis'=>$discription,
            
        ];

        $this->db->insert('data',$data);
		
        redirect(base_url('ServiceController/index'));
        
    }
    // public function edit($id)

    // {
    // $data['user'] = $this->db->get_where('data', ['id' => $id])->row();
	// 	$this->load->view('admin/controll/service/editpage',$data);


    // }

    // public function update($id)
    // {
       
    //     $Mheading=$this->input->post('mheading');
    //     $heading=$this->input->post('heading');
    //     $title=$this->input->post('title');
    //     $discription=$this->input->post('discription');

		
    //     $data = [

    //         'mheading'=>$Mheading,
    //         'heading'=>$heading,
    //         'title'=>$title,
    //         'dis'=>$discription,
            
    //     ];
            
        
    
    //     $this->db->where('id', $id);
    //     $this->db->update('data', $data);
    //     redirect(base_url('ServiceController'));
		
    // }

    // public function delete($id)
	// {
	// 	$this->db->where('id', $id);
    //     $this->db->delete('data');
	// 	redirect(base_url('ServiceController'));
	// }

}




                                