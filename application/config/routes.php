<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'home';
$route['login'] = "paneladmin/login";
$route['regist-visitor'] = "user/register";

$route['404_override'] = 'Notfound';
$route['translate_uri_dashes'] = FALSE;
$route['petacrawl\.xml'] = "petacrawl";
