<div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="index.php">Home</a></h6>
                    <h6><span class="page-active">Downloads</span></h6>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
 <div class="col-md-3">
  <div class="widget-main">
                    <div class="widget-main-title">

						<ul>
										<li><a href="scholarship.php">Scholarships</a></li>
                    					<li><a href="studentunion.php">Student Union</a></li>
										<li><a href="examperformance.php">Exam Performance</a></li>

							<li><a href="https://web.archive.org/web/20170705132603/http://intradote.tn.nic.in/">Attendance Particulars </a></li>
							<li><a href="downloads.php">Downloads </a></li>
							<li><a href="facility.php">Facilities </a></li>
							<li><a href="extra.php">Extra- Curricular Activities </a></li>

                </ul>


                    </div>
                    <!-- /.widget-inner -->
                </div>

 </div>


						<h3>Downloads</h3>
							 <div class="col-md-9"><div id="blog-author" class="clearfix">
                 <div class="blog-author-info">
										<div class="row">
                      <ul>
                        <?php if(empty($res_data)){

                        }else{
                          foreach($res_data as $rows_data){ ?>
                            <li><a target="_blank" href="<?php echo base_url(); ?>assets/documents/<?php echo $rows_data->file_upload; ?>"><?php echo $rows_data->title; ?></a></li> </br>

                       <?php    }
                        } ?>    </ul>
										</div>
							 </div>
							 </div>
             </div>
       <hr>









  </div>
