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
$route['translate_uri_dashes'] = FALSE;


//todo: signup
$route['index'] = 'Signup/index';


//todo: Student Dashboard
$route['instructions'] = 'Instructions/index';
//personal information
$route['personalinformation'] = 'user/personal_information';

//address
$route['addressdetail'] = 'user/address_detail';

//photo upload
$route['photoupload'] = 'user/photo_upload';

// education details
$route['educationdetails'] = 'user/education_detail';
//$route['educationdetails'] = 'user/eduMatric_detail';
//$route['educationdetails'] = 'user/eduintermediate_detail';
//$route['educationdetails'] = 'user/fourteenyearsEdu_detail';
//$route['educationdetails'] = 'user/SixteenYearEdu_Detail';

// nts details
$route['ntsdetails'] = 'user/nts_detail';

// program choices
$route['programchoices'] = 'user/program_choice';

// work history
$route['workhistory'] = 'user/work_history';

// fund detail
$route['funddetails'] = 'user/fund_detail';

// publication detail
$route['publicationdetails'] = 'user/publication_details';

// research details
$route['researchinterests'] = 'user/research_details';

// documents upload
$route['documentsupload'] = 'user/documents_upload';

// other detail
$route['otherdetail'] = 'user/other_detail';

// confirm fee
$route['confirmfee'] = 'user/confirm_fee';

$route['submitapplication'] = 'Instructions/application';

//todo: Admin Dashboard
$route['login'] = 'Admin/index';
$route['dashboard'] = 'Admin/dashboard';
$route['admissionrequests'] = 'Admin/ad_requests';
$route['users'] = 'Admin/usersadd';
$route['user'] = 'Admin/user';
$route['studentlist'] = 'Admin/studentlist';
$route['statistics'] = 'Admin/statistics';

