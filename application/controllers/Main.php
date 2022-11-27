<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
	    	$this->data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
				$this->load->view('fronts/home/v_index', $this->data);
	}


}
