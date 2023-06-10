<?php 

class admin_halaman_buku extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('admin_buku_m');
                $this->load->helper('url');
	}

	function index(){
		$data['buku'] = $this->admin_buku_m->tampil_data()->result();
		$this->load->view('admin/halaman_buku',$data);
	}

}