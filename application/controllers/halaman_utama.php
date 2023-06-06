<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class halaman_utama extends CI_Controller {
	
	public function index()
	{
		$this->load->view('user/halaman_utama');
	}
}