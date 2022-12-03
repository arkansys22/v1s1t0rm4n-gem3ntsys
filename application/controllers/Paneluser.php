<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Paneluser extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}
	public function index()
	{
			redirect(base_url('login'));
	}
	public function home()
	{
		if ($this->session->level=='1'){
			cek_session_developer($this->session->id_session);
			$this->load->view('backend/paneluser/dashboard-developer');
		}elseif ($this->session->level=='2'){
			cek_session_administrator($this->session->id_session);
			$this->load->view('backend/paneluser/dashboard-administrator');
		}elseif ($this->session->level=='3'){
			cek_session_tenant($this->session->id_session);
				$this->load->view('backend/paneluser/dashboard-tenant');
		}elseif ($this->session->level=='4'){
			cek_session_visitor($this->session->id_session);
				$data['user'] = $this->Crud_m->view_where('user', array('email'=> $this->session->email))->row_array();
				$this->load->view('backend/paneluser/dashboard-visitor',$data);
		}else{
			redirect(base_url());
		}
	}

}
