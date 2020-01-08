<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CIT SPC-Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendors/iconfonts/font-awesome/css/font-awesome.min.css" />

  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/admin/images/favicon.png" />
  <script   src="<?php echo base_url(); ?>assets/admin/js/jquery.js"></script>
  <script src="<?php echo base_url();  ?>assets/admin/js/main.js" ></script>
  <!-- <script src="<?php echo base_url();  ?>assets/admin/js/data-table.js"></script> -->
  <script src="<?php echo base_url(); ?>assets/admin/js/jquery.validate.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/additional-methods.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/swal.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/datatable.css"/>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/datatable.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/tether.js"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>

<style>
.fa{
  color: #125ba1;
}
th{
  text-transform: capitalize;
}
</style>

</head>

<body>
  <?php  $role=$this->session->userdata('user_role'); ?>
  <div class="container-scroller">
    <!-- partial:partials/_horizontal-navbar.html -->
    <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
      <div class="container d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top">
          <a class="navbar-brand brand-logo" href="<?php echo base_url(); ?>dashboard">
            <!-- <img src="<?php echo base_url(); ?>assets/logo.png" alt="logo" style="width:100%;"/> -->
            CITSPC
          </a>

        </div>

      </div>
      <div class="nav-bottom">
        <div class="container">
          <ul class="nav page-navigation">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>dashboard" class="nav-link"><i class="fa fa-desktop" aria-hidden="true"></i> &nbsp; <span class="menu-title">DASHBOARD</span></a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"><i class="fa fa-bars" aria-hidden="true"></i>&nbsp;
                <span class="menu-title">Home menu</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url();  ?>masters/banner_list">Home page sliders</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>admindept/governing">Governing Council </a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>adminmodule/latest_events">Latest Events</a></li>
<!-- <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>adminexam/autonomousadd">Autonomous Exam </a></li> -->

                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"><i class="fa fa-bars" aria-hidden="true"></i>&nbsp;
                <span class="menu-title">Department</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">

                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>admindept/">Create Departments </a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>admindept/view_alumni">View Alumni </a></li>

                </ul>
              </div>
            </li>
            <li class="nav-item mega-menu">
              <a href="#" class="nav-link"><i class="fa fa-bars" aria-hidden="true"></i></i>&nbsp;
                <span class="menu-title">Modules</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <div class="col-group-wrapper row">

                   <div class="col-group col-md-3">
                     <ul class="submenu-item">
                       <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>adminmodule/">Create Modules</a></li>

                     </ul>
                   </div>

                     <div class="col-group col-md-3">
                       <ul class="submenu-item">
           <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>adminmodule/view_module_data/<?php echo 1; ?>">View Student union </a></li>
           <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>adminmodule/view_module_data/<?php echo 2; ?>">View Downloads </a></li>
           <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>adminmodule/view_module_data/<?php echo 3; ?>">View Syllabi </a></li>
           <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>adminmodule/view_module_data/<?php echo 4; ?>">View Academic Calender </a></li>
           <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>adminmodule/view_module_data/<?php echo 12; ?>">View Placements Activites </a></li>
                     </ul>
                     </div>
                     <div class="col-group col-md-3">
                       <ul class="submenu-item">

<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>adminmodule/view_module_data/<?php echo 11; ?>">View SPIC Member </a></li>

<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>adminmodule/view_module_data/<?php echo 5; ?>">View Committee </a></li>
<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>adminmodule/view_module_data/<?php echo 7; ?>">View Sports </a></li>
<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>adminmodule/view_module_data/<?php echo 6; ?>">View Extra Curricular Activity </a></li>
<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>adminmodule/view_module_data/<?php echo 10; ?>">View Placements Records </a></li>

                         </ul>
                     </div>
                     <div class="col-group col-md-3">
                       <p class="category-heading">CIIPC </p>
                       <ul class="submenu-item">
                <!-- <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>adminexam/autonomousadd">Autonomous Exam  </a></li> -->
                         <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>adminmodule/view_module_data/<?php echo 9; ?>">View CIIPC SPIC Member</a></li>
                         <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>adminmodule/view_module_data/<?php echo 8; ?>">View CIIPC Events </a></li>
                         <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>adminmodule/ciipc_photos/">
                           Create CIIPC Photos </a></li>
                           <p class="category-heading"> </p>
                           <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>adminmodule/view_module_data/<?php echo 13; ?>">View Announcements </a></li>


                       </ul>
                     </div>

                </div>
              </div>
            </li>






            <li class="nav-item">
              <a href="#" class="nav-link"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;<span class="menu-title">Settings</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">

                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>profile">Profile
</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>change_password">Password
</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>logout">Logout
</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
