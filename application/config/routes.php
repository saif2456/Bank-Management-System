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
$route['default_controller']   = 'welcome';
$route['404_override']         = '';
$route['translate_uri_dashes'] = FALSE;
$route['register_korbe']       = 'welcome/register';
$route['login']                = 'welcome/login';
$route['insert_user']          = 'welcome/insert_user';
$route['user_login']           = 'welcome/user_profile';
$route['profile']              = 'welcome/profile';
$route['depositemoney']        = 'transaction/depositemoney';
$route['sendemoney']           = 'transaction/sendemoney';
$route['help']                 = 'transaction/help';
$route['aboutus']              = 'transaction/aboutus';
$route['logout']               = 'welcome/logout';
$route['profiledetails']       = 'welcome/profiledetails';
$route['updateinfo']           = 'welcome/updateinfo';
$route['transaction_history']  = 'transaction/transaction_history';
$route['saveaccountinfo']      = 'welcome/saveaccountinfo';
$route['userinfochange']       = 'welcome/userinfochange';
$route['changeaccountinfo']    = 'welcome/changeaccountinfo';
$route['depositemoney_submit'] = 'transaction/depositemoney_done';
$route['sendmoney_submit']     = 'transaction/sendmoney_done';
$route['gethelp']              = 'welcome/gethelp';
$route['aboutus']              = 'welcome/aboutus';
$route['aboutus_pr']           = 'welcome/aboutus_pr';
$route['imageupload']          = 'welcome/imageupload';
$route['forget_password']      = 'welcome/forget_password';
$route['admin']                = 'admin/adminLoginpage';
$route['admin_login_process']  = 'admin/admin_login';
$route['adminprofile']         = 'admin/adminprofile';
$route['update']               = 'admin/update';
$route['delete']               = 'admin/delete';
$route['showcustomer']         = 'admin/showcustomer';
$route['addmoney']             = 'admin/addmoney';
$route['addmoneyprocess']      = 'admin/addmoneyprocess';
$route['deleteuser']           = 'admin/deleteuser';
