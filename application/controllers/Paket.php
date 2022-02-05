<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
			//pengecekan sesi
			if($this->session->userdata('is_login') != true){
				redirect('Login');
			}
            $this->load->model('M_paket');
            $this->load->model('M_user');
    }

	public function index()
	{
            $paket = $this->M_paket->data();
            $data = array('paket' => $paket);
            $this->load->view('Paket/paket',$data);
	}
    public function halaman_tambah()
    {
        $this->load->view('Paket/tambah_paket');
    }
    public function TambahPaket()
    {
        $nama_paket  =   $this->input->post('nama_paket');
        $harga       =   $this->input->post('harga');
        $estimasi    =   $this->input->post('estimasi');

        $ArrInsert = array(
			'nama_paket' => $nama_paket,
			'harga ' => $harga ,
			'estimasi'=> $estimasi,
		);
        $this->M_paket->insertpaket($ArrInsert);
        redirect('Paket');
    }

    public function halaman_edit($id_paket)
	{
		$querypaket = $this->M_paket->getDataPaket($id_paket);
		$DATA = array('querypaket' => $querypaket);
		$this->load->view('Paket/edit_paket',$DATA);
	}

    public function EditPaket()
    {
        $id_paket  =   $this->input->post('id_paket');
        $nama_paket  =   $this->input->post('nama_paket');
        $harga       =   $this->input->post('harga');
        $estimasi    =   $this->input->post('estimasi');

        $ArrUpdate= array(
            'id_paket'=>$id_paket,
			'nama_paket' => $nama_paket,
			'harga ' => $harga ,
			'estimasi'=> $estimasi,
		);
        $this->M_paket->updatepaket($id_paket,$ArrUpdate);
        redirect('Paket');
    }

    public function fungsiDelete($id_paket)
	{
        $this->M_paket->deletePaket($id_paket);
        redirect('Paket');
	}

}
