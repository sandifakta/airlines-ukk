<?php 

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function select($table)
	{
		return $this->db->get($table);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	public function update_data($where, $data, $table)
	{
		$this->db->update($table, $data, $where);
		return $this->db->affected_rows();
	}

	function getcustid($resCode)
	{
		$this->db->select('*');
		$this->db->from('customer');
		$this->db->where('reservation_code', $resCode);
		return $this->db->get();
	}

	function filterseat($id){
		$this->db->select('seat_code');
		$this->db->where('reservation.ruteid',$id);
		return $this->db->get('reservation');
	}

	public function tampilPencarian($ruteFrom,$ruteTo,$departAt)
	{
		$query = $this->db->query("SELECT tr.id, tr.depart_at, tr.price as regane, t.code as kodene, tr.rute_from, tr.rute_to, tr.lokasi_gambar as gambar FROM rute tr INNER JOIN trasportation t on (tr.transportationid = t.id) WHERE (tr.depart_at = '$departAt') AND ((tr.rute_from = '$ruteFrom') AND (tr.rute_to = '$ruteTo')) order by tr.depart_at");
    	return $query;

	}

	public function getPrice($id)
	{
		$qry = $this->db->query('select price from rute where id="$id"');
		return $qry;
	}

	public function seat($where)
	{
		$this->db->select('trasportation.seat_qty');
		$this->db->from('trasportation, rute');
		$this->db->where('trasportation.id = rute.transportationid');
		$this->db->where('rute.id', $where);
		return $this->db->get();
	}
}