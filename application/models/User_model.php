<?php
class User_model extends CI_Model{
 
    function user_list(){
        $hasil=$this->db->get('user');
        return $hasil->result();
    }
 
    function save_user(){
        $data = array(
                'id'  => $this->input->post('id'), 
                'firstname'  => $this->input->post('firstname'), 
                'lastname' => $this->input->post('lastname'), 
                'email' => $this->input->post('email'), 
				'contact' => $this->input->post('contact'), 
				'address' => $this->input->post('address'), 
            );
        $result=$this->db->insert('user',$data);
        return $result;
    }
 
    function update_user(){
        $id=$this->input->post('id');
        $firstname=$this->input->post('firstname');
        $lastname=$this->input->post('lastname');
        $email=$this->input->post('email');
		$contact=$this->input->post('contact');
		$address=$this->input->post('address');

		
		$this->db->set('firstname', $firstname);
		$this->db->set('lastname', $lastname);
		$this->db->set('email', $email);
		$this->db->set('contact', $contact);
		$this->db->set('address', $address);

        $this->db->where('id', $id);
        $result=$this->db->update('user');
        return $result;
    }
 
    function delete_user(){
        $id=$this->input->post('id');
        $this->db->where('id', $id);
        $result=$this->db->delete('user');
        return $result;
    }






    public function view_user(){

        //	$ha=$this->db->get('id');
        //	return $this->db->get("id")->result();
            
        //	return $ha->result();
    
    
        
        $id=$this->input->post('id');
            $firstname=$this->input->post('firstname');
            $lastname=$this->input->post('lastname');
            $email=$this->input->post('email');
            $contact=$this->input->post('contact');
            $address=$this->input->post('address');
            $id=$this->input->get('id');
            $this->db->where('id', $id);
            $result=$this->db->view('id');
            return $result;
    
    
    
      }
    
    
    












     
}