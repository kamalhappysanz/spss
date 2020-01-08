<?php  $role=$this->session->userdata('user_role'); ?>
<script src="https://skilex.in/assets/admin/js/datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.css" rel="stylesheet">
<div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page"><span>Latest Events</span></li>
            </ol>
          </nav>
          <div class="row">

            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Create Latest Events</h4>

                  <form class="forms-sample" id="form_create" method="post" action="<?php echo base_url(); ?>adminmodule/create_latest_events" enctype="multipart/form-data">
                    <div class="row">


                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="username"> Title</label>
                          <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="city_ta_name">Event date</label>
                          <input type="text" class="form-control" id="datepicker" name="event_date" placeholder="" autocomplete="off">
                        </div>
                      </div>
                    </div>

                    <div class="row">

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="city_ta_name">Event file</label>
                          <input type="file" class="form-control" id="file_upload" name="file_upload" placeholder="" >
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
                    <button type="submit" class="btn btn-primary mr-2">Create Event</button>
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
                              <h4 class="card-title">List of Latest Events</h4>

                          <table id="" class="table table-striped table-bordered">
                  <thead >
                      <tr>
                          <th>S.no</th>
                          <th>Title</th>
                          <th>Event date</th>
                          <th>Event file</th>
                          <th>Position</th>
                          <th>Status</th>
                          <th>Actions</th>
                      </tr>
                  </thead>
                    <tbody class="row_position">
                    <?php $i=1; foreach($res as $rows){ ?>
                      <tr id="<?php echo $rows->id; ?>">
                          <td><?php echo $i; ?></td>
                          <td><?php echo $rows->title; ?>  </td>
                          <td><?php echo $rows->event_date; ?></td>
                           <td><?php if(empty($rows->file_upload)){
                           }else{ ?>
                            <a target="_blank" href="<?php echo base_url(); ?>assets/documents/<?php echo $rows->file_upload;  ?>">Click here for file</a>
                           <?php } ?>
                            </td>
                          <td><?php echo $rows->file_position; ?> </td>
                          <td><?php if($rows->status=='Inactive'){ ?>
                          <button type="button" class="badge badge-danger btn-fw">Inactive</button>
                        <?php   }else{ ?>
                          <button type="button" class="badge badge-success btn-fw">Active</button>
                        <?php   } ?></td>
                        <td><a href="<?php echo base_url(); ?>adminmodule/get_latest_event_edit/<?php echo base64_encode($rows->id*98765); ?>"><i class="fa fa-edit"></i></a> &nbsp;&nbsp;
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
    $( "#datepicker" ).datepicker({
      format: 'yyyy-mm-dd',
        autoclose: true

       });
      $('#form_create').validate({
      rules: {

          title:{required:true},
          event_date:{required:true},
          file_upload: {required:true },
          status: { required: true}
      },
      messages: {
          title:{required:"enter the title"},
          event_date:{required:"Event date required"},
          file_upload: {required: "select file to upload." },
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
        url:"<?php echo base_url(); ?>adminmodule/change_latest_event_position",
        type:'post',
        data:{position:data},
        success:function(result){
          window.location.reload();
         }
    })
}
    </script>
