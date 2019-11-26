<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmodule extends CI_Controller {
		function __construct() {
			 parent::__construct();
			    $this->load->helper('url');
			    $this->load->library('session');
				  // $this->load->model('offersmodel');
					$this->load->model('adminexammodel');
					$this->load->model('adminmodulemodel');

	 }


	 public function index(){


		 $data=$this->session->userdata();
		 $user_id=$this->session->userdata('user_id');
		 $user_type=$this->session->userdata('user_role');
		 if($user_type=='1'){
			 $data['res']=$this->adminmodulemodel->get_all_data();
			 $this->load->view('admin/admin_header');
			 $this->load->view('admin/modules/create',$data);
			 $this->load->view('admin/admin_footer');
		 }else {
				redirect('/login');
		 }

	 }


	 public function create_modules(){

		 $data=$this->session->userdata();
		 $user_id=$this->session->userdata('user_id');
		 $user_type=$this->session->userdata('user_role');
	 	if($user_type=='1'){
				$tbl_master_id=$this->db->escape_str($this->input->post('tbl_master_id'));
		  	$title=$this->db->escape_str($this->input->post('title'));
				$profilepic = $_FILES['file_upload']['name'];
				if(empty($profilepic)){
				$filename=' ';
			}else{
				$temp = pathinfo($profilepic, PATHINFO_EXTENSION);
				$filename = round(microtime(true)) . '.' . $temp;
				$uploaddir = 'assets/documents/';
				$profilepic = $uploaddir.$filename;
				move_uploaded_file($_FILES['file_upload']['tmp_name'], $profilepic);
			}
				$status=$this->db->escape_str($this->input->post('status'));
				$data['res']=$this->adminmodulemodel->adminmodulemodel($tbl_master_id,$title,$filename,$status,$user_id);
				if($data['res']['status']=="success"){
					//$this->session->set_flashdata('msg','Successfully Added' );
					$messge = array('message' => 'Successfully Added','class' => 'alert alert-success fade in');
					$this->session->set_flashdata('msg', $messge);
					redirect('adminmodule/get_module_data/'.$tbl_master_id.'' );
				}else{
					$messge = array('message' => 'Something Went Wrong','class' => 'alert alert-danger fade in');
					$this->session->set_flashdata('msg', $messge);
					redirect('adminmodule/get_module_data/'.$tbl_master_id.'' );
				}

		}else {
			 redirect('/login');
		}
	 }


	 public function get_module_data(){
		 $data=$this->session->userdata();
		 $user_id=$this->session->userdata('user_id');
		 $user_type=$this->session->userdata('user_role');
		 if($user_type=='1'){
			$id=$this->uri->segment(3);
			$data['res']=$this->adminmodulemodel->get_module_data($id);
			$data['res_title']=$this->adminmodulemodel->get_module_title($id);
			$this->load->view('admin/admin_header');
			$this->load->view('admin/modules/view_modules',$data);
			$this->load->view('admin/admin_footer');
		 }else{
			  redirect('/login');
		 }
	 }

	 public function view_module_data(){
		 $data=$this->session->userdata();
		 $user_id=$this->session->userdata('user_id');
		 $user_type=$this->session->userdata('user_role');
		 if($user_type=='1'){
			$id=$this->uri->segment(3);
			$data['res']=$this->adminmodulemodel->get_module_data($id);
			$data['res_title']=$this->adminmodulemodel->get_module_title($id);
			$this->load->view('admin/admin_header');
			$this->load->view('admin/modules/view_modules',$data);
			$this->load->view('admin/admin_footer');
		 }else{
				redirect('/login');
		 }
	 }

	 public function get_modules_edit(){
		 $data=$this->session->userdata();
		 $user_id=$this->session->userdata('user_id');
		 $user_type=$this->session->userdata('user_role');
		 if($user_type=='1'){
			$id=$this->uri->segment(3);
			$data['res']=$this->adminmodulemodel->get_modules_edit($id);
			$this->load->view('admin/admin_header');
			$this->load->view('admin/modules/edit_modules',$data);
			$this->load->view('admin/admin_footer');
		 }else{
				redirect('/login');
		 }
	 }






	 public function update_module(){
		 $data=$this->session->userdata();
		 $user_id=$this->session->userdata('user_id');
		 $user_type=$this->session->userdata('user_role');
	  if($user_type=='1'){
			$tbl_master_id=$this->db->escape_str($this->input->post('tbl_master_id'));
			$id=$this->db->escape_str($this->input->post('id'));
			$old_file_upload=$this->db->escape_str($this->input->post('old_file_upload'));
			$tbl_master_id=$this->db->escape_str($this->input->post('tbl_master_id'));
			$title=$this->db->escape_str($this->input->post('title'));
			$profilepic = $_FILES['file_upload']['name'];
			if(empty($profilepic)){
			$filename=$old_file_upload;
		}else{
			$temp = pathinfo($profilepic, PATHINFO_EXTENSION);
			$filename = round(microtime(true)) . '.' . $temp;
			$uploaddir = 'assets/documents/';
			$profilepic = $uploaddir.$filename;
			move_uploaded_file($_FILES['file_upload']['tmp_name'], $profilepic);
		}
		 $status=$this->db->escape_str($this->input->post('status'));
		 $data['res']=$this->adminmodulemodel->update_module($id,$title,$filename,$status,$user_id);
			 if($data['res']['status']=="success"){
				 $messge = array('message' => 'Successfully Updated','class' => 'alert alert-success fade in');
				 $this->session->set_flashdata('msg', $messge);
				redirect('adminmodule/get_module_data/'.$tbl_master_id.'' );
			 }else{
				 $messge = array('message' => 'Something Went Wrong','class' => 'alert alert-danger fade in');
				 $this->session->set_flashdata('msg', $messge);
				 redirect('adminmodule/get_module_data/'.$tbl_master_id.'' );
			 }
		 }
	 }


	 public function view_student_union(){
		 $data=$this->session->userdata();
		 $user_id=$this->session->userdata('user_id');
		 $user_type=$this->session->userdata('user_role');
		 if($user_type=='1'){
			$data['res']=$this->adminmodulemodel->view_student_union();
			$this->load->view('admin/admin_header');
			$this->load->view('admin/modules/view_student_union',$data);
			$this->load->view('admin/admin_footer');
		 }else{
				redirect('/login');
		 }
	 }







	 public function change_module_position(){
		 $data=$this->session->userdata();
		$user_id=$this->session->userdata('user_id');
		$user_type=$this->session->userdata('user_role');
	 if($user_type=='1'){
		 $position = $this->input->post('position');
		 $this->adminmodulemodel->change_module_position($position);
	 }else{

	 }
	 }




}
