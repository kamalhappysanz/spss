<marquee direction="left" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="5" style="height: 30px;">

    <img src="<?php echo base_url(); ?>assets/sps/images/new.gif" border="0" style="float:right;margin-right: 1070px;margin-top: -3px;">
    <a href="http://citspc.edu.in/uploads/Placed_Students.pdf" target="_blank">2018-19 Batch Placement-107 students has placed as on 15-03-2019</a>
    <br>
    <br>

</marquee>

<div class="container">

    <div class="row">

        <div class="col-md-12">
            <div class="main-slideshow">
                <div class="flexslider">
                    <ul class="slides">

                        <?php  if(empty($res_banner)){

                          }else{
                            foreach($res_banner as $rows_banner){ ?>
                            <li>
                                <a target="_blank" href=""> <img alt="" src="<?php echo base_url(); ?>assets/banners/<?php echo $rows_banner->banner_img; ?>" /></a>
                            </li>
                            <?php  }
                          } ?>

                    </ul>
                    <!-- /.slides -->
                </div>
                <!-- /.flexslider -->
            </div>
            <!-- /.main-slideshow -->
        </div>
        <!-- /.col-md-12 -->

    </div>
</div>

<div class="container">
    <div class="row">

        <!-- Here begin Main Content -->
        <div class="col-md-8">

            <div class="row">

                <div class="col-md-12">

                    <div class="widget-item">
                        <h2 class="welcome-text"> Welcome to CIT Sandwich Polytechnic College</h2>
                        <p style="text-align: justify; margin-right: 5px;">CIT Sandwich Polytechnic College is one of the institutions run by V. Rangaswamy Naidu Educational Trust founded in 1955 by Late.Sri. V. Rangaswamy Naidu for the promotion of Technical Education and Industrial Training in Tamil Nadu. The Polytechnic was started in the year 1961 and is located near Coimbatore Civil Aerodrome on the outskirts of Coimbatore on the Avinashi Road. The campus area is 25.30 hectares (both C.I.T. &amp; C.I.T. Sandwich Polytechnic College).</p>
                    </div>
                    <!-- /.widget-item -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="widget-main">
                        <div class="widget-main-title">
                            <h4 class="widget-title">MANDATE</h4>
                        </div>
                        <div class="widget-inner">
                            <div id="slider-testimonials">
                                <ul>
                                    <li>
                                        <p style="text-align: justify; margin-right: 5px;">CIT Sandwich Polytechnic College, Coimbatore, a Government aided, co-educational institution, established and run by V. Rangaswamy Naidu Educational Trust is to offer post-matric level technical education in Full Time, Part Time and Sandwich modes, leading to the Diploma from the State Board of Technical Education and Training, Tamilnadu, in compliance with all Government and AICTE rules and regulations.</p>
                                    </li>

                                </ul>

                            </div>
                        </div>
                        <!-- /.widget-inner -->
                    </div>
                    <!-- /.widget-main -->
                </div>
                <!-- /.widget-main -->
            </div>

            <div class="row">
                <div class="col-md-12" style="margin-top: 20px;
    background-color: #fff;
    padding-top: 15px;
    margin-left: 15px;
    width: 96%; ">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="alert alert-success" style="text-align:center;">
                                <a href="aicte.php"> <strong>AICTE APPROVAL 2018- 2019 </strong></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="alert alert-info" style="text-align:center;">
                                <a href="<?php echo base_url(); ?>assets/sps/docs/Committee for Harassment of Women in Work Place.pdf"><strong>Sexual Harrassment Committee</strong> </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="alert alert-success" style="text-align:center;">
                                <img src="<?php echo base_url(); ?>assets/sps/images/new.gif" border="0" style="float:right;margin-right:10px;margin-top: -3px;">
                                <a href="<?php echo base_url(); ?>assets/sps/docs/FINAL NEWSLETTER 19-20.pdf"> <strong> NEWSLETTER - ODD SEMESTER <br> (2019 - 2020) </strong></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="alert alert-info" style="text-align:center;">
                                <img src="<?php echo base_url(); ?>assets/sps/images/new.gif" border="0" style="float:right;margin-right:10px;margin-top: -3px;">
                                <a href="http://192.168.13.100:8080/AutoLib/QBSearch/QBSearchServlet?flag=load"><strong>Question Bank</strong> </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="row">
                <!-- Show Latest Events List -->
                <div class="col-md-12">
                    <div class="widget-main">
                        <div class="widget-main-title">
                            <h4 class="widget-title">Latest Events</h4>
                        </div>
                        <!-- /.widget-main-title -->
                        <div class="widget-inner">

                            <div class="row">
                              <?php  if(empty($res_event)){

                              }else{
                                foreach($res_event as $row_event){

                                    ?>
                                  <div class="col-md-4">
                                      <div class="event-small-list clearfix">
                                          <div class="calendar-small">
                                              <span class="s-month"><?php echo date('M', strtotime($row_event->event_date)); ?></span>
                                              <span class="s-date"><?php echo date('d-y', strtotime($row_event->event_date)); ?></span>
                                          </div>
                                          <div class="event-small-details">
                                              <h5 class="event-small-title"><a target="_blank" href="<?php echo base_url(); ?>assets/documents/<?php echo $row_event->file_upload; ?>"><?php echo $row_event->title; ?></a></h5>

                                          </div>
                                      </div>
                                  </div>
                              <?php  }
                              } ?>




                            </div>

                            <div class="event-small-details">
                                <div class="view-details pull-right"><a href="<?php echo base_url(); ?>current_events" class="lightBtn">Next >></a></div>
                            </div>

                        </div>
                        <!-- /.widget-inner -->
                    </div>
                    <!-- /.widget-main -->
                </div>
                <!-- /.col-md-6 -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-md-8 -->
        <!-- Here begin Sidebar -->

        <div class="col-md-4">

            <div class="widget-main" style="overflow: hidden;">
                <div class="widget-main-title">
                    <h4 class="widget-title">Announcements</h4>
                </div>
                <!-- /.widget-main-title -->
                <div class="widget-inner" style="max-height: 250px;">
                    <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="3" style="height: 200px;">

                        <div class="event-small-list clearfix">

                            <div class="event-small-details">

                                <div class="event-small-details">

                                    <!-- <img src="<?php echo base_url(); ?>assets/sps/images/new.gif" border="0" style="float:right;margin-right:10px;margin-top: -3px;"> -->
                                    <?php if(empty($res_announcement)){}else{
                                      foreach($res_announcement as $row_announcement){   ?>
                                            <a href="<?php echo base_url(); ?>assets/documents/<?php echo $row_announcement->file_upload; ?>" target="_blank"><?php echo $row_announcement->title; ?></a> <br><br>
                                    <?php  }
                                    } ?>


                                    <!-- <a href="http://citspc.edu.in/uploads/TUITION FEES.jpg" target="_blank">Fees structure for the academic year <br> 2019-2020 (Even Semester)</a> -->




                                </div>

                            </div>

                    </marquee>

                    </div>
                    <!-- /.widget-inner -->
                </div>

                <!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Founders</h4>
                    </div>
                    <div class="widget-main-title">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="widget-inner">
                                    <div class="prof-list-item clearfix">
                                        <div class="prof-thumb">
                                            <img src="<?php echo base_url(); ?>assets/sps/images/founder1.jpg" alt="">
                                        </div>
                                        <!-- /.prof-thumb -->
                                        <div class="prof-details">
                                            <h5 class="prof-name-list">Sri.V.Rangaswamy Naidu</h5>
                                            <p class="small-text">Founder Managing Trustee</p>
                                        </div>
                                        <!-- /.prof-details -->
                                    </div>
                                    <!-- /.prof-list-item -->
                                    <div class="prof-list-item clearfix">
                                        <div class="prof-thumb">
                                            <img src="<?php echo base_url(); ?>assets/sps/images/founder2.jpg" alt="Profesor Name">
                                        </div>
                                        <!-- /.prof-thumb -->
                                        <div class="prof-details">
                                            <h5 class="prof-name-list">Sri.R.Venkataswamy Naidu B.Sc.(Tech) Manchester </h5>
                                            <p class="small-text">Founder Correspondant</p>
                                        </div>
                                        <!-- /.prof-details -->
                                    </div>
                                    <!-- /.prof-list-item -->
                                    <div class="prof-list-item clearfix">
                                        <div class="prof-thumb">
                                            <img src="<?php echo base_url(); ?>assets/sps/images/founder4.jpg" alt="Profesor Name">
                                        </div>
                                        <!-- /.prof-thumb -->
                                        <div class="prof-details">
                                            <h5 class="prof-name-list">Prof.P.R.Ramakrishnan M.S.(M.I.T)USA,M.B.A.,F.I.E. </h5>
                                            <p class="small-text">Founder Principal , Former Member of Parliament (1957-1967)</p>
                                        </div>
                                        <!-- /.prof-details -->
                                    </div>
                                    <!-- /.prof-list-item -->
                                </div>
                                <!-- /.widget-inner -->

                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
