<?php

Class Admindeptmodel extends CI_Model
{

  public function __construct()
  {
      parent::__construct();


  }



  function create_dept($name,$description,$history,$vision,$status,$user_id){
    $check="SELECT * FROM tbl_departments WHERE dept_name='$name'";
    $result=$this->db->query($check);
    if($result->num_rows()==0){
            $get_postion="SELECT * FROM tbl_departments order by id desc limit 1";
            $result_postion=$this->db->query($get_postion);
            foreach($result_postion->result() as $rows_position){}
            $postion=$rows_position->dept_position+1;
            $insert="INSERT INTO tbl_departments(dept_name,dept_position,history,vision,description,status,updated_by,updated_at) VALUES('$name','$postion','$history','$vision','$description','$status','$user_id',NOW())";
            $result=$this->db->query($insert);
            if($result){
                $data = array("status" => "success");
                  return $data;
            }else{
              $data = array("status" => "failed");
                return $data;
            }

      }else{

        $data = array("status" => "Already exist");
          return $data;
    }

  }


  function get_all_data(){
    $select="SELECT * FROM tbl_departments ORDER BY dept_position ASC";
    $result=$this->db->query($select);
    return $result->result();
  }


  function get_dept_edit($id){
    $tb_id=base64_decode($id)/98765;
    $select="SELECT * FROM tbl_departments WHERE id='$tb_id'";
    $result=$this->db->query($select);
    return $result->result();
  }




    function update_department($id,$name,$description,$history,$vision,$status,$user_id){
    $update="UPDATE tbl_departments SET dept_name='$name',history='$history',vision='$vision',description='$description',status='$status',updated_at=NOW(),updated_by='$user_id' WHERE id='$id'";
    $result=$this->db->query($update);
      if($result){
          $data = array("status" => "success");
            return $data;
      }else{
        $data = array("status" => "failed");
          return $data;
      }
    }

    function change_dept_position($data = array()){
    $i=1;
    foreach ($data as $key => $value) {
              $sql = "UPDATE tbl_departments SET dept_position=".$i." WHERE id=".$value;
              $query = $this->db->query($sql);
    $i++;
    }
  }


  function create_dept_staff($dept_id,$faculty_name,$desgination,$degree,$experience,$faculty_email,$filename,$status,$user_id){
      $dt_id=base64_decode($dept_id)/98765;
    $get_postion="SELECT * FROM dept_faculty WHERE dept_id='$dt_id' order by id desc limit 1";
    $result_postion=$this->db->query($get_postion);
    foreach($result_postion->result() as $rows_position){}
    $postion=$rows_position->faculty_position+1;
    $insert="INSERT INTO dept_faculty (dept_id,faculty_name,desgination,faculty_position,degree,file_upload,experience,faculty_email,status,updated_at,updated_by) VALUES('$dt_id','$faculty_name','$desgination','$postion','$degree','$filename','$experience','$faculty_email','$status',NOW(),'$user_id')";
    $result=$this->db->query($insert);
    if($result){
        $data = array("status" => "success");
          return $data;
    }else{
      $data = array("status" => "failed");
        return $data;
    }
  }

  function get_all_staff_data($dept_id){
    $dt_id=base64_decode($dept_id)/98765;
    $select="SELECT * FROM dept_faculty WHERE dept_id='$dt_id' ORDER BY faculty_position ASC";
    $result=$this->db->query($select);
    return $result->result();
  }

  function change_dept_staff_position($data = array()){
    $i=1;
          foreach ($data as $key => $value) {
                  $select="SELECT * FROM dept_faculty where id='$value'";
                  $result=$this->db->query($select);
                  foreach($result->result() as $rows_sub){}
                    $dept_id=$rows_sub->dept_id;
                  $sql = "UPDATE dept_faculty SET faculty_position='$i' WHERE id='$value' AND dept_id='$dept_id'";
                $query = $this->db->query($sql);
          $i++;
          }
  }


  function get_dept_staff_edit($id){
    $tb_id=base64_decode($id)/98765;
    $select="SELECT * FROM dept_faculty WHERE id='$tb_id'";
    $result=$this->db->query($select);
    return $result->result();
  }


  function update_dept_staff($id,$dept_id,$faculty_name,$desgination,$degree,$experience,$faculty_email,$filename,$status,$user_id){
    $update="UPDATE dept_faculty SET faculty_name='$faculty_name',desgination='$desgination',degree='$degree',experience='$experience',faculty_email='$faculty_email',file_upload='$filename',status='$status',updated_at=NOW(),updated_by='$user_id' WHERE id='$id'";

    $result=$this->db->query($update);
      if($result){
          $data = array("status" => "success");
            return $data;
      }else{
        $data = array("status" => "failed");
          return $data;
      }
  }



  function get_all_lab_data($dept_id){
    $dt_id=base64_decode($dept_id)/98765;
    $select="SELECT * FROM dept_lab_facility WHERE dept_id='$dt_id' ORDER BY lab_position ASC";
    $result=$this->db->query($select);
    return $result->result();
  }


  function create_dept_lab($dept_id,$lab_name,$description,$filename,$status,$user_id){
    $dt_id=base64_decode($dept_id)/98765;
  $get_postion="SELECT * FROM dept_lab_facility WHERE dept_id='$dt_id' order by id desc limit 1";
  $result_postion=$this->db->query($get_postion);
  foreach($result_postion->result() as $rows_position){}
  $postion=$rows_position->lab_position+1;
  $insert="INSERT INTO dept_lab_facility (dept_id,lab_name,lab_image,description,lab_position,status,updated_at,updated_by) VALUES('$dt_id','$lab_name','$filename','$description','$postion','$status',NOW(),'$user_id')";
  $result=$this->db->query($insert);
  if($result){
      $data = array("status" => "success");
        return $data;
  }else{
    $data = array("status" => "failed");
      return $data;
  }
  }


    function change_dept_lab_position($data = array()){
      $i=1;
            foreach ($data as $key => $value) {
                    $select="SELECT * FROM dept_lab_facility where id='$value'";
                    $result=$this->db->query($select);
                    foreach($result->result() as $rows_sub){}
                      $dept_id=$rows_sub->dept_id;
                    $sql = "UPDATE dept_lab_facility SET lab_position='$i' WHERE id='$value' AND dept_id='$dept_id'";
                  $query = $this->db->query($sql);
            $i++;
            }
    }

    function get_dept_lab_edit($lab_id){
      $dt_id=base64_decode($lab_id)/98765;
      $select="SELECT * FROM dept_lab_facility WHERE id='$dt_id'";
      $result=$this->db->query($select);
      return $result->result();
    }


    function update_dept_lab($id,$dept_id,$lab_name,$description,$filename,$status,$user_id){
      $update="UPDATE dept_lab_facility SET lab_name='$lab_name',description='$description',lab_image='$filename',status='$status',updated_at=NOW(),updated_by='$user_id' WHERE id='$id'";
      $result=$this->db->query($update);
        if($result){
            $data = array("status" => "success");
              return $data;
        }else{
          $data = array("status" => "failed");
            return $data;
        }
    }


    function create_syllabus_activity($dept_id,$syllabus_association,$ac_sy_name,$filename,$status,$user_id){
      $dt_id=base64_decode($dept_id)/98765;
    $get_postion="SELECT * FROM dept_syllabus_activity WHERE dept_id='$dt_id' AND syllabus_association='$syllabus_association' order by id desc limit 1";
    $result_postion=$this->db->query($get_postion);
    foreach($result_postion->result() as $rows_position){}
    $postion=$rows_position->file_position+1;
    $insert="INSERT INTO dept_syllabus_activity (dept_id,syllabus_association,ac_sy_name,file_name,file_position,status,updated_at,updated_by) VALUES('$dt_id','$syllabus_association','$ac_sy_name','$filename','$postion','$status',NOW(),'$user_id')";
    $result=$this->db->query($insert);
    if($result){
        $data = array("status" => "success");
          return $data;
    }else{
      $data = array("status" => "failed");
        return $data;
    }
    }


    function get_all_sy_data($de_id){
      $dt_id=base64_decode($de_id)/98765;
      $select="SELECT * FROM dept_syllabus_activity WHERE dept_id='$dt_id'";
      $result=$this->db->query($select);
      return $result->result();
    }


    function get_dept_syllabus_activity_edit($dy_id){
      $dt_id=base64_decode($dy_id)/98765;
      $select="SELECT * FROM dept_syllabus_activity WHERE id='$dt_id'";
      $result=$this->db->query($select);
      return $result->result();
    }

    function get_syllabus($de_id){
      $dt_id=base64_decode($de_id)/98765;
      $select="SELECT * FROM dept_syllabus_activity WHERE dept_id='$dt_id' AND syllabus_association='Syllabus' ORDER BY file_position ASC";
      $result=$this->db->query($select);
      return $result->result();
    }
    function get_association($de_id){
      $dt_id=base64_decode($de_id)/98765;
      $select="SELECT * FROM dept_syllabus_activity WHERE dept_id='$dt_id' AND syllabus_association='Association' ORDER BY file_position ASC";
      $result=$this->db->query($select);
      return $result->result();
    }

    function update_syllabus_activity($id,$dept_id,$syllabus_association,$ac_sy_name,$filename,$status,$user_id){
      $update="UPDATE dept_syllabus_activity SET ac_sy_name='$ac_sy_name',file_name='$filename',status='$status',updated_at=NOW(),updated_by='$user_id' WHERE id='$id'";
      $result=$this->db->query($update);
        if($result){
            $data = array("status" => "success");
              return $data;
        }else{
          $data = array("status" => "failed");
            return $data;
        }
    }

    function change_dept_association_position($data = array()){
      $i=1;
            foreach ($data as $key => $value) {
              $select="SELECT * FROM dept_syllabus_activity where id='$value'";
              $result=$this->db->query($select);
              foreach($result->result() as $rows_sub){}
              $dept_id=$rows_sub->dept_id;
               $sql = "UPDATE dept_syllabus_activity SET file_position='$i' WHERE id='$value' AND dept_id='$dept_id' AND syllabus_association='Association'";

             $query = $this->db->query($sql);
            $i++;
            }
    }

    function change_dept_syllabus_position($data = array()){
      $i=1;
            foreach ($data as $key => $value) {
              $select="SELECT * FROM dept_syllabus_activity where id='$value'";
              $result=$this->db->query($select);
              foreach($result->result() as $rows_sub){}
              $dept_id=$rows_sub->dept_id;
                $sql = "UPDATE dept_syllabus_activity SET file_position='$i' WHERE id='$value' AND dept_id='$dept_id' AND syllabus_association='Syllabus'";
             $query = $this->db->query($sql);
            $i++;
            }
    }





}
?>
