<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert extends CI_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model('crud_m');
		$this->load->helper('url');
	}

	function tampil(){
		$data['rute'] = $this->crud_m->tampil_data()->result();
		$this->load->view('tampil', $data);
	}

	function index() {
		$this->load->view('index');
	}

	function tambah_aksi() {
		$from = $this->input->post('from');
		$to = $this->input->post('to');
		$date = $this->input->post('depart');
		$price = $this->input->post('prices');

		$data = array(
				'rute_from' => $from,
				'rute_to' => $to,
				'depart_on' => $date,
				'price' => $price
		);
		$this->crud_m->input_data($data, 'rute');
		redirect('insert/index');
	}

	function hapus($id){
		$where = array('ruteid' => $id);
		$this->crud_m->hapus_record($where, 'rute');
		redirect('insert/tampil');
	}

	function edit_rute($id){
		$where = array ('ruteid' => $id);
		$data['rute'] = $this->crud_m->edit_datarute($where, 'rute')->result();
		$this->load->view('edit', $data);
	}

	function update_rute(){
		$ruteid = $this->input->post('ruteid');
		$from = $this->input->post('from');
		$to = $this->input->post('to');
		$depart_on = $this->input->post('depart');
		$price = $this->input->post('prices');
		$data = array(
			'rute_from' => $from,
			'rute_to' => $to,
			'depart_on' => $depart_on,
			'price' => $price
		);
		$where = array(
			'ruteid' => $ruteid
		);
		$this->crud_m->update_datarute($where, $data, 'rute');
		redirect('insert/tampil');
	}


}

?>