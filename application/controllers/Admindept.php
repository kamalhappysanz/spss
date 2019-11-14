<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admindept extends CI_Controller {
		function __construct() {
			 parent::__construct();
			    $this->load->helper('url');
			    $this->load->library('session');
				  $this->load->model('offersmodel');
					$this->load->model('admindeptmodel');

	 }


	 public function index(){

		 $data=$this->session->userdata();
		 $user_id=$this->session->userdata('user_id');
		 $user_type=$this->session->userdata('user_role');
		 if($user_type=='1'){
			 $data['res']=$this->admindeptmodel->get_all_data();
			 $this->load->view('admin/admin_header');
			 $this->load->view('admin/dept/create',$data);
			 $this->load->view('admin/admin_footer');
		 }else {
				redirect('/login');
		 }

	 }




	 public function create_dept(){

		 $data=$this->session->userdata();
		 $user_id=$this->session->userdata('user_id');
		 $user_type=$this->session->userdata('user_role');
	 	if($user_type=='1'){
		  	$name=$this->db->escape_str($this->input->post('name'));
				$description=$this->db->escape_str($this->input->post('description'));
				$history=$this->db->escape_str($this->input->post('history'));
				$vision=$this->db->escape_str($this->input->post('vision'));
				$status=$this->db->escape_str($this->input->post('status'));
				$data['res']=$this->admindeptmodel->create_dept($name,$description,$history,$vision,$status,$user_id);
				if($data['res']['status']=="success"){
					$messge = array('message' => 'Successfully Added','class' => 'alert alert-success fade in');
					$this->session->set_flashdata('msg', $messge);
					redirect('admindept/#list' );
				}else{
					$messge = array('message' => $data['res']['status'],'class' => 'alert alert-danger fade in');
					$this->session->set_flashdata('msg', $messge);
					redirect('admindept/#list' );
				}

		}else {
			 redirect('/login');
		}
	 }






	 public function get_dept_edit(){
		 $data=$this->session->userdata();
		 $user_id=$this->session->userdata('user_id');
		 $user_type=$this->session->userdata('user_role');
		 if($user_type=='1'){
			$id=$this->uri->segment(3);
			$data['res']=$this->admindeptmodel->get_dept_edit($id);
			$this->load->view('admin/admin_header');
			$this->load->view('admin/dept/update_dept',$data);
			$this->load->view('admin/admin_footer');
		 }else{
			  redirect('/login');
		 }
	 }


	 public function change_dept_position(){
		 $data=$this->session->userdata();
		 $user_id=$this->session->userdata('user_id');
		 $user_type=$this->session->userdata('user_role');
		if($user_type=='1'){
			$position = $this->input->post('position');
			$this->admindeptmodel->change_dept_position($position);
		}else{

		}
	 }



	 public function update_department(){
		 $data=$this->session->userdata();
		 $user_id=$this->session->userdata('user_id');
		 $user_type=$this->session->userdata('user_role');
	  if($user_type=='1'){
			$id=$this->db->escape_str($this->input->post('id'));
			$name=$this->db->escape_str($this->input->post('name'));
			$description=$this->db->escape_str($this->input->post('description'));
			$history=$this->db->escape_str($this->input->post('history'));
			$vision=$this->db->escape_str($this->input->post('vision'));
			$status=$this->db->escape_str($this->input->post('status'));
		 $data['res']=$this->admindeptmodel->update_department($id,$name,$description,$history,$vision,$status,$user_id);
			 if($data['res']['status']=="success"){
				 $messge = array('message' => 'Successfully Updated','class' => 'alert alert-success fade in');
				 $this->session->set_flashdata('msg', $messge);
				redirect('admindept/#list' );
			 }else{
				 $messge = array('message' => $data['res']['status'],'class' => 'alert alert-danger fade in');
				 $this->session->set_flashdata('msg', $messge);
				 redirect('admindept/#list' );
			 }
		 }
	 }


	 public function add_dept_staff(){

		 $data=$this->session->userdata();
		 $user_id=$this->session->userdata('user_id');
		 $user_type=$this->session->userdata('user_role');
		 if($user_type=='1'){
			 $data['res']=$this->admindeptmodel->get_all_data();
			 $this->load->view('admin/admin_header');
			 $this->load->view('admin/dept/add_dept_staff',$data);
			 $this->load->view('admin/admin_footer');
		 }else {
				redirect('/login');
		 }

	 }




}
