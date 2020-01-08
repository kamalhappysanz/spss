<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';

// -----Admin routes------//
$route['login'] = 'welcome/login';
$route['index'] = 'welcome/index';
$route['ins_profile'] = 'welcome/ins_profile';
$route['mission'] = 'welcome/mission';
$route['founders'] = 'welcome/founders';
$route['management'] = 'welcome/management';
$route['governing'] = 'welcome/governing';
$route['course_offered'] = 'welcome/course_offered';
$route['admission'] = 'welcome/admission';
$route['syllabi'] = 'welcome/syllabi';
$route['academic_calendar'] = 'welcome/academic_calendar';
$route['library'] = 'welcome/library';
$route['dept'] = 'welcome/dept';
$route['general_facility'] = 'welcome/general_facility';
$route['hostel'] = 'welcome/hostel';
$route['transport'] = 'welcome/transport';
$route['iipchome'] = 'welcome/iipchome';
$route['iipcmission'] = 'welcome/iipcmission';
$route['iipccommittee'] = 'welcome/iipccommittee';
$route['iipcmou'] = 'welcome/iipcmou';
$route['iipcedc'] = 'welcome/iipcedc';
$route['committee'] = 'welcome/committee';
$route['CIICP_home'] = 'welcome/CIICP_home';
$route['CIICP_News'] = 'welcome/CIICP_News';
$route['CIICP_mission'] = 'welcome/CIICP_mission';
$route['CIICP_mandate'] = 'welcome/CIICP_mandate';
$route['CIICP_trust'] = 'welcome/CIICP_trust';
$route['CIICP_spic'] = 'welcome/CIICP_spic';
$route['CIICP_courses'] = 'welcome/CIICP_courses';
$route['CIICP_photos'] = 'welcome/CIICP_photos';
$route['placement'] = 'welcome/placement';
$route['scholarship'] = 'welcome/scholarship';
$route['extra'] = 'welcome/extra';
$route['nss_activites'] = 'welcome/nss_activites';
$route['sports'] = 'welcome/sports';
$route['facility'] = 'welcome/facility';
$route['downloads'] = 'welcome/downloads';
$route['student_union'] = 'welcome/student_union';
$route['keycontact'] = 'welcome/keycontact';
$route['nonteaching'] = 'welcome/nonteaching';
$route['faculty'] = 'welcome/faculty';
$route['facultyadd'] = 'welcome/facultyadd';
$route['events']='welcome/events';
$route['current_events']='welcome/current_events';
$route['contact'] = 'welcome/contact';



$route['forgotpassword'] = 'welcome/forgotpassword';
$route['logout'] = 'home/logout';
$route['dashboard'] = 'home/dashboard';
$route['profile'] = 'home/profile';
$route['change_password'] = 'home/change_password';
// ----Admin routes end------//


$route['translate_uri_dashes'] = FALSE;
