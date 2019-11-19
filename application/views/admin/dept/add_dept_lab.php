<?php  $role=$this->session->userdata('user_role'); ?>
<div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
              <li class="breadcrumb-item " ><a href="<?php echo base_url(); ?>admindept/">Department</a></li>
            </ol>
          </nav>
          <div class="row">

            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Create Department Lab <a href="javascript:window.history.go(-1);" class="btn go_back_btn pull-right">Back</a></h4>

                  <form class="forms-sample" id="form_create" method="post" action="<?php echo base_url(); ?>admindept/create_dept_lab" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="username">Lab Name</label>
                          <input type="text" class="form-control" id="lab_name" name="lab_name" placeholder="Dept lab name">
                            <input type="hidden" class="form-control" id="dept_id" name="dept_id" value="<?php echo $this->uri->segment(3); ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="username">Description</label>
                          <textarea id="summernote" name="description" class="textarea" cols="10" rows="5" required></textarea>

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
                    <button type="submit" class="btn btn-primary mr-2">Create</button>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-md-12 grid-margin stretch-card" id="list">

              <div class="card">

                <?php if($this->session->flashdata('msg')) {
                $message = $this->session->flashdata('msg');?>
                <div class="<?php echo $message['class'] ?>">
                  <?php echo $message['message']; ?>
                </div>
              <?php  }  ?>

                <div class="card-body"  >
                  <h4 class="card-title">List of Department Lab</h4>

              <table id="example" class="table table-striped table-bordered">
      <thead >
          <tr>
              <th>S.no</th>
              <th>Name</th>
              <th>Position</th>
              <th>lab images</th>
              <th>Status</th>
              <th>Actions</th>
          </tr>
      </thead>
        <tbody class="row_position">
        <?php $i=1; foreach($res as $rows){ ?>
          <tr id="<?php echo $rows->id; ?>">
              <td><?php echo $i; ?></td>
              <td><?php echo $rows->lab_name; ?>  </td>
              <td><?php echo $rows->lab_position; ?> </td>
              <td><img src="<?php echo base_url(); ?>assets/lab/<?php echo $rows->lab_image; ?>" style="width:150px;heigth:50px!important;">  </td>
              <td><?php if($rows->status=='Inactive'){ ?>
              <button type="button" class="btn btn-danger btn-fw">Inactive</button>
            <?php   }else{ ?>
              <button type="button" class="btn btn-success btn-fw">Active</button>
            <?php   } ?></td>
            <td><a title="Update" href="<?php echo base_url(); ?>admindept/get_dept_lab_edit/<?php echo base64_encode($rows->id*98765); ?>"><i class="fa fa-edit"></i></a> &nbsp;&nbsp;



            </td>
          </tr>
        <?php  $i++;  }  ?>
      </tbody>
  </table>
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
          lab_image:{required:true},
          status: { required: true}
      },
      messages: {
          lab_name:{required:"enter name"},
          lab_image:{required:"select image"},
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
        url:"<?php echo base_url(); ?>admindept/change_dept_lab_position",
        type:'post',
        data:{position:data},
        success:function(result){
          window.location.reload();
         }
    })
}
    </script>
