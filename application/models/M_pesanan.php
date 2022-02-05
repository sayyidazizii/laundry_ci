<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesanan extends CI_Model {

    public $table = 'pesanan';

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }

    public function data()
    {
        $query = $this->db->get($this->table);
        return $query->result();

    }
    public function insertpesanan($data)
    {
        $this->db->insert('pesanan',$data);
    }
    function getDataPesanan($id_pesanan)
	{
		$this->db->where('id_pesanan', $id_pesanan);
		$query = $this->db->get('pesanan');
		return $query->row();
	}
    //dapatkan data pesanan berdasarkan user
    function getDataNama($id_pelanggan)
	{
		$this->db->where('id_pelanggan', $id_pelanggan);
		$query = $this->db->get('pesanan');
		return $query->result();
	}
     //dapatkan data pesanan berdasarkan status
     public function getStatus($status)
     {
         $this->db->where('status', $status);
         $query = $this->db->get('pesanan');
         return $query->result();
     }

    function updatePesanan($id_pesanan,$data){
		$this->db->where('id_pesanan',$id_pesanan);
		$this->db->update('pesanan',$data);
	}
    function deletePesanan($id_pesanan){
		$this->db->where('id_pesanan',$id_pesanan);
		$this->db->delete('pesanan');	
	}
    //total pesanan
    public function total_rows()
    {
        return $this->db->get('pesanan')->num_rows();
    }
}
