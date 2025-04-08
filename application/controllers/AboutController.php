<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutController extends CI_Controller {
	
	public function index()
{
    if ($this->input->post('save2')) {
        $id = $this->input->post('save2'); // Get the ID of the edited row
        $title2 = $this->input->post('title2');
        $heading = $this->input->post('heading');
        

        // Update the record in the database
        $this->db->where('id', $id);
        $this->db->update('first_section1', ['title2' => $title2, 'heading' => $heading]);
    }

       if($this->input->post('save'))
    {
        $id = $this->input->post('save'); // Get the ID of the edited row
      
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $position = $this->input->post('position');

        // Update the record in the database
        $this->db->where('id', $id);
        $this->db->update('first_section2', ['title' => $title,'description' => $description,
        'position' => $position]);

    }

    // Fetch the updated data
    $query = $this->db->get('first_section1');
    $data['users'] = $query->result();

    $query = $this->db->get('first_section2');
    $data['use'] = $query->result();

    $this->load->view('admin_common/header');
  
    $this->load->view('admin/controll/about/aboutpage1', $data);
    $this->load->view('admin_common/footer');
}




// secoden section for adminpanal about page



public function second_section()
{

    if($this->input->post('save3'))
    {
        $id=$this->input->post('save3');
        $title=$this->input->post('title');
        $heading=$this->input->post('heading');
        $description1=$this->input->post('description1');
        $description2=$this->input->post('description2');

           // Update the record in the database
        $this->db->where('id',$id);
        $this->db->update(' second_section1',[
            'title'=>$title,
            'heading'=>$heading,
            'description1'=>$description1,
            'description2'=>$description2
        ]);


    }

    $query = $this->db->get('second_section1');
    $data['use'] = $query->result();


    $this->load->view('admin_common/header');
    $this->load->view('admin/controll/about/aboutpage2',$data);
    $this->load->view('admin_common/footer');


}


// third-section for admin panel


public function third_section()
{
    // Check if the Save button was clicked
    if ($this->input->post('save4')) {
        $id = $this->input->post('save4');
        $title = $this->input->post('title');
        $heading = $this->input->post('heading');
        $description = $this->input->post('description');
        $picture = null; // Default null if no picture is uploaded

        // Handle picture upload
        if (!empty($_FILES['picture']['name'])) {
            $config['upload_path'] = './uploads/'; // Ensure this folder exists
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048; // 2MB
            $config['file_name'] = 'picture_' . time();

            // Load upload library
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('picture')) {
                // Upload successful
                $uploadData = $this->upload->data();
                $picture = $uploadData['file_name'];
            } else {
                // Log upload error
                $data['upload_error'] = $this->upload->display_errors();
                log_message('error', 'File upload error: ' . $data['upload_error']);
            }
        } else {
            // Retain the existing picture if no new one is uploaded
            $existing_record = $this->db->get_where('third_section1', ['id' => $id])->row();
            $picture = $existing_record ? $existing_record->picture : null;
        }

        // Update the record in the database
        $updateData = [
            'title' => $title,
            'heading' => $heading,
            'description' => $description,
        ];
        if ($picture) {
            $updateData['picture'] = $picture; // Include picture only if it's updated or retained
        }

        $this->db->where('id', $id);
        $update_result = $this->db->update('third_section1', $updateData);

        if (!$update_result) {
            log_message('error', 'Database update failed: ' . $this->db->last_query());
        }
    }

    // Fetch all records to display
    $query = $this->db->get('third_section1');
    $data['use'] = $query->result();

    // Load views
    $this->load->view('admin_common/header');
    $this->load->view('admin/controll/about/aboutpage3', $data);
    $this->load->view('admin_common/footer');
}



// forth section for admin panel 


