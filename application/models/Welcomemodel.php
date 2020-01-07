<?php

Class Welcomemodel extends CI_Model
{

  public function __construct()
  {
      parent::__construct();


  }


       function get_home_banner(){
          $query = $this->db->where(['status'=>'Active'])->order_by('updated_at', 'DESC')->get('banners');
          return $query->result();
       }

       function get_dept_name(){
          $query = $this->db->where(['status'=>'Active'])->order_by('dept_position', 'ASC')->get('tbl_departments');
          return $query->result();
       }

       function get_student_union(){
          $query = $this->db->where(['status'=>'Active','tbl_master_id'=>'1'])->order_by('file_position', 'ASC')->get('tbl_general');
          return $query->result();
       }
       function get_downloads(){
          $query = $this->db->where(['status'=>'Active','tbl_master_id'=>'2'])->order_by('file_position', 'ASC')->get('tbl_general');
          return $query->result();
       }
       function get_syllabi(){
          $query = $this->db->where(['status'=>'Active','tbl_master_id'=>'3'])->order_by('file_position', 'ASC')->get('tbl_general');
          return $query->result();
       }
       function get_academic_calendar(){
          $query = $this->db->where(['status'=>'Active','tbl_master_id'=>'4'])->order_by('file_position', 'ASC')->get('tbl_general');
          return $query->result();
       }
       function get_committee(){
          $query = $this->db->where(['status'=>'Active','tbl_master_id'=>'5'])->order_by('file_position', 'ASC')->get('tbl_general');
          return $query->result();
       }
       function get_extra_curicullar_activity(){
          $query = $this->db->where(['status'=>'Active','tbl_master_id'=>'6'])->order_by('file_position', 'ASC')->get('tbl_general');
          return $query->result();
       }
       function get_sports(){
          $query = $this->db->where(['status'=>'Active','tbl_master_id'=>'7'])->order_by('file_position', 'ASC')->get('tbl_general');
          return $query->result();
       }
       function get_ciipc_events(){
          $query = $this->db->where(['status'=>'Active','tbl_master_id'=>'8'])->order_by('file_position', 'ASC')->get('tbl_general');
          return $query->result();
       }
       function get_ciipc_spic_members(){
          $query = $this->db->where(['status'=>'Active','tbl_master_id'=>'9'])->order_by('file_position', 'ASC')->get('tbl_general');
          return $query->result();
       }
       function get_placement_record(){
          $query = $this->db->where(['status'=>'Active','tbl_master_id'=>'10'])->order_by('file_position', 'ASC')->get('tbl_general');
          return $query->result();
       }
       function get_spic_members(){
          $query = $this->db->where(['status'=>'Active','tbl_master_id'=>'11'])->order_by('file_position', 'ASC')->get('tbl_general');
          return $query->result();
       }
       function get_placement_activity(){
          $query = $this->db->where(['status'=>'Active','tbl_master_id'=>'12'])->order_by('file_position', 'ASC')->get('tbl_general');
          return $query->result();
       }

       function get_announcements(){
          $query = $this->db->where(['status'=>'Active','tbl_master_id'=>'13'])->order_by('file_position', 'ASC')->get('tbl_general');
          return $query->result();
       }
       function get_governing_council(){
          $query = $this->db->where(['status'=>'Active'])->order_by('file_position', 'ASC')->get('tbl_governing_council');
          return $query->result();
       }

       function get_ciipc_photos(){
          $query = $this->db->where(['status'=>'Active'])->order_by('file_position', 'ASC')->get('tbl_ciipc_photos');
          return $query->result();
       }



       function get_dept_faculty($dept_id){
         $id=base64_decode($dept_id)/98765;
         $query = $this->db->where(['status'=>'Active','dept_id'=>$id])->order_by('faculty_position', 'ASC')->get('dept_faculty');
         return $query->result();
       }

       function get_dept_facility($dept_id){
         $id=base64_decode($dept_id)/98765;
         $query = $this->db->where(['status'=>'Active','dept_id'=>$id])->order_by('lab_position', 'ASC')->get('dept_lab_facility');
         return $query->result();
       }
       function get_syllabus_activity($dept_id){
         $id=base64_decode($dept_id)/98765;
         $query = $this->db->where(['status'=>'Active','syllabus_association'=>'Syllabus','dept_id'=>$id])->order_by('file_position', 'ASC')->get('dept_syllabus_activity');
         return $query->result();
       }

       function get_association_activity($dept_id){
         $id=base64_decode($dept_id)/98765;
         $query = $this->db->where(['status'=>'Active','syllabus_association'=>'Association','dept_id'=>$id])->order_by('file_position', 'ASC')->get('dept_syllabus_activity');
         return $query->result();
       }

       function get_dept_info($dept_id){
         $id=base64_decode($dept_id)/98765;
         $query = $this->db->where(['status'=>'Active','id'=>$id])->order_by('dept_position', 'ASC')->get('tbl_departments');
         return $query->result();
       }


       function get_all_dept_staff_details(){
         $query=$this->db->select('dept_faculty.faculty_name,dept_faculty.dept_id,dept_faculty.faculty_email,dept_faculty.desgination,dept_faculty.degree,dept_faculty.file_upload,tbl_departments.dept_name')->from('dept_faculty')->join('tbl_departments','tbl_departments.id = dept_faculty.dept_id','LEFT')->where('dept_faculty.status','Active')->order_by('dept_faculty.faculty_position', 'ASC')->get();
         // $query = $this->db->where(['status'=>'Active','id'=>$id])->order_by('dept_position', 'ASC')->get('tbl_departments');
         return $query->result();
       }


}
?>
