<?php  $role=$this->session->userdata('user_role'); ?>
<div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page"><span>Autonomous Exam</span></li>
            </ol>
          </nav>
          <div class="row">

            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Autonomous Exam <a href="javascript:window.history.go(-1);" class="btn go_back_btn pull-right">Back</a></h4>
                  <?php foreach($res as $rows){} ?>

                  <form class="forms-sample" id="form_create" method="post" action="<?php echo base_url(); ?>adminexam/update_autonomous" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="username"> Title</label>
                          <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php echo $rows->title; ?>">
                          <input type="hidden" class="form-control" id="title" name="id" value="<?php echo $rows->id; ?>">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="city_ta_name">File Upload</label>
                          <input type="file" class="form-control" id="file_upload" name="file_upload" placeholder="" >
                          <input type="hidden" class="form-control" id="old_file_upload" name="old_file_upload" value="<?php echo $rows->file_upload; ?>" >
                          <small><a target="_blank" href="<?php echo base_url(); ?>assets/autonomous_exam/<?php echo $rows->file_upload; ?>">Click to view old file</a></small>
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
        file_upload: {required:false },
        status: { required: true}
    },
    messages: {
        title:{required:"enter the title"},
        file_upload: {required: "select file to upload." },
        status: {required: "select status." },

    }
    });
    </script>
