<?php
 class M_user extends CI_Model{

    public function register($enc_password){
        // User data array
        $data = array(
         'nama' => $this->input->post('nama'),
         'email' => $this->input->post('email'),
         'password' => $enc_password,
         'no_telp' => $this->input->post('no_telp'),
        );
     
        // Insert user
        return $this->db->insert('user', $data);
       }


   public function login($email, $password){
   
   $this->db->where('email', $email);
   $this->db->where('password', $password);

   $result = $this->db->get('user');

   if($result->num_rows() == 1){
    return $result->row(0)->id_user;
   } else {
    return false;
   }
  }


  // menampilkan seluruh data gejala yang ada di tabel gejala.
  public function Gejala()
  {
    return $this->db->get('tbl_gejala')->result_array();
  }


 }