<?php  $role=$this->session->userdata('user_role'); ?>
<div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page"><span>Department</span></li>
            </ol>
          </nav>
          <div class="row">

            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Department</h4>
                  <?php  foreach($res as $rows){} ?>
                  <form class="forms-sample" id="form_create" method="post" action="<?php echo base_url(); ?>admindept/update_department" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="username">Name</label>
                          <input type="text" class="form-control" id="name" name="name" placeholder="Dept name" value="<?php echo $rows->dept_name; ?>">
                          <input type="hidden" class="form-control" id="id" name="id" placeholder="Dept name" value="<?php echo $rows->id; ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="username">Description</label>
                          <textarea id="summernote" name="description" class="textarea" cols="10" rows="5"><?php echo $rows->description; ?></textarea>

                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="username">Vision</label>
                          <textarea id="summernote_1" name="vision" cols="10" rows="5"><?php echo $rows->vision; ?></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="username">History</label>
                          <textarea id="summernote_2" name="history" cols="10" rows="5"><?php echo $rows->history; ?></textarea>
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

          name:{required:true},
          history:{required:true},
          description:{required:true},
          vision:{required:true},
          status: { required: true}
      },
      messages: {
          title:{required:"enter the name"},
          history:{required:"enter the history"},
          description:{required:"enter the about"},
          vision:{required:"enter the vision"},
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
        url:"<?php echo base_url(); ?>adminexam/change_autnomous_exam_position",
        type:'post',
        data:{position:data},
        success:function(result){
          window.location.reload();
         }
    })
}
    </script>
