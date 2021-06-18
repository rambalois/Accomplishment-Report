<?php 
date_default_timezone_set('Asia/Taipei');

	class Global_model extends CI_Model{

		function check_session() {
			if($this->session->userdata('sess_user')!='') { 
				return true;
			} else {
				return false;
			}
		}
		
	    function get_all_data($table, $select)
		{
			$this->db->select($select);
			$this->db->from($table);
			$q = $this->db->get();
			return $q->result();
		}

		function get_data_with_query($table, $select, $query)
		{
			$this->db->select($select);
			$this->db->from($table);
			$this->db->where($query);
			$q = $this->db->get();
			return $q->result();
		}

		function insert_data($table, $data){

			$this->db->insert($table, $data);
			$insertId = $this->db->insert_id();

   			if($insertId):
   				return $insertId;
			else:
			    return "failed";
			endif;
		}
	}
?>