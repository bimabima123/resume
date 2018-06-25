<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_index');
		$this->load->library('session');
	}

	public function index(){
		$data['tampilAbout'] = $this->m_index->tampil_data('tentang')->result_array();
		$data['tampilExperience'] = $this->m_index->tampil_data('pengalaman')->result_array(); 
		$data['tampilEducation'] = $this->m_index->tampil_data('sekolah')->result_array(); 
		$this->load->view('user/index',$data);
	}
}

?>