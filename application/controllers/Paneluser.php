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
	public function verify_visitor()
	{
		if ($this->session->level=='1'){
			cek_session_developer($this->session->id_session);
			$data['record'] = $this->Crud_m->view_join_where_ordering_user4('user','user_detail','id_user','id_user',array('level'=>'4','user_detail_vdatefrom'=>date('20y-m-d')),'user_detail_vdatefrom','DESC');
			$this->load->view('backend/paneluser/verify-visitor',$data);
		}elseif ($this->session->level=='2'){
			cek_session_administrator($this->session->id_session);
			$data['active_visitor'] = "class='active'";
			$this->load->view('backend/paneluser/verify-visitor');
		}elseif ($this->session->level=='3'){
			cek_session_tenant($this->session->id_session);
				$data['active_visitor'] = "class='active'";
				$this->load->view('backend/paneluser/verify-visitor');
		}elseif ($this->session->level=='4'){
			cek_session_visitor($this->session->id_session);
				$data['user'] = $this->Crud_m->view_where('user', array('email'=> $this->session->email))->row_array();
				$data['active_visitor'] = "class='active'";
				$this->load->view('backend/paneluser/verify-visitor',$data);
		}elseif ($this->session->level=='5'){
			cek_session_receptionist($this->session->id_session);
				$data['user'] = $this->Crud_m->view_where('user', array('email'=> $this->session->email))->row_array();
				$data['active_visitor'] = "class='active'";
				$this->load->view('backend/paneluser/verify-visitor',$data);
		}else{
			redirect(base_url());
		}
	}
	public function visitor_list()
	{
		if ($this->session->level=='1'){
			cek_session_developer($this->session->id_session);
			$data['record'] = $this->Crud_m->view_join_where_ordering_user_month('user','user_detail','id_user','id_user',array('level'=>'4'),'user_detail_vdatefrom','DESC');
			$this->load->view('backend/paneluser/visitorlist-today',$data);
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
	public function cnfig()
	{
		if ($this->session->level=='1'){
			cek_session_developer($this->session->id_session);
			$data['active_visitor'] = "class='active'";
			$this->load->view('backend/paneluser/cnfig-administrator');
		}elseif ($this->session->level=='2'){
			cek_session_administrator($this->session->id_session);
			$data['active_visitor'] = "class='active'";
			$this->load->view('backend/paneluser/cnfig-administrator');
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
	public function usersettings()
	{
		if ($this->session->level=='1'){
			
			$this->form_validation->set_rules('nama','','required', array('required'=>'Fill your name please'));
			$this->form_validation->set_rules('email','','required|valid_email|is_unique[user.email]', array('required' => 'Email masih kosong','is_unique' => 'Email telah digunakan, silahkan gunakan email lain.'));
            $this->form_validation->set_rules('password','','required', array('required'=>'Password masih kosong'));
            $this->form_validation->set_rules('password2', '','required|matches[password]', array('required' => 'Konfirmasi password masih kosong','matches'=>'Password tidak sama! Cek kembali password Anda'));
            $this->form_validation->set_rules('level','','required', array('required'=>'Fill user level please'));
			if($this->form_validation->run() === FALSE){
			cek_session_developer($this->session->id_session);
			$data['record'] = $this->Crud_m->view_join_where_ordering_user23('user','user_level','level','user_level_id',array('user_stat'=>'Active'),'id_user','DESC');
			$this->load->view('backend/paneluser/usersettings-administrator',$data);
			}else{

				if (isset($_POST['submit'])){

			if ($this->agent->is_browser())
					{
								$agent = 'Desktop ' .$this->agent->browser().' '.$this->agent->version();
					}
					elseif ($this->agent->is_robot())
					{
								$agent = $this->agent->robot();
					}
					elseif ($this->agent->is_mobile())
					{
								$agent = 'Mobile' .$this->agent->mobile().''.$this->agent->version();
					}
					else
					{
								$agent = 'Unidentified User Agent';
					}

				

					
					$data_user = array(
										'email' => $this->input->post('email'),
										'password' => $this->input->post('password'),
										'user_status' => '2',
										'user_stat' => 'Active',
										'level' => $this->input->post('level'),
										'user_post_hari'=>hari_ini(date('w')),
										'user_post_tanggal'=>date('Y-m-d'),
										'user_post_jam'=>date('H:i:s'),
										'id_session'=>md5($this->input->post('nama')).'-'.date('YmdHis'),
										'nama' => $this->input->post('nama')
									);
					$id_pelanggan = $this->Crud_m->tambah_user($data_user);
					$data_user_detail = array(
									'id_user' => $id_pelanggan,									
									'user_detail_post_hari'=>hari_ini(date('w')),
									'user_detail_post_tanggal'=>date('Y-m-d'),
									'user_detail_post_jam'=>date('H:i:s'),
									'user_detail_device'=> $agent,
									'user_detail_ip' => $this->input->ip_address()
								);							

								$this->Crud_m->insert('user_detail',$data_user_detail);
								redirect(base_url("paneluser/usersettings"));
				}

			}
		}elseif ($this->session->level=='2'){
			cek_session_administrator($this->session->id_session);
			$data['active_visitor'] = "class='active'";
			$this->load->view('backend/paneluser/cnfig-administrator');
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
	public function user_delete_temp()
	{

			$data = array('user_stat'=>'In Active');
			$where = array('id_session' => $this->uri->segment(3));
			$this->db->update('user', $data, $where);
			redirect('paneluser/usersettings');
	}
	public function useredit()
	{
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){

			if ($this->input->post('password')==''){
				$data = array(
					'nama'=>$this->input->post('nama'),
					'email'=>$this->input->post('email'),
					'level'=>$this->input->post('level'));
			}else{
				$data = array(
					'nama'=>$this->input->post('nama'),
					'email'=>$this->input->post('email'),
					'password'=>$this->input->post('password'),
					'level'=>$this->input->post('level'));
			}
					$where = array('id_session' => $this->input->post('id_session'));
					$query = $this->db->update('user',$data,$where);				
				
					redirect('paneluser/usersettings');
		}else{
			if ($this->session->level=='1' OR $this->session->level=='2'){
					 $proses = $this->Panel_m->edit('user', array('id_session' => $id))->row_array();
			}else{
					$proses = $this->Panel_m->edit('user', array('id_session' => $id))->row_array();
			}
			$data = array('rows' => $proses);
			$this->load->view('backend/paneluser/useredit-administrator', $data);
		}
	}
	public function visitor_edit()
	{
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){

				$data = array(
					'user_status'=>'1');
			
					$where = array('id_session' => $this->input->post('id_session'));
					$query = $this->db->update('user',$data,$where);				
				
					redirect('paneluser/visitor_list');
		}else{
			if ($this->session->level=='1' OR $this->session->level=='2'){
					 $proses = $this->Panel_m->edit('user', array('id_session' => $id))->row_array();
			}else{
					$proses = $this->Panel_m->edit('user', array('id_session' => $id))->row_array();
			}
			$data = array('rows' => $proses);
			$this->load->view('backend/paneluser/visitoredit', $data);
		}
	}


	

}
