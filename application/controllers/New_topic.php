<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// header ('Access-Control-Allow-Origin: *');
// header ('Access-Control-Allow-Method: GET, OPTIONS');

class New_topic extends CI_Controller {

	function __construct() {
		parent::__construct();
        $this->load->library('session');
		$this->load->helper(array('url','form'));
		$this->load->model('m_user');
	}
	
	public function index()
	{
		$this->load->view('new_topic');
	}

	public function new_topic()
	{
		$data['judul']  	  =    $this->input->post('judul');
        $data['kategori']	  =    $this->input->post('kategori');
		$data['sub_kategori'] =    $this->input->post('sub_kategori');
        $data['status'] 	  =    $this->input->post('status');
        $data['date']		  =    $this->input->post('date');
        $data['konten'] 	  =    $this->input->post('konten');
        $this->m_user->artikel($data);
        redirect('Forum');
	}
}
?>