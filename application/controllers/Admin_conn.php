<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_conn extends CI_Controller {


    function __construct(){
        parent:: __construct();    
        $this->load->model('m_admin');
        $this->load->helper('url','form');
        $this->load->library(array('form_validation','session'));

        
        }


    public function admlogin(){

        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

       if($this->form_validation->run() === FALSE){

                
           
            redirect('home');
           


        } else {
            
           
            $email = $this->input->post('email');
            
            $password = md5($this->input->post('password'));

          
           $id = $this->m_admin->login($email, $password);

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

              redirect('admin_conn/laman_admin');
           } else {
                // Set message
                $this->session->set_flashdata('login_failed', '<div class="alert   

       alert-danger text-center">username dan password salah!</div>');
                  
                  redirect('home');
           }        
        }
   }
    

   public function laman_admin()
   {
    $this->load->view('HF/header2');
    $this->load->view('Admin/home_admin');
    $this->load->view('HF/footer1');
   }






}
?>