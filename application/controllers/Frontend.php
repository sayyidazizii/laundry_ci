<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            //pengecekan sesi
			// if($this->session->userdata('is_login') != true){
			// 	redirect('Frontend/login');
			// }
            $this->load->model('M_frontend');
            $this->load->model('M_pesanan');
            $this->load->model('M_paket');
    }

	public function index()
	{
        
		$this->load->view('Frontend/login');
	}

    function validasi()
    {
        $email  =   $this->input->post('email');
        $password  =   $this->input->post('password');

        if($this->M_frontend->Checkuser($email,$password) == true){
            //echo "Login Berhasil";
            $row = $this->M_frontend->get_by_email($email);
            // var_dump($row);
            $data_user = array(
                'id_pelanggan'=>$row->id_pelanggan,
                'nama'=>$row->nama,
                'email'=>$email,
                'alamat'=>$row->alamat,
                'level'=>$row->level,
                'is_login'=> true
            );
            
            $this->session->set_userdata($data_user);
            // var_dump($data_user);
            redirect('Home');
            exit;
        }else{
            //echo "Login Gagal";
            $this->session->set_flashdata('pesan','Username atau pasword salah');
            redirect('Frontend');
        }
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Frontend');
    }
    public function signup()
	{
        
		$this->load->view('Frontend/register');
	}

    //register pelanggan
    function Regis()
    {
        $nama        =   $this->input->post('nama');
        $email       =   $this->input->post('email');
        $password    =   $this->input->post('password');
        $alamat      =   $this->input->post('alamat');
        $nohp        =   $this->input->post('nohp');
        


        if($this->M_frontend->validasi($nama,$email) == true){

            $this->session->set_flashdata('pesan','Username atau pasword sudah ada');
            redirect('Frontend/signUp');
            exit;
        }else{
            echo "registrasi Berhasil";
            $ArrInsert = array(
                'nama' => $nama,
                'email ' => $email ,
                'password'=> $password,
                'alamat' => $alamat,
                'nohp ' => $nohp 
                
            );
            $this->M_frontend->insertuser($ArrInsert);
            redirect('Frontend');
        }
    }

    //dapatkan data pesanan ambil dari model pesanan
    public function pesanan($id_pelanggan)
    {
        $querypesanan= $this->M_pesanan->getDataNama($id_pelanggan);
		$DATA = array('querypesanan' => $querypesanan);
        // var_dump($DATA);
        $this->load->view('Frontend/pesanan',$DATA);
    }

     //dapatkan data paket ambil dari model paket
     public function paket()
     {
            $paket = $this->M_paket->data();
            $data = array('paket' => $paket);
            $this->load->view('Frontend/order',$data);
     }
    public function req($id_paket)
    {
        $querypaket = $this->M_paket->getDataPaket($id_paket);
		$DATA = array('querypaket' => $querypaket);
        // var_dump($DATA);
        $this->load->view('Frontend/request',$DATA);
    }
}
