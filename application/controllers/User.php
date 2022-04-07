<?php
class User extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('User_model');





   //   $this->load->library("session");
//	  $this->load->library('form_validation');
	//  $this->load->helper('form');








    }
    function index(){

        //	$this->load->helper('url');
	//	$this->load->helper('form');
        $this->load->view('User_view');
    }
 
    function User_data(){
        $data=$this->User_model->User_list();
        echo json_encode($data);
    }
 
    function save(){
        
         $this->load->model('User_model');
        $this->load->helper('form');
        $this->form_validation->set_rules('id','id','required');
        $this->form_validation->set_rules('firstname','first Name','required');
        $this->form_validation->set_rules('lastname','last Name','required');
        $this->form_validation->set_rules('email','email is','required');
		$this->form_validation->set_rules('contact','contact is','required');
        $this->form_validation->set_rules('address','address is','required');
        
        if($this->form_validation->run()==false){
             //save entries to error
             $array = array(
                'error'   => true,
                'id_Err' => form_error('id'),
                'firstnameErr' => form_error('firstname'),
               'lastnameErr' => form_error('lastname'),
               'emailErr' => form_error('email'),
			   'contactErr' => form_error('contact'),
			   'addressErr' => form_error('address'),
           
               );

               echo json_encode($array);
               //echo validation_errors();
             
        }else{
           
            $data=$this->User_model->save_User();
            echo json_encode($data);
            
        }
       
    }
 
    function update(){


       

        
       $this->load->model('User_model');
       $this->load->helper('form');
     //   $this->form_validation->set_rules('id_edit','ID','required');
       $this->form_validation->set_rules('firstname','Firstame','required');
       $this->form_validation->set_rules('lastname','last Name','required');
       $this->form_validation->set_rules('email','email is','required');
       $this->form_validation->set_rules('contact','contact is','required');
       $this->form_validation->set_rules('address','address is','required');
       
       
        
        if($this->form_validation->run()==false){
           
            $array = array(
               'error'   => true,
               //'idEDErr' => form_error('id_edit'),
               'firstnameEDErr' => form_error('firstname'),
               'lastnameEDErr' => form_error('lastname'),
               'emailEDErr' => form_error('email'),
			   'contactEDErr' => form_error('contact'),
			   'addressEDErr' => form_error('address'),
          
              );

              echo json_encode($array);
            
            
       }else{
           
        $data=$this->User_model->update_User();
           echo json_encode($data);
           
       } 

      
    }



    function view(){


		$id=$this->request->getpost('id');



		$data=$this->User_model->view_User()->row();
		echo json_encode($data);

		return $this->response->setJSON($id);


		
		

	}












    function delete(){
        $data=$this->User_model->delete_User();
        echo json_encode($data);
    }























































/*


	public function success()
	{
      $this->session->set_flashdata('success', 'User Updated successfully');
      return $this->load->view('myPages');
	}


  /**
    * Get All Data from this method.
    *
    * @return Response
   */
 
 
 /*
 
   public function error()
  {
      $this->session->set_flashdata('error', 'Something is wrong.');
      return $this->load->view('myPages');
  }


  /**
    * Get All Data from this method.
    *
    * @return Response
   */
  
 
 
 /*
   public function warning()
  {
      $this->session->set_flashdata('warning', 'Something is wrong.');
      return $this->load->view('myPages');
  }


  /**
    * Get All Data from this method.
    *
    * @return Response
   */
  
 
 
 
 
 /*
 
 
   public function info()
  {
      $this->session->set_flashdata('info', 'User listed bellow');
      return $this->load->view('myPages');
  }



*/





























private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;


	


		if($this->input->post('firstname') == '')
		{
			$data['inputerror'][] = 'firstname';
			$data['error_string'][] = 'First name is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('lastname') == '')
		{
			$data['inputerror'][] = 'lastname';
			$data['error_string'][] = 'Last name is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('email') == '')
		{
			$data['inputerror'][] = 'email';
			$data['error_string'][] = 'E is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('contact') == '')
		{
			$data['inputerror'][] = 'contact';
			$data['error_string'][] = 'Please select gender';
			$data['status'] = FALSE;
		}

		if($this->input->post('address') == '')
		{
			$data['inputerror'][] = 'address';
			$data['error_string'][] = 'Addess is required';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE)
		{


			$this->session->set_flashdata('success', "Saved Successfully!");
			echo json_encode($data);
			exit();
		}
	}









































 
}