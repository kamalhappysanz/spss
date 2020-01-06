<div class="container">
    <div class="page-title clearfix">
      <div class="row">
        <div class="col-md-12">
          <h6><a href="index.html">Home</a></h6>
          <h6><span class="page-active">Governing Council</span></h6>
        </div>
      </div>
    </div>
</div>
<div class="container">
    <div class="col-md-3">
      <div class="widget-main">
            <div class="widget-main-title">
              <ul>
                <li><a href="<?php echo base_url(); ?>ins_profile">Institute Profile</a></li>
                <li><a href="<?php echo base_url(); ?>mission">Mission & Vision</a></li>
                <li><a href="<?php echo base_url(); ?>founders">Founders</a></li>
                <li><a href="<?php echo base_url(); ?>management">Management</a></li>
                <li><a href="<?php echo base_url(); ?>governing">Governing Council</a></li>
                <li><a href="<?php echo base_url(); ?>course_offered">Courses Offered</a></li>
                <li><a href="<?php echo base_url(); ?>committee">Committees</a></li>
        </ul>
            </div>
      </div>
    </div>
<div class="col-md-9">
    <div class="widget-main">
      <div class="widget-main-title">
      <h4 class="widget-title">Governing Council  (2017 - 2018)</h4>
      </div>

      <?php foreach($res_council as $rows_council){ ?>
        <div class="widget-inner">
            <div class="prof-list-item clearfix">
              <div class="prof-thumb">
              </div>
              <div class="prof-details">
              <div class="row">
              <div class="col-md-4">
                  <h5 class="prof-name-list"><?php echo $rows_council->name; ?></h5>
                  <p class="small-text"><?php echo $rows_council->desgination; ?></p>
                  <p class="small-text"><?php echo $rows_council->description; ?></p>
              </div>
              </div>
            </div>
            </div>
        </div>
    <?php  }  ?>




    </div>
</div>
</div>
