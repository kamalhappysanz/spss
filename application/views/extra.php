<div class="container">

        <div class="page-title clearfix">

            <div class="row">

                <div class="col-md-12">

                    <h6><a href="<?php echo base_url(); ?>">Home</a></h6>

                    <h6><span class="page-active">Extra- Curricular Activities</span></h6>

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

     							<li><a href="http://intradote.tn.nic.in/">Attendance Particulars </a></li>
     							<li><a href="downloads.php">Downloads </a></li>
     							<li><a href="facility.php">Facilities </a></li>
     							<li><a href="extra.php">Extra- Curricular Activities </a></li>

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



                          <h3>Extra- Curricular Activities</h3>
                               <br>
                               <?php if(empty($res_data)){ ?>
                                   <li><a class="pdf" href="<?php echo base_url(); ?>nss_activites">NSS Activites</a>  </li> </br>
                               <?php }else{ ?>
                                  <li><a class="pdf" href="<?php echo base_url(); ?>nss_activites">NSS Activites</a>  </li> </br>
                                <?php foreach($res_data as $rows_data){ ?>
                                   <li><a target="_blank" href="<?php echo base_url(); ?>assets/documents/<?php echo $rows_data->file_upload; ?>"><?php echo $rows_data->title; ?></a></li> </br>

                              <?php    }
                               } ?>








                               </div>

                       </div> <!-- /.grid-event-item -->

                   </div>





</div>

  </div>

  </div>
