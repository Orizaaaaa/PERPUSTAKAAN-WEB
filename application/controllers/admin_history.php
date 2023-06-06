<?php 

class admin_history extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('admin_history_m');
                $this->load->helper('url');
	}

	function index(){
		$data['history'] = $this->admin_history_m->tampil_data()->result();
		$this->load->view('admin/history',$data);
	}

}