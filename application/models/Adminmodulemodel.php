<?php

Class Adminmodulemodel extends CI_Model
{

  public function __construct()
  {
      parent::__construct();


  }






  function get_all_data(){
    $select="SELECT * FROM tbl_masters WHERE status='Active' ORDER BY id ASC";
    $result=$this->db->query($select);
    return $result->result();
  }
  function get_module_title($id){
    $select="SELECT * FROM tbl_masters WHERE id='$id' AND status='Active' ORDER BY id ASC";
    $result=$this->db->query($select);
    return $result->result();
  }


  function get_module_data($id){
    $select="SELECT * FROM tbl_general WHERE tbl_master_id='$id' ORDER BY file_position ASC";
    $result=$this->db->query($select);
    return $result->result();
  }


  function get_modules_edit($id){
      $dt_id=base64_decode($id)/98765;
    $select="SELECT tm.module_name,tg.* from tbl_masters as tm left join tbl_general as tg on tg.tbl_master_id=tm.id where tg.id='$dt_id' ORDER BY tg.file_position ASC";
    $result=$this->db->query($select);
    return $result->result();
  }

  function adminmodulemodel($tbl_master_id,$title,$filename,$status,$user_id){
    $get_postion="SELECT * FROM tbl_general WHERE tbl_master_id='$tbl_master_id' order by id desc limit 1";
    $result_postion=$this->db->query($get_postion);
    foreach($result_postion->result() as $rows_position){}
    $postion=$rows_position->file_position+1;
    $insert="INSERT INTO tbl_general (tbl_master_id,title,file_upload,file_position,status,updated_at,updated_by) VALUES('$tbl_master_id','$title','$filename','$postion','$status',NOW(),'$user_id')";
    $result=$this->db->query($insert);
    if($result){
        $data = array("status" => "success");
          return $data;
    }else{
      $data = array("status" => "failed");
        return $data;
    }
  }


  function update_module($id,$title,$filename,$status,$user_id){
    $update="UPDATE tbl_general SET title='$title',file_upload='$filename',status='$status',updated_at=NOW(),updated_by='$user_id' WHERE id='$id'";
    $result=$this->db->query($update);
      if($result){
          $data = array("status" => "success");
            return $data;
      }else{
        $data = array("status" => "failed");
          return $data;
      }
  }

    function change_module_position($data = array()){
      $i=1;
            foreach ($data as $key => $value) {
                    $select="SELECT * FROM tbl_general where id='$value'";
                    $result=$this->db->query($select);
                    foreach($result->result() as $rows_sub){}
                      $tbl_master_id=$rows_sub->tbl_master_id;
                      $sql = "UPDATE tbl_general SET file_position='$i' WHERE id='$value' AND tbl_master_id='$tbl_master_id'";
                    $query = $this->db->query($sql);
            $i++;
            }
        }


  function view_student_union(){
    $select="SELECT * FROM tbl_general WHERE tbl_master_id='1'";
    $result=$this->db->query($select);
    return $result->result();
  }






}
?>
