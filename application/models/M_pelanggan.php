<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelanggan extends CI_Model {

    public $table = 'pelanggan';

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
    public function insertpelanggan($data)
    {
        $this->db->insert('pelanggan',$data);
    }
    function getDataPelanggan($id_pelanggan)
	{
		$this->db->where('id_pelanggan', $id_pelanggan);
		$query = $this->db->get('pelanggan');
		return $query->row();
	}
    function updatePelanggan($id_pelanggan,$data){
		$this->db->where('id_pelanggan',$id_pelanggan);
		$this->db->update('pelanggan',$data);
	}
    function deletePelanggan($id_pelanggan){
		$this->db->where('id_pelanggan',$id_pelanggan);
		$this->db->delete('pelanggan');	
	}
    //total pelanggan
    public function total_rows()
    {
        return $this->db->get('pelanggan')->num_rows();
    }
}
