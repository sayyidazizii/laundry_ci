<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_frontend extends CI_Model {

    public $table = 'pelanggan';

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }

    public function Checkuser($email,$password)
    {
        $query = $this->db->get_where($this->table,
        array('email'   =>  $email,
              'password'=>  $password)
            );
            
            if($query->num_rows() > 0){
                return true;
            }else{
                return false;
            }
            exit;
    }
    //validasi pelanggan register
    public function validasi($nama,$email)
    {
        $query = $this->db->get_where($this->table,
        array('nama'    =>  $nama,
              'email'   =>  $email
              )
            );
            
            if($query->num_rows() > 0){
                return true;
            }else{
                return false;
            }
            exit;
    }


    // dapatkan pelanggan berdasar email
    function get_by_email($email)
    {
        $this->db->where('email',$email);
        return $this->db->get($this->table)->row();
    }
        public function data()
    {
        $query = $this->db->get($this->table);
        return $query->result();

    }
        public function insertuser($data)
    {
        $this->db->insert('pelanggan',$data);
    }
    function getDataUser($id_pelanggan)
	{
		$this->db->where('id_pelanggan', $id);
		$query = $this->db->get('pelanggan');
		return $query->row();
	}
    function updateuser($id_pelanggan,$data){
		$this->db->where('id_pelanggan',$id);
		$this->db->update('pelanggan',$data);
	}
    function deleteuser($id_pelanggan){
		$this->db->where('id_pelanggan',$id_pelanggan);
		$this->db->delete('pelanggan');	
	}
}
