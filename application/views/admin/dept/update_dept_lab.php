<?php  $role=$this->session->userdata('user_role'); ?>
<div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url(); ?>admindept/">Department</a></li>
            </ol>
          </nav>
          <div class="row">

            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Department Lab</h4>
                  <?php foreach($res as $rows){} ?>
                  <form class="forms-sample" id="form_create" method="post" action="<?php echo base_url(); ?>admindept/update_dept_lab" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="username">Lab Name</label>
                          <input type="text" class="form-control" id="lab_name" name="lab_name" placeholder="Dept lab name" value="<?php echo $rows->lab_name; ?>">
                          <input type="hidden" class="form-control" id="dept_id" name="dept_id"  value="<?php echo base64_encode($rows->dept_id*98765); ?>">

                            <input type="hidden" class="form-control" id="id" name="id"  value="<?php echo $rows->id; ?>">
                            <input type="hidden" class="form-control" id="old_pic" name="old_pic"  value="<?php echo $rows->lab_image; ?>">
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="username">Description</label>
                          <textarea id="summernote" name="description" class="textarea" cols="10" rows="5" required><?php echo $rows->description; ?></textarea>

                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="username">Lab Picture</label>
                          <input type="file" class="form-control" id="lab_image" name="lab_image" placeholder="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <img src="<?php echo base_url(); ?>assets/lab/<?php echo $rows->lab_image; ?>" style="width:150px;heigth:50px!important;">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleFormControlSelect3">Status</label>
                          <select class="form-control form-control-sm" id="status" name="status">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                          </select>
                            <script>$('#status').val('<?php echo $rows->status; ?>')</script>
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

          lab_name:{required:true},
          lab_image:{required:false},
          status: { required: true}
      },
      messages: {
          lab_name:{required:"enter name"},
          lab_image:{required:"select image"},
          status: {required: "select status." },

      }
      });

    </script>
