<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->model('M_user');
    }

	public function index()
	{
		$this->load->view('Auth/login');
	}
    function validasi()
    {
        $email  =   $this->input->post('email');
        $password  =   $this->input->post('password');

        if($this->M_user->Checkuser($email,$password) == true){
            //echo "Login Berhasil";
            $row = $this->M_user->get_by_email($email);
            // var_dump($row);
            $data_user = array(
                'username'=>$row->username,
                'email'=>$email,
                'level'=>$row->level,
                'is_login'=> true
            );

            $this->session->set_userdata($data_user);
            redirect('Dasboard');
            exit;
        }else{
            //echo "Login Gagal";
            $this->session->set_flashdata('pesan','Username atau pasword salah');
            redirect('Login');
        }
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }
}
