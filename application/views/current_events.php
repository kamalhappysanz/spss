<style>
.event-small-details {
    padding-bottom: 20px;
    border-bottom: 1px solid #ccc;
    margin-bottom: 10px;
}
</style>
<div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="<?php echo base_url(); ?>">Home</a></h6>
                    <h6><span class="page-active">Institute Profile</span></h6>
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
                    <!-- /.widget-inner -->
                </div>

 </div>

 <div class="col-md-9">
               <div class="row">
                    <!-- Show Latest Events List -->
                    <div class="col-md-12">
                        <div class="widget-main">
                            <div class="widget-main-title">
                                <h4 class="widget-title">Events</h4>
                            </div> <!-- /.widget-main-title -->
                            <div class="widget-inner">

                                <div class="row">
                                    <?php  if(empty($res_event)){

                                    }else{
                                      foreach($res_event as $row_event){

                                          ?>
                                        <div class="col-md-12">
                                            <div class="event-small-list clearfix">
                                                <div class="calendar-small">
                                                    <span class="s-month"><?php echo date('M', strtotime($row_event->event_date)); ?></span>
                                                    <span class="s-date"><?php echo date('d-y', strtotime($row_event->event_date)); ?></span>
                                                </div>
                                                <div class="event-small-details">
                                                    <h5 class="event-small-title">
                                                      <a target="_blank" href="<?php echo base_url(); ?>assets/documents/<?php echo $row_event->file_upload; ?>"><?php echo $row_event->title; ?></a></h5>

                                                </div>
                                            </div>
                                        </div>
                                    <?php  }
                                    } ?>





                                </div>

                            </div>
                            <!-- /.widget-inner -->
                        </div> <!-- /.widget-main -->
                    </div> <!-- /.col-md-6 -->

                </div> <!-- /.row -->
   </div>







   </div>

   </div>
