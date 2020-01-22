<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>

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
           <form action="" method="post" id="aluminiform" enctype="multipart/form-data">
            <div class="col-md-7">
                <div class="contact-page-content">
                    <div class="contact-heading">
                        <h3>Alumni Registration</h3>
                         </div>
                    <div class="contact-form clearfix">
					  <h3>Educational Details</h3>
                        <p class="full-row">
                            <span class="contact-label">
                                <label for="name-id">Course Name:</label>

                            </span>
                            <input type="text" id="name" name="coursename">
                        </p>
						 <p class="full-row">
                            <span class="contact-label">
                                <label for="surname-id">Year Of Passing</label>

                            </span>
                            <input type="text" id="surname-id" name="yearofpassing">
                        </p>

                        <p class="full-row">
						  <h3>Personal Details</h3>
                            <span class="contact-label">
                                <label for="surname-id">First Name:</label>

                            </span>
                            <input type="text" id="surname-id" name="fname">
                        </p>
						<p class="full-row">
						     <span class="contact-label">
                                <label for="surname-id">Last Name:</label>
                             </span>
                            <input type="text" id="surname-id" name="lname">
                        </p>
						<p class="full-row">
						     <span class="contact-label">
                                <label for="surname-id">Date Of Birth:</label>
                             </span>
                            <input type="text" id="surname-id" name="dob">
                        </p>
						<p class="full-row">
						     <span class="contact-label">
                                <label for="surname-id">Gender:</label>
                             </span>
                            <input type="text" id="surname-id" name="gender">
                        </p>


                        <p class="full-row">
                            <span class="contact-label">
                                <label for="message">Address:</label>

                            </span>
                            <textarea name="address" id="message" rows="6"></textarea>
                        </p>
						<p class="full-row">
						     <span class="contact-label">
                                <label for="surname-id">Mobile Number:</label>
                             </span>
                            <input type="text" id="surname-id" name="mobile">
                        </p>
						<p class="full-row">
						     <span class="contact-label">
                                <label for="surname-id">Email:</label>
                             </span>
                            <input type="text" id="surname-id" name="email">
                        </p>
						<p class="full-row">
						     <span class="contact-label">
								 <label for="surname-id">Image:</label>

                             </span>
                            <input type="file" id="surname-id image-upload" name="profile">

                        </p>
                        <p class="full-row">
                            <input class="mainBtn" type="submit" name="send" value="Register Here">
                        </p>
                    </div>
                </div>
            </div> <!-- /.col-md-7 -->
          </form>
        </div> <!-- /.row -->
    </div>

<script>
$('#aluminiform').validate({
    rules: {
        internal_commission: {required: true,number:true,maxlength:2 },
        external_commission: {required: true,number:true,maxlength:2 }
    },
    messages: {
        internal_commission:{
            required :"Enter the skilex Commission"
        },
        internal_commission:{
            required :"Enter the Associate Commission"
          },
    },
    submitHandler: function(form) {
    $.ajax({
               url: "<?php echo base_url(); ?>masters/update_commission_percentage",
               type: 'POST',
               data: $('#aluminiform').serialize(),
               dataType: "json",
               success: function(response) {
                  var stats=response.status;
                   if (stats=="success") {
                     swal('Commission Updated successfully')
                     window.setTimeout(function () {
                      location.href = "<?php echo base_url();  ?>masters/tax_commission";
                  }, 1000);

                 }else{
                    swal(stats);
                     }
               }
           });
         }

    });
</script>
