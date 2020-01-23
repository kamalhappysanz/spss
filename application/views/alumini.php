<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.css" rel="stylesheet">
<style>
.error{
  font-size: 13px;
  font-weight: 400;
  margin-left: 190px !important;
  color:red;
}
</style>
<div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="<?php echo base_url(); ?>">Home</a></h6>
                    <h6><span class="page-active">Alumni Registration</span></h6>
                </div>
            </div>
        </div>
    </div>



    <div class="container">

        <div class="row">

           <!-- /.col-md-5 -->
           <form action="<?php echo base_url(); ?>welcome/save_alumini_data" method="post" id="aluminiform" enctype="multipart/form-data">
            <div class="col-md-7">
              <p><?php
           if($this->session->flashdata('msg')){
         ?>
           <div class="alert alert-success">
             <?php  echo $this->session->flashdata('msg'); ?>
           </div>
        <?php
      } ?></p>
                <div class="contact-page-content">
                    <div class="contact-heading">
                        <h3>Alumni Registration</h3>
                         </div>
                    <div class="contact-form clearfix">
					  <h3>Educational Details</h3>
                        <p class="full-row form-group">
                            <span class="contact-label">
                                <label for="name-id">Course Name:</label>

                            </span>
                            <input type="text" id="name" name="coursename" class="form-control">
                        </p>
						 <p class="full-row">
                            <span class="contact-label">
                                <label for="surname-id">Year Of Passing</label>

                            </span>
                            <input type="text" id="surname-id" name="yearofpassing" class="form-control">
                        </p>

                        <p class="full-row">
						  <h3>Personal Details</h3>
                            <span class="contact-label">
                                <label for="surname-id">First Name:</label>

                            </span>
                            <input type="text" id="fname" name="fname" class="form-control">
                        </p>
						<p class="full-row">
						     <span class="contact-label">
                                <label for="surname-id">Last Name:</label>
                             </span>
                            <input type="text" id="lname" name="lname" class="form-control">
                        </p>
						<p class="full-row">
						     <span class="contact-label">
                                <label for="surname-id">Date Of Birth:</label>
                             </span>
                            <input type="text" id="datepicker" name="dob" class="form-control" autocomplete="off">
                        </p>
						<p class="full-row">
						     <span class="contact-label">
                                <label for="surname-id">Gender:</label>
                             </span>
                            <input type="text" id="gender" name="gender" class="form-control">
                        </p>


                        <p class="full-row">
                            <span class="contact-label">
                                <label for="message">Address:</label>

                            </span>
                            <textarea name="address" id="message" rows="6" class="form-control"></textarea>
                        </p>
						<p class="full-row">
						     <span class="contact-label">
                                <label for="surname-id">Mobile Number:</label>
                             </span>
                            <input type="text" id="mobile" name="mobile" class="form-control">
                        </p>
						<p class="full-row">
						     <span class="contact-label">
                                <label for="surname-id">Email:</label>
                             </span>
                            <input type="text" id="email" name="email" class="form-control">
                        </p>
						<p class="full-row">
						     <span class="contact-label">
								 <label for="surname-id">Image:</label>

                             </span>
                            <input type="file" id="surname-id image-upload" name="profile">

                        </p>
                        <p class="full-row">
                            <input class="mainBtn" type="submit" name="" value="Register Here">
                        </p>
                    </div>
                </div>
            </div> <!-- /.col-md-7 -->
          </form>
        </div> <!-- /.row -->
    </div>

<script>
$( "#datepicker" ).datepicker({
  format: 'yyyy-mm-dd',
    endDate: '-0d',
    autoclose: true

   });
$('#aluminiform').validate({
    rules: {
        coursename: {required: true },
        yearofpassing:{required:true},
        fname: {required: true },
        lname:{required:true},
        gender:{required:true},
        address: {required: true },
        email:{required:true,email:true},
        mobile: {required: true,digits:true,minlength:10,maxlength:10 },
        profile: {required: true },
        dob:{required:true}

    },
    messages: {
      coursename: {required: "Enter th course name" },
      yearofpassing:{required:"Enter the year of passing"},
      fname: {required: "Enter the first name" },
      lname:{required:"Enter the last name"},
      gender:{required:"Enter the gender"},
      address: {required: "Enter the address" },
      email:{required:"Enter the email id",email:"Enter the valid email Id"},
      mobile: {required: "Enter the mobile number" },
      profile: {required: "Select the file" },
      dob:{required:"Enter the date of birth"},
    }

    });
</script>
