<?php  $role=$this->session->userdata('user_role'); ?>
<div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admindept/">Department</a></li>
              <li class="breadcrumb-item active" aria-current="page"><span>Department Staff</span></li>
            </ol>
          </nav>
          <div class="row">

            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Governing Council <a href="javascript:window.history.go(-1);" class="btn go_back_btn pull-right">Back</a></h4>
                  <?php foreach($res as $rows){} ?>
                  <form class="forms-sample" id="form_create" method="post" action="<?php echo base_url(); ?>admindept/update_governing_council" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="username">Name</label>
                          <input type="text" class="form-control" id="name" name="name" placeholder=" name" value="<?php echo $rows->name; ?>">
                          <input type="hidden" class="form-control" id="old_file" name="old_file" placeholder="" value="<?php echo $rows->file_upload; ?>">
                          <input type="hidden" class="form-control" id="id" name="id" placeholder="" value="<?php echo $rows->id; ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="username">Desgination</label>
                          <input type="text" class="form-control" id="desgination" name="desgination" placeholder="" value="<?php echo $rows->desgination; ?>">
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
                          <label for="username">Profile Picture</label>
                          <input type="file" class="form-control" id="file_upload" name="file_upload" placeholder="">

                        </div>
                      </div>
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

          name:{required:true},
          file_upload:{required:false},
          desgination:{required:true},
          status: { required: true}
      },
      messages: {
          name:{required:"enter  name"},
          file_upload:{required:"select  profile picture"},
          desgination:{required:"enter  desgination"},
          status: {required: "select status." },

      }
      });

    </script>
