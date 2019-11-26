<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminexam extends CI_Controller {
		function __construct() {
			 parent::__construct();
			    $this->load->helper('url');
			    $this->load->library('session');
				  // $this->load->model('offersmodel');
					$this->load->model('adminexammodel');

	 }


	 public function autonomousadd(){

		 $data=$this->session->userdata();
		 $user_id=$this->session->userdata('user_id');
		 $user_type=$this->session->userdata('user_role');
		 if($user_type=='1'){
			 $data['res']=$this->adminexammodel->get_all_data();
			 $this->load->view('admin/admin_header');
			 $this->load->view('admin/exam/autonomous/create',$data);
			 $this->load->view('admin/admin_footer');
		 }else {
				redirect('/login');
		 }

	 }


	 public function create_autonomous(){

		 $data=$this->session->userdata();
		 $user_id=$this->session->userdata('user_id');
		 $user_type=$this->session->userdata('user_role');
	 	if($user_type=='1'){
		  	$title=$this->db->escape_str($this->input->post('title'));
				$profilepic = $_FILES['file_upload']['name'];
				if(empty($profilepic)){
				$filename=' ';
			}else{
				$temp = pathinfo($profilepic, PATHINFO_EXTENSION);
				$filename = round(microtime(true)) . '.' . $temp;
				$uploaddir = 'assets/autonomous_exam/';
				$profilepic = $uploaddir.$filename;
				move_uploaded_file($_FILES['file_upload']['tmp_name'], $profilepic);
			}
				$status=$this->db->escape_str($this->input->post('status'));
				$data['res']=$this->adminexammodel->create_autonomous($title,$filename,$status,$user_id);
				if($data['res']['status']=="success"){
					//$this->session->set_flashdata('msg','Successfully Added' );
					$messge = array('message' => 'Successfully Added','class' => 'alert alert-success fade in');
					$this->session->set_flashdata('msg', $messge);
					redirect('adminexam/autonomousadd#list' );
				}else{
					$messge = array('message' => 'Something Went Wrong','class' => 'alert alert-danger fade in');
					$this->session->set_flashdata('msg', $messge);
					redirect('adminexam/autonomousadd#list' );
				}

		}else {
			 redirect('/login');
		}
	 }






	 public function get_autonomous_edit(){
		 $data=$this->session->userdata();
		 $user_id=$this->session->userdata('user_id');
		 $user_type=$this->session->userdata('user_role');
		 if($user_type=='1'){
			$id=$this->uri->segment(3);
			$data['res']=$this->adminexammodel->get_autonomous_edit($id);
			$this->load->view('admin/admin_header');
			$this->load->view('admin/exam/autonomous/update',$data);
			$this->load->view('admin/admin_footer');
		 }else{
			  redirect('/login');
		 }
	 }


	 public function change_autnomous_exam_position(){
		 $data=$this->session->userdata();
		 $user_id=$this->session->userdata('user_id');
		 $user_type=$this->session->userdata('user_role');
		if($user_type=='1'){
			$position = $this->input->post('position');
			$this->adminexammodel->change_autnomous_exam_position($position);
		}else{

		}
	 }



	 public function update_autonomous(){
		 $data=$this->session->userdata();
		 $user_id=$this->session->userdata('user_id');
		 $user_type=$this->session->userdata('user_role');
	  if($user_type=='1'){
			$id=$this->db->escape_str($this->input->post('id'));
			$old_file_upload=$this->db->escape_str($this->input->post('old_file_upload'));
			$title=$this->db->escape_str($this->input->post('title'));
			$profilepic = $_FILES['file_upload']['name'];
			if(empty($profilepic)){
			$filename=$old_file_upload;
		}else{
			$temp = pathinfo($profilepic, PATHINFO_EXTENSION);
			$filename = round(microtime(true)) . '.' . $temp;
			$uploaddir = 'assets/autonomous_exam/';
			$profilepic = $uploaddir.$filename;
			move_uploaded_file($_FILES['file_upload']['tmp_name'], $profilepic);
		}
		 $status=$this->db->escape_str($this->input->post('status'));
		 $data['res']=$this->adminexammodel->update_autonomous($id,$title,$filename,$status,$user_id);
			 if($data['res']['status']=="success"){
				 $messge = array('message' => 'Successfully Updated','class' => 'alert alert-success fade in');
				 $this->session->set_flashdata('msg', $messge);
				 	redirect('adminexam/autonomousadd#list' );
			 }else{
				 $messge = array('message' => 'Something Went Wrong','class' => 'alert alert-danger fade in');
				 $this->session->set_flashdata('msg', $messge);
				 	redirect('adminexam/autonomousadd#list' );
			 }
		 }
	 }




}
