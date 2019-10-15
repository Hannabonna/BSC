<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {

	function __construct() {
		parent::__construct();
        $this->load->library('session');
		$this->load->helper(array('url','form'));
		$this->load->model('m_user');
	}
	
	public function index()
	{
		$data['data'] = $this->m_user->get_data('artikel');
		$this->load->view('forum', $data);
		// print_r($data);
	}

	public function search()
	{
		$query = $this->input->post('search');
		$data['result'] = $this->m_user->search($query);
		$this->load->view('search',$data);
	}

	public function select() 
    { 
		$id=$this->uri->segment(3);
		$this->db->where('id',$id);
		$query=$this->db->get('artikel');
		if($query->num_rows()>0)
		{
			foreach($query->result() as $dt)
			{
				$isi['judul'] = $dt->judul;
				$isi['kategori'] = $dt->kategori;
				$isi['sub_kategori'] = $dt->sub_kategori;
				$isi['date'] = $dt->date;
				$isi['konten'] = $dt->konten;
				// $isi['gambar'] = $dt->gambar;
			}
		}
		else
		{
				$isi['judul'] = '';
				$isi['kategori'] = '';
				$isi['sub_kategori'] = '';
				$isi['date'] = '';
				$isi['konten'] = '';
				// $isi['gambar'] = '';
		}
		$this->load->view('detail_forum',$isi);
	}
}
?>