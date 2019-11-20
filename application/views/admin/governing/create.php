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
                  <h4 class="card-title">Create Governing Council <a href="javascript:window.history.go(-1);" class="btn go_back_btn pull-right">Back</a></h4>

                  <form class="forms-sample" id="form_create" method="post" action="<?php echo base_url(); ?>admindept/create_governing_council" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="username">Name</label>
                          <input type="text" class="form-control" id="name" name="name" placeholder="Faculty name">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="username">Desgination</label>
                          <input type="text" class="form-control" id="desgination" name="desgination" placeholder="">
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
                  <h4 class="card-title">List of Governing council</h4>

              <table id="example" class="table table-striped table-bordered">
      <thead >
          <tr>
              <th>S.no</th>
              <th>Name</th>
              <th>Desgination</th>
              <th>image</th>
              <th>Position</th>
              <th>Status</th>
              <th>Action</th>

          </tr>
      </thead>
        <tbody class="row_position">
        <?php $i=1; foreach($res as $rows){ ?>
          <tr id="<?php echo $rows->id; ?>">
              <td><?php echo $i; ?></td>
              <td><?php echo $rows->name; ?>  </td>
              <td><?php echo $rows->desgination; ?>  </td>
              <td><img src="<?php echo base_url(); ?>assets/council/<?php echo $rows->file_upload; ?>" style="width:100px;">  </td>
              <td><?php echo $rows->file_position; ?> </td>
              <td><?php if($rows->status=='Inactive'){ ?>
              <button type="button" class="btn btn-danger btn-fw">Inactive</button>
            <?php   }else{ ?>
              <button type="button" class="btn btn-success btn-fw">Active</button>
            <?php   } ?></td>
            <td><a title="Update" href="<?php echo base_url(); ?>admindept/get_governing_council_edit/<?php echo base64_encode($rows->id*98765); ?>"><i class="fa fa-edit"></i></a> &nbsp;&nbsp;

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

          name:{required:true},
          file_upload:{required:true},
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
        url:"<?php echo base_url(); ?>admindept/change_governing_council_position",
        type:'post',
        data:{position:data},
        success:function(result){
          window.location.reload();
         }
    })
}
    </script>
