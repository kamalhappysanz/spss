<div class="container">

        <div class="page-title clearfix">

            <div class="row">

                <div class="col-md-12">

                    <h6><a href="<?php echo base_url(); ?>">Home</a></h6>

                    <h6><span class="page-active">Academi Calendar</span></h6>

                </div>

            </div>

        </div>

    </div>

    <div class="container">

<div class="col-md-3">

 <div class="widget-main">

                   <div class="widget-main-title">


<ul>
                               <li><a href="syllabi.php">Syllabi</a></li>
                               <li><a href="admission.php">Admission</a></li>
                               <li><a href="academic.php">Academic Calendar</a></li>
                               <li><a href="library.php">Library</a></li>
                               <li><a href="keycontact.php">Key Contacts </a></li>
                               <li><a href="http://www.gmail.com">Webmail</a></li>




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



                               <center><h3>Academi Calendar</h3></center>
                               <ul>
                                 <?php if(empty($res_calendar)){

                                 }else{
                                   foreach($res_calendar as $rows_calendar){ ?>
                                     <li><a target="_blank" href="<?php echo base_url(); ?>assets/documents/<?php echo $rows_calendar->file_upload; ?>"><?php echo $rows_calendar->title; ?></a></li><br>
                                <?php   }
                                 } ?>

                               </ul>





                               </div>

                       </div>

                   </div>





</div>

  </div>




  </div>
