<?php  $role=$this->session->userdata('user_role'); ?>
<div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page"><span>View Alumni</span></li>
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
                  <h4 class="card-title">List of Alumni</h4>

              <table id="example" class="table table-striped table-bordered">
      <thead >
          <tr>
              <th>S.no</th>
              <th>Course & Year</th>
              <th>first & last name</th>
              <th>Email & Mobile Number</th>
              <th>Address</th>
              <th>Image</th>
          </tr>
      </thead>
        <tbody class="row_position">
        <?php $i=1; foreach($res as $rows){ ?>
          <tr id="<?php echo $rows->id; ?>">
              <td><?php echo $i; ?></td>
              <td><?php echo $rows->course; ?><br><?php echo $rows->year_of_passing; ?> </td>
              <td><?php echo $rows->first_name; ?><br><?php echo $rows->last_name; ?> </td>
              <td><?php echo $rows->mobile_no; ?><br><?php echo $rows->email; ?> </td>
              <td><?php echo $rows->address; ?> </td>
              <td><img src="<?php echo base_url(); ?>assets/alumni/<?php echo $rows->file_upload; ?>" style="width:100px;">  </td>

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


    </script>
