<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/sps/css/banner-styles.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/sps/css/iconochive.css" />
    <title>CIT Sandwich Polytechnic College</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <meta name="viewport" content="width=1024"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">



    <meta name="description" content="CIT Sandwich Polytechnic College">
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/sps/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>assets/sps/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>assets/sps/css/animate.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>assets/sps/css/main.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>assets/sps/css/home.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>assets/sps/css/color-scheme.css" rel="stylesheet" media="screen">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" media="screen">
    <script src="<?php echo base_url(); ?>assets/sps/js/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/sps/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/sps/js/modernizr.js"></script>
    <script src="<?php echo base_url(); ?>assets/sps/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="responsive-navigation visible-sm visible-xs">
        <a href="#" class="menu-toggle-btn">
            <i class="fa fa-bars"></i>
        </a>
        <div class="responsive_menu">
            <ul class="main_menu">
                <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>

                <li>
                    <a href="#">About Us</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo base_url(); ?>ins_profile">Institute Profile</a></li>
                        <li><a href="<?php echo base_url(); ?>mission">Mission</a></li>
                        <li><a href="<?php echo base_url(); ?>founders">Founders</a></li>
                        <li><a href="<?php echo base_url(); ?>management">Management</a></li>
                        <li><a href="<?php echo base_url(); ?>governing">Governing Council</a></li>
                        <li><a href="<?php echo base_url(); ?>course_offered">Courses Offered</a></li>
                        <li><a href="<?php echo base_url(); ?>committee">Committees</a></li>

                    </ul>

                </li>

                <li>
                    <a href="#">Academics</a>
                    <ul>

                        <li><a href="<?php echo base_url(); ?>admission">Admission</a></li>
                        <li class="submenu">
                            <a href="dept">Departments</a>
                            <ul>
                                <?php if(!empty($res_dept)){
                                  foreach($res_dept as $rows_dept){ ?>
                              <li><a href="<?php echo base_url();  ?>welcome/<?php  echo $rows_dept->id; ?>"><?php  echo $rows_dept->dept_name; ?></a></li>
                                <?php  }  }else{

                                } ?>
                            </ul>

                        </li>
                        <li><a href="<?php echo base_url(); ?>syllabi">Syllabi</a></li>
                        <!-- syllabi -->
                        <li><a href="<?php echo base_url(); ?>academic_calendar">Academic Calendar</a></li>
                        <li><a href="<?php echo base_url(); ?>library">Library</a></li>

                    </ul>

                </li>
                <li>
                    <a href="#">Staff</a>
                    <ul>
                        <li><a href="<?php echo base_url(); ?>faculty">Faculty</a></li>
                        <li><a href="<?php echo base_url(); ?>facultyadd">Faculty With Additional Charges</a></li>
                        <li><a href="<?php echo base_url(); ?>nonteaching">Non-Teaching Staff</a></li>
                        <li><a href="<?php echo base_url(); ?>keycontact">Key Contacts</a></li>
                        <li><a href="https://gmail.com" target="_blank">Webmail</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Student</a>
                    <ul>
                        <li><a href="<?php echo base_url(); ?>scholarship">Scholarships</a></li>
                        <li><a href="<?php echo base_url(); ?>studentunion">Student Union</a></li>
                        <li><a href="<?php echo base_url(); ?>facility">Facilities </a></li>
                        <li><a href="<?php echo base_url(); ?>extra">Extra- Curricular Activities </a></li>
                        <li><a href="<?php echo base_url(); ?>extra">Gallery </a></li>

                    </ul>

                    <li>
                        <a href="#">CIICP</a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>CIICP_home">Home</a></li>
                            <li><a href="<?php echo base_url(); ?>CIICP_mission">Mission</a></li>
                            <li><a href="<?php echo base_url(); ?>CIICP_mandate">Mandate</a></li>
                            <li><a href="<?php echo base_url(); ?>CIICP_trust">Thrust</a></li>
                            <li><a href="<?php echo base_url(); ?>CIICP_spic">SPIC </a></li>
                            <li><a href="<?php echo base_url(); ?>CIICP_courses">Courses Offered</a></li>
                            <li><a href="<?php echo base_url(); ?>CIICP_photos">Photos</a></li>
                        </ul>

                    </li>
                    <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
            </ul>
            <!-- /.main_menu -->
            <!-- /.social_icons -->
        </div>
        <!-- /.responsive_menu -->
    </div>
    <!-- /responsive_navigation -->

    <header class="site-header">
        <div class="container">
            <div class="row">

                <div class="col-md-2">
                    <div class="logo" style="text-align:left; margin: 1px 140px">
                        <a href="<?php echo base_url(); ?>" title="CIT-Sandwich" rel="home">
                            <img src="<?php echo base_url(); ?>assets/sps/images/LOGO.png" alt="CIT-Sandwich" style="padding-bottom: 10px;height: 180px;">
                            <br>
                        </a>
                    </div>
                    <!-- /.logo -->
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-8">
                    <div class="logo" style="text-align:center; margin: 0px; padding-left: 130px; padding-top: 30px; margin-left: -67px">
                        <a href="<?php echo base_url(); ?>" title="CIT-Sandwich" rel="home">
                            <span style="font-size: 27px;">CIT SANDWICH POLYTECHNIC COLLEGE<p style="font-size: 18px;">Year Established : 1961</p><p style="font-size: 18px;">Government Aided Institution Approved by AICTE, New Delhi.</p></span>
                        </a>
                    </div>
                    <!-- /.logo -->
                </div>
                <!-- /.col-md-4 -->
                <!-- /.header-left -->
                <div class="col-md-4 header-right" style="display:none">
                    <ul class="small-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>

                    </ul>

                </div>
                <!-- /.header-right -->
            </div>
        </div>
        <!-- /.container -->

        <div class="nav-bar-main" role="navigation">
            <div class="container">
                <nav class="main-navigation clearfix visible-md visible-lg" role="navigation">
                    <ul class="main-menu sf-menu">
                        <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>

                        <li>
                            <a href="#">About Us</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url(); ?>ins_profile">Institute Profile</a></li>
                                <li><a href="<?php echo base_url(); ?>mission">Mission & Vision</a></li>
                                <li><a href="<?php echo base_url(); ?>founders">Founders</a></li>
                                <li><a href="<?php echo base_url(); ?>management">Management</a></li>
                                <li><a href="<?php echo base_url(); ?>governing">Governing Council</a></li>
                                <li><a href="<?php echo base_url(); ?>course_offered">Courses Offered</a></li>

                            </ul>

                        </li>

                        <li>
                            <a href="#">Academics</a>
                            <ul>

                                <li><a href="<?php echo base_url(); ?>admission">Admission</a></li>
                                <li class="submenu dept">
                                    <a href="<?php echo base_url(); ?>dept">Departments</a>
                                    <ul class=" dept2">
                                        <?php if(!empty($res_dept)){
                                          foreach($res_dept as $rows_dept){ ?>
                                      <li><a href="<?php echo base_url();  ?>welcome/dept_details/<?php  echo base64_encode($rows_dept->id*98765); ?>"><?php  echo $rows_dept->dept_name; ?></a></li>
                                        <?php  }  }else{

                                        } ?>
                                    </ul>


                                </li>
                                <li><a href="<?php echo base_url(); ?>syllabi">Syllabi</a></li>
                                <li><a href="<?php echo base_url(); ?>academic_calendar">Academic Calendar</a></li>

                            </ul>

                        </li>

                        <li>
                            <a href="#">Students Corner</a>
                            <ul class="dept1">
                                <li><a href="<?php echo base_url(); ?>scholarship">Scholarships</a></li>
                                <li><a href="<?php echo base_url(); ?>assets/sps/docs/DTM Certificate.pdf" target="_blank">How to apply for Transcripts Migration, Certificate, Duplicate Marksheet</a></li>
                                <li><a href="<?php echo base_url(); ?>extra">Extra- Curricular Activities </a></li>
                                <li><a href="<?php echo base_url(); ?>sports">Sports</a></li>
                                <li><a href="<?php echo base_url(); ?>extra">Gallery </a></li>
                                <li><a href="<?php echo base_url(); ?>alumini">Alumni </a></li>

                            </ul>

                            <li>
                                <a href="#">Placement & Career</a>

                                <ul class="dept1">

                                    <li><a href="<?php echo base_url(); ?>placement" data-toggle="tab">Placement Cell</a></li>
                                    <li><a href="<?php echo base_url(); ?>placement#section-3" data-toggle="tab">Placement Records</a></li>
                                    <li><a href="<?php echo base_url(); ?>placement#section-2" data-toggle="tab">Placement Activities</a></li>
                                    <li><a href="<?php echo base_url(); ?>placement#section-4" data-toggle="tab">Companies Visited</a></li>
                                    <li><a href="<?php echo base_url(); ?>placement#section-5" data-toggle="tab">Eminent Recruiters</a></li>
                                    <li><a href="<?php echo base_url(); ?>placement#section-6" data-toggle="tab">Placement Officers</a></li>

                                </ul>

                            </li>

                            <li>
                                <a href="#">Committee</a>
                                <ul class="dept1">
                                    <li><a href="<?php  echo base_url(); ?>committee">Committees</a></li>
                                    <li><a href="<?php  echo base_url(); ?>CIICP_home">CIICP Home</a>
                                        <ul class="sub-menu">

                                            <li><a href="<?php  echo base_url(); ?>CIICP_News">CIICP Latest Events</a></li>
                                            <li><a href="<?php  echo base_url(); ?>CIICP_mission">CIICP Mission</a></li>
                                            <li><a href="<?php  echo base_url(); ?>CIICP_mandate">CIICP Mandate</a></li>
                                            <li><a href="<?php  echo base_url(); ?>CIICP_trust">CIICP Thrust</a></li>
                                            <li><a href="<?php  echo base_url(); ?>CIICP_spic">CIICP SPIC </a></li>
                                            <li><a href="<?php  echo base_url(); ?>CIICP_courses">CIICP Courses Offered</a></li>
                                            <li><a href="<?php  echo base_url(); ?>CIICP_photos">CIICP Photos</a></li>

                                        </ul>
                                    </li>
                                </ul>

                            </li>

                            <li>
                                <a href="#">Centres</a>
                                <ul class="dept1">
                                    <li><a href="<?php echo base_url(); ?>iipchome">IIPC Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php  echo base_url(); ?>iipcmission">IIPC Objectives</a></li>
                                            <li><a href="<?php echo base_url(); ?>iipccommittee">IIPC Committees</a></li>
                                            <li><a href="<?php echo base_url(); ?>iipcmou">IIPC MOUs</a></li>
                                            <li><a href="<?php echo base_url(); ?>iipcedc">EDC</a></li>

                                        </ul>
                                    </li>
                                </ul>

                            </li>

                            <li>
                                <a href="#">Facilities</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo base_url(); ?>library">Library</a>
                                        <ul class="sub-menu">
                                            <li><a href="http://192.168.13.100:8080/AutoLib/" target="_blank">Web OPAC</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="<?php echo base_url(); ?>hostel">Hostel</a></li>
                                    <li><a href="<?php echo base_url(); ?>transport">Transport</a></li>
                                    <li><a href="<?php echo base_url(); ?>general_facility">General Facilities</a></li>

                                </ul>

                            </li>

                            <li>

                                <a href="<?php echo base_url(); ?>contact">Contact</a>
                                <ul class="sub-menu">
                                    <li><a href="http://www.gmail.com">Webmail</a></li>

                                </ul>
                            </li>

                        </li>

                    </ul>
                    <!-- /.main-menu -->
                    <!-- /.social-icons -->
                </nav>
                <!-- /.main-navigation -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.nav-bar-main -->

    </header>
