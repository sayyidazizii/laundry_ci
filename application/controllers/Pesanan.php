<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
			//pengecekan sesi
			if($this->session->userdata('is_login') != true){
				redirect('Login');
			}
            $this->load->model('M_pesanan');
            $this->load->model('M_pelanggan');
    }

	public function index()
	{
            $pesanan = $this->M_pesanan->data();
            $data = array('pesanan' => $pesanan);
            $this->load->view('Pesanan/pesanan',$data);
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
            'tgl_masuk'=> $tgl_masuk,
            'tgl_kembali'=> $tgl_kembali

		);
        $this->M_pesanan->insertpesanan($ArrInsert);
        redirect('Pesanan');
    }

    public function halaman_edit($id_pesanan)
	{
		$querypesanan= $this->M_pesanan->getDataPesanan($id_pesanan);
		$DATA = array('querypesanan' => $querypesanan);
		$this->load->view('Pesanan/edit_pesanan',$DATA);
	}

    public function EditPesanan()
    {
        $id_pesanan   =   $this->input->post('id_pesanan');
        $id_pelanggan   =   $this->input->post('id_pelanggan');
        $nama          =   $this->input->post('nama');
        $id_paket         =   $this->input->post('id_paket');
        $jumlah           =   $this->input->post('jumlah');
        $harga           =   $this->input->post('harga');
        $status           =   $this->input->post('status');
        $tgl_masuk           =   $this->input->post('tgl_masuk');
        $tgl_kembali           =   $this->input->post('tgl_kembali');

        $ArrUpdate= array(
            'id_pesanan'=>$id_pesanan,
            'id_pelanggan'=>$id_pelanggan,
			'nama' => $nama,
			'id_paket ' => $id_paket ,
			'jumlah'=> $jumlah,
            'harga'=> $harga,
            'status'=> $status,
            'tgl_masuk'=> $tgl_masuk,
            'tgl_kembali'=> $tgl_kembali

		);
        $this->M_pesanan->updatePesanan($id_pesanan,$ArrUpdate);
        redirect('Pesanan');
    }

    public function fungsiDelete($id_pesanan)
	{
        $this->M_pesanan->deletePesanan($id_pesanan);
        redirect('Pesanan');
	}
    //pesanan selesai
    public function status($status)
	{
            $status = $this->M_pesanan->getStatus($status);
            $data = array('status' => $status);
            $this->load->view('Pesanan/selesai',$data);
	}

}
