<style>
.blog-grid-thumb {
    overflow: hidden;
    height: 200px;
    position: relative;
    width: 190px;
    left: 20px;
}
</style>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="widget-main">
                    <div class="widget-inner shortcode-typo">
                        <div class="row">
                            <div class="col-md-12">
							  		  <h4> Mechanical Engineering </h4>



                                <!-- Nav tabs -->
                                <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                                    <li class="active"><a href="#section-1" data-toggle="tab">About Us</a></li>
                                    <li><a href="#section-2" data-toggle="tab">Faculty</a></li>
                                    <li><a href="#section-3" data-toggle="tab">Lab Facilities</a></li>
                                    <li><a href="#section-4" data-toggle="tab">Association Activities</a></li>
                                    <li><a href="#section-5" data-toggle="tab">Syllabus</a></li>

                                </ul>
                                <div id="my-tab-content" class="tab-content">

                                    <div class="tab-pane fade in active" id="section-1">
                                      <h4>Department Info</h4>
                                      <?php if(empty($res_dept_info)){

                                      }else{
                                        foreach($res_dept_info as $row_dept_info){ } ?>
                                        <?php echo $row_dept_info->history; ?>
                                        <?php echo $row_dept_info->vision; ?>
                                        <?php echo $row_dept_info->description; ?>
                                    <?php  } ?>
										                </div>
									                   <div class="tab-pane fade" id="section-2">
                                       <h4>Department Faculty</h4>
                                       <div class="row">
                                         <?php if(empty($res_faculty)){

                                         }else{
                                           foreach($res_faculty as $row_faculty){ ?>
                                             <div class="col-md-3">
                                               <div class="">
                                                 <div class="blog-grid-thumb centered">
                                                   <a href="">
                                                       <img class="facultyimg" src="<?php echo base_url(); ?>staff/profile/<?php echo $row_faculty->profile_file; ?>" alt="">
                                                   </a>
                                                 </div>
                                                 <div class="box-content-inner" style="height:150px;margin-bottom:70px">
                                                   <h4 class="blog-grid-title  no-margin"><a href="#"><?php echo $row_faculty->faculty_name; ?></a></h4>
                                                    <p class="blog-grid-title  no-margin"><span><a href="#"><?php echo $row_faculty->desgination; ?></a></span></p>
                                                    <p class="blog-grid-title  no-margin"><span><a href="#"><?php echo $row_faculty->degree; ?></a></span></p>
                                                   <p class="blog-grid-title  no-margin"><span><a href="#"><?php echo $row_faculty->faculty_email; ?></a></span></p>
                                                 </div>
                                               </div>
                                             </div>

                                          <?php
                                         }
                                         } ?>




                                       </div>

                                     </div>

                                    <div class="tab-pane fade" id="section-3">


										                 </div>
									                  <div class="tab-pane fade" id="section-4">
                                       <h4>Association Activities</h4>

                                     </div>
                                     <div class="tab-pane fade" id="section-5">
                                       <h4>Syllabus</h4>


                                     </div>
                                      <div class="tab-pane fade" id="section-6">
                                            <h4>TUTORS, SENIOR TUTORS AND HODs</h4>

								                       </div>









                                </div>
                            </div>

					   </div>

				   </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
