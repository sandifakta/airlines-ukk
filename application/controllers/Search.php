<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
	}

	public function cari_rute()
	{
		$rutefrom = $this->input->get('rute_from');
		$ruteto = $this->input->get('rute_to');
		$departat = $this->input->get('depart_at');
		$jml = $this->input->get('jml');

		$this->session->set_userdata('rute_from', $rutefrom);
		$this->session->set_userdata('rute_to', $ruteto);
		$this->session->set_userdata('depart_at', $departat);
		$this->session->set_userdata('jml', $jml);

		$data['rute'] = $this->m_data->tampilPencarian($rutefrom, $ruteto, $departat);
		// echo '<pre>';
		// print_r($data['rute']->result());
		// echo '</pre>';
		$this->load->view('result', $data);
	}
}
