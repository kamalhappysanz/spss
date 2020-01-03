<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/sps/css/banner-styles.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/sps/css/iconochive.css" />
    <title>CIT Sandwich Polytechnic College</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <li class="active"><a href="index.php">Home</a></li>

                <li>
                    <a href="#">About Us</a>
                    <ul class="sub-menu">
                        <li><a href="instituteprofile.php">Institute Profile</a></li>
                        <li><a href="mission.php">Mission</a></li>
                        <li><a href="founders.php">Founders</a></li>
                        <li><a href="management.php">Management</a></li>
                        <li><a href="governing.php">Governing Council</a></li>
                        <li><a href="course.php">Courses Offered</a></li>

                        <li><a href="committee.php">Committees</a></li>

                    </ul>

                </li>

                <li>
                    <a href="#">Academics</a>
                    <ul>

                        <li><a href="admission.php">Admission</a></li>
                        <li class="submenu">
                            <a href="dept.php">Departments</a>
                            <ul>
                                <?php if(!empty($res_dept)){
                                  foreach($res_dept as $rows_dept){ ?>
                              <li><a href="<?php echo base_url();  ?>welcome/<?php  echo $rows_dept->id; ?>"><?php  echo $rows_dept->dept_name; ?></a></li>
                                <?php  }  }else{

                                } ?>
                            </ul>

                        </li>
                        <li><a href="syllabi.php">Syllabi</a></li>
                        <!-- syllabi.php -->
                        <li><a href="academic.php">Academic Calendar</a></li>
                        <li><a href="library.php">Library</a></li>

                    </ul>

                </li>
                <li>
                    <a href="#">Staff</a>
                    <ul>
                        <li><a href="faculty.php">Faculty</a></li>
                        <li><a href="facultyadd.php">Faculty With Additional Charges</a></li>
                        <li><a href="nonteaching.php">Non-Teaching Staff</a></li>
                        <li><a href="keycontact.php">Key Contacts</a></li>
                        <li><a href="https://gmail.com" target="_blank">Webmail</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Student</a>
                    <ul>
                        <li><a href="scholarship.php">Scholarships</a></li>
                        <li><a href="studentunion.php">Student Union</a></li>
                        <li><a href="facility.php">Facilities </a></li>
                        <li><a href="extra.php">Extra- Curricular Activities </a></li>
                        <li><a href="extra.php">Gallery </a></li>

                    </ul>

                    <li>
                        <a href="#">CIICP</a>
                        <ul>
                            <li><a href="CIICP_home.php">Home</a></li>
                            <li><a href="CIICP_mission.php">Mission</a></li>
                            <li><a href="CIICP_mandate.php">Mandate</a></li>
                            <li><a href="CIICP_trust.php">Thrust</a></li>
                            <li><a href="CIICP_spic.php">SPIC </a></li>
                            <li><a href="CIICP_courses.php">Courses Offered</a></li>
                            <li><a href="CIICP_photos.php">Photos</a></li>
                        </ul>

                    </li>
                    <li><a href="contact.php">Contact</a></li>
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
                        <a href="index.php" title="CIT-Sandwich" rel="home">
                            <img src="<?php echo base_url(); ?>assets/sps/images/LOGO.png" alt="CIT-Sandwich" style="padding-bottom: 10px;height: 180px;">
                            <br>
                        </a>
                    </div>
                    <!-- /.logo -->
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-8">
                    <div class="logo" style="text-align:center; margin: 0px; padding-left: 130px; padding-top: 30px; margin-left: -67px">
                        <a href="index.php" title="CIT-Sandwich" rel="home">
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
                        <li><a href="contact.php">Contact</a></li>

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
                        <li class="active"><a href="index.php">Home</a></li>

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
                                    <!-- <ul class=" dept2">
                                        <li><a href="mech-swc.php">Mechanical Engineering (SWC)</a></li>
                                        <li><a href="mech.php">Mechanical Engineering</a></li>
                                        <li><a href="Instrumentation.php">Instrumentation &amp; Control Engineering</a></li>
                                        <li><a href="chemical.php">Chemical Engineering</a></li>
                                        <li><a href="computer.php">Computer Engineering</a></li>
                                        <li><a href="electronics.php">Electronics and Communication Engineering</a></li>
                                        <li><a href="automobile.php">Automobile Engineering</a></li>
                                        <li><a href="Department.php?Dept=69">Mechanical Engineering (Part Time)</a></li>
                                        <li><a href="maths.php">Maths</a></li>
                                        <li><a href="physics.php">Physics</a></li>
                                        <li><a href="chemistry.php">Chemistry</a></li>
                                        <li><a href="Humanities.php">Humanities</a></li>
                                    </ul> -->

                                </li>
                                <li><a href="<?php echo base_url(); ?>syllabi">Syllabi</a></li>
                                <li><a href="<?php echo base_url(); ?>academic_calendar">Academic Calendar</a></li>

                            </ul>

                        </li>
                        <!-- <li>
                            <a href="#">Staff</a>
                            <ul class="dept1">
                                <li><a href="faculty.php">Faculty</a></li>
                                <li><a href="facultyadd.php">Faculty With Additional Charges</a></li>
                                <li><a href="nonteaching.php">Non-Teaching Staff</a></li>
                                <li><a href="keycontact.php">Key Contacts</a></li>
                                <li><a href="http://gmail.com/" target="_blank">Webmail</a></li>

                            </ul>
                        </li> -->

                        <!-- <li>
                        <li>
                            <a href="#">Examination</a>
                            <ul class="dept1">
                                <li><a href="#">Faculty - Exam Section</a></li>
                                <li><a href="http://citspc.edu.in/uploads/Examination/Board%20Exam%20Rules.pdf" target="_blank">Board Examination Rules</a></li>
                                <li><a href="http://citspc.edu.in/uploads/Examination/M-Scheme%20Regulation.pdf" target="_blank">M - Scheme Regulations</a></li>
                                <li><a href="#">Attendance Particulars</a></li>
                                <li><a href="http://112.133.214.77/" target="_blank">Board Exam Question Bank</a></li>

                                <li><a href="#">Board Examinations</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Theory Timetable</a></li>
                                        <li><a href="http://citspc.edu.in/uploads/Examination/Rank%20holders.pdf" target="_blank">Rank Holders</a></li>
                                        <li><a href="http://citspc.edu.in/uploads/Examination/superlative%20distinction.pdf" target="_blank">Superlative Distinction</a></li>
                                        <li><a href="http://citspc.edu.in/uploads/Examination/centum%20marks%20in%20theory%20%20subjects.pdf" target="_blank">Centum in Theory Subject</a></li>
                                        <li><a href="http://citspc.edu.in/uploads/Examination/100per%20att.pdf" target="_blank">100% Attendance</a></li>
                                        <li><a href="#">College Overall Result</a></li>
                                        <li><a href="#">Internal Marks</a></li>
                                        <li><a href="#">Staff 100% result</a></li>
                                        <li><a href="http://intradote.tn.nic.in/" target="_blank">Student Individual Result</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Board Exam Fees Schedule / Eligibility</a></li>
                                        <li><a href="http://intradote.tn.nic.in/" target="_blank">E-Governance</a></li>
                                <li><a href="#">Assessment Test / Model Exam</a>
                                <ul class="sub-menu">
                                        <li><a href="#">Timetable</a></li>
                                        <li><a href="#">Mark Particulars</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        </li> -->
                        <li>
                            <a href="#">Students Corner</a>
                            <ul class="dept1">
                                <li><a href="scholarship.php">Scholarships</a></li>
                                <li><a href="http://citspc.edu.in/uploads/Examination/DTM%20Certificate.pdf" target="_blank">How to apply for Transcripts Migration, Certificate, Duplicate Marksheet</a></li>
                                <li><a href="extra.php">Extra- Curricular Activities </a></li>
                                <li><a href="sports.php">Sports</a></li>
                                <li><a href="extra.php">Gallery </a></li>
                                <li><a href="alumini.php">Alumni </a></li>

                            </ul>

                            <li>
                                <a href="#">Placement & Career</a>

                                <ul class="dept1">

                                    <li><a href="placement.php">Placement Cell</a></li>
                                    <li><a href="placementrec.php">Placement Records</a></li>
                                    <li><a href="placementact.php">Placement Activities</a></li>
                                    <li><a href="placementcomp.php">Companies Visited</a></li>
                                    <li><a href="placementemi.php">Eminent Recruiters</a></li>
                                    <li><a href="placementoffi.php">Placement Officers</a></li>

                                </ul>

                            </li>

                            <li>
                                <a href="#">Committee</a>
                                <ul class="dept1">
                                    <li><a href="committee.php">Committees</a></li>
                                    <li><a href="CIICP_home.php">CIICP Home</a>
                                        <ul class="sub-menu">

                                            <li><a href="CIICP_News.php">CIICP Latest Events</a></li>
                                            <li><a href="CIICP_mission.php">CIICP Mission</a></li>
                                            <li><a href="CIICP_mandate.php">CIICP Mandate</a></li>
                                            <li><a href="CIICP_trust.php">CIICP Thrust</a></li>
                                            <li><a href="CIICP_spic.php">CIICP SPIC </a></li>
                                            <li><a href="CIICP_courses.php">CIICP Courses Offered</a></li>
                                            <li><a href="CIICP_photos.php">CIICP Photos</a></li>

                                        </ul>
                                    </li>
                                </ul>

                            </li>

                            <li>
                                <a href="#">Centres</a>
                                <ul class="dept1">
                                    <li><a href="iipchome.php">IIPC Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="iipcmission.php">IIPC Objectives</a></li>
                                            <li><a href="iipccommittee.php">IIPC Committees</a></li>
                                            <li><a href="iipcmou.php">IIPC MOUs</a></li>
                                            <li><a href="iipcedc.php">EDC</a></li>

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

                                    <li><a href="hostel.php">Hostel</a></li>
                                    <li><a href="transport.php">Transport</a></li>
                                    <li><a href="generalfacilities.php">General Facilities</a></li>

                                </ul>

                            </li>

                            <li>

                                <a href="contact.php">Contact</a>
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
