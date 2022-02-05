<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
			//pengecekan sesi
			if($this->session->userdata('is_login') != true){
				redirect('Login');
			}
            $this->load->model('M_pelanggan');
    }

	public function index()
	{
            $pelanggan = $this->M_pelanggan->data();
            $data = array('pelanggan' => $pelanggan);
            $this->load->view('Pelanggan/pelanggan',$data);
	}
    public function halaman_tambah()
    {
        $this->load->view('Pelangan/tambah_pelanggan');
    }
    public function TambahPelanggan()
    {
        $id_pelanggan   =   $this->input->post('id_pelanggan');
        $nama           =   $this->input->post('nama');
        $email           =   $this->input->post('email');
        $password           =   $this->input->post('password');
        $alamat         =   $this->input->post('alamat');
        $nohp           =   $this->input->post('nohp');

        $ArrInsert= array(
            'id_pelanggan'=>$id_pelanggan,
			'nama' => $nama,
            'email' => $email,
            'password'=>$password,
			'alamat ' => $alamat ,
			'nohp'=> $nohp,
		);
        $this->M_pelanggan->insertpelanggan($ArrInsert);
        redirect('Pelanggan');
    }

    public function halaman_edit($id_pelanggan)
	{
		$querypelanggan= $this->M_pelanggan->getDataPelanggan($id_pelanggan);
		$DATA = array('querypelanggan' => $querypelanggan);
		$this->load->view('Pelanggan/edit_pelanggan',$DATA);
	}

    public function EditPelanggan()
    {
        $id_pelanggan   =   $this->input->post('id_pelanggan');
        $nama           =   $this->input->post('nama');
        $email           =   $this->input->post('email');
        $password           =   $this->input->post('password');
        $alamat         =   $this->input->post('alamat');
        $nohp           =   $this->input->post('nohp');

        $ArrUpdate= array(
            'id_pelanggan'=>$id_pelanggan,
			'nama' => $nama,
            'email' => $email,
            'password'=>$password,
			'alamat ' => $alamat,
			'nohp'=> $nohp,
		);
        $this->M_pelanggan->updatePelanggan($id_pelanggan,$ArrUpdate);
        redirect('Pelanggan');
    }

    public function fungsiDelete($id_pelanggan)
	{
        $this->M_pelanggan->deletePelanggan($id_pelanggan);
        redirect('Pelanggan');
	}
   

}
