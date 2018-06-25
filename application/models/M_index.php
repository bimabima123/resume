<?php 
	class m_index extends CI_Model{

		public function tampil_data($table){
			return $this->db->get_where($table);
		}

		public function edit($table,$where){
			return $this->db->get_where($table,$where);
		}

	}

 ?>