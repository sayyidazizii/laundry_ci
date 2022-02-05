<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            // pengecekan sesi
			// if($this->session->userdata('is_login') != true){
			// 	redirect('Frontend');
			// }
            $this->load->model('M_pesanan');
            $this->load->model('M_frontend');
    }

	public function index()
	{
        
		$this->load->view('Frontend/frontend');
	}
    public function profil()
    {
        $data= $this->session->userdata;
        var_dump($data);
    }
    public function TambahPesanan()
    {
        $id_pesanan   =   $this->input->post('id_pesanan');
        $id_pelanggan   =   $this->input->post('id_pelanggan');
        $nama          =   $this->input->post('nama');
        $id_paket         =   $this->input->post('id_paket');
        $jumlah           =   $this->input->post('jumlah');
        $harga           =   $this->input->post('harga');
        $status           =   $this->input->post('status');
        $alamat          =   $this->input->post('alamat');
        $tgl_masuk           =   $this->input->post('tgl_masuk');
        $tgl_kembali           =   $this->input->post('tgl_kembali');

        $ArrInsert= array(
            'id_pesanan'=>$id_pesanan,
            'id_pelanggan'=>$id_pelanggan,
			'nama' => $nama,
			'id_paket ' => $id_paket ,
			'jumlah'=> $jumlah,
            'harga'=> $harga,
            'status'=> $status,
            'alamat'=> $alamat,
            'tgl_masuk'=> $tgl_masuk,
            'tgl_kembali'=> $tgl_kembali

		);
        $this->M_pesanan->insertpesanan($ArrInsert);
        redirect('Home');
    }
    
   
}
