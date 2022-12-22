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
			$data['active_home'] = "class='active'";
			$this->load->view('backend/paneluser/dashboard-developer',$data);
		}elseif ($this->session->level=='2'){
			cek_session_administrator($this->session->id_session);
			$data['active_home'] = "class='active'";
			$this->load->view('backend/paneluser/dashboard-administrator',$data);
		}elseif ($this->session->level=='3'){
			cek_session_tenant($this->session->id_session);
				$data['active_home'] = "class='active'";
				$this->load->view('backend/paneluser/dashboard-tenant',$data);
		}elseif ($this->session->level=='4'){
			cek_session_visitor($this->session->id_session);
				$data['user'] = $this->Crud_m->view_where('user', array('email'=> $this->session->email))->row_array();
				$data['active_home'] = "class='active'";
				$this->load->view('backend/paneluser/dashboard-visitor',$data);
		}elseif ($this->session->level=='5'){
			cek_session_receptionist($this->session->id_session);
				$data['user'] = $this->Crud_m->view_where('user', array('email'=> $this->session->email))->row_array();
				$data['active_home'] = "class='active'";
				$proses = $this->Panel_m->edit('user_detail', array('user_detail_idsession' => $this->input->post('user_detail_idsession')))->row_array();
				$data = array('rows' => $proses);
				$this->load->view('backend/paneluser/verify-visitor',$data);
		}else{
			redirect(base_url());
		}
	}
	public function visitor_list()
	{
		if ($this->session->level=='1'){
			cek_session_developer($this->session->id_session);
			$data['active_visitor'] = "class='active'";
			$this->load->view('backend/paneluser/dashboard-developer');
		}elseif ($this->session->level=='2'){
			cek_session_administrator($this->session->id_session);
			$data['active_visitor'] = "class='active'";
			$this->load->view('backend/paneluser/dashboard-administrator');
		}elseif ($this->session->level=='3'){
			cek_session_tenant($this->session->id_session);
				$data['active_visitor'] = "class='active'";
				$this->load->view('backend/paneluser/dashboard-tenant');
		}elseif ($this->session->level=='4'){
			cek_session_visitor($this->session->id_session);
				$data['user'] = $this->Crud_m->view_where('user', array('email'=> $this->session->email))->row_array();
				$data['active_visitor'] = "class='active'";
				$this->load->view('backend/paneluser/dashboard-visitor',$data);
		}elseif ($this->session->level=='5'){
			cek_session_receptionist($this->session->id_session);
				$data['user'] = $this->Crud_m->view_where('user', array('email'=> $this->session->email))->row_array();
				$data['active_visitor'] = "class='active'";
				$this->load->view('backend/paneluser/dashboard-receptionist',$data);
		}else{
			redirect(base_url());
		}
	}


}
