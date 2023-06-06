<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_history_m extends CI_Model{

	function tampil_data(){
		return $this->db->get('history');
	}
	
}