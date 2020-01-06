
<script type="text/javascript" src="https://web.archive.org/web/20170625153638js_/http://opoloo.github.io/jquery_upload_preview/assets/js/jquery.uploadPreview.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $.uploadPreview({
    input_field: "#image-upload",
    preview_box: "#image-preview",
    label_field: "#image-label"
  });
});
</script>
<style>
#image-preview {
  width: 200px;
  height: 200px;
  position: relative;
  overflow: hidden;
  background-color: #ffffff;
  color: #ecf0f1;

  margin-left:700px;
  margin-top:-200px;
  input {
    line-height: 200px;
    font-size: 200px;
    position: absolute;
    opacity: 0;
    z-index: 10;
  }
  label {
    position: absolute;
    z-index: 5;
    opacity: 0.8;
    cursor: pointer;
    background-color: #bdc3c7;
    width: 200px;
    height: 50px;
    font-size: 20px;
    line-height: 50px;
    text-transform: uppercase;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    text-align: center;
  }
}
.inputTextarea {
     width:300px !important;
   height:50px !important;
    border: 1px solid #cccccc;
    padding: 7px;
}
.inputTextarea {
    float: right;
    margin-top: -16px;
	    margin-bottom: 10px;
}
.inputText {
    float: right;
    margin-top: -20px;
	    margin-bottom: 10px;
}
label {
     margin: 0 0 0 0 !important;
}
.suc{
    margin-left: 277px;
    background-color: green;
    color: white;
    padding: 5px;
    width: 128px;
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

        </div> <!-- /.row -->
    </div>
