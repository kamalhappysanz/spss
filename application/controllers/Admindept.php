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
			 $dept_id=$this->uri->segment(3);
			 $data['res']=$this->admindeptmodel->get_all_staff_data($dept_id);
			 $this->load->view('admin/admin_header');
			 $this->load->view('admin/dept/add_dept_staff',$data);
			 $this->load->view('admin/admin_footer');
		 }else {
				redirect('/login');
		 }

	 }

	 public function create_dept_staff(){
		 $data=$this->session->userdata();
		 $user_id=$this->session->userdata('user_id');
		 $user_type=$this->session->userdata('user_role');
		 if($user_type=='1'){
			 $dept_id=$this->db->escape_str($this->input->post('dept_id'));
			 $faculty_name=$this->db->escape_str($this->input->post('faculty_name'));
			 $desgination=$this->db->escape_str($this->input->post('desgination'));
			 $degree=$this->db->escape_str($this->input->post('degree'));
			 $experience=$this->db->escape_str($this->input->post('experience'));
			 $faculty_email=$this->db->escape_str($this->input->post('faculty_email'));
			 $status=$this->db->escape_str($this->input->post('status'));
			 $profilepic = $_FILES['file_upload']['name'];
			 if(empty($profilepic)){
			 $filename=' ';
		 }else{
			 $temp = pathinfo($profilepic, PATHINFO_EXTENSION);
			 $filename = round(microtime(true)) . '.' . $temp;
			 $uploaddir = 'assets/staff/';
			 $profilepic = $uploaddir.$filename;
			 move_uploaded_file($_FILES['file_upload']['tmp_name'], $profilepic);
		 }
		 $data['res']=$this->admindeptmodel->create_dept_staff($dept_id,$faculty_name,$desgination,$degree,$experience,$faculty_email,$filename,$status,$user_id);
		 if($data['res']['status']=="success"){
			 $messge = array('message' => 'Successfully Created','class' => 'alert alert-success fade in');
			 $this->session->set_flashdata('msg', $messge);
			redirect('admindept/add_dept_staff/'.$dept_id.'#list' );
		 }else{
			 $messge = array('message' => $data['res']['status'],'class' => 'alert alert-danger fade in');
			 $this->session->set_flashdata('msg', $messge);
			 redirect('admindept/add_dept_staff/'.$dept_id.'#list' );
		 }

		 }else {
				redirect('/login');
		 }
	 }


	 public function change_dept_staff_position(){
		 $data=$this->session->userdata();
		 $user_id=$this->session->userdata('user_id');
		 $user_type=$this->session->userdata('user_role');
		if($user_type=='1'){
			$position = $this->input->post('position');
			$this->admindeptmodel->change_dept_staff_position($position);
		}else{

		}
	 }

	 public function get_dept_staff_edit(){
		 $data=$this->session->userdata();
		$user_id=$this->session->userdata('user_id');
		$user_type=$this->session->userdata('user_role');
		if($user_type=='1'){
		 $id=$this->uri->segment(3);
		 $data['res']=$this->admindeptmodel->get_dept_staff_edit($id);
		 $this->load->view('admin/admin_header');
		 $this->load->view('admin/dept/edit_dept_staff',$data);
		 $this->load->view('admin/admin_footer');
		}else{
			 redirect('/login');
		}
	 }


	 public function update_dept_staff(){
		 $data=$this->session->userdata();
		$user_id=$this->session->userdata('user_id');
		$user_type=$this->session->userdata('user_role');
		if($user_type=='1'){
			$id=$this->db->escape_str($this->input->post('id'));
			$dept_id=$this->db->escape_str($this->input->post('dept_id'));
			$faculty_name=$this->db->escape_str($this->input->post('faculty_name'));
			$desgination=$this->db->escape_str($this->input->post('desgination'));
			$degree=$this->db->escape_str($this->input->post('degree'));
			$experience=$this->db->escape_str($this->input->post('experience'));
			$faculty_email=$this->db->escape_str($this->input->post('faculty_email'));
			$status=$this->db->escape_str($this->input->post('status'));
			$old_pic=$this->db->escape_str($this->input->post('old_pic'));
			$profilepic = $_FILES['file_upload']['name'];
			if(empty($profilepic)){
			$filename=$old_pic;
		}else{
			$temp = pathinfo($profilepic, PATHINFO_EXTENSION);
			$filename = round(microtime(true)) . '.' . $temp;
			$uploaddir = 'assets/staff/';
			$profilepic = $uploaddir.$filename;
			move_uploaded_file($_FILES['file_upload']['tmp_name'], $profilepic);
		}
		$data['res']=$this->admindeptmodel->update_dept_staff($id,$dept_id,$faculty_name,$desgination,$degree,$experience,$faculty_email,$filename,$status,$user_id);
		if($data['res']['status']=="success"){
			$messge = array('message' => 'Successfully Updated','class' => 'alert alert-success fade in');
			$this->session->set_flashdata('msg', $messge);
		 redirect('admindept/add_dept_staff/'.$dept_id.'#list' );
		}else{
			$messge = array('message' => $data['res']['status'],'class' => 'alert alert-danger fade in');
			$this->session->set_flashdata('msg', $messge);
			redirect('admindept/add_dept_staff/'.$dept_id.'#list' );
		}

		}else {
			 redirect('/login');
		}
	 }




	 public function add_dept_lab(){

		 $data=$this->session->userdata();
		 $user_id=$this->session->userdata('user_id');
		 $user_type=$this->session->userdata('user_role');
		 if($user_type=='1'){
			 $dept_id=$this->uri->segment(3);
			 $data['res']=$this->admindeptmodel->get_all_lab_data($dept_id);
			 $this->load->view('admin/admin_header');
			 $this->load->view('admin/dept/add_dept_lab',$data);
			 $this->load->view('admin/admin_footer');
		 }else {
				redirect('/login');
		 }

	 }


	 	public function create_dept_lab(){
			$data=$this->session->userdata();
			$user_id=$this->session->userdata('user_id');
			$user_type=$this->session->userdata('user_role');
			if($user_type=='1'){
				$dept_id=$this->db->escape_str($this->input->post('dept_id'));
				$lab_name=$this->db->escape_str($this->input->post('lab_name'));
				$description=$this->db->escape_str($this->input->post('description'));
				$status=$this->db->escape_str($this->input->post('status'));
				$profilepic = $_FILES['lab_image']['name'];
				if(empty($profilepic)){
				$filename=' ';
			}else{
				$temp = pathinfo($profilepic, PATHINFO_EXTENSION);
				$filename = round(microtime(true)) . '.' . $temp;
				$uploaddir = 'assets/lab/';
				$profilepic = $uploaddir.$filename;
				move_uploaded_file($_FILES['lab_image']['tmp_name'], $profilepic);
			}
			$data['res']=$this->admindeptmodel->create_dept_lab($dept_id,$lab_name,$description,$filename,$status,$user_id);
			if($data['res']['status']=="success"){
				$messge = array('message' => 'Successfully Created','class' => 'alert alert-success fade in');
				$this->session->set_flashdata('msg', $messge);
			 redirect('admindept/add_dept_lab/'.$dept_id.'#list' );
			}else{
				$messge = array('message' => $data['res']['status'],'class' => 'alert alert-danger fade in');
				$this->session->set_flashdata('msg', $messge);
				redirect('admindept/add_dept_lab/'.$dept_id.'#list' );
			}

			}else {
				 redirect('/login');
			}
		}


			public function get_dept_lab_edit(){
				$data=$this->session->userdata();
				$user_id=$this->session->userdata('user_id');
				$user_type=$this->session->userdata('user_role');
				if($user_type=='1'){
					$lab_id=$this->uri->segment(3);
					$data['res']=$this->admindeptmodel->get_dept_lab_edit($lab_id);
					$this->load->view('admin/admin_header');
					$this->load->view('admin/dept/update_dept_lab',$data);
					$this->load->view('admin/admin_footer');
				}else {
					 redirect('/login');
				}

			}


			public function change_dept_lab_position(){
				$data=$this->session->userdata();
				$user_id=$this->session->userdata('user_id');
				$user_type=$this->session->userdata('user_role');
			 if($user_type=='1'){
				 $position = $this->input->post('position');
				 $this->admindeptmodel->change_dept_lab_position($position);
			 }else{

			 }
			}



			public function update_dept_lab(){
				$data=$this->session->userdata();
				$user_id=$this->session->userdata('user_id');
				$user_type=$this->session->userdata('user_role');
				if($user_type=='1'){
					$id=$this->db->escape_str($this->input->post('id'));
					$dept_id=$this->db->escape_str($this->input->post('dept_id'));
					$lab_name=$this->db->escape_str($this->input->post('lab_name'));
					$description=$this->db->escape_str($this->input->post('description'));
					$old_pic=$this->db->escape_str($this->input->post('old_pic'));
					$status=$this->db->escape_str($this->input->post('status'));
					$profilepic = $_FILES['lab_image']['name'];
					if(empty($profilepic)){
					$filename=$old_pic;
				}else{
					$temp = pathinfo($profilepic, PATHINFO_EXTENSION);
					$filename = round(microtime(true)) . '.' . $temp;
					$uploaddir = 'assets/lab/';
					$profilepic = $uploaddir.$filename;
					move_uploaded_file($_FILES['lab_image']['tmp_name'], $profilepic);
				}
				$data['res']=$this->admindeptmodel->update_dept_lab($id,$dept_id,$lab_name,$description,$filename,$status,$user_id);
				if($data['res']['status']=="success"){
					$messge = array('message' => 'Successfully Created','class' => 'alert alert-success fade in');
					$this->session->set_flashdata('msg', $messge);
				 redirect('admindept/add_dept_lab/'.$dept_id.'#list' );
				}else{
					$messge = array('message' => $data['res']['status'],'class' => 'alert alert-danger fade in');
					$this->session->set_flashdata('msg', $messge);
					redirect('admindept/add_dept_lab/'.$dept_id.'#list' );
				}

				}else {
					 redirect('/login');
				}
			}



			public function add_dept_syllabus_activity(){
				$data=$this->session->userdata();
				$user_id=$this->session->userdata('user_id');
				$user_type=$this->session->userdata('user_role');
				if($user_type=='1'){
					$de_id=$this->uri->segment(3);
					$data['res']=$this->admindeptmodel->get_all_sy_data($de_id);
					$this->load->view('admin/admin_header');
					$this->load->view('admin/dept/add_dept_syllabus_activity',$data);
					$this->load->view('admin/admin_footer');
				}else {
					 redirect('/login');
				}

			}

			public function Syllabus(){
				$data=$this->session->userdata();
				$user_id=$this->session->userdata('user_id');
				$user_type=$this->session->userdata('user_role');
				if($user_type=='1'){
					$de_id=$this->uri->segment(3);
					$data['res']=$this->admindeptmodel->get_syllabus($de_id);
					$this->load->view('admin/admin_header');
					$this->load->view('admin/dept/view_syllabus',$data);
					$this->load->view('admin/admin_footer');
				}else {
					 redirect('/login');
				}

			}

			public function Association(){
				$data=$this->session->userdata();
				$user_id=$this->session->userdata('user_id');
				$user_type=$this->session->userdata('user_role');
				if($user_type=='1'){
					$de_id=$this->uri->segment(3);
					$data['res']=$this->admindeptmodel->get_association($de_id);
					$this->load->view('admin/admin_header');
					$this->load->view('admin/dept/view_association',$data);
					$this->load->view('admin/admin_footer');
				}else {
					 redirect('/login');
				}

			}



			public function get_dept_syllabus_activity_edit(){
				$data=$this->session->userdata();
				$user_id=$this->session->userdata('user_id');
				$user_type=$this->session->userdata('user_role');
				if($user_type=='1'){
					$dy_id=$this->uri->segment(3);
					$data['res']=$this->admindeptmodel->get_dept_syllabus_activity_edit($dy_id);
					$this->load->view('admin/admin_header');
					$this->load->view('admin/dept/update_syllabus_activity',$data);
					$this->load->view('admin/admin_footer');
				}else {
					 redirect('/login');
				}

			}

			public function create_syllabus_activity(){
				$data=$this->session->userdata();
				$user_id=$this->session->userdata('user_id');
				$user_type=$this->session->userdata('user_role');
				if($user_type=='1'){
					$dept_id=$this->db->escape_str($this->input->post('dept_id'));
					$syllabus_association=$this->db->escape_str($this->input->post('syllabus_association'));
					$ac_sy_name=$this->db->escape_str($this->input->post('ac_sy_name'));
					$status=$this->db->escape_str($this->input->post('status'));
					$profilepic = $_FILES['file_upload']['name'];
					if(empty($profilepic)){
					$filename=' ';
				}else{
					$temp = pathinfo($profilepic, PATHINFO_EXTENSION);
					$filename = round(microtime(true)) . '.' . $temp;
					$uploaddir = 'assets/dept/';
					$profilepic = $uploaddir.$filename;
					move_uploaded_file($_FILES['file_upload']['tmp_name'], $profilepic);
				}
				$data['res']=$this->admindeptmodel->create_syllabus_activity($dept_id,$syllabus_association,$ac_sy_name,$filename,$status,$user_id);
				if($data['res']['status']=="success"){
					$messge = array('message' => 'Successfully Created','class' => 'alert alert-success fade in');
					$this->session->set_flashdata('msg', $messge);
				 redirect('admindept/'.$syllabus_association.'/'.$dept_id.'#list' );
				}else{
					$messge = array('message' => $data['res']['status'],'class' => 'alert alert-danger fade in');
					$this->session->set_flashdata('msg', $messge);
					redirect('admindept/'.$syllabus_association.'/'.$dept_id.'#list' );
				}

				}else {
					 redirect('/login');
				}
			}


			public function update_syllabus_activity(){
				$data=$this->session->userdata();
				$user_id=$this->session->userdata('user_id');
				$user_type=$this->session->userdata('user_role');
				if($user_type=='1'){
					$id=$this->db->escape_str($this->input->post('id'));
					$dept_id=$this->db->escape_str($this->input->post('dept_id'));
					$syllabus_association=$this->db->escape_str($this->input->post('syllabus_association'));
					$ac_sy_name=$this->db->escape_str($this->input->post('ac_sy_name'));
					$old_file=$this->db->escape_str($this->input->post('old_file'));
					$status=$this->db->escape_str($this->input->post('status'));
					$profilepic = $_FILES['file_upload']['name'];
					if(empty($profilepic)){
					$filename=$old_file;
				}else{
					$temp = pathinfo($profilepic, PATHINFO_EXTENSION);
					$filename = round(microtime(true)) . '.' . $temp;
					$uploaddir = 'assets/dept/';
					$profilepic = $uploaddir.$filename;
					move_uploaded_file($_FILES['file_upload']['tmp_name'], $profilepic);
				}
				$data['res']=$this->admindeptmodel->update_syllabus_activity($id,$dept_id,$syllabus_association,$ac_sy_name,$filename,$status,$user_id);
				if($data['res']['status']=="success"){
					$messge = array('message' => 'Successfully Created','class' => 'alert alert-success fade in');
					$this->session->set_flashdata('msg', $messge);
				 redirect('admindept/'.$syllabus_association.'/'.$dept_id.'#list' );
				}else{
					$messge = array('message' => $data['res']['status'],'class' => 'alert alert-danger fade in');
					$this->session->set_flashdata('msg', $messge);
					redirect('admindept/'.$syllabus_association.'/'.$dept_id.'#list' );
				}

				}else {
					 redirect('/login');
				}
			}

			public function change_dept_association_position(){
				$data=$this->session->userdata();
				$user_id=$this->session->userdata('user_id');
				$user_type=$this->session->userdata('user_role');
			 if($user_type=='1'){
				 $position = $this->input->post('position');
				 $this->admindeptmodel->change_dept_association_position($position);
			 }else{

			 }
			}

			public function change_dept_syllabus_position(){
				$data=$this->session->userdata();
				$user_id=$this->session->userdata('user_id');
				$user_type=$this->session->userdata('user_role');
			 if($user_type=='1'){
				 $position = $this->input->post('position');
				 $this->admindeptmodel->change_dept_syllabus_position($position);
			 }else{

			 }
			}



}
