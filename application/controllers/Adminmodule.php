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


	 	public function ciipc_photos(){
			$data=$this->session->userdata();
			$user_id=$this->session->userdata('user_id');
			$user_type=$this->session->userdata('user_role');
			if($user_type=='1'){
				$data['res']=$this->adminmodulemodel->view_ciipc_photos();
			 $this->load->view('admin/admin_header');
			 $this->load->view('admin/modules/create_ciipc_photos',$data);
			 $this->load->view('admin/admin_footer');
			}else{
				 redirect('/login');
			}
		}

		public function get_ciipc_photos_edit(){
			$data=$this->session->userdata();
			$user_id=$this->session->userdata('user_id');
			$user_type=$this->session->userdata('user_role');
			if($user_type=='1'){
				$id=$this->uri->segment(3);
				$data['res']=$this->adminmodulemodel->get_ciipc_photos_edit($id);
			 $this->load->view('admin/admin_header');
			 $this->load->view('admin/modules/update_ciipc_photos',$data);
			 $this->load->view('admin/admin_footer');
			}else{
				 redirect('/login');
			}
		}

		public function create_ciipc_photos(){
			$data=$this->session->userdata();
			$user_id=$this->session->userdata('user_id');
			$user_type=$this->session->userdata('user_role');
			if($user_type=='1'){
				$title=$this->db->escape_str($this->input->post('title'));
				$status=$this->db->escape_str($this->input->post('status'));
				$profilepic = $_FILES['file_upload_1']['name'];
				if(empty($profilepic)){
				$filename=$old_pic;
			}else{
				$temp = pathinfo($profilepic, PATHINFO_EXTENSION);
				$filename = round(microtime(true)) . '.' . $temp;
				$uploaddir = 'assets/photos/';
				$profilepic = $uploaddir.$filename;
				move_uploaded_file($_FILES['file_upload_1']['tmp_name'], $profilepic);
			}
			$file_profile = $_FILES['file_upload_2']['name'];
			if(empty($file_profile)){
			$profilefile=$old_profile_file;
		}else{
			$temp_1 = pathinfo($file_profile, PATHINFO_EXTENSION);
			$profilefile =round(microtime(true))+1 . '.' . $temp_1;
			$uploaddir_1 = 'assets/photos/';
			$profilepic_1 = $uploaddir_1.$profilefile;
			move_uploaded_file($_FILES['file_upload_2']['tmp_name'], $profilepic_1);
		}
			$data['res']=$this->adminmodulemodel->create_ciipc_photos($title,$status,$filename,$profilefile,$user_id);
			if($data['res']['status']=="success"){
				$messge = array('message' => 'Successfully Updated','class' => 'alert alert-success fade in');
				$this->session->set_flashdata('msg', $messge);
			  redirect('adminmodule/ciipc_photos/#list' );
			}else{
				$messge = array('message' => 'Something Went Wrong','class' => 'alert alert-danger fade in');
				$this->session->set_flashdata('msg', $messge);
				redirect('adminmodule/ciipc_photos/#list' );
			}
			}else{
				 redirect('/login');
			}
		}


		public function update_ciipc_photos(){
			$data=$this->session->userdata();
			$user_id=$this->session->userdata('user_id');
			$user_type=$this->session->userdata('user_role');
			if($user_type=='1'){
				$id=$this->db->escape_str($this->input->post('id'));
				$title=$this->db->escape_str($this->input->post('title'));
				$old_image_1=$this->db->escape_str($this->input->post('old_image_1'));
				$old_image_2=$this->db->escape_str($this->input->post('old_image_2'));
				$status=$this->db->escape_str($this->input->post('status'));
				$profilepic = $_FILES['file_upload_1']['name'];
				if(empty($profilepic)){
				$filename=$old_image_1;
			}else{
				$temp = pathinfo($profilepic, PATHINFO_EXTENSION);
				$filename = round(microtime(true)) . '.' . $temp;
				$uploaddir = 'assets/photos/';
				$profilepic = $uploaddir.$filename;
				move_uploaded_file($_FILES['file_upload_1']['tmp_name'], $profilepic);
			}
			$file_profile = $_FILES['file_upload_2']['name'];
			if(empty($file_profile)){
			$profilefile=$old_image_2;
		}else{
			$temp_1 = pathinfo($file_profile, PATHINFO_EXTENSION);
			$profilefile =round(microtime(true))+1 . '.' . $temp_1;
			$uploaddir_1 = 'assets/photos/';
			$profilepic_1 = $uploaddir_1.$profilefile;
			move_uploaded_file($_FILES['file_upload_2']['tmp_name'], $profilepic_1);
		}
			$data['res']=$this->adminmodulemodel->update_ciipc_photos($id,$title,$status,$filename,$profilefile,$user_id);
			if($data['res']['status']=="success"){
				$messge = array('message' => 'Successfully Updated','class' => 'alert alert-success fade in');
				$this->session->set_flashdata('msg', $messge);
				redirect('adminmodule/ciipc_photos/#list' );
			}else{
				$messge = array('message' => 'Something Went Wrong','class' => 'alert alert-danger fade in');
				$this->session->set_flashdata('msg', $messge);
				redirect('adminmodule/ciipc_photos/#list' );
			}
			}else{
				 redirect('/login');
			}
		}


		public function change_ciipc_photos_position(){
			$data=$this->session->userdata();
	 		$user_id=$this->session->userdata('user_id');
	 		$user_type=$this->session->userdata('user_role');
	 	 if($user_type=='1'){
	 		 $position = $this->input->post('position');
	 		 $this->adminmodulemodel->change_ciipc_photos_position($position);
	 	 }else{

	 	 }
		}



}
