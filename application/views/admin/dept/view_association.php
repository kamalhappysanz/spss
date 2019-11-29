<?php  $role=$this->session->userdata('user_role'); ?>
<div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admindept/">Department</a></li>
              <li class="breadcrumb-item active" aria-current="page"><span>Department Syllabus</span></li>
            </ol>
          </nav>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card" id="list">
              <div class="card">
                <?php if($this->session->flashdata('msg')) {
                $message = $this->session->flashdata('msg');?>
                <div class="<?php echo $message['class'] ?>">
                  <?php echo $message['message']; ?>
                </div>
              <?php  }  ?>

                <div class="card-body"  >
                  <h4 class="card-title">List of Department Association <a href="javascript:window.history.go(-1);" class="btn go_back_btn pull-right">Back</a></h4>

              <table id="example" class="table table-striped table-bordered">
      <thead >
          <tr>
              <th>S.no</th>
              <th>Name</th>
              <th>Position</th>
              <th>Status</th>
              <th>Action</th>

          </tr>
      </thead>
        <tbody class="row_position">
        <?php $i=1; foreach($res as $rows){ ?>
          <tr id="<?php echo $rows->id; ?>">
              <td><?php echo $i; ?></td>
              <td><a target="_blank" href="<?php echo base_url(); ?>assets/dept/<?php echo $rows->file_name; ?>"><?php echo $rows->ac_sy_name; ?></a>  </td>
              <td><?php echo $rows->file_position	; ?> </td>
              <td><?php if($rows->status=='Inactive'){ ?>
              <button type="button" class="badge badge-danger btn-fw">Inactive</button>
            <?php   }else{ ?>
              <button type="button" class="badge badge-success btn-fw">Active</button>
            <?php   } ?></td>
            <td><a title="Update" href="<?php echo base_url(); ?>admindept/get_dept_syllabus_activity_edit/<?php echo base64_encode($rows->id*98765); ?>"><i class="fa fa-edit"></i></a> &nbsp;&nbsp;

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
        url:"<?php echo base_url(); ?>admindept/change_dept_association_position",
        type:'post',
        data:{position:data},
        success:function(result){
          window.location.reload();
         }
    })
}
    </script>