public function forth_section()
{

    if($this->input->post('save'))
    {
        $id=$this->input->post('save');
        $heading1=$this->input->post('heading1');
        $heading2=$this->input->post('heading2');
        $description1=$this->input->post('description1');
        $description2=$this->input->post('description2');

           // Update the record in the database
        $this->db->where('id',$id);
        $this->db->update(' forth_section',[
            'heading1'=>$heading1,
            'heading2'=>$heading2,
            'description1'=>$description1,
            'description2'=>$description2
        ]);


    }

    $query = $this->db->get('forth_section');
    $data['use'] = $query->result();


    $this->load->view('admin_common/header');
    $this->load->view('admin/controll/about/aboutpage4',$data);
    $this->load->view('admin_common/footer');


}

// five section of about page

public function five_section()
{

    if($this->input->post('save'))
    {
        $id=$this->input->post('save');
        
        $number=$this->input->post('number');
        $heading2=$this->input->post('heading2');
        $description=$this->input->post('description');

           // Update the record in the database
        $this->db->where('id',$id);
        $this->db->update(' five_section',[
            
            'number'=>$number,
            'heading2'=>$heading2,
            'description'=>$description
        ]);


    }

    if($this->input->post('save1'))
    {
        $id=$this->input->post('save1');
        $title=$this->input->post('title');
        $heading=$this->input->post('heading');


           // Update the record in the database
        $this->db->where('id',$id);
        $this->db->update(' five_section2',[
            'title'=>$title,
            
            'heading'=>$heading,
          
        ]);
    }

    if($this->input->post('save2'))
    {
        $id=$this->input->post('save2');
        $project=$this->input->post('project');
        $percen=$this->input->post('percen');


           // Update the record in the database
        $this->db->where('id',$id);
        $this->db->update(' five_section3',[
            'project'=>$project,
            
            'percen'=>$percen,
          
        ]);
    }


    $query = $this->db->get('five_section2');
    $data['users'] = $query->result();

    $query = $this->db->get('five_section');
    $data['use'] = $query->result();

    $query = $this->db->get('five_section3');
    $data['use2'] = $query->result();    


    $this->load->view('admin_common/header');
    $this->load->view('admin/controll/about/aboutpage5',$data);
    $this->load->view('admin_common/footer');


}

//six section of about page

public function six_section()
{

    if($this->input->post('save'))
    {
        $id=$this->input->post('save');
        
        $title=$this->input->post('title');
        $heading=$this->input->post('heading');
        

           // Update the record in the database
        $this->db->where('id',$id);
        $this->db->update(' six_section1',[
            
            'title'=>$title,
            'heading'=>$heading,
           
        ]);


    }

    if ($this->input->post('save1')) {
        $id = $this->input->post('save1');
    ;
       
      
        $picture = null; // Default null if no picture is uploaded

        // Handle picture upload
        if (!empty($_FILES['picture']['name'])) {
            $config['upload_path'] = './uploads/'; // Ensure this folder exists
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048; // 2MB
            $config['file_name'] = 'picture_' . time();

            // Load upload library
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('picture')) {
                // Upload successful
                $uploadData = $this->upload->data();
                $picture = $uploadData['file_name'];
            } else {
                // Log upload error
                $data['upload_error'] = $this->upload->display_errors();
                log_message('error', 'File upload error: ' . $data['upload_error']);
            }
        } else {
            // Retain the existing picture if no new one is uploaded
            $existing_record = $this->db->get_where('six_section2', ['id' => $id])->row();
            $picture = $existing_record ? $existing_record->picture : null;
        }

        // Update the record in the database
        $updateData = [
    
        ];
        if ($picture) {
            $updateData['picture'] = $picture; // Include picture only if it's updated or retained
        }

        $this->db->where('id', $id);
        $update_result = $this->db->update('six_section2', $updateData);

        if (!$update_result) {
            log_message('error', 'Database update failed: ' . $this->db->last_query());
        }
    }

    $query = $this->db->get('six_section1');
    $data['users'] = $query->result();
    $query = $this->db->get('six_section2');
    $data['use'] = $query->result();

    $this->load->view('admin_common/header');
    $this->load->view('admin/controll/about/aboutpage6',$data);
    $this->load->view('admin_common/footer');


}

