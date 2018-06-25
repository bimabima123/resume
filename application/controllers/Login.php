<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('login');
	}

	public function proses_login(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array('username' => $username,
						'password' => $password
			 );

		$cek = $this->m_login->proses_login('user',$where)->num_rows();

		if ($cek > 0 ) {
			$data = $this->m_login->proses_login('user',$where)->result_array();
			
			foreach ($data as $h) {
				$username = $h['username'];
				$nama = $h['nama'];
				
			}

			$session = array('username' => $username, 
							'nama' => $nama,
							'status' => 'login'
				);

			
				$this->session->set_userdata($session);
				redirect(base_url('dashboard'));
			

		}else{
			redirect('login');
		}


	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}
		
}
?>