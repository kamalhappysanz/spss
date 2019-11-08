<?php

Class Adminexammodel extends CI_Model
{

  public function __construct()
  {
      parent::__construct();


  }



  function create_autonomous($title,$filename,$status,$user_id){
    $check="SELECT * FROM autonomous_exam WHERE title='$title'";
    $result=$this->db->query($check);
    if($result->num_rows()==0){
            $get_postion="SELECT * FROM autonomous_exam order by id desc limit 1";
            $result_postion=$this->db->query($get_postion);
            foreach($result_postion->result() as $rows_position){}
            $postion=$rows_position->file_position+1;
            $insert="INSERT INTO autonomous_exam(title,file_upload,file_position,status,updated_by,updated_at) VALUES('$title','$filename','$postion','$status','$user_id',NOW())";
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
    $select="SELECT * FROM autonomous_exam ORDER BY file_position ASC";
    $result=$this->db->query($select);
    return $result->result();
  }


  function get_autonomous_edit($id){
    $tb_id=base64_decode($id)/98765;
    $select="SELECT * FROM autonomous_exam WHERE id='$tb_id'";
    $result=$this->db->query($select);
    return $result->result();
  }




    function update_autonomous($id,$title,$filename,$status,$user_id){
    $update="UPDATE autonomous_exam SET title='$title',file_upload='$filename',status='$status',updated_at=NOW(),updated_by='$user_id' WHERE id='$id'";
    $result=$this->db->query($update);
      if($result){
          $data = array("status" => "success");
            return $data;
      }else{
        $data = array("status" => "failed");
          return $data;
      }
    }

    function change_autnomous_exam_position($data = array()){
    $i=1;
    foreach ($data as $key => $value) {
              $sql = "UPDATE autonomous_exam SET file_position=".$i." WHERE id=".$value;
              $query = $this->db->query($sql);
    $i++;
    }
  }






}
?>
