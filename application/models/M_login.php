<?php 

	class m_login extends CI_Model{

		public function proses_login($table,$where){
			return $this->db->get_where($table,$where);
		}

	}

 ?>