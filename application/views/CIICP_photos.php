<div class="container">

        <div class="page-title clearfix">

            <div class="row">

                <div class="col-md-12">

                    <h6><a href="<?php echo base_url(); ?>">Home</a></h6>

                    <h6><span class="page-active">Photos</span></h6>

                </div>

            </div>

        </div>

    </div>

    <div class="container">

<div class="col-md-3">

 <div class="widget-main">

                   <div class="widget-main-title">


<ul>
                           <li><a href="CIICP_home.php">Home</a></li>
                           <li><a href="CIICP_News.php">Latest News</a></li>
                               <li><a href="CIICP_mission.php">Mission</a></li>
                               <li><a href="CIICP_mandate.php">Mandate</a></li>
                               <li><a href="CIICP_trust.php">Thrust</a></li>
                               <li><a href="CIICP_spic.php">SPIC </a></li>
                               <li><a href="CIICP_courses.php">Courses Offered</a></li>
                               <li><a href="CIICP_photos.php">Photos</a></li>



               </ul>





                   </div>

                   <!-- /.widget-inner -->

               </div>



</div>



<div class="col-md-9">

<div class="">

<div class="col-md-12">

                       <div class="grid-event-item">



                           <div class="box-content-inner">
                             <center><h3>INDUSTRY - INSTITUTE - INTERACTION</h3></center><br>
                             <?php if(empty($res_data)){

                             }else{
                               foreach($res_data as $rows_data){ ?>
                                 <div>
                                   <h4><?php echo $rows_data->title; ?></h4>
                                   <img src="<?php echo base_url(); ?>assets/sps/photos/<?php echo $rows_data->image_1; ?>" style="width:100%;height:400px;"><br><br>

                                   <?php if(empty($rows_data->image_2)){

                                   }else{ ?>
<img src="<?php echo base_url(); ?>assets/sps/photos/<?php echo $rows_data->image_2; ?>" style="width:100%;height:400px;"><br><hr>
                                  <?php } ?>
                                 </div>
                              <?php } } ?>


                               </div>

                       </div>

                   </div>





</div>

  </div>

  </div>
