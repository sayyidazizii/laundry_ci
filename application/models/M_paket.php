<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_paket extends CI_Model {

    public $table = 'paket';

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
    public function insertpaket($data)
    {
        $this->db->insert('paket',$data);
    }
    function getDataPaket($id_paket)
	{
		$this->db->where('id_paket', $id_paket);
		$query = $this->db->get('paket');
		return $query->row();
	}
    function updatepaket($id_paket,$data){
		$this->db->where('id_paket',$id_paket);
		$this->db->update('paket',$data);
	}
    function deletePaket($id_paket){
		$this->db->where('id_paket',$id_paket);
		$this->db->delete('paket');	
	}
    //total paket
    public function total_rows()
    {
        return $this->db->get('paket')->num_rows();
    }
}
