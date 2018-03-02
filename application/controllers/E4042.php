<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E4042 extends CI_Controller {

	public function index()
	{
		$d['title']= 'maaf halaman tidak ditemukan.';
		$this->load->view('e4042' , $d);
	}

}
