<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('welcomemodel');

	}



	public function index()
	{
		$data['res_banner']=$this->welcomemodel->get_home_banner();
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$data['res_announcement']=$this->welcomemodel->get_announcements();
		$this->load->view('header',$data);
		$this->load->view('home',$data);
		$this->load->view('footer');
	}


	public function ins_profile()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('ins_profile',$data);
		$this->load->view('footer');
	}

	public function mission()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('mission',$data);
		$this->load->view('footer');
	}


	public function founders()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('founders',$data);
		$this->load->view('footer');
	}

	public function management()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('management',$data);
		$this->load->view('footer');
	}


	public function governing()
	{
		$data['res_council']=$this->welcomemodel->get_governing_council();
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('governing',$data);
		$this->load->view('footer');
	}



	public function course_offered()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('course_offered',$data);
		$this->load->view('footer');
	}

	public function admission()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('admission',$data);
		$this->load->view('footer');
	}

	public function syllabi()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$data['res_syllabi']=$this->welcomemodel->get_syllabi();
		$this->load->view('header',$data);
		$this->load->view('syllabi',$data);
		$this->load->view('footer');
	}


	public function academic_calendar()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$data['res_calendar']=$this->welcomemodel->get_academic_calendar();
		$this->load->view('header',$data);
		$this->load->view('academic_calendar',$data);
		$this->load->view('footer');
	}

	public function library()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('library',$data);
		$this->load->view('footer');
	}


	public function login()
	{
		$data=$this->session->userdata();
		$user_id=$this->session->userdata('user_id');
		$user_type=$this->session->userdata('user_role');
		if($user_type=="1"){
			redirect('home/dashboard');
		}else{
				$this->load->view('admin/login.php');
		}


	}




	public function forgotpassword()
	{

		$this->load->view('admin/forgot_password.php');

	}



}
