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

	public function dept()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('dept',$data);
		$this->load->view('footer');
	}



	public function dept_details()
	{
	 	$dept_id=$this->uri->segment(3);
		$data['res_faculty']=$this->welcomemodel->get_dept_faculty($dept_id);
		$data['res_lab_facility']=$this->welcomemodel->get_dept_facility($dept_id);
		$data['res_syllabus_activity']=$this->welcomemodel->get_syllabus_activity($dept_id);
		$data['res_association_activity']=$this->welcomemodel->get_association_activity($dept_id);
		$data['res_dept_info']=$this->welcomemodel->get_dept_info($dept_id);
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('dept_details',$data);
		$this->load->view('footer');
	}

	public function general_facility()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('general_facility',$data);
		$this->load->view('footer');
	}

	public function hostel()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('hostel',$data);
		$this->load->view('footer');
	}


	public function transport()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('transport',$data);
		$this->load->view('footer');
	}

	public function iipchome()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('iipchome',$data);
		$this->load->view('footer');
	}

	public function iipcmission()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('iipcmission',$data);
		$this->load->view('footer');
	}

	public function iipccommittee()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('iipccommittee',$data);
		$this->load->view('footer');
	}

	public function iipcmou()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('iipcmou',$data);
		$this->load->view('footer');
	}

	public function iipcedc()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('iipcedc',$data);
		$this->load->view('footer');
	}

	public function committee()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$data['res_committee']=$this->welcomemodel->get_committee();
		$this->load->view('header',$data);
		$this->load->view('committee',$data);
		$this->load->view('footer');
	}




	public function CIICP_home()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('CIICP_home',$data);
		$this->load->view('footer');
	}


	public function CIICP_News()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$data['res_data']=$this->welcomemodel->get_ciipc_events();
		$this->load->view('header',$data);
		$this->load->view('CIICP_News',$data);
		$this->load->view('footer');
	}

	public function CIICP_mission()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('CIICP_mission',$data);
		$this->load->view('footer');
	}
	public function CIICP_mandate()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('CIICP_mandate',$data);
		$this->load->view('footer');
	}
	public function CIICP_trust()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$data['res_data']=$this->welcomemodel->get_ciipc_events();
		$this->load->view('header',$data);
		$this->load->view('CIICP_trust',$data);
		$this->load->view('footer');
	}

	public function CIICP_spic()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$data['res_data']=$this->welcomemodel->get_ciipc_spic_members();
		$this->load->view('header',$data);
		$this->load->view('CIICP_spic',$data);
		$this->load->view('footer');
	}

	public function CIICP_courses()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('CIICP_courses',$data);
		$this->load->view('footer');
	}

	public function CIICP_photos()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$data['res_data']=$this->welcomemodel->get_ciipc_photos();
		$this->load->view('header',$data);
		$this->load->view('CIICP_photos',$data);
		$this->load->view('footer');
	}

	public function placement()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$data['res_placement_data']=$this->welcomemodel->get_placement_record();
		$data['res_placement_activity']=$this->welcomemodel->get_placement_activity();
		$this->load->view('header',$data);
		$this->load->view('placement',$data);
		$this->load->view('footer');
	}

	public function scholarship()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('scholarship',$data);
		$this->load->view('footer');
	}

	public function extra()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$data['res_data']=$this->welcomemodel->get_extra_curicullar_activity();
		$this->load->view('header',$data);
		$this->load->view('extra',$data);
		$this->load->view('footer');
	}

	public function nss_activites()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('nss_activites',$data);
		$this->load->view('footer');
	}
	public function facility()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('facility',$data);
		$this->load->view('footer');
	}

	public function downloads()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$data['res_data']=$this->welcomemodel->get_downloads();
		$this->load->view('header',$data);
		$this->load->view('downloads',$data);
		$this->load->view('footer');
	}

	public function student_union()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$data['res_data']=$this->welcomemodel->get_student_union();
		$this->load->view('header',$data);
		$this->load->view('student_union',$data);
		$this->load->view('footer');
	}
	public function keycontact()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('keycontact',$data);
		$this->load->view('footer');
	}

	public function events()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('events',$data);
		$this->load->view('footer');
	}

	public function nonteaching()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('nonteaching',$data);
		$this->load->view('footer');
	}

	public function faculty()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$data['res_dept_staff']=$this->welcomemodel->get_all_dept_staff_details();
		$this->load->view('header',$data);
		$this->load->view('faculty',$data);
		$this->load->view('footer');
	}
	public function facultyadd()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('facultyadd',$data);
		$this->load->view('footer');
	}
	public function sports()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$data['res_data']=$this->welcomemodel->get_sports();
		$this->load->view('header',$data);
		$this->load->view('sports',$data);
		$this->load->view('footer');
	}
	public function contact()
	{
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('contact',$data);
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
