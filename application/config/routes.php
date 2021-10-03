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
$route['default_controller'] = 'formecp/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

//form url, method get
$route['form'] = 'formecp/form';
$route['employee'] = 'formecp/employeeAjax';

//submit url, method post
$route['employee/resign']['post'] = 'formecp/employeeResign';
$route['form/owning-company']['post'] = 'formecp/owningCompany';
$route['form/it-equipment']['post'] = 'formecp/itEquipment';
$route['form/email-close']['post'] = 'formecp/emailClose';
$route['form/phone-account']['post'] = 'formecp/phoneAccount';
$route['form/vehicle']['post'] = 'formecp/vehicle';
$route['form/personal-protective']['post'] = 'formecp/personalProtective';
$route['form/access-card']['post'] = 'formecp/accessCard';
$route['form/store-equipment']['post'] = 'formecp/storeEquipment';
$route['form/company-inspected']['post'] = 'formecp/companyInspected';

//approve url, method post
$route['employee/resign/approve']['post'] = 'formecp/employeeResignApprove';
$route['form/owning-company/approve']['post'] = 'formecp/owningCompanyApprove';
$route['form/it-equipment/approve']['post'] = 'formecp/itEquipmentApprove';
$route['form/phone-account/approve']['post'] = 'formecp/phoneAccountApprove';
$route['form/vehicle/approve']['post'] = 'formecp/vehicleApprove';
$route['form/personal-protective/approve']['post'] = 'formecp/personalProtectiveApprove';
$route['form/access-card/approve']['post'] = 'formecp/accessCardApprove';
$route['form/store-equipment/approve']['post'] = 'formecp/storeEquipmentApprove';
$route['form/company-inspected/approve']['post'] = 'formecp/companyInspectedApprove';
