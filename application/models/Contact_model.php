<?php
class Contact_model extends CI_Model {

        


    public function save_contact($data){
        
        $this->db->set($data['co_data']);
        //$id = $data['catagory_id'];
        
        //$this->db->where('catagory_id',$id);
        //$this->db->insert('contact',$data['co_data']);

      if($this->db->insert('contact',$data['co_data'])==TRUE){  
                return TRUE;
        }else{
                return FALSE;
        } 
    }

}