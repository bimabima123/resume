<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skill extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_index');
		$this->load->library('session');
	}

	public function index(){
		$data['tampil'] = $this->m_index->tampil_data('skill')->result_array();
		$this->load->view('admin/skill/index',$data);
	}
	public function delete(){
		$id = $this->uri->segment(3);

		$where = array('id_skill' => $id, );
		$this->db->delete('skill',$where);
		redirect('Skill');
	}

	public function add(){
		$this->load->view('admin/skill/tambah');
	}

	public function proses_tambah(){
		$kemampuan = $this->input->post('kemampuan');
		$nama = $this->input->post('nama');
		$log_dev = $this->input->post('log_dev');

		$where = array(
			'kemampuan' => $kemampuan, 
			'nama' => $nama, 
			'log_dev' => $log_dev, 

			);
		$tambah = $this->db->insert('skill',$where);

		if ($tambah) {
			redirect(base_url('Skill'));
		}else{
			echo "gagal Tambah";
		}

	}
	public function edit(){
		$id = $this->uri->segment(3);

		$where = array('id_skill' => $id, );
		$edit = $this->m_index->edit('skill',$where)->result_array();

		foreach ($edit as $h) {

			$data['id_skill'] = $h['id_skill'];
			$data['kemampuan'] = $h['kemampuan'];
			$data['nama'] = $h['nama'];
			$data['log_dev'] = $h['log_dev'];
		}
		$this->load->view('admin/skill/edit',$data);
	}

	public function proses_edit(){
		$id = $this->input->post('id_skill');

		$where = array(
		'kemampuan' => $this->input->post('kemampuan'),
		'nama' => $this->input->post('nama'),
		'log_dev' => $this->input->post('log_dev'),

		 );

		// var_dump($where);

		$this->db->where('id_skill',$id);
	    $this->db->update('skill',$where);
		redirect('Skill');
		
		}
}