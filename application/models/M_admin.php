<?php
 class M_admin extends CI_Model{



  public function login($email, $password){
   
   $this->db->where('email', $email);
   $this->db->where('password', $password);

   $result = $this->db->get('admin');

   if($result->num_rows() == 1){
    return $result->row(0)->id;
   } else {
    return false;
   }
  }



 }