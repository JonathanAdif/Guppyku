<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_conn extends CI_Controller {


    function __construct(){
        parent:: __construct();    
        $this->load->model('m_user');
        $this->load->model('m_diagnosa');
        $this->load->helper('url','form');
        $this->load->library(array('form_validation','session'));

        
        }


    public function usrlogin(){

        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

       if($this->form_validation->run() === FALSE){

                
           
            redirect('home');
           


        } else {
            
           
            $email = $this->input->post('email');
            
            $password = md5($this->input->post('password'));

          
           $id = $this->m_user->login($email, $password);

            if($id){
                // Create session
              $user_data = array(
                'id' => $id,
                 'email' => $email,
                  'logged_in' => true
               );

                $this->session->set_userdata($user_data);

                // Set message
               $this->session->set_flashdata('user_loggedin','Selamat Anda Berhasil Login');

              redirect('user_conn/laman_user');
           } else {
                // Set message
                $this->session->set_flashdata('login_failed', '<div class="alert  alert-danger text-center">username dan password salah!</div>');
                  
                  redirect('home');
           }        
        }
   }
    

   public function laman_user()
   {
    $data['gejala'] = $this->m_user->Gejala();

    $this->load->view('HF/header1');
    // $this->load->view('User/home_user');
    $this->load->view('User/home_user',$data);
    $this->load->view('HF/footer1');
   }


   public function usrregis(){

    $this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[3]|max_length[22]');
    $this->form_validation->set_rules('email', 'E-mail', 'trim|required|min_length[5]|max_length[45]|is_unique[user.email]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[12]');
    $this->form_validation->set_rules('no_telp', 'No_telp', 'trim|required|numeric|min_length[5]|max_length[12]');

    if($this->form_validation->run() === FALSE){
        
       redirect('#regis-modal');

    } else {
        // Encrypt password
        $enc_password = md5($this->input->post('password'));

        $this->m_user->register($enc_password);

        // Set message
        $this->session->set_flashdata('user_registered', 'You are now registered and can log in');

        redirect('#basic-modal2');
    }
}

public function hasil_diagnosa()
  {
    $data['user'] = $this->db->get_where('user', [
      'email' => $this->session->userdata('email')
    ])->row_array();

    // Hasil Diagnosa Akhir
    // Hasil 3 penyakit dengan prob tertinggi
    $data['diagnosa'] =  $this->m_diagnosa->diagnosa();
    // Hasil penyakit dengan prob paling tinggi
    $data['tertinggi'] = $this->m_diagnosa->tertinggi();
    // Detail Hasil Diagnosa
    $data['detail'] = $this->m_diagnosa->detailDiagnosa();

    $data['penyakit'] = $this->db->get('tbl_penyakit')->result_array();

    $this->load->view('HF/header1');
    $this->load->view('User/laporan_diagnosa', $data);
    $this->load->view('HF/footer1');
  }


}
?>