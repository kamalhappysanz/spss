<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
		function __construct() {
			 parent::__construct();
			    $this->load->helper('url');
					$this->load->dbforge();
					$this->load->helper('cookie');
			    $this->load->library('session');
					$this->load->model('loginmodel');
					$this->load->model('dashboardmodel');

	 }

	public function index()	{
		$this->load->view('index');
	}



	public function dashboard(){
		$data=$this->session->userdata();
		$user_id=$this->session->userdata('user_id');
		$user_type=$this->session->userdata('user_role');

		if($user_type=='1' || $user_type=='2' || $user_type=='6' || $user_type=='7'){
			$this->load->view('admin/admin_header');
			$this->load->view('admin/dashboard',$data);
			$this->load->view('admin/admin_footer');
		}else {
			 redirect('/login');
		}

	}

	public function profile(){
		$data=$this->session->userdata();
		$user_id=$this->session->userdata('user_id');
		$user_type=$this->session->userdata('user_role');
		if($user_type=='1' || $user_type=='2' || $user_type=='6' || $user_type=='7'){
		  $data['res']=$this->loginmodel->get_user_info($user_id);
			$this->load->view('admin/admin_header');
			$this->load->view('admin/profile',$data);
			$this->load->view('admin/admin_footer');
		}else{

		}

	}

	public function change_password(){
		$data=$this->session->userdata();
		$user_id=$this->session->userdata('user_id');
		$user_type=$this->session->userdata('user_role');
		if($user_type=='1' || $user_type=='2' || $user_type=='6' || $user_type=='7'){
			$this->load->view('admin/admin_header');
			$this->load->view('admin/change_password',$data);
			$this->load->view('admin/admin_footer');
		}else{
			redirect('/');
		}

	}



	public function check_login(){
		$password=md5($this->db->escape_str($this->input->post('password')));
		$username=$this->db->escape_str($this->input->post('username'));
		$data['res']=$this->loginmodel->check_login($username,$password);
		echo json_encode($data['res']);
	}
	public function forgot_password(){
		$phone=$this->db->escape_str($this->input->post('phone_number'));
		$this->input->set_cookie('cookie_phone', $phone, 3600*2);
		$otp = substr(str_shuffle(str_repeat("0123456789", 5)), 0, 6);
		$notes="$otp This is Skilex Verification Code.";
		$data=$this->smsmodel->send_sms($phone,$notes);
		$data['res']=$this->loginmodel->update_otp($phone,$otp);
		echo json_encode($data['res']);
	}




	public function reset_password(){
		$new_password=md5($this->db->escape_str($this->input->post('new_password')));
		$confrim_password=$this->db->escape_str($this->input->post('confrim_password'));
		$cookie_phone=$this->input->cookie('cookie_phone');
		$data['res']=$this->loginmodel->reset_password($cookie_phone,$new_password,$confrim_password);
		echo json_encode($data['res']);
	}



	public function update_profile(){
		$data=$this->session->userdata();
		$user_id=$this->session->userdata('user_id');
		$user_type=$this->session->userdata('user_role');
		if($user_type=='1' || $user_type=='2' || $user_type=='6' || $user_type=='7'){
		$email=$this->db->escape_str($this->input->post('email'));
		$phone=$this->db->escape_str($this->input->post('phone'));
		$name=$this->db->escape_str($this->input->post('name'));
		$city=$this->db->escape_str($this->input->post('city'));
		$qualification=$this->db->escape_str($this->input->post('qualification'));
		$address=$this->db->escape_str($this->input->post('address'));
		$gender=$this->db->escape_str($this->input->post('gender'));
		$data['res']=$this->loginmodel->update_profile($email,$phone,$name,$city,$qualification,$address,$gender,$user_id);
		echo json_encode($data['res']);

		}else{

		}
	}

	public function update_password(){
		$data=$this->session->userdata();
		$user_id=$this->session->userdata('user_id');
		$user_type=$this->session->userdata('user_role');
		if($user_type=='1' || $user_type=='2' || $user_type=='6' || $user_type=='7'){
		$current_password=$this->db->escape_str($this->input->post('current_password'));
		$new_password=$this->db->escape_str($this->input->post('new_password'));
		$confrim_password=$this->db->escape_str($this->input->post('confrim_password'));
		$data['res']=$this->loginmodel->update_password($current_password,$new_password,$confrim_password,$user_id);
		echo json_encode($data['res']);
		}else{

		}
	}


	public function check_current_password(){
		$data=$this->session->userdata();
		$user_id=$this->session->userdata('user_id');
		$user_type=$this->session->userdata('user_role');
			if($user_type=='1' || $user_type=='2' || $user_type=='6' || $user_type=='7'){
		$current_password=md5($this->input->post('current_password'));
		$data=$this->loginmodel->check_current_password($current_password,$user_id);
		}else{

	}
	}




	public function contact_form(){
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$subject=$this->input->post('subject');
		$phone_number=$this->input->post('phone_number');
		$message=$this->input->post('message');
		$data['res']=$this->loginmodel->contact_form($name,$email,$subject,$phone_number,$message);
		echo json_encode($data['res']);
	}


	public function logout(){
		$datas=$this->session->userdata();
		$this->session->unset_userdata($datas);
		$this->session->sess_destroy();
		redirect('/');
	}




	public function db_backup()
	{
	    $this->load->helper('url');
	    $this->load->helper('file');
	    $this->load->helper('download');
	    $this->load->library('zip');
	    $this->load->dbutil();
	    $db_format=array('format'=>'zip','filename'=>'my_db_backup.sql');
	    $backup=& $this->dbutil->backup($db_format);
	    $dbname='backup-on-'.date('Y-m-d').'.zip';
	    $save='assets/db/'.$dbname;
	    write_file($save,$backup);
	    force_download($dbname,$backup);

	}


	public function earse_you_clear_all(){
	$db_name=$this->db->database;
	$this->dbforge->drop_table('tbl_general');
			if ($this->dbforge->drop_table('login_admin'))
		{
		        echo 'Database deleted!';
		}
	}


}
