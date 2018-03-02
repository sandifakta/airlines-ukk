<?php 


class Action extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

	}

	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}

	function daftar(){
		$this->load->view('v_input');
	}

	function detailbooking($id){
		$where = $id;

		$rute_from = $this->session->userdata('rute_from');
		$rute_to = $this->session->userdata('rute_to');
		$depart_at = $this->session->userdata('depart_at');
		$jml = $this->session->userdata('jml');

		$kodejjj = $this->session->userdata('kodejjj');
		$priceee = $this->session->userdata('priceee');
		$jml = $this->session->userdata('jml');

		$data = array
		(
			'rute_from' => $rute_from, 
			'rute_to' => $rute_to, 
			'depart_at' => $depart_at,
			'kodejjj' => $kodejjj,
			'jml' => $jml,
			'priceee' => $priceee,
			'idnya' => $where
			
		);

		$this->load->view('tampil/v_detailbooking', $data);
	}	

	function booking(){

		$jml = $this->input->post('jmlPenumpang');
		$id = $this->input->post('id_rute');

		$this->session->set_userdata('idnyaaa', $id);
		$this->session->set_userdata('jmlPenumpang', $jml);

		$data = array
		(
			'jml' => $jml, 
			'id' => $id
		);

		$this->load->view('tampil/v_booking', $data);
	}	

	function select_seat(){
		$idnee = $this->session->userdata('idnyaaa');
		$jml = $this->session->userdata('jmlPenumpang');

		$data = array
		(
			'jmlP' => $jml
		);

		$data['filter'] = $this->m_data->filterseat($idnee)->result();

		$data['seat'] = $this->m_data->seat($idnee)->result();
		$this->load->view('tampil/tempatduduk', $data);
	}

	function payment(){
		$priceee = $this->session->userdata('priceee');
		$kodejjj = $this->session->userdata('kodejjj');
		$jml = $this->session->userdata('jmlPenumpang');
		$rute_from = $this->session->userdata('rute_from');
		$rute_to = $this->session->userdata('rute_to');
		$depart_at = $this->session->userdata('depart_at');

		$data = array
		(
			'rega' => $priceee,
			'kode' => $kodejjj,
			'jml' => $jml,
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'depart_at' => $depart_at
		);

		$this->load->view('tampil/vpayment', $data);
	}

	function paymentsuccess(){
		$priceee = $this->session->userdata('priceee');
		$kodejjj = $this->session->userdata('kodejjj');
		$jml = $this->session->userdata('jmlPenumpang');
		$rute_from = $this->session->userdata('rute_from');
		$rute_to = $this->session->userdata('rute_to');
		$depart_at = $this->session->userdata('depart_at');

		$data = array
		(
			'rega' => $priceee,
			'kode' => $kodejjj,
			'jml' => $jml,
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'depart_at' => $depart_at
		);

		$this->load->view('tampil/v_payberhasil', $data);
	}

	function konfirmasi(){
		$foto = $this->input->post('fotoBarangBukti');
		// $resCode = $this->session->userdata('reserCode');
		// $custID = $this->my_model->getcustid($resCode)->row()->id;
		if ($foto == "" || $foto == null) 
		{
			echo ("<script language='javascript'>
			    window.alert('Tidak bisa mengupload foto kosong!')
			    window.location.href='payment';
				</SCRIPT>");
		}
		else
		{
			$data = array
			(
		    	'gambar_bukti' => $foto,
		    	'status' => 'Belum Dikonfirmasi',
			);
			
			$this->m_data->input_data($data,'confirm_user');
			echo ("<script language='javascript'>
			    window.alert('Berhasil mengupload gambar, silahkan tunggu konfirmasi.')
			    window.location.href='paymentsuccess';
				</SCRIPT>");
		}
	}

	function update(){
		$id = $this->input->post("id");
		$username = $this->input->post('username');
		$fullname = $this->input->post('fullname');
		$password = md5($this->input->post('password'));
		$email = $this->input->post('email');

		$data = array(
			'userid' => $id,
			'username' => $username,
			'fullname' => $fullname,
			'password' => $password,
			'email' => $email
		);

		$where = array(
			'userid' => $id
		);

		$this->m_data->update_data($where,$data,'user');
		redirect('admin/v_user');
	}

	function update_reservation(){
		$id = $this->input->post("id");
		$reservation_code = $this->input->post('reservation_code');
		$reservation_at = $this->input->post('reservation_at');
		$reservation_date = $this->input->post('reservation_date');
		$customerid = $this->input->post('customerid');
		$seat_code = $this->input->post('seat_code');
		$ruteid = $this->input->post('ruteid');
		$depart_at = $this->input->post('depart_at');
		$price = $this->input->post('price');
		$userid = $this->input->post('userid');

		

		$data = array(
			'id' => $id,
			'reservation_code' => $reservation_code,
			'reservation_at' => $reservation_at,
			'reservation_date' => $reservation_date,
			'customerid' => $customerid,
			'seat_code' => $seat_code,
			'ruteid' => $ruteid,
			'depart_at' => $depart_at,
			'price' => $price,
			'userid' => $userid
		);

		$where = array(
			'id' => $id
		);

		$this->m_data->update_data($where,$data,'reservation');
		redirect('admin/reservation');
	}

	function update_rute(){
	 	$id = $this->input->post("id");
		$transportationid = $this->input->post('transportationid');
		$depart_at = $this->input->post('depart_at');
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$price = $this->input->post('price');

		$data = array(
			'id' => $id,
			'transportationid' => $transportationid,
			'depart_at' => $depart_at,
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'price' => $price
		);

		$where = array(
			'id' => $id
		);

		$this->m_data->update_data($where,$data,'rute');
		redirect('admin/v_rutemaskapai');
	}

	// function update_rute(){
	// 	$id = $this->input->post("id");
	// 	$transportationid = $this->input->post('transportationid');
	// 	$depart_at = $this->input->post('depart_at');
	// 	$rute_from = $this->input->post('rute_from');
	// 	$rute_to = $this->input->post('rute_to');
	// 	$price = $this->input->post('price');

	// 	$data = array(
	// 		'id' => $id,
	// 		'transportationid' => $transportationid,
	// 		'depart_at' => $depart_at,
	// 		'rute_from' => $rute_from,
	// 		'rute_to' => $rute_to,
	// 		'price' => $price
	// 	);

	// }

	function update_confirm_user(){
		$id = $this->input->post("id");
		$gambar_bukti = $this->input->post('gambar_bukti');
		$status = $this->input->post('status');

		$data = array(
			'id' => $id,
			'gambar_bukti' => $gambar_bukti,
			'status' => $status,
		);

		$where = array(
			'id' => $id,
		);

		$this->m_data->update_data($where,$data,'confirm_user');
		redirect('admin/confirm_user');
	}


	function tambah_aksi(){
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
		$this->m_data->input_data($data,'user');
		redirect('login');
	}

	function tambah_customer(){
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
 		$gender = $this->input->post('gender');



 		$length = 9;
 		$char = '0123456789';
 		$charLength = strlen($char);
 		$res_code = '';
 		for ($i=0; $i < $length; $i++) 
 		{ 
 			$res_code .= $char[rand(0, $charLength - 1)];
 		}

 		$this->session->set_userdata('res_code', $res_code);

		$data = array(
			'name' => $name,
			'address' => $address,
			'phone' => $phone,
			'gender' => $gender,
			'reservation_code' => $res_code
			);
		$this->m_data->input_data($data,'customer');
		redirect('action/select_seat');
	}

	function tambah_seat(){
		$seat = $this->input->post('seat');
		$idnee = $this->session->userdata('idnyaaa');
		$res = $this->session->userdata('res_code');

		$custID = $this->m_data->getcustid($res)->row()->id;

		foreach ($seat as $kursi) 
		{
			$data = array(
			'seat_code' => $kursi,
			'ruteid' => $idnee,
			'reservation_code' => $res,
			'customerid' => $custID,
			'userid' => $custID,

			);
			$this->m_data->input_data($data,'reservation');
		}

		redirect('action/payment','refresh');
	}

	function tambah_useradmin(){
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
 		$fullname = $this->input->post('fullname');
 		$level = $this->input->post('level');

		$data = array(
			'username' => $username,
			'email' => $email,
			'fullname' => $fullname,
			'password' => md5($password),
			'level' => $level
			);
		$this->m_data->input_data($data,'user');
		redirect('admin/v_user');
	}

	function tambah_rute(){
		$transportationid = $this->input->post('transportationid');
		$depart_at = $this->input->post('depart_at');
		$rute_from = $this->input->post('rute_from');
 		$rute_to = $this->input->post('rute_to');
 		$price = $this->input->post('price');

		$data = array(
			'transportationid' => $transportationid,
			'depart_at' => $depart_at,
			'rute_from' => ($rute_from),
			'rute_to' => $rute_to,
			'price' => $price
			);
		$this->m_data->input_data($data,'rute');
		redirect('admin/v_rutemaskapai');
	}
 
}