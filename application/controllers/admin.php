<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('e404');
		}
		elseif ($this->session->userdata('level')=='user') {
			redirect('e404');
		}
		$this->load->model("m_data");
	}

	function index()
	{
		// $this->load->view('admin');

		$data['show']=$this->m_data->select('user');
		$data['side']='tampil/side';
		$data['content']='tampil/v_admincontrol';
		$this->load->view('tampil/main',$data);
	}
	function v_user()
	{
		$data['show']=$this->m_data->select('user');
		$data['side']='tampil/side';
		$data['content']='tampil/v_user';
		$this->load->view('tampil/main',$data);
	}

	function v_tambah_useradmin()
	{
		$data['show']=$this->m_data->select('user');
		$data['side']='tampil/side';
		$data['content']='tampil/v_tambah_useradmin';
		$this->load->view('tampil/main',$data);
	}

	function v_rutemaskapai()
	{
		$data['show']=$this->m_data->select('rute');
		$data['side']='tampil/side';
		$data['content']='tampil/v_rutemaskapai';
		$this->load->view('tampil/main',$data);
	}		

	function reservation()
	{
		$data['show']=$this->m_data->select('reservation');
		$data['side']='tampil/side';
		$data['content']='tampil/reservation';
		$this->load->view('tampil/main',$data);
	}	

	function v_tambahrute()
	{
		$data['show']=$this->m_data->select('rute');
		$data['side']='tampil/side';
		$data['content']='tampil/v_tambahrute';
		$this->load->view('tampil/main',$data);
	}	

	function confirm_user()
	{
		$data['show']=$this->m_data->select('confirm_user');
		$data['side']='tampil/side';
		$data['content']='tampil/v_confirm_user';
		$this->load->view('tampil/main',$data);
	}

	function hapus($id){
		$where = array('userid' => $id);
		$this->m_data->hapus_data($where,'user');
		redirect('admin/v_user');
	}	

	function hapus_confirmuser($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'confirm_user');
		redirect('admin/confirm_user');
	}

	function hapus_reservation($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'reservation');
		redirect('admin/reservation');
	}

	function hapus_rute($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'rute');
		redirect('admin/v_rutemaskapai');
	}

	function update_user($id){
		$where = array('userid' => $id);
		$data['show'] = $this->m_data->edit_data($where,'user')->result();
		$data['side']='tampil/side';
		$data['content']='tampil/v_edit';
		$this->load->view('tampil/main',$data);
	}		

	function update_reservation($id){
		$where = array('id' => $id);
		$data['show'] = $this->m_data->edit_data($where,'reservation')->result();
		$data['side']='tampil/side';
		$data['content']='tampil/v_editreservation';
		$this->load->view('tampil/main',$data);
	}	

	function update_rute($id){
		$where = array('id' => $id);
		$data['show'] = $this->m_data->edit_data($where,'rute')->result();
		$data['side']='tampil/side';
		$data['content']='tampil/v_editrute';
		$this->load->view('tampil/main',$data);
	}	

	function update_konfirmuser($id){
		$where = array('id' => $id);
		$data['show'] = $this->m_data->edit_data($where,'confirm_user')->result();
		$data['side']='tampil/side';
		$data['content']='tampil/v_editkonfirmuser';
		$this->load->view('tampil/main',$data);
	}

	function addairplane(){
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
 		$fullname = $this->input->post('fullname');

		$data = array(
			'username' => $username,
			'email' => $email,
			'fullname' => $fullname,
			'password' => md5($password),
			'level' => "user"
			);
		$this->m_data->input_data($data,'rute');
		redirect('main');
	}
}