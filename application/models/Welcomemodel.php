<?php

Class Welcomemodel extends CI_Model
{

  public function __construct()
  {
      parent::__construct();


  }


       function get_home_banner(){
          $query = $this->db->where('status', 'Active')->order_by('updated_at', 'DESC')->get('banners');
          return $query->result();
       }

       function get_dept_name(){
          $query = $this->db->where('status', 'Active')->order_by('dept_position', 'ASC')->get('tbl_departments');
          return $query->result();
       }


}
?>
