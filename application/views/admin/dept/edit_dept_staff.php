<?php  $role=$this->session->userdata('user_role'); ?>
<div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
                <li class="breadcrumb-item">Department</li>
              <li class="breadcrumb-item active" aria-current="page"><span>Department Staff</span></li>
            </ol>
          </nav>
          <div class="row">

            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Department Staff <a href="javascript:window.history.go(-1);" class="btn go_back_btn pull-right">Back</a></h4>
                  <?php foreach($res as $rows){} ?>
                  <form class="forms-sample" id="form_create" method="post" action="<?php echo base_url(); ?>admindept/update_dept_staff" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="username">Name</label>
                          <input type="text" class="form-control" id="faculty_name" name="faculty_name" placeholder="Faculty name" value="<?php echo $rows->faculty_name; ?>">
                          <input type="hidden" class="form-control" id="id" name="id"  value="<?php echo $rows->id; ?>">
                          <input type="hidden" class="form-control" id="old_pic" name="old_pic"  value="<?php echo $rows->file_upload; ?>">
                          <input type="hidden" class="form-control" id="dept_id" name="dept_id"  value="<?php echo base64_encode($rows->dept_id*98765); ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="username">Faculty Degree</label>
                          <input type="text" class="form-control" id="degree" name="degree" placeholder=""  value="<?php echo $rows->degree; ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="username">Desgination</label>
                          <input type="text" class="form-control" id="desgination" name="desgination" placeholder="" value="<?php echo $rows->desgination; ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="username">Faculty experience</label>
                          <input type="text" class="form-control" id="experience" name="experience" placeholder="" value="<?php echo $rows->experience; ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="username">Upload new picture</label>
                          <input type="file" class="form-control" id="file_upload" name="file_upload" placeholder="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="username">Faculty Email</label>
                          <input type="text" class="form-control" id="faculty_email" name="faculty_email" placeholder="" value="<?php echo $rows->faculty_email; ?>">
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
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleFormControlSelect3">Old picture</label>
                        <img src="<?php echo base_url(); ?>assets/staff/<?php echo $rows->file_upload; ?>" style="width:120px;">
                      </div>
                        </div>

                    </div>


                    <button type="submit" class="btn btn-primary mr-2">Update  Staff</button>
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

          faculty_name:{required:true},
          file_upload:{required:false},
          degree:{required:true},
          experience:{required:true},
          faculty_email	:{required:true},
          status: { required: true}
      },
      messages: {
          faculty_name:{required:"enter  name"},
          file_upload:{required:"select  profile picture"},
          degree:{required:"enter  degree"},
          faculty_email:{required:"enter  email"},
          experience:{required:"enter  experience"},
          status: {required: "select status." },

      }
      });

    </script>
