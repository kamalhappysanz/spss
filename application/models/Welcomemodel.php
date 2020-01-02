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


}
?>
