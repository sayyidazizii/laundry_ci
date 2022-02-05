<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->model('M_user');
    }

	public function index()
	{
		$this->load->view('Auth/register');
	}
    function Regis()
    {
        $username    =   $this->input->post('username');
        $email       =   $this->input->post('email');
        $password    =   $this->input->post('password');
        $level       =   $this->input->post('level');


        if($this->M_user->Checkuser($email,$password) == true){
            //echo "Login Berhasil";
            $row = $this->M_user->get_by_email($email);
            // var_dump($row);
            $data_user = array(
                'username'=>$row->username,
                'email'=>$email,
                'password'=>$row->$password,
                'level'=>$row->level
            );
            $this->session->set_flashdata('pesan','Username sudah ada');
            // $this->session->set_userdata($data_user);
            redirect('Register');
            exit;
        }else{
            $ArrInsert = array(
                'username' => $username,
                'email ' => $email ,
                'password'=> $password,
            );
            $this->M_user->insertuser($ArrInsert);
            $this->session->set_flashdata('pesan','Regitrasi Berhasil Silahkan Login');
            redirect('Login');
        }
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }
}
