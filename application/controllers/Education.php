<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Education extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_index');
		$this->load->library('session');
	}

	public function index(){
		$data['tampil'] = $this->m_index->tampil_data('sekolah')->result_array();
		$this->load->view('admin/education/tables',$data);
	}
	public function delete(){
		$id = $this->uri->segment(3);

		$where = array('id_sekolah' => $id, );
		$this->db->delete('sekolah',$where);
		redirect('Education');
	}

	public function add(){
		$this->load->view('admin/education/tambah');
	}

	public function proses_tambah(){
		$nama = $this->input->post('nama');
		$tempat = $this->input->post('tempat');
		$tahun = $this->input->post('tahun');
		$jurusan = $this->input->post('jurusan');

		$where = array(
			'nama' => $nama, 
			'tempat' => $tempat, 
			'tahun' => $tahun, 
			'jurusan' => $jurusan 

			);
		$tambah = $this->db->insert('sekolah',$where);

		if ($tambah) {
			redirect(base_url('Education'));
		}else{
			echo "gagal Tambah";
		}

	}
	public function edit(){
		$id = $this->uri->segment(3);

		$where = array('id_sekolah' => $id, );
		$edit = $this->m_index->edit('sekolah',$where)->result_array();

		foreach ($edit as $h) {

			$data['id_sekolah'] = $h['id_sekolah'];
			$data['nama'] = $h['nama'];
			$data['tempat'] = $h['tempat'];
			$data['tahun'] = $h['tahun'];
			$data['jurusan'] = $h['jurusan'];
		}
		$this->load->view('admin/education/edit',$data);
	}

	public function proses_edit(){
		$id = $this->input->post('id_sekolah');

		$where = array(
			'nama' => $this->input->post('nama'),
			'tempat' => $this->input->post('tempat'),
			'tahun' => $this->input->post('tahun'),
			'jurusan' => $this->input->post('jurusan'),
		 );

		$this->db->where('id_sekolah',$id);
	    $this->db->update('sekolah',$where);
		redirect('Education');
		
		}
}