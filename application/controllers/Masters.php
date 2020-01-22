<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masters extends CI_Controller {
		function __construct() {
			 parent::__construct();
			    $this->load->helper('url');
			    $this->load->library('session');
				  $this->load->model('mastermodel');

	 }




		// Create banners for offers


		public function banner_list(){
			$data=$this->session->userdata();
			$user_id=$this->session->userdata('user_id');
			$user_type=$this->session->userdata('user_role');
			 if($user_type=='1'){
				$data['res']=$this->mastermodel->get_banner();
				$this->load->view('admin/admin_header');
				$this->load->view('admin/master/banner/create',$data);
				$this->load->view('admin/admin_footer');

			}
		}


		public function create_banner(){
			$data=$this->session->userdata();
			$user_id=$this->session->userdata('user_id');
			$user_type=$this->session->userdata('user_role');
		 if($user_type=='1'){
				$banner_title=$this->db->escape_str($this->input->post('banner_title'));
				$status=$this->db->escape_str($this->input->post('status'));
				$profilepic = $_FILES['banner_img']['name'];
				if(empty($profilepic)){
				$pic=' ';
			}else{
				$temp = pathinfo($profilepic, PATHINFO_EXTENSION);
				$pic = round(microtime(true)) . '.' . $temp;
				$uploaddir = 'assets/banners/';
				$profilepic = $uploaddir.$pic;
				move_uploaded_file($_FILES['banner_img']['tmp_name'], $profilepic);
			}
			$data['res']=$this->mastermodel->create_banner($banner_title,$pic,$status,$user_id);
			if($data['res']['status']=="success"){
				$messge = array('message' => 'New banner  has been created','class' => 'alert alert-success fade in');
				$this->session->set_flashdata('msg', $messge);
				redirect('masters/banner_list');
			}else{
				$messge = array('message' => 'Something went wrong','class' => 'alert alert-danger fade in');
				$this->session->set_flashdata('msg', $messge);
				redirect('masters/banner_list');
			}
		}else{
			redirect('/');
		}
		}



		public function get_banner_edit(){
			$data=$this->session->userdata();
			$user_id=$this->session->userdata('user_id');
			$user_type=$this->session->userdata('user_role');
		 if($user_type=='1'){
			 $ban_id=$this->uri->segment(3);
			 $data['res']=$this->mastermodel->get_banner_edit($ban_id);
			 $this->load->view('admin/admin_header');
			 $this->load->view('admin/master/banner/edit',$data);
			 $this->load->view('admin/admin_footer');
		 }else{
			 	redirect('/');
		 }
	}



	public function update_banner(){
		$data=$this->session->userdata();
		$user_id=$this->session->userdata('user_id');
		$user_type=$this->session->userdata('user_role');
		 if($user_type=='1'){
			$banner_title=$this->db->escape_str($this->input->post('banner_title'));
			$ban_id=$this->db->escape_str($this->input->post('ban_id'));
			$banner_old_img=$this->db->escape_str($this->input->post('banner_old_img'));
			$status=$this->db->escape_str($this->input->post('status'));
			$profilepic = $_FILES['banner_img']['name'];
			if(empty($profilepic)){
			$pic=$banner_old_img;
		}else{
			$temp = pathinfo($profilepic, PATHINFO_EXTENSION);
			$pic = round(microtime(true)) . '.' . $temp;
			$uploaddir = 'assets/banners/';
			$profilepic = $uploaddir.$pic;
			move_uploaded_file($_FILES['banner_img']['tmp_name'], $profilepic);
		}
		$data['res']=$this->mastermodel->update_banner($banner_title,$pic,$status,$ban_id,$user_id);
		if($data['res']['status']=="success"){
			$messge = array('message' => 'Banner Updated Successfully','class' => 'alert alert-success fade in');
			$this->session->set_flashdata('msg', $messge);
			redirect('masters/banner_list');
		}else{
			$messge = array('message' => 'Something went wrong','class' => 'alert alert-danger fade in');
			$this->session->set_flashdata('msg', $messge);
			redirect('masters/banner_list');
		}
	}else{
		redirect('/');
	}
	}


	public function change_banner_position(){
		$data=$this->session->userdata();
		$user_id=$this->session->userdata('user_id');
		$user_type=$this->session->userdata('user_role');
	 if($user_type=='1'){
		 $position = $this->input->post('position');
		 $this->mastermodel->change_banner_position($position);
	 }else{

	 }
	}



}
