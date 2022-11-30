<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

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
		$config['per_page'] = 3;
		$config['per_page2'] = 50;
		$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
		$data['posts_product'] = $this->Crud_m->view_join_where_publish('products','products_category','products_cat_id','products_status','products_disc_status','products_id','RANDOM',$dari,$config['per_page2']);

		}else{
			redirect('main');
		}
	$this->load->view('frontend/v_home', $data);
	}
}
