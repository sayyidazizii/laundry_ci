<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {
    //tabel user untuk data petugas
    public $table = 'user';

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

    // dapatkan petugas berdasar email
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
        $this->db->insert('user',$data);
    }
    function getDataUser($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('user');
		return $query->row();
	}
    function updateuser($id,$data){
		$this->db->where('id',$id);
		$this->db->update('user',$data);
	}
    function deleteuser($id){
		$this->db->where('id',$id);
		$this->db->delete('user');	
	}
    //total petugas
    public function total_rows()
    {
        return $this->db->get('user')->num_rows();
    }
}
