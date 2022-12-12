<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$autoload['packages'] = array();

$autoload['libraries'] = array('ciqrcode','session','form_validation','pagination','mylibrary','database','encryption','user_agent','email','upload');

$autoload['drivers'] = array();

$autoload['helper'] = array('url','form','custom','text','cookie');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('Crud_m','Panel_m','Sitemap_model','Crud_m');
