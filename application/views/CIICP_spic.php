<div class="container">

        <div class="page-title clearfix">

            <div class="row">

                <div class="col-md-12">

                    <h6><a href="<?php echo base_url(); ?>">Home</a></h6>

                    <h6><span class="page-active">CIICP LATEST NEWS</span></h6>

                </div>

            </div>

        </div>

    </div>


    <div class="container">

<div class="col-md-3">

 <div class="widget-main">

   <div class="widget-main-title">
      <ul>
        <li><a href="<?php echo base_url(); ?>CIICP_home">Home</a></li>
        <li><a href="<?php echo base_url(); ?>CIICP_News">Latest News</a></li>
        <li><a href="<?php echo base_url(); ?>CIICP_mission">Mission</a></li>
        <li><a href="<?php echo base_url(); ?>CIICP_mandate">Mandate</a></li>
        <li><a href="<?php echo base_url(); ?>CIICP_trust">Thrust</a></li>
        <li><a href="<?php echo base_url(); ?>CIICP_spic">SPIC </a></li>
        <li><a href="<?php echo base_url(); ?>CIICP_courses">Courses Offered</a></li>
        <li><a href="<?php echo base_url(); ?>CIICP_photos">Photos</a></li>
      </ul>
   </div>

               </div>



</div>



<div class="col-md-9">

<div class="">

<div class="col-md-12">

                       <div class="grid-event-item">



                           <div class="box-content-inner">



                               <center><h3>CIICP SPIC MEMBERS</h3></center>
                               <br>
                              <h4>Chair Person  :  Dr.R.Renuga, Principal</h4><br>

                               <?php if(empty($res_data)){

                               }else{
                                 foreach($res_data as $rows_data){ ?>
                                   <li><a target="_blank" href="<?php echo base_url(); ?>assets/documents/<?php echo $rows_data->file_upload; ?>"><?php echo $rows_data->title; ?></a></li> </br>

                              <?php    }
                               } ?>








                               </div>

                       </div> <!-- /.grid-event-item -->

                   </div>





</div>

  </div>

  </div>
