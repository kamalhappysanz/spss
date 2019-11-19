<?php  $role=$this->session->userdata('user_role'); ?>
<div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admindept/">Department</a></li>
              <li class="breadcrumb-item active" aria-current="page"><span>Department Association or Syllabus</span></li>
            </ol>
          </nav>
          <div class="row">

            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Department Association or Syllabus  <a href="javascript:window.history.go(-1);" class="btn go_back_btn pull-right">Back</a></h4>
                  <?php  foreach($res as $rows) {}?>
                  <form class="forms-sample" id="form_create" method="post" action="<?php echo base_url(); ?>admindept/update_syllabus_activity" enctype="multipart/form-data">

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleFormControlSelect3">Type</label>
                        <input type="text" class="form-control" readonly id="syllabus_association" name="syllabus_association" placeholder="Title" value="<?php echo $rows->syllabus_association; ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="username">Name</label>
                          <input type="text" class="form-control" id="ac_sy_name" name="ac_sy_name" placeholder="Title" value="<?php echo $rows->ac_sy_name; ?>">
                          <input type="hidden" class="form-control" id="dept_id" name="dept_id"  value="<?php echo base64_encode($rows->dept_id*98765); ?>">

                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $rows->id; ?>">
                              <input type="hidden" class="form-control" id="old_file" name="old_file" value="<?php echo $rows->file_name; ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="username">Upload file</label>
                          <input type="file" class="form-control" id="file_upload" name="file_upload" placeholder="">
                          <small><a target="_blank" href="<?php echo base_url(); ?>assets/dept/<?php echo $rows->file_name; ?>">Click here for old file</a></small>
                        </div>
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


                    <button type="submit" class="btn btn-primary mr-2">Update </button>
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

          syllabus_association:{required:true},
          file_upload:{required:flase},
          ac_sy_name	:{required:true},
          status: { required: true}
      },
      messages: {
          syllabus_association:{required:"enter  title"},
          file_upload:{required:"select  file to upload"},
          ac_sy_name:{required:"select type"},
          status: {required: "select status." },

      }
      });

    </script>
