<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
	}

	function index(){
		$this->load->view('v_login');
	}

	function aksi_login()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$result = $this->m_login->cek_user($username, $password);

		if ($result->num_rows() > 0 ) 
		{
			foreach ($result->result() as $row) 
			{
				$id = $row->userid;
				$username = $row->username;
				$email = $row->email;
				$password = $row->password;
				$fullname = $row->fullname;
				$level = $row->level;
			}

			$ghuyubtheanimator = array
			(
				'userid' => $id,
				'username' => $username,
				'email' => $email,
				'password' => $password,
				'fullname' => $fullname,
				'level' => $level,
				'logged_in' => TRUE
			);

			$this->session->set_userdata($ghuyubtheanimator);
				if($this->session->userdata('level') == 'admin') 
				{
					redirect('admin');
				}
				elseif($this->session->userdata('level') == 'user') 
				{
					redirect('login/welcomelogin');
				}
				}
				else
				{
					$this->session->set_flashdata('errorLogin', '<div class="alert alert-danger" role="alert">Username atau password salah</div>');
					$this->load->view('v_login');
				
				}
		// $username = $this->input->post('username');
		// $password = md5($this->input->post('password'));
		// $where = array(
		// 	'username' => $username,
		// 	'password' => $password
		// 	);
		// $cek = $this->m_login->cek_login("user",$where)->num_rows();
		// if($cek > 0){

		// 	$data_session = array(
		// 		'username' => $username,
		// 		'password' => $password,
		// 		'level' => $level
		// 		'status' => "login"
		// 		);

		// 	$this->session->set_userdata($data_session);

		// 	if ($this->session->userdata('level') == "admin") 
		// 	{
		// 		redirect('admin');
		// 	}
		// 	else if ($this->session->userdata('level') == "user") 
		// 	{
		// 		redirect('travel');
		// 	}

		// 	// $this->load->view('admin');

		// }else{
		// 	echo "Username dan password salah !";
		// }
	}

	function welcomelogin(){
		$this->load->view('welcomelogin');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url(''));
	}
}