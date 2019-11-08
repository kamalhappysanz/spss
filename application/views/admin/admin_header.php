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
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendors/icheck/skins/all.css"> -->
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

            <li class="nav-item mega-menu">
              <a href="#" class="nav-link"><i class="fa fa-bars" aria-hidden="true"></i></i>&nbsp;
                <span class="menu-title">Main Menu</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <div class="col-group-wrapper row">

                   <div class="col-group col-md-2 col-md-offset-1">

                     <ul class="submenu-item">
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url();  ?>masters/banner_list">Home page sliders </a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url();  ?>">Governing council </a></li>
                         <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Committee</a></li>
                     </ul>
                   </div>

                     <div class="col-group col-md-2">
                       <ul class="submenu-item">
                     <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Departments </a></li>
                     <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Syllabi </a></li>
                     <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Academic Calender </a></li>
                     </ul>
                     </div>
                     <div class="col-group col-md-2">
                       <ul class="submenu-item">
                         <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Libary </a></li>
                         <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Faculty </a></li>
                       </ul>
                     </div>
                     <div class="col-group col-md-2">
                       <ul class="submenu-item">
                         <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">E-Governance </a></li>
                         <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Sports </a></li>
                         <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">News </a></li>

                       </ul>
                     </div>
                     <div class="col-group col-md-2">

                       <ul class="submenu-item">

                         <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Events </a></li>
                         <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Announcements </a></li>
                       </ul>
                     </div>
                     <div class="col-group col-md-2">
                       <p class="category-heading">Exam</p>
                       <ul class="submenu-item">
                         <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>adminexam/autonomousadd">Autonomous Exam </a></li>
                         <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Exam Performance </a></li>
                       </ul>
                     </div>






                </div>
              </div>
            </li>



            <li class="nav-item">
              <a href="#" class="nav-link"><i class="fa fa-suitcase" aria-hidden="true"></i>&nbsp;
                <span class="menu-title">Students</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                     <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Student union </a></li>

                     <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Downloads </a></li>

                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link"><i class="fa fa-university" aria-hidden="true"></i>&nbsp;<span class="menu-title">Placements</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">

                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Placement Records </a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Placement Visited </a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Placement recruiters</a></li>
                   <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Placement Co-ordinators</a></li>



                </ul>
              </div>
                </li>



            <li class="nav-item">
              <a href="#" class="nav-link"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;<span class="menu-title">Settings</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">

                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>profile">Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>change_password">Password</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>logout">Logout</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
