<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->model('M_user');
    }

    //Halaman Register Petugas!!
	public function index()
	{
		$this->load->view('Auth/register');
	}
    //validasi register petugas
    function Regis()
    {
        $username    =   $this->input->post('username');
        $email       =   $this->input->post('email');
        $password    =   $this->input->post('password');


        if($this->M_user->validasi($username,$email) == true){

            $this->session->set_flashdata('pesan','Username atau Password sudah ada');
            redirect('Register');
       
        }else{
            echo "registrasi berhasil";
            $ArrInsert = array(
                'username' => $username,
                'email ' => $email ,
                'password'=> $password,
            );
            $this->M_user->insertuser($ArrInsert);
            redirect('Register');
        }
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }
}
