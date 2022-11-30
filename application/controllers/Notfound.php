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
		if ($this->uri->segment('4')==''){
			$dari = 0;
		}else{
			$dari = $this->uri->segment('4');
		}
		if (is_numeric($dari)) {
		$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
	}else{
		redirect(base_url());
	}
		$this->load->view('404',$data);
	}
}
