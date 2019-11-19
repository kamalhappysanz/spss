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
                  <h4 class="card-title">Create Department Association or Syllabus  <a href="javascript:window.history.go(-1);" class="btn go_back_btn pull-right">Back</a>&nbsp;
                  <a href="<?php echo base_url();  ?>admindept/Syllabus/<?php echo $this->uri->segment(3); ?>" class="btn go_back_btn pull-right">View syllabus</a> &nbsp;
                <a href="<?php echo base_url();  ?>admindept/Association/<?php echo $this->uri->segment(3); ?>" class="btn go_back_btn pull-right">View Association Activity</a>&nbsp;
              </h4>

                  <form class="forms-sample" id="form_create" method="post" action="<?php echo base_url(); ?>admindept/create_syllabus_activity" enctype="multipart/form-data">

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleFormControlSelect3">Type</label>
                          <select class="form-control form-control-sm" id="syllabus_association" name="syllabus_association">
                            <option value="">--Select--</option>
                            <option value="Association">Association Activity</option>
                            <option value="Syllabus">Syllabus</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="username">Name</label>
                          <input type="text" class="form-control" id="ac_sy_name" name="ac_sy_name" placeholder="Title">
                          <input type="hidden" class="form-control" id="dept_id" name="dept_id" value="<?php echo $this->uri->segment(3); ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="username">Upload file</label>
                          <input type="file" class="form-control" id="file_upload" name="file_upload" placeholder="">
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
                        </div>
                      </div>
                    </div>


                    <button type="submit" class="btn btn-primary mr-2">Create </button>
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
          file_upload:{required:true},

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
      $( ".row_position" ).sortable({
stop: function() {
var selectedData = new Array();
      $('.row_position>tr').each(function() {
          selectedData.push($(this).attr("id"));
      });
      updateOrder(selectedData);
  }
});
function updateOrder(data) {
    $.ajax({
        url:"<?php echo base_url(); ?>admindept/change_dept_staff_position",
        type:'post',
        data:{position:data},
        success:function(result){
          window.location.reload();
         }
    })
}
    </script>
