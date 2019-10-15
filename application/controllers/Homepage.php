<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	function __construct() {
		parent::__construct();
        $this->load->library('session');
		$this->load->helper(array('url','form'));
	}
	
	public function index()
	{
		$this->load->view('homepage');
	}
}
?>