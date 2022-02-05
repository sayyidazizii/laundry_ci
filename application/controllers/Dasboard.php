<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasboard extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
			//pengecekan sesi
			if($this->session->userdata('is_login') != true){
				redirect('Login');
			}
            $this->load->model('M_user');
			$this->load->model('M_paket');
			$this->load->model('M_pesanan');
			$this->load->model('M_pelanggan');
    }

	public function index()
	{
		//print_r($_SESSION);
		$pelanggan = $this->M_pelanggan->total_rows();
		$petugas = $this->M_user->total_rows();
		$paket = $this->M_paket->total_rows();
		$pesanan = $this->M_pesanan->total_rows();
		$data = array(
			'pelanggan' => $pelanggan,
			'petugas' => $petugas,
			'paket' => $paket,
			'pesanan' => $pesanan
		);

		$this->load->view('User/dasboard',$data);
		// $this->load->view('User/dasboard');
	}

}
