<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Experience extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_index');
		$this->load->library('session');
	}

	public function index(){
		$data['tampil'] = $this->m_index->tampil_data('pengalaman')->result_array();
		$this->load->view('admin/experience/index',$data);
	}
	public function delete(){
		$id = $this->uri->segment(3);

		$where = array('id_pengalaman' => $id, );
		$this->db->delete('pengalaman',$where);
		redirect('Education');
	}

	public function add(){
		$this->load->view('admin/experience/tambah');
	}

	public function proses_tambah(){
		$namkeg = $this->input->post('namkeg');
		$tempat_pel = $this->input->post('tempat_pel');
		$tahun = $this->input->post('tahun');
		$deskripsi = $this->input->post('deskripsi');

		$where = array(
			'namkeg' => $namkeg, 
			'tempat_pel' => $tempat_pel, 
			'tahun' => $tahun, 
			'deskripsi' => $deskripsi 

			);
		$tambah = $this->db->insert('pengalaman',$where);

		if ($tambah) {
			redirect(base_url('experience'));
		}else{
			echo "gagal Tambah";
		}

	}
	public function edit(){
		$id = $this->uri->segment(3);

		$where = array('id_pengalaman' => $id, );
		$edit = $this->m_index->edit('pengalaman',$where)->result_array();

		foreach ($edit as $h) {

			$data['id_pengalaman'] = $h['id_pengalaman'];
			$data['namkeg'] = $h['namkeg'];
			$data['tempat_pel'] = $h['tempat_pel'];
			$data['tahun'] = $h['tahun'];
			$data['deskripsi'] = $h['deskripsi'];
		}
		$this->load->view('admin/experience/edit',$data);
	}

	public function proses_edit(){
		$id = $this->input->post('id_pengalaman');

		$where = array(
		'namkeg' => $this->input->post('namkeg'),
		'tempat_pel' => $this->input->post('tempat_pel'),
		'tahun' => $this->input->post('tahun'),
		'deskripsi' => $this->input->post('deskripsi')
		 );

		// var_dump($where);

		$this->db->where('id_pengalaman',$id);
	    $this->db->update('pengalaman',$where);
		redirect('experience');
		
		}
}