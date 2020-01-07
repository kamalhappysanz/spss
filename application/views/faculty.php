<style>
th{
  width:200px;
}
</style>
<div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="<?php echo base_url(); ?>">Home</a></h6>
                    <h6><span class="page-active">Faculty</span></h6>
                </div>
            </div>
        </div>
    </div>


 <div class="container">
 <div class="col-md-3">
  <div class="widget-main">
                    <div class="widget-main-title">
						<ul>
                    <li><a href="<?php echo base_url(); ?>faculty">Faculty</a></li>
                    <li style="width:200px;"><a href="<?php echo base_url(); ?>facultyadd">Faculty with Additional Charges</a></li>
                    <li><a class="nav-active" href="<?php echo base_url(); ?>nonteaching">Non-Teaching Staff</a></li>
                    <li><a href="<?php echo base_url(); ?>keycontact">Key Contacts</a></li>
                    <li><a href="https://web.archive.org/web/20170825163026/http://citspc.edu.in:2095/">Webmail</a></li>

                </ul>


                    </div>
                </div>

 </div>

 <div class="col-md-9">
 <div class="col-md-offset-1">

<h3 class="archive-title">Faculty</h3>
 <div class="bs-example">
    <table class="table table-striped table-bordered table-condensed">
        <thead>

        </thead>
        <tbody>
            <tr>
                <td>Dr.V.Selladurai, M.E., Ph.D., FIE, FIPE, Sr.M(ORSI), LN (SSI)</td>
					      <td>PRINCIPAL </td>
					      <td>principal@citspc.edu.in</td>

            </tr>


        </tbody>
    </table>
</div>

<?php  foreach($res_dept as $rows_dept){
$id=$rows_dept->id;
  ?>
<h3 class="archive-title"><?php echo $rows_dept->dept_name; ?></h3>
  <div class="bs-example">
    <table cellspacing="0" class="table table-striped table-bordered table-condensed">
      <tr>
        <th>Name</th><th>Desgination</th><th>Email</th>
      </tr>
        <?php foreach($res_dept_staff as $rows_dept_staff){
        if($id==$rows_dept_staff->dept_id){ ?>
          <tr>
          <td><a target="_blank" href="<?php echo base_url(); ?>assets/staff/profile/<?php echo $rows_dept_staff->file_upload; ?>"><?php echo $rows_dept_staff->faculty_name; ?></a></td>
          <td><?php echo $rows_dept_staff->desgination; ?></td>
          <td><?php echo $rows_dept_staff->faculty_email; ?></td>
          </tr>
       <?php  }else{ ?>

      <?php  }
        ?>

     <?php } ?>

    </table>
  </div>
<?php } ?>

 </div>
  </div>
   </div>
