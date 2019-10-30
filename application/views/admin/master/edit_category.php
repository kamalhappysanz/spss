<?php  $role=$this->session->userdata('user_role'); ?>
<div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page"><span>Category</span></li>
            </ol>
          </nav>
          <div class="row">

            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update  Category <a href="javascript:window.history.go(-1);" class="btn go_back_btn pull-right">Back</a></h4>
                  <?php foreach($res as $rows){} ?>
                  <form class="forms-sample" id="update_category" method="post" action="<?php echo base_url(); ?>masters/category_update" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="username">Category name (English)</label>
                      <input type="text" class="form-control" id="main_cat_name" name="main_cat_name" placeholder="Category Name" value="<?php echo $rows->main_cat_name; ?>">
                      <input type="hidden" class="form-control" id="cat_id" name="cat_id"  value="<?php echo base64_encode($rows->id*98765); ?>">
                      <input type="hidden" class="form-control" id="cat_old_img" name="cat_old_img"  value="<?php echo $rows->cat_pic; ?>">

                    </div>
                    <div class="form-group">
                      <label for="city_ta_name">Category Name(Tamil)</label>
                      <input type="text" class="form-control" id="main_cat_ta_name" name="main_cat_ta_name" placeholder="Category Tamil Name"  value="<?php echo $rows->main_cat_ta_name; ?>">
                    </div>
                    <div class="form-group">
                      <label for="latitude">Category New images</label>
                      <input type="file" class="form-control" id="cat_pic" name="cat_pic" placeholder="">
                    </div>

                    <?php if($role=='7'){ ?>

                      <input type="hidden" class="form-control" id="status" name="status" value="<?php echo $rows->status; ?>">
                  <?php  }else{ ?>
                    <div class="form-group">
                      <label for="exampleFormControlSelect3">Status</label>
                      <select class="form-control form-control-sm" id="status" name="status">
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>

                      </select>
                      <script>$('#status').val('<?php echo $rows->status; ?>');</script>
                    </div>
                  <?php  } ?>

                    <button type="submit" class="btn btn-primary mr-2">Update Category</button>

                  </form>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="category_img" style="margin-top:200px;">
                <p>Old Image</p>
                <img src="<?php echo base_url(); ?>assets/category/<?php echo $rows->cat_pic; ?>" style="width:200px;">
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
    <script>

    $('#update_category').validate({
    rules: {

        main_cat_name: { required: true
                  // remote: {
                  //        url: "<?php echo base_url(); ?>masters/checkcategoryexist/<?php echo $rows->id; ?>",
                  //        type: "post"
                  //     }
            },
        main_cat_ta_name: { required: true
                  // remote: {
                  //        url: "<?php echo base_url(); ?>masters/checkcategorytamilexist/<?php echo $rows->id; ?>",
                  //        type: "post"
                  //     }
         },
        cat_pic: {required: false,extension: "jpg,jpeg,png" }
    },
    messages: {
        cat_pic:{
            required :"Please Select Category Picture",extension:"File must be JPG OR PNG"
        },
        main_cat_name: {
    					 required: "Please Enter Category Name.",
    					 remote: "Category Name  already in Exist!"
    							 },
         main_cat_ta_name: {
               required: "Please Enter Category Tamil Name.",
               remote: "Category Tamil Name  Already in Exist!"
                   },

    }
    });
    </script>
