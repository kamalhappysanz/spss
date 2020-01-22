<?php

Class Mastermodel extends CI_Model
{

  public function __construct()
  {
      parent::__construct();


  }



        // Banner section


        function get_banner(){
          $check="SELECT * FROM banners order by file_position asc";
          $result=$this->db->query($check);
          return $result->result();

        }


        function get_banner_edit($ban_id){
          $id=base64_decode($ban_id)/98765;
          $check="SELECT * FROM banners WHERE id='$id'";
          $result=$this->db->query($check);
          return $result->result();
        }

        function change_banner_position($data = array()){
        $i=1;
        foreach ($data as $key => $value) {
                  $sql = "UPDATE banners SET file_position=".$i." WHERE id=".$value;
                  $query = $this->db->query($sql);
        $i++;
        }
      }


        function create_banner($banner_title,$pic,$status,$user_id){
          $check="SELECT * FROM banners WHERE banner_title='$banner_title'";
          $result=$this->db->query($check);
          if($result->num_rows()==0){
            $get_postion="SELECT * FROM banners order by id desc limit 1";
            $result_postion=$this->db->query($get_postion);
            foreach($result_postion->result() as $rows_position){}
            $postion=$rows_position->file_position+1;
            $insert="INSERT INTO banners(banner_title,banner_img,file_position,status,created_at,created_by) VALUES('$banner_title','$pic','$postion','$status',NOW(),'$user_id')";
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


        function update_banner($banner_title,$pic,$status,$ban_id,$user_id){
            $id=base64_decode($ban_id)/98765;
          $query="UPDATE banners SET banner_title='$banner_title',banner_img='$pic',status='$status',updated_at=NOW(),updated_by='$user_id' WHERE id='$id'";
          $result=$this->db->query($query);
            if($result){
                $data = array("status" => "success");
                return $data;
            }else{
              $data = array("status" => "failed");
              return $data;
            }

        }




}
?>
