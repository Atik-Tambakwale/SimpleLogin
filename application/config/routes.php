<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'C_Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//user navigations
$route["user/authentication"]="C_Login/Authentication";
$route["register"]="C_Signup";
$route["user/register"]="C_Signup/user_Registration";

$route["dashboard"]="C_Dashboard";
$route["dashboard/user/update"]="C_Dashboard/user_update";

$route["user/signout"]="C_Login/signout";
