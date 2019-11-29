<?php  $role=$this->session->userdata('user_role'); ?>
<div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page"><span>CIIPC Photos</span></li>
            </ol>
          </nav>
          <div class="row">

            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update CIIPC Photos</h4>
                  <?php foreach($res as $rows){} ?>
                  <form class="forms-sample" id="form_create" method="post" action="<?php echo base_url(); ?>adminmodule/update_ciipc_photos" enctype="multipart/form-data">
                    <div class="row">


                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="username"> Title</label>
                          <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php echo $rows->title; ?>">
                          <input type="hidden" class="form-control" id="id" name="id" placeholder="Title" value="<?php echo $rows->id; ?>">
                          <input type="hidden" class="form-control" id="old_image_1" name="old_image_1" placeholder="Title" value="<?php echo $rows->image_1; ?>">
                          <input type="hidden" class="form-control" id="old_image_2" name="old_image_2" placeholder="Title" value="<?php echo $rows->image_2; ?>">

                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="city_ta_name">Image 1</label>
                          <input type="file" class="form-control" id="file_upload_1" name="file_upload_1" placeholder="" >
                        <?php if(empty($rows->image_1)){
                          }else{ ?>
                            <img src="<?php echo base_url(); ?>assets/photos/<?php echo $rows->image_1; ?>" style="width:120px;">
                          <?php } ?>



                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="city_ta_name">Image 2</label>
                          <input type="file" class="form-control" id="file_upload_2" name="file_upload_2" placeholder="" >
                          <?php if(empty($rows->image_2)){
                          }else{ ?>
                            <img src="<?php echo base_url(); ?>assets/photos/<?php echo $rows->image_2; ?>" style="width:120px;">
                          <?php } ?>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleFormControlSelect3">Status</label>
                          <select class="form-control form-control-sm" id="status" name="status">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                  </form>
                </div>
              </div>
            </div>



          </div>
        </div>
      </div>
    </div>
    <script>
      $('#form_create').validate({
      rules: {

          title:{required:true},
          // file_upload_1: {required:true },
          status: { required: true}
      },
      messages: {
          title:{required:"enter the title"},
          // file_upload_1: {required: "select file to upload." },
          status: {required: "select status." },

      }
      });

    </script>
