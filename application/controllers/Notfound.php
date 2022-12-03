<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notfound extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('Crud_m'));

	}

	public function index()
	{
		$this->load->view('frontend/404');
	}
}
