<?php 
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_user extends CI_Model{

       function daftar($data)
       {
            $this->db->insert('user',$data);
       }

       function cek_login($username, $password)
       {
       		$this->db->from('user');
       		$this->db->select('*');
       		$this->db->where('email', $username);
       		$this->db->where('password', $password);
       		return $this->db->get()->result();
       }

       function get_data($tabel)
       {
       		$this->db->from($tabel);
       		$this->db->select('*');
       		return $this->db->get()->result();
       }

       function search($query)
       {
       		$this->db->from('artikel');
       		$this->db->select('*');
       		$this->db->like('judul',$query);
       		return $this->db->get()->result();
       }

       function artikel($data)
       {
          $this->db->insert('artikel',$data);
       }
  }
 ?>