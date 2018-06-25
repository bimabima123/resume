<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_index');
		$this->load->library('session');
	}

	public function index(){
		$data['tampil'] = $this->m_index->tampil_data('tentang')->result_array();
		$this->load->view('admin/about/index',$data);
	}
	public function delete(){
		$id = $this->uri->segment(3);

		$where = array('id_tentang' => $id, );
		$this->db->delete('tentang',$where);
		redirect('About');
	}

	public function add(){
		$this->load->view('admin/about/tambah');
	}

	public function proses_tambah(){
		$alamat = $this->input->post('alamat');
		$status = $this->input->post('status');
		$agama = $this->input->post('agama');
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post('email');
		$kewarganegaraan = $this->input->post('kewarganegaraan');

		$where = array(
			'alamat' => $alamat, 
			'status' => $status, 
			'agama' => $agama, 
			'no_hp' => $no_hp, 
			'email' => $email,
			'kewarganegaraan' => $kewarganegaraan 

			);
		$tambah = $this->db->insert('tentang',$where);

		if ($tambah) {
			redirect(base_url('About'));
		}else{
			echo "gagal Tambah";
		}

	}
	public function edit(){
		$id = $this->uri->segment(3);

		$where = array('id_tentang' => $id, );
		$edit = $this->m_index->edit('tentang',$where)->result_array();

		foreach ($edit as $h) {

			$data['id_tentang'] = $h['id_tentang'];
			$data['alamat'] = $h['alamat'];
			$data['status'] = $h['status'];
			$data['agama'] = $h['agama'];
			$data['no_hp'] = $h['no_hp'];
			$data['email'] = $h['email'];
			$data['kewarganegaraan'] = $h['kewarganegaraan'];
		}
		$this->load->view('admin/About/edit',$data);
	}

	public function proses_edit(){
		$id = $this->input->post('id_tentang');

		$where = array(
		'alamat' => $this->input->post('alamat'),
		'status' => $this->input->post('status'),
		'agama' => $this->input->post('agama'),
		'no_hp' => $this->input->post('no_hp'),
		'email' => $this->input->post('email'),
		'kewarganegaraan' => $this->input->post('kewarganegaraan')
		 );

		// var_dump($where);

		$this->db->where('id_tentang',$id);
	    $this->db->update('tentang',$where);
		redirect('About');
		
		}
}