<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


   

    public function index()
	{
        $this->load->view('HF/Header');
        $this->load->view('Tampilan_awal/laman_awal');
        $this->load->view('HF/Footer');
	}

   

   public function logout(){
    // Unset user data
    $this->session->unset_userdata('logged_in');
    $this->session->unset_userdata('id');
    $this->session->unset_userdata('email');
    // Set message
    $this->session->set_flashdata('user_loggedout', 'You are now logged out');

    redirect('home');
    
    }




}
?>