//seven section of about page

public function seven_section()
{

    if($this->input->post('save1'))
    {
        $id=$this->input->post('save1');
        
        $number=$this->input->post('title');
        $heading2=$this->input->post('heading');
        

           // Update the record in the database
        $this->db->where('id',$id);
        $this->db->update(' seven_section1',[
            
            'title'=>$title,
            'heading'=>$heading,
           
        ]);

        


    }

    if($this->input->post('save2'))
    {
        $id=$this->input->post('save2');
        
        $description=$this->input->post('description');
        $author=$this->input->post('author');
        

           // Update the record in the database
        $this->db->where('id',$id);
        $this->db->update(' seven_section2',[
            
            'description'=>$description,
            'author'=>$author,
           
        ]);


    }


    $query = $this->db->get('seven_section1');
    $data['users'] = $query->result();
    $query = $this->db->get('seven_section2');
    $data['use'] = $query->result();

    $this->load->view('admin_common/header');
    $this->load->view('admin/controll/about/aboutpage7',$data);
    $this->load->view('admin_common/footer');


}

//Eight section controller for about page


public function eight_section()
{
    // Check if the Save button was clicked
    if ($this->input->post('save')) {
        $id = $this->input->post('save');
        $title = $this->input->post('title');
        $heading = $this->input->post('heading');
       
      
        $picture = null; // Default null if no picture is uploaded

        // Handle picture upload
        if (!empty($_FILES['picture']['name'])) {
            $config['upload_path'] = './uploads/'; // Ensure this folder exists
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048; // 2MB
            $config['file_name'] = 'picture_' . time();

            // Load upload library
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('picture')) {
                // Upload successful
                $uploadData = $this->upload->data();
                $picture = $uploadData['file_name'];
            } else {
                // Log upload error
                $data['upload_error'] = $this->upload->display_errors();
                log_message('error', 'File upload error: ' . $data['upload_error']);
            }
        } else {
            // Retain the existing picture if no new one is uploaded
            $existing_record = $this->db->get_where('eight_section', ['id' => $id])->row();
            $picture = $existing_record ? $existing_record->picture : null;
        }

        // Update the record in the database
        $updateData = [
            'title' => $title,
            'heading' => $heading,
          
        ];
        if ($picture) {
            $updateData['picture'] = $picture; // Include picture only if it's updated or retained
        }

        $this->db->where('id', $id);
        $update_result = $this->db->update('eight_section', $updateData);

        if (!$update_result) {
            log_message('error', 'Database update failed: ' . $this->db->last_query());
        }
    }

    if($this->input->post('save1'))
    {
        $id=$this->input->post('save1');
        
        $title=$this->input->post('title');
        $video=$this->input->post('video');
        

           // Update the record in the database
        $this->db->where('id',$id);
        $this->db->update(' eight_section2',[
            
            'title'=>$title,
            'video'=>$video,
           
        ]);


    }

    if($this->input->post('save2'))
    {
        $id=$this->input->post('save2');
        
        $project=$this->input->post('project');
        $description=$this->input->post('description');
        

           // Update the record in the database
        $this->db->where('id',$id);
        $this->db->update(' eight_section3',[
            
            'project'=>$project,
            'description'=>$description,
           
        ]);


    }

    // Fetch all records to display
    $query = $this->db->get('eight_section');
    $data['use'] = $query->result();
    $query = $this->db->get('eight_section2');
    $data['users'] = $query->result();
    $query = $this->db->get('eight_section3');
    $data['users2'] = $query->result();
    // Load views
    $this->load->view('admin_common/header');
    $this->load->view('admin/controll/about/aboutpage8', $data);
    $this->load->view('admin_common/footer');
}


}


