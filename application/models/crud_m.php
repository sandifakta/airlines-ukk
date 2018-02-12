<?php 
class crud_m extends CI_Model{
	function tampil_data(){
		return $this->db->get('rute');
	}

	function input_data($data, $table) {
		$this->db->insert($table, $data);
	}

	function hapus_record($where, $table) {
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_datarute($where, $table){
		return $this->db->get_where($table, $where);
	}

	function update_datarute($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}
}
?>