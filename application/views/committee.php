<div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="index.php">Home</a></h6>
                    <h6><span class="page-active">Committees</span></h6>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
 <div class="col-md-3">
  <div class="widget-main">
                    <div class="widget-main-title">

							<li><a href="instituteprofile.php">Institute Profile</a></li>
							<li><a href="mission.php">Mission & Vision</a></li>
							<li><a href="founders.php">Founders</a></li>
							<li><a href="management.php">Management</a></li>
							<li><a href="governing.php">Governing Council</a></li>
							<li><a href="course.php">Courses Offered</a></li>
							<li><a href="committee.php">Committees</a></li>




                    </div>
                    <!-- /.widget-inner -->
                </div>

		</div>
		<h3>Committee</h3>


										<div class="col-md-9">

                      <?php if(empty($res_committee)){

                      }else{
                        foreach($res_committee as $rows_committee){  ?>
                          <div class="blog-categories">
                              <div class="row  widget-main-title">
                                  <ul class="col-md-12">
                                      <li><a target="_blank" href="<?php echo base_url(); ?>assets/documents/<?php echo $rows_committee->file_upload; ?>"><?php echo $rows_committee->title; ?></a></li>

                                  </ul>

                              </div>
                          </div>
                    <?php    }
                      } ?>






		</div>




  </div>