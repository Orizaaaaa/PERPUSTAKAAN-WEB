<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_halaman_utama extends CI_Controller {

	public function index()
{
    // if (!$this->session->userdata('logged')) {
    //     $url = base_url('login');
    //     redirect($url);
    // }

    // Kode lain untuk menampilkan halaman beranda
    $this->load->view('admin/halaman_utama');
}

	
}