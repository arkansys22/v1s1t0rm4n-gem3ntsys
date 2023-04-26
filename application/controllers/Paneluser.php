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

			$config['upload_path'] = 'bahan/foto_user_detail/';
			$config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
			$id_session = $this->input->post('id_session');
			$image = $this->input-> post('imagecam');
			$image = str_replace('data:image/jpeg;base64,', '',$image);
			$image = base64_decode($image,true);
			$filename = $id_session . '.jpeg';
			file_put_contents(FCPATH . './bahan/foto_user_detail/' . $filename, $image);

				
				$data = array(
					'gambar' => $filename,
					'user_status'=>'3');
			
					$where = array('id_session' => $this->input->post('id_session'));
					$query = $this->db->update('user',$data,$where);

					$log_file = array(
									'id_user' => $this->session->id_session,
									'user_log_ket' =>$this->input->post('id_session'),
									'user_log_status'=>'Verified Visitor',								
									'user_log_hari'=>hari_ini(date('w')),
									'user_log_tanggal'=>date('Y-m-d'),
									'user_log_jam'=>date('H:i:s'),
									'user_log_device'=> $agent,
									'user_log_ip' => $this->input->ip_address()
								);							

								$this->Crud_m->insert('user_log',$log_file);				
				
					redirect('paneluser/visitor_list');
		}else{

			$user_detail_idsession = $this->input->post('user_detail_idsession');
			$proses = $this->Panel_m->edit('user_detail', array('user_detail_idsession' => $user_detail_idsession ))->row_array();
			$data = array('rows' => $proses);		
			$this->load->view('backend/visitor/verify-visitor',$data);
		}}elseif ($this->session->level=='2'){
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
			$data['record'] = $this->Crud_m->view_join_where_ordering_user_month('user','user_detail','id_session','id_session',array('level'=>'4'),'user_detail_vdatefrom','DESC');
			$this->load->view('backend/visitor/visitorlist-today',$data);
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
		$proses = $this->Panel_m->edit('user', array('id_session' => $this->session->id_session))->row_array();
		if ($this->session->level=='1'){
			cek_session_developer($this->session->id_session);			
				if (isset($_POST['submit'])){

					$config['upload_path'] = 'bahan/foto_user_detail/';
					$config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
					$this->upload->initialize($config);
					$this->upload->do_upload('user_detail_gambar');
					$hasil22=$this->upload->data();
					$config['image_library']='gd2';
					$config['source_image'] = './bahan/foto_user_detail/'.$hasil22['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= FALSE;
					$config['new_image']= './bahan/foto_user_detail/'.$hasil22['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

					if ($hasil22['file_name']=='' AND $this->input->post('password')=='' ){
						$data = array(
									'email'=>$this->db->escape_str($this->input->post('email')),
									'nama'=>$this->input->post('nama'));
									$where = array('id_session' => $this->input->post('id_session'));
									$this->db->update('user',$data,$where);
					}else if ($this->input->post('password')=='' ){
						$data = array(
									'gambar'=>$hasil22['file_name'],
									'email'=>$this->db->escape_str($this->input->post('email')),
									'nama'=>$this->input->post('nama'));
									$where = array('id_session' => $this->input->post('id_session'));
									$_image = $this->db->get_where('user',$where)->row();
									$query = $this->db->update('user',$data,$where);
									if($query){
												unlink("bahan/foto_user_detail/".$_image->gambar);
												}
					}else if ($hasil22['file_name']==''){
						$data = array(
									'email'=>$this->db->escape_str($this->input->post('email')),
									'nama'=>$this->input->post('nama'),
									'password'=>sha1($this->input->post('password')));
									$where = array('id_session' => $this->input->post('id_session'));
									$this->db->update('user',$data,$where);
					}else{
						$data = array(
									'gambar'=>$hasil22['file_name'],
									'email'=>$this->db->escape_str($this->input->post('email')),
									'nama'=>$this->input->post('nama'),
									'password'=>sha1($this->input->post('password')));
									$where = array('id_session' => $this->input->post('id_session'));
									$_image = $this->db->get_where('user',$where)->row();
									$query = $this->db->update('user',$data,$where);
									if($query){
												unlink("bahan/foto_user_detail/".$_image->gambar);
											}
						}
					redirect(base_url("paneluser/cnfig"));


				}else{
				$data = array('rows' => $proses);
				$this->load->view('backend/config/cnfig-administrator',$data);;
				}
					
		}elseif ($this->session->level=='2'){
			cek_session_administrator($this->session->id_session);
			$data['active_visitor'] = "class='active'";
			$this->load->view('backend/paneluser/cnfig-administrator',$data);
		}elseif ($this->session->level=='3'){
			cek_session_tenant($this->session->id_session);
				$data['active_visitor'] = "class='active'";
				$this->load->view('backend/paneluser/dashboard-tenant',$data);
		}elseif ($this->session->level=='4'){
			cek_session_visitor($this->session->id_session);
				$data['user'] = $this->Crud_m->view_where('user', array('email'=> $this->session->email))->row_array();
			
				$this->load->view('backend/paneluser/dashboard-visitor',$data);
		}elseif ($this->session->level=='5'){
			cek_session_receptionist($this->session->id_session);
				$data['user'] = $this->Crud_m->view_where('user', array('email'=> $this->session->email))->row_array();
			
				$this->load->view('backend/paneluser/dashboard-receptionist',$data);
		}else{
			redirect(base_url());
		}
	}

	public function tenantssettinginactive()
	{
		if ($this->session->level=='1'){
			
			$this->form_validation->set_rules('user_tenant_nama','','required', array('required'=>'Fill tenant name please'));
			
			if($this->form_validation->run() === FALSE){
			cek_session_developer($this->session->id_session);
			$data['record'] = $this->Crud_m->view_where_ordering2('user_tenant',array('user_tenant_status'=>'In Active'),'user_tenant_id','DESC');
			$this->load->view('backend/tenant/inactive-administrator',$data);
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

					$data = array(
										'user_tenant_id_session'=>md5('tenant'.''.$this->input->post('user_tenant_nama')).''.date('YmdHis'),
										'user_tenant_nama' => $this->input->post('user_tenant_nama'),
										'user_tenant_status' => 'Active',
										'user_tenant_floor' => substr(implode(', ', $this->input->post('floor_list')), 0)										
									);
					$id_tenant = $this->Crud_m->insert('user_tenant',$data);
					$log_file = array(
									'id_user' => $this->session->id_session,
									'user_log_ket' => md5('tenant'.''.$this->input->post('user_tenant_nama')).''.date('YmdHis'),
									'user_log_status'=>'Add Tenant',								
									'user_log_hari'=>hari_ini(date('w')),
									'user_log_tanggal'=>date('Y-m-d'),
									'user_log_jam'=>date('H:i:s'),
									'user_log_device'=> $agent,
									'user_log_ip' => $this->input->ip_address()
								);							

								$this->Crud_m->insert('user_log',$log_file);
								redirect(base_url("paneluser/tenantssetting"));
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
	public function tenantssetting()
	{
		if ($this->session->level=='1'){
			
			$this->form_validation->set_rules('user_tenant_nama','','required', array('required'=>'Fill tenant name please'));
			
			if($this->form_validation->run() === FALSE){
			cek_session_developer($this->session->id_session);
			$data['record'] = $this->Crud_m->view_where_ordering2('user_tenant',array('user_tenant_status'=>'Active'),'user_tenant_id','DESC');
			$this->load->view('backend/tenant/tenantsseting-administrator',$data);
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

				

					
					$data = array(
										'user_tenant_id_session'=>md5('tenant'.''.$this->input->post('user_tenant_nama')).''.date('YmdHis'),
										'user_tenant_nama' => $this->input->post('user_tenant_nama'),
										'user_tenant_status' => 'Active',
										'user_tenant_floor' => substr(implode(', ', $this->input->post('floor_list')), 0)										
									);
					$id_tenant = $this->Crud_m->insert('user_tenant',$data);
					$log_file = array(
									'id_user' => $this->session->id_session,
									'user_log_ket' => md5('tenant'.''.$this->input->post('user_tenant_nama')).''.date('YmdHis'),
									'user_log_status'=>'Add Tenant',								
									'user_log_hari'=>hari_ini(date('w')),
									'user_log_tanggal'=>date('Y-m-d'),
									'user_log_jam'=>date('H:i:s'),
									'user_log_device'=> $agent,
									'user_log_ip' => $this->input->ip_address()
								);							

								$this->Crud_m->insert('user_log',$log_file);
								redirect(base_url("paneluser/tenantssetting"));
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
	public function tenantedit()
	{
		$id = $this->uri->segment(3);
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
			
				$data = array(
					'user_tenant_nama'=>$this->input->post('user_tenant_nama'),
					'user_tenant_floor' => substr(implode(', ', $this->input->post('floor_list')), 0)
					);
			
					$where = array('user_tenant_id_session' => $this->input->post('user_tenant_id_session'));
					$this->db->update('user_tenant',$data,$where);
					$log_file = array(
									'id_user' => $this->session->id_session,
									'user_log_ket' =>$this->input->post('user_tenant_id_session'),
									'user_log_status'=>'Edit Tenant',								
									'user_log_hari'=>hari_ini(date('w')),
									'user_log_tanggal'=>date('Y-m-d'),
									'user_log_jam'=>date('H:i:s'),
									'user_log_device'=> $agent,
									'user_log_ip' => $this->input->ip_address()
								);							

								$this->Crud_m->insert('user_log',$log_file);				
				
					redirect('paneluser/tenantssetting');
		}else{
			if ($this->session->level=='1' OR $this->session->level=='2'){
					 $proses = $this->Panel_m->edit('user_tenant', array('user_tenant_id_session' => $id))->row_array();
			}else{
					$proses = $this->Panel_m->edit('user_tenant', array('user_tenant_id_session' => $id))->row_array();
			}
			$data = array('rows' => $proses);
			$this->load->view('backend/tenant/tenantedit-administrator', $data);
		}
	}
	public function tenant_delete_temp()
	{
	
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

			$data = array('user_tenant_status'=>'In Active');
			$where = array('user_tenant_id_session' => $this->uri->segment(3));
			$this->db->update('user_tenant', $data, $where);
			$log_file = array(
									'id_user' => $this->session->id_session,
									'user_log_ket' =>$this->uri->segment(3),
									'user_log_status'=>'Trash Tenant',								
									'user_log_hari'=>hari_ini(date('w')),
									'user_log_tanggal'=>date('Y-m-d'),
									'user_log_jam'=>date('H:i:s'),
									'user_log_device'=> $agent,
									'user_log_ip' => $this->input->ip_address()
								);							

								$this->Crud_m->insert('user_log',$log_file);	

			redirect('paneluser/tenantssetting');
	}
	public function tenant_delete_perm()
	{
	
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

			$data = array('user_tenant_status'=>'In Active');
			$where = array('user_tenant_id_session' => $this->uri->segment(3));
			$this->db->delete('user_tenant', $data, $where);
			$log_file = array(
									'id_user' => $this->session->id_session,
									'user_log_ket' =>$this->uri->segment(3),
									'user_log_status'=>'Delete Permanen Tenant',								
									'user_log_hari'=>hari_ini(date('w')),
									'user_log_tanggal'=>date('Y-m-d'),
									'user_log_jam'=>date('H:i:s'),
									'user_log_device'=> $agent,
									'user_log_ip' => $this->input->ip_address()
								);							

								$this->Crud_m->insert('user_log',$log_file);	

			redirect('paneluser/tenantssetting');
	}
	public function tenant_replace_temp()
	{
	
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

			$data = array('user_tenant_status'=>'Active');
			$where = array('user_tenant_id_session' => $this->uri->segment(3));
			$this->db->update('user_tenant', $data, $where);
			$log_file = array(
									'id_user' => $this->session->id_session,
									'user_log_ket' =>$this->uri->segment(3),
									'user_log_status'=>'Replace Tenant',								
									'user_log_hari'=>hari_ini(date('w')),
									'user_log_tanggal'=>date('Y-m-d'),
									'user_log_jam'=>date('H:i:s'),
									'user_log_device'=> $agent,
									'user_log_ip' => $this->input->ip_address()
								);							

								$this->Crud_m->insert('user_log',$log_file);	

			redirect('paneluser/tenantssetting');
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
			$data['records_tenant'] = $this->Crud_m->view_where_ordering('user_tenant',array('user_tenant_status'=>'Active'),'user_tenant_id','ASC');
			$this->load->view('backend/user/usersettings-administrator',$data);
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
										'password' => sha1($this->input->post('password')),
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
									'id_session'=>md5($this->input->post('nama')).'-'.date('YmdHis'),									
									'user_detail_post_hari'=>hari_ini(date('w')),
									'user_detail_post_tanggal'=>date('Y-m-d'),
									'user_detail_post_jam'=>date('H:i:s'),
									'user_detail_device'=> $agent,
									'user_detail_ip' => $this->input->ip_address()
								);							

								$this->Crud_m->insert('user_detail',$data_user_detail);

					$log_file = array(
									'id_user' => $this->session->id_session,
									'user_log_ket' =>md5($this->input->post('nama')).'-'.date('YmdHis'),
									'user_log_status'=>'Add User',								
									'user_log_hari'=>hari_ini(date('w')),
									'user_log_tanggal'=>date('Y-m-d'),
									'user_log_jam'=>date('H:i:s'),
									'user_log_device'=> $agent,
									'user_log_ip' => $this->input->ip_address()
								);							

								$this->Crud_m->insert('user_log',$log_file);				
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

			$data = array('user_stat'=>'In Active');
			$where = array('id_session' => $this->uri->segment(3));
			$this->db->update('user', $data, $where);

			$log_file = array(
									'id_user' => $this->session->id_session,
									'user_log_ket' =>$this->uri->segment(3),
									'user_log_status'=>'Trash User',								
									'user_log_hari'=>hari_ini(date('w')),
									'user_log_tanggal'=>date('Y-m-d'),
									'user_log_jam'=>date('H:i:s'),
									'user_log_device'=> $agent,
									'user_log_ip' => $this->input->ip_address()
								);							

								$this->Crud_m->insert('user_log',$log_file);

			redirect('paneluser/usersettings');
	}
	public function user_delete_perm()
	{
	
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

			$data = array('user_stat'=>'In Active');
			$where = array('id_session' => $this->uri->segment(3));
			$this->db->delete('user', $data, $where);
			$log_file = array(
									'id_user' => $this->session->id_session,
									'user_log_ket' =>$this->uri->segment(3),
									'user_log_status'=>'Delete Permanen Tenant',								
									'user_log_hari'=>hari_ini(date('w')),
									'user_log_tanggal'=>date('Y-m-d'),
									'user_log_jam'=>date('H:i:s'),
									'user_log_device'=> $agent,
									'user_log_ip' => $this->input->ip_address()
								);							

								$this->Crud_m->insert('user_log',$log_file);	

			redirect('paneluser/usersettings');
	}
	public function user_replace_temp()
	{
	
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

			$data = array('user_stat'=>'Active');
			$where = array('id_session' => $this->uri->segment(3));
			$this->db->update('user', $data, $where);
			$log_file = array(
									'id_user' => $this->session->id_session,
									'user_log_ket' =>$this->uri->segment(3),
									'user_log_status'=>'Replace User',								
									'user_log_hari'=>hari_ini(date('w')),
									'user_log_tanggal'=>date('Y-m-d'),
									'user_log_jam'=>date('H:i:s'),
									'user_log_device'=> $agent,
									'user_log_ip' => $this->input->ip_address()
								);							

								$this->Crud_m->insert('user_log',$log_file);	

			redirect('paneluser/usersettings');
	}
	public function useredit()
	{
		$id = $this->uri->segment(3);
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

			if ($this->input->post('password')==''){
				$data = array(
					'nama'=>$this->input->post('nama'),
					'email'=>$this->input->post('email'),					
					'level'=>$this->input->post('level'));

				$data2 = array(
					'id_session'=>$this->input->post('id_session'),
					'user_tenant_id_session'=>$this->input->post('user_tenant_id_session'));

				$where = array('id_session' => $this->input->post('id_session'));
				$query = $this->db->update('user',$data,$where);
				$query2 = $this->db->update('user_detail',$data2,$where);
			}else{
				$data = array(
					'nama'=>$this->input->post('nama'),
					'email'=>$this->input->post('email'),
					'password' => sha1($this->input->post('password')),
					'level'=>$this->input->post('level'));
				$data2 = array(
					'id_session'=>$this->input->post('id_session'),
					'user_tenant_id_session'=>$this->input->post('user_tenant_id_session'));

				$where = array('id_session' => $this->input->post('id_session'));
				$query = $this->db->update('user',$data,$where);
				$query2 = $this->db->update('user_detail',$data2,$where);
			}

				$log_file = array(
									'id_user' => $this->session->id_session,
									'user_log_ket' =>$this->input->post('id_session'),
									'user_log_status'=>'Edit User',								
									'user_log_hari'=>hari_ini(date('w')),
									'user_log_tanggal'=>date('Y-m-d'),
									'user_log_jam'=>date('H:i:s'),
									'user_log_device'=> $agent,
									'user_log_ip' => $this->input->ip_address()
								);							

								$this->Crud_m->insert('user_log',$log_file);				
				
					redirect('paneluser/usersettings');
		}else{
			if ($this->session->level=='1' OR $this->session->level=='2'){
					 $proses = $this->Panel_m->edit('user', array('id_session' => $id))->row_array();
			}else{
					$proses = $this->Panel_m->edit('user', array('id_session' => $id))->row_array();
			}
			$data = array('rows' => $proses);
			$data['records_tenant'] = $this->Crud_m->view_where_ordering('user_tenant',array('user_tenant_status'=>'Active'),'user_tenant_id','ASC');
			$this->load->view('backend/user/useredit-administrator', $data);
		}
	}

	public function visitor_edit()
	{
		$id = $this->uri->segment(3);

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

			$config['upload_path'] = 'bahan/foto_user_detail/';
			$config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
			$id_session = $this->input->post('id_session');
			$image = $this->input-> post('imagecam');
			$image = str_replace('data:image/jpeg;base64,', '',$image);
			$image = base64_decode($image,true);
			$filename = $id_session . '.jpeg';
			file_put_contents(FCPATH . './bahan/foto_user_detail/' . $filename, $image);

				
				$data = array(
					'gambar' => $filename,
					'user_status'=>'3');
			
					$where = array('id_session' => $this->input->post('id_session'));
					$query = $this->db->update('user',$data,$where);

					$log_file = array(
									'id_user' => $this->session->id_session,
									'user_log_ket' =>$this->input->post('id_session'),
									'user_log_status'=>'Verified Visitor',								
									'user_log_hari'=>hari_ini(date('w')),
									'user_log_tanggal'=>date('Y-m-d'),
									'user_log_jam'=>date('H:i:s'),
									'user_log_device'=> $agent,
									'user_log_ip' => $this->input->ip_address()
								);							

								$this->Crud_m->insert('user_log',$log_file);				
				
					redirect('paneluser/visitor_list');
		}else{
			if ($this->session->level=='1' OR $this->session->level=='2'){
					 $proses = $this->Panel_m->edit('user', array('id_session' => $id))->row_array();
			}else{
					$proses = $this->Panel_m->edit('user', array('id_session' => $id))->row_array();
			}
			$data = array('rows' => $proses);
			$this->load->view('backend/visitor/visitoredit', $data);
		}
	}
	public function save_visitor()
	{

			$id_session=$this->input->post('id_session');
			$gambar=$this->input->post('gambar');
			$user_status=$this->input->post('user_status');
			$this->Crud_m->saverecords($id_session,$gambar,$user_status);	
			echo json_encode(array(
				"statusCode"=>200
			));		
	}

	

}
