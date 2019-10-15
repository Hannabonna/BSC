<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	function __construct() {
		parent::__construct();
        $this->load->library('session');
		$this->load->helper(array('url','form'));
		$this->load->model('m_user');
	}
	
	public function index()
	{
		$this->load->view('registration');
	}

	public function register()
	{
		// session_start();
		$data['first_name']   =    $this->input->post('first_name');
        $data['last_name'] =    $this->input->post('last_name');
        $data['email']  =    $this->input->post('email');
		$data['role'] = $this->input->post('role');
        $data['password'] =    $this->input->post('password');
        $this->m_user->daftar($data);
        $_SESSION['username'] = $data['first_name'];
        redirect('Forum');

	}

	public function logout()
	{
		unset($_SESSION['username']);
		// session_destroy();
		redirect('Forum');
	}

	public function login()
	{
		$username = $this->input->post('email');
		$password = $this->input->post('password');
		$data = $this->m_user->cek_login($username, $password);
		// echo($password);
		// print_r($data);
		if (!empty($data)) {
			# code...
        	$_SESSION['username'] = $username;
        	redirect('Forum');
		}else{
			echo "username atau password salah";
		}
	}
}
?>