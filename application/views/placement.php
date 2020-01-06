<style>
   td{
   padding:10px !important;
   text-align: center !important;
   }
   th{
   text-align: center !important;
   padding: 10px !important;
   }
</style>
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div class="widget-main">
            <div class="widget-inner shortcode-typo">
               <div class="row">
                  <div class="col-md-12">
                     <h4>Placements</h4>
                     <!-- Nav tabs -->
                     <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                        <li style=" width: 160px;    text-align: center;"><a href="#section-1" data-toggle="tab">Placement Cell</a></li>
                        <li style=" width: 160px;    text-align: center;"><a href="#section-3" data-toggle="tab">Placement Records</a></li>
                        <li style=" width: 160px;    text-align: center;"><a href="#section-2" data-toggle="tab">Placement Activities</a></li>
                        <li style=" width: 160px;    text-align: center;"><a href="#section-4" data-toggle="tab">Companies Visited</a></li>
                        <li style=" width: 160px;    text-align: center;"><a href="#section-5" data-toggle="tab">Eminent Recruiters</a></li>
                        <li style=" width: 160px;    text-align: center;"><a href="#section-6" data-toggle="tab">Placement Officers</a></li>
                     </ul>
                     <div id="my-tab-content" class="tab-content">
                        <div class="tab-pane fade" id="section-1">
                           <div class="row">
                              <img src="<?php echo base_url(); ?>assets/sps/images/place1.jpg"  width="50%" align="center"><br>
                              <hr>
                              <br>
                              The CIT polytechnic college has a Placement Cell headed by a staff member holding the rank of a Professor. The Cell is involved in securing placements for students passing out from the college. The placement cell keeps close association with various industrial establishments, which conduct pre-placement presentation, campus interviews and select student representatives from each department to co-ordinate the placement activities. The Placement Cell provides state of the art infra-structural facilities to conduct group discussions, tests and interviews. The Placement Cell enhances the students’ general aptitude and communication skills. A large number of national and multinational companies visit the college every year for Campus recruitment. Information regarding the campus recruitment process is displayed to the students. It helps students to plan their careers by providing information about the industries which approach the institute.</br>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="section-3">
                           <p></p>
                           <h3 class="archive-title">Placement Records </h3>
                           <div class="container">
                              <div class="col-md-12">
                                 <div class="col-md-12">
                                    <div class="bs-example">


                                       <table cellspacing="0" class="table table-striped table-bordered table-condensed">
                                          <tbody>
                                             <tr>
                                                <th>S:No</th>
                                                <th>Academic Year</th>
                                                <th>File</th>
                                             </tr>
																						 <?php if(empty($res_placement_data)){

																						 }else{
																							 foreach($res_placement_data as $row_placement_data){  ?>
																								 <tr>
																										<td>1</td>
																										<td><?php echo $row_placement_data->title; ?></td>
																										<td><a target="_blank" href="<?php echo base_url(); ?>assets/documents/<?php echo $row_placement_data->file_upload; ?>">View</a></td>
																								 </tr>
																						<?php	 }
																						 } ?>


                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <p></p>
                        </div>
                        <div class="tab-pane fade" id="section-4">
                           <p></p>
                           <h4>LIST OF COMPANIES VISITING OUR COLLEGE FOR PLACEMENT</h4>
                           <div class="row">
                              <div class="col-md-4">
                                 <a>The India Cements Ltd., Chennai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Computer Science Corporation Ltd., Coimbatore </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Central Parking Services, Bangalore </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Titan Industries Ltd., Hosur </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Schlumberger, Mumbai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Orange Sorting Machines(India) Pvt. Ltd., Coimbatore </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Wabco India Ltd., Chengalpet, Chennai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>TVS Motors, Hosur </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Nagarjuna Oil Corporation Ltd., Chennai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Nokia - Siemens Ltd., Chennai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Asia Motor Works Ltd., Bhuj, Gujarat </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Ford India Pvt. Ltd., Chennai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Keromiyans Intech Pvt. Ltd., Coimbatore </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Triphase Technologies Pvt. Ltd., Bangalore </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Cummins India Ltd., DBU, Pune </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Wipro Ltd., Chennai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Essar Steels Ltd., Gujarat </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Timken India  Manufacturing Pvt. Ltd., Chennai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Ultratech Cements Ltd., Ariyalur </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Delphi - TVS Diesel Systems Ltd, Mannur, Chennai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Bluestar India Ltd., Chennai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Mahindra Satyam  &amp; M/s Tech Mahindra, Bangalore </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Fenesta Building Services, Bangalore </a>
                              </div>
                              <div class="col-md-4">
                                 <a>HCL Infosystems Ltd., Chennai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>ACC Ltd., Mumbai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>VA Tech Wabag Ltd., Chennai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Building Control Solution P.Ltd., </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Apollo Tyres Ltd., Chennai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Essel Propach Ltd., Mumbai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Tamil Nadu Petro Products Ltd., Chennai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Qualitime Software P.Ltd., Coimbatore </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Chemplast, Mettur Dam </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Apna Technologies &amp; Solutions P. Ltd., Bangalore </a>
                              </div>
                              <div class="col-md-4">
                                 <a>ESSAR Steel Ltd., Surat </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Bajaj Auto Limited, Patnagar </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Pricol Ltd., Coimbatore </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Royal Enfield Ltd., Chennai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Appnomic Systems Ltd., Bangalore </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Ashok Leyland Limited, Chennai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>HPCL Mittal Energy Group, Bathinda, Punjab </a>
                              </div>
                              <div class="col-md-4">
                                 <a>ACC Ltd, Mumbai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Essar Steels, Hazira, Surat </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Qualitime Software P.Ltd., Coimbatore </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Bajaj Auto Ltd., Pantnagar, Uttarakhand </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Veekesy Group of Industries, Coimbatore </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Daimler India Commercial Vehicles Pvt. Ltd., Chennai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Godrej &amp; Boyce Mfg. Co. Ltd., Mumbai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Building Control Solutions Pvt. Ltd., Bangalore </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Essel Propack, Vasind, Maharashtra </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Emerald Jewel Industries Pvt. Ltd., Coimbatore </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Sieger Spintech Pvt. Ltd., Coimbatore </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Mando India Limited, Chennai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Sundaram Clayton Ltd, Padi, Chennai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Ashok Leyland Limited, Chennai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Universal Carborundam Ltd, (Murugappa Group), Chennai </a>
                              </div>
                              <div class="col-md-4">
                                 <a>Thermax Ltd., Chinchwad, Pune </a>
                              </div>
                           </div>
                           <p></p>
                        </div>
                        <div class="tab-pane fade" id="section-2">
                           <div class="row">
                              <div class="col-md-12">
																<ul>
																	<?php if(empty($res_placement_activity)){

																	}else{
																		foreach($res_placement_activity as $rows_place_activity){ ?>
																			<li><a target="_blank" href="<?php echo base_url(); ?>assets/documents/<?php echo $rows_place_activity->file_upload; ?>"><?php echo $rows_place_activity->title; ?></a></li>
																			</br>
																	<?php	}
																	} ?>

																</ul>


                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="section-5">
                           <div class="row">
                              <div class="col-md-3" style="padding-top:20px;">
                                 <a href="https://www.ashokleyland.com/web/ashokleyland/home" target="_blank"><img src="<?php echo base_url(); ?>assets/sps/placement/al1.jpg" style="width:150px;height:100px;"></a>
                              </div>
                              <div class="col-md-3" style="padding-top:20px;">
                                 <a href="https://www.apollotyres.com/en-in/car-suv-van/tyre-finder/" target="_blank"><img src="<?php echo base_url(); ?>assets/sps/placement/appolo tyres.jpg" style="width:150px;height:100px;"></a>
                              </div>
                              <div class="col-md-3" style="padding-top:20px;">
                                 <a href="https://www.india.ford.com/" target="_blank"><img src="<?php echo base_url(); ?>assets/sps/placement/ford.jpg" style="width:150px;height:100px;"></a>
                              </div>
                              <div class="col-md-3" style="padding-top:20px;">
                                 <a href="http://www.indiacements.co.in/" target="_blank"><img
																	 src="<?php echo base_url(); ?>assets/sps/placement/india cement.jpg" style="width:150px;height:100px;"></a>
                              </div>
                              <div class="col-md-3" style="padding-top:20px;">
                                 <a href="https://www.nokia.com/" target="_blank"><img src="<?php echo base_url(); ?>assets/sps/placement/nokia.jpg" style="width:150px;height:100px;"></a>
                              </div>
                              <div class="col-md-3" style="padding-top:20px;">
                                 <a href="http://www.pricol.com/" target="_blank"><img src="<?php echo base_url(); ?>assets/sps/placement/PRICOL.jpg" style="width:150px;height:100px;"></a>
                              </div>
                              <div class="col-md-3" style="padding-top:20px;">
                                 <a href="http://www.royalenfield.com/" target="_blank"><img src="<?php echo base_url(); ?>assets/sps/placement/royal enfield.png" style="width:150px;height:100px;"></a>
                              </div>
                              <div class="col-md-3" style="padding-top:20px;">
                                 <a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/sps/placement/tri phase.jpg" style="width:150px;height:100px;"></a>
                              </div>
                              <div class="col-md-3" style="padding-top:20px;">
                                 <a href="https://www.tvsmotor.com/" target="_blank"><img src="<?php echo base_url(); ?>assets/sps/placement/TVS.png" style="width:150px;height:100px;"></a>
                              </div>
                              <div class="col-md-3" style="padding-top:20px;">
                                 <a href="https://www.wipro.com/en-IN/" target="_blank"><img src="<?php echo base_url(); ?>assets/sps/placement/wipro.jpg" style="width:150px;height:100px;"></a>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade in active" id="section-6">
                           <div class="row">
                              <h4>PLACEMENT OFFICER</h4>
                              <div class="col-md-12">
                                 <h4>Mr.A.Vijayakumar M.E.,</h4>
                                 Lecturer ,<br> Department of Mechanical Engineering <br><span class="alumnitext"><font size="2">CIT Sandwich Polytechnic College<br>Coimbatore - 641014</font></span>Tamilnadu, India.<br><span style="font-size: small;">Landline: 0422- 2573034<br> Extn : -</span>Mobile: +91 9842556066<br>Email:citspc1961@gmail.com
                              </div>
                              <br>
                              <div class="col-md-12">
                                 <h4>Mr.S.Karthikeyan M.E.,</h4>
                                 Lecturer,<br>Experience: 10 Years<br><span class="alumnitext"><font size="2">CIT Sandwich Polytechnic College<br>Coimbatore - 641014</font></span>Tamilnadu, India.<br><span style="font-size: small;">Landline: 0422- 2573034<br>Mobile: +91 9944522114 <br>Email:skarthikeyaneie305@gmail.com / karthikeyan.s@citspc.edu.in
                              </div>
                              <br>
                              <div class="col-md-12">
                                 <h4>STAFF PLACEMENT CO-ORDINATORS</h4>
                                 <div class="bs-example">
                                    <table cellspacing="0" class="table table-striped table-bordered table-condensed">
                                       <tbody>
                                          <tr>
                                             <th>S:No</th>
                                             <th>Name</th>
                                             <th>Course</th>
                                          </tr>
                                          <tr>
                                          </tr>
                                          <tr>
                                             <td>1</td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">Mr.A.Vijayakumar, Lecturer</p>
                                             </td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">Mechanical Engineering (SWC)</p>
                                             </td>
                                          </tr>
                                          <tr>
                                          </tr>
                                          <tr>
                                             <td>2</td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">Mr.S.Karthik, Lecturer</p>
                                             </td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">Mechanical Engineering</p>
                                             </td>
                                          </tr>
                                          <tr>
                                          </tr>
                                          <tr>
                                             <td>3</td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">Mrs.Kalaiselvi, Lecturer</p>
                                             </td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">Instrumentation &amp; Control Engineering</p>
                                             </td>
                                          </tr>
                                          <tr>
                                          </tr>
                                          <tr>
                                             <td>4</td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">Mr.K.Praveen kumar, Lecturer</p>
                                             </td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">Electronics and Communication Engineering</p>
                                             </td>
                                          </tr>
                                          <tr>
                                          </tr>
                                          <tr>
                                             <td>5</td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">Mr.J.Muthusundharam, Lecturer</p>
                                             </td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">Computer Engineering</p>
                                             </td>
                                          </tr>
                                          <tr>
                                          </tr>
                                          <tr>
                                             <td>6</td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">Mrs.K.C.Anusha</p>
                                             </td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">Chemical Engineering</p>
                                             </td>
                                          </tr>
                                          <tr>
                                          </tr>
                                          <tr>
                                             <td>7</td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">Selvi.D.Vijayabharathi</p>
                                             </td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">Automobile Engineering</p>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <h4>STUDENTS PLACEMENT CO-ORDINATORS</h4>
                                 <div class="bs-example">
                                    <table cellspacing="0" class="table table-striped table-bordered table-condensed">
                                       <tbody>
                                          <tr>
                                             <th>S:No</th>
                                             <th>Name</th>
                                             <th>Course</th>
                                          </tr>
                                          <tr>
                                          </tr>
                                          <tr>
                                             <td>1</td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">S.A.Praveen, R.Sharan</p>
                                             </td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">Mechanical Engineering (SWC)</p>
                                             </td>
                                          </tr>
                                          <tr>
                                          </tr>
                                          <tr>
                                             <td>2</td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">R.Kaviarasu, R.Ranjithkumar</p>
                                             </td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">Mechanical Engineering</p>
                                             </td>
                                          </tr>
                                          <tr>
                                          </tr>
                                          <tr>
                                             <td>3</td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">C.K.Dharanidhara, M.Surya, M.Thiravium Antony Raj</p>
                                             </td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">Instrumentation &amp; Control Engineering</p>
                                             </td>
                                          </tr>
                                          <tr>
                                          </tr>
                                          <tr>
                                             <td>4</td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">V.Tamil selvan, C.Manoj kumar, N.Initha</p>
                                             </td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">Electronics and Communication Engineering</p>
                                             </td>
                                          </tr>
                                          <tr>
                                          </tr>
                                          <tr>
                                             <td>5</td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">B.Gokul, V.Surya</p>
                                             </td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">Computer Engineering</p>
                                             </td>
                                          </tr>
                                          <tr>
                                          </tr>
                                          <tr>
                                             <td>6</td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">R.Santhoshkumar, R.Nirmal, Jerin Joy</p>
                                             </td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">Chemical Engineering</p>
                                             </td>
                                          </tr>
                                          <tr>
                                          </tr>
                                          <tr>
                                             <td>7</td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">M.RanjithKumar, T.Nanthagopal</p>
                                             </td>
                                             <td>
                                                <p style="text-align: justify; margin-right: 5px;">Automobile Engineering</p>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr>
            </div>
            <!-- /.widget-inner -->
         </div>
         <!-- /.widget-main -->
      </div>
      <!-- /.col-md-12 -->
   </div>
   <!-- /.row -->
</div>
<script>
   window.onload = function(){
       var url = document.location.toString();
       if (url.match('#')) {
           $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
       }

       //Change hash for page-reload
       $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').on('shown', function (e) {
           window.location.hash = e.target.hash;
       });
   }

</script>
