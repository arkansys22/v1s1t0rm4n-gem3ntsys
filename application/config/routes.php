<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'user/register';
$route['regist-visitor'] = 'user/register';
$route['login'] = "user/login";
$route['signup-tenant'] = "user/register_tenant";
$route['regist-success'] = "user/success";
$route['logout'] = "user/logout";

$route['404_override'] = 'Notfound';
$route['translate_uri_dashes'] = FALSE;
$route['petacrawl\.xml'] = "petacrawl";
