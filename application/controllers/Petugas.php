<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
			//pengecekan sesi
			if($this->session->userdata('is_login') != true){
				redirect('Login');
			}
            $this->load->model('M_user');
    }

	public function index()
	{
            $user = $this->M_user->data();
            $data = array('user' => $user);
            $this->load->view('User/petugas',$data);
	}
    public function TambahPetugas()
    {
        $username  =   $this->input->post('username');
        $email       =   $this->input->post('email');
        $password    =   $this->input->post('password');
        $level    =   $this->input->post('level');

        $ArrInsert = array(
			'username' => $username,
			'email ' => $email ,
			'password'=> $password,
            'level'=> $level
		);
        $this->M_user->insertuser($ArrInsert);
        redirect('Petugas');
    }

    public function halaman_edit($id)
	{
		$querypetugas = $this->M_user->getDataUser($id);
		$DATA = array('querypetugas' => $querypetugas);
		$this->load->view('User/edit_petugas',$DATA);
	}

    public function EditPetugas()
    {
        $id          =   $this->input->post('id');
        $username    =   $this->input->post('username');
        $email       =   $this->input->post('email');
        $password    =   $this->input->post('password');
        $level       =   $this->input->post('level');

        $ArrUpdate= array(
            'id'  => $id,
            'username'  => $username,
			'email '    => $email ,
			'password'  => $password,
            'level'     => $level
		);
        $this->M_user->updateuser($id,$ArrUpdate);
        redirect('Petugas');
    }

    public function fungsiDelete($id)
	{
        $this->M_user->deleteuser($id);
        redirect('Petugas');
	}

}
