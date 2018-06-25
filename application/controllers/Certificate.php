<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificate extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_index');
		$this->load->library('session');
	}

	public function index(){
		$data['tampil'] = $this->m_index->tampil_data('sertifikat')->result_array();
		$this->load->view('admin/certificate/index',$data);
	}
	public function delete(){
		$id = $this->uri->segment(3);

		$where = array('id_sertifikat' => $id, );
		$this->db->delete('sertifikat',$where);
		redirect('Certificate');
	}

	public function add(){
		$this->load->view('admin/certificate/tambah');
	}

	public function proses_tambah(){
		$sertifikat = $this->input->post('sertifikat');

		$where = array(
			'nama_sertifikat' => $sertifikat, 

			);
		$tambah = $this->db->insert('sertifikat',$where);

		if ($tambah) {
			redirect(base_url('Certificate'));
		}else{
			echo "gagal Tambah";
		}

	}
	public function edit(){
		$id = $this->uri->segment(3);

		$where = array('id_sertifikat' => $id, );
		$edit = $this->m_index->edit('sertifikat',$where)->result_array();

		foreach ($edit as $h) {

			$data['id_sertifikat'] = $h['id_sertifikat'];
			$data['nama_sertifikat'] = $h['nama_sertifikat'];
		}
		$this->load->view('admin/certificate/edit',$data);
	}

	public function proses_edit(){
		$id = $this->input->post('id_sertifikat');

		$where = array(
		'nama_sertifikat' => $this->input->post('sertifikat'),

		 );

		// var_dump($where);

		$this->db->where('id_sertifikat',$id);
	    $this->db->update('sertifikat',$where);
		redirect('Certificate');
		
		}
}