<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model(array('Crud_m'));

	}
  public function register()
  {
    $data['title'] = 'Sign Up';
    $this->form_validation->set_rules('nama','','required', array('required'=>'Fill your name please'));
    $this->form_validation->set_rules('email','','required|valid_email|is_unique[user.email]', array('required' => 'Fill your email please','is_unique' => 'Email address already registered, please use another email address.'));
    $this->form_validation->set_rules('password','','required', array('required'=>'Fill your password please'));
		$this->form_validation->set_rules('user_detail_notlp','','required', array('required'=>'Fill your number telphone please'));
		$this->form_validation->set_rules('user_detail_contactto','','required', array('required'=>'Fill in the name you want to visit'));
		$this->form_validation->set_rules('user_tenant_id','','required', array('required'=>'Fill in the name of the tenant you want to visit'));
		$this->form_validation->set_rules('user_detail_floor','','required', array('required'=>'Fill in the floor of the tenant'));
		$this->form_validation->set_rules('user_detail_vdatefrom','','required', array('required'=>'Enter your arrival date'));
		$this->form_validation->set_rules('user_detail_vdateend','','required', array('required'=>'Fill in the end date of your visit'));
		$this->form_validation->set_rules('user_detail_reason','','required', array('required'=>'Enter the reason for your visit'));

    if($this->form_validation->run() === FALSE){
        $this->load->view('frontend/user/visitors-register',$data);
    }else{
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
					$this->upload->initialize($config);
					$this->upload->do_upload('user_detail_gambar');
					$selfie=$this->upload->data();
					$config['image_library']='gd2';
					$config['source_image'] = './bahan/foto_user_detail/'.$selfie['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= FALSE;
					$config['quality']= '80%';
					$config['new_image']= './bahan/foto_user_detail/'.$selfie['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

					$this->upload->initialize($config);
					$this->upload->do_upload('user_detail_idcard');
					$idcard=$this->upload->data();
					$config['image_library']='gd2';
					$config['source_image'] = './bahan/foto_user_detail/'.$idcard['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= FALSE;
					$config['quality']= '80%';
					$config['new_image']= './bahan/foto_user_detail/'.$idcard['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

        $enc_password = sha1($this->input->post('password'));
        $data_user = array(
                  'email' => $this->input->post('email'),
                  'password' => $enc_password,
                  'user_status' => '2',
                  'level' => '4',
                  'user_post_hari'=>hari_ini(date('w')),
                  'user_post_tanggal'=>date('Y-m-d'),
                  'user_post_jam'=>date('H:i:s'),
                  'id_session'=>md5($this->input->post('email')).'-'.date('YmdHis'),
                  'nama' => $this->input->post('nama'));
        $id_pelanggan = $this->Crud_m->tambah_user($data_user);
        $data_user_detail = array(
                  'id_user' => $id_pelanggan,
									'user_detail_notlp' => $this->input->post('user_detail_notlp'),
									'user_tenant_id' => $this->input->post('user_tenant_id'),
									'user_detail_floor' => $this->input->post('user_detail_floor'),
									'user_detail_reason' => $this->input->post('user_detail_reason'),
									'user_detail_contactto' => $this->input->post('user_detail_contactto'),
									'user_detail_vdatefrom' => $this->input->post('user_detail_vdatefrom'),
									'user_detail_vdateend' => $this->input->post('user_detail_vdateend'),
									'user_detail_idcard'=>$idcard['file_name'],
									'user_detail_gambar'=>$selfie['file_name'],
									'user_detail_post_hari'=>hari_ini(date('w')),
                  'user_detail_post_tanggal'=>date('Y-m-d'),
                  'user_detail_post_jam'=>date('H:i:s'),
									'user_detail_device'=> $agent,
									'user_detail_idsession'=>md5($id_pelanggan).'-'.date('YmdHis'),
									'user_detail_ip' => $this->input->ip_address()


								);
        $this->Crud_m->insert('user_detail',$data_user_detail);

        $this->session->set_flashdata('user_registered', 'You are now registered and can log in');

        redirect(base_url("regist-success"));
    }

  }
	public function register_visitor()
	{
		$data['title'] = 'Sign Up';
		$this->form_validation->set_rules('nama','','required', array('required'=>'Fill your name please'));
		$this->form_validation->set_rules('email','','required|valid_email|is_unique[user.email]', array('required' => 'Fill your email please','is_unique' => 'Email address already registered, please use another email address.'));
		$this->form_validation->set_rules('password','','required', array('required'=>'Fill your password please'));
		$this->form_validation->set_rules('user_detail_notlp','','required', array('required'=>'Fill your number telphone please'));
		$this->form_validation->set_rules('user_detail_contactto','','required', array('required'=>'Fill in the name you want to visit'));
		$this->form_validation->set_rules('user_tenant_id','','required', array('required'=>'Fill in the name of the tenant you want to visit'));
		$this->form_validation->set_rules('user_detail_floor','','required', array('required'=>'Fill in the floor of the tenant'));
		$this->form_validation->set_rules('user_detail_vdatefrom','','required', array('required'=>'Enter your arrival date'));
		$this->form_validation->set_rules('user_detail_vdateend','','required', array('required'=>'Fill in the end date of your visit'));
		$this->form_validation->set_rules('user_detail_reason','','required', array('required'=>'Enter the reason for your visit'));

		if($this->form_validation->run() === FALSE){
				$this->load->view('frontend/user/visitors-register',$data);
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

					$config['upload_path'] = 'bahan/foto_user_detail/';
					$config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
					$this->upload->initialize($config);
					$this->upload->do_upload('user_detail_gambar');
					$selfie=$this->upload->data();
					$config['image_library']='gd2';
					$config['source_image'] = './bahan/foto_user_detail/'.$selfie['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= FALSE;
					$config['quality']= '80%';
					$config['new_image']= './bahan/foto_user_detail/'.$selfie['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

					$this->upload->initialize($config);
					$this->upload->do_upload('user_detail_idcard');
					$idcard=$this->upload->data();
					$config['image_library']='gd2';
					$config['source_image'] = './bahan/foto_user_detail/'.$idcard['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= FALSE;
					$config['quality']= '80%';
					$config['new_image']= './bahan/foto_user_detail/'.$idcard['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					$config['cacheable']    = true;
					$config['cachedir']     = './bahan/';
					$config['errorlog']     = './bahan/';
					$config['imagedir']     = './bahan/qrcode/';
					$config['quality']     = true;
					$config['size']     = '1024';
					$config['white']     = array(70,130,180);
					$config['black']     = array(224,255,255);
					$this->ciqrcode->initialize($config);



					$enc_password = sha1($this->input->post('password'));
					$data_user = array(
									'email' => $this->input->post('email'),
									'password' => $enc_password,
									'user_status' => '2',
									'level' => '4',
									'user_post_hari'=>hari_ini(date('w')),
									'user_post_tanggal'=>date('Y-m-d'),
									'user_post_jam'=>date('H:i:s'),
									'id_session'=>md5($this->input->post('email')).'-'.date('YmdHis'),
									'nama' => $this->input->post('nama'));
					$id_pelanggan = $this->Crud_m->tambah_user($data_user);


					$qrcode= md5($id_pelanggan).'-'.date('YmdHis');
					$image_name=$qrcode.'.png';
					$data_user_detail = array(
									'id_user' => $id_pelanggan,
									'user_detail_notlp' => $this->input->post('user_detail_notlp'),
									'user_tenant_id' => $this->input->post('user_tenant_id'),
									'user_detail_floor' => $this->input->post('user_detail_floor'),
									'user_detail_reason' => $this->input->post('user_detail_reason'),
									'user_detail_contactto' => $this->input->post('user_detail_contactto'),
									'user_detail_vdatefrom' => $this->input->post('user_detail_vdatefrom'),
									'user_detail_vdateend' => $this->input->post('user_detail_vdateend'),
									'user_detail_idcard'=>$idcard['file_name'],
									'user_detail_gambar'=>$selfie['file_name'],
									'user_detail_post_hari'=>hari_ini(date('w')),
									'user_detail_post_tanggal'=>date('Y-m-d'),
									'user_detail_post_jam'=>date('H:i:s'),
									'user_detail_device'=> $agent,
									'user_detail_qrcode' => $image_name,
									'user_detail_idsession'=> $qrcode,
									'user_detail_ip' => $this->input->ip_address()
								);								
								$params['data'] = $qrcode;
								$params['level'] = 'H';
								$params['size'] = 10;
								$params['savename'] = FCPATH.$config['imagedir'].$image_name;
								$this->ciqrcode->generate($params);

								$this->Crud_m->insert('user_detail',$data_user_detail);
								$this->session->set_flashdata('user_registered', 'You are now registered and can log in');
								redirect(base_url("regist-success"));
				}
			 }
	}
	public function register_tenant()
  {
    $data['title'] = 'Sign Up';
    $this->form_validation->set_rules('nama','','required', array('required'=>'Fill your name please'));
    $this->form_validation->set_rules('email','','required|valid_email|is_unique[user.email]', array('required' => 'Fill your email please','is_unique' => 'Email address already registered, please use another email address.'));
    $this->form_validation->set_rules('password','','required', array('required'=>'Fill your password please'));
		$this->form_validation->set_rules('user_tenant_nama','','required', array('required'=>'Fill your tenant name please'));

    if($this->form_validation->run() === FALSE){
        $this->load->view('frontend/user/tenant-register',$data);
    }else{
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

        $enc_password = sha1($this->input->post('password'));
        $data_user = array(
                  'email' => $this->input->post('email'),
                  'password' => $enc_password,
                  'user_status' => '2',
                  'level' => '3',
                  'user_post_hari'=>hari_ini(date('w')),
                  'user_post_tanggal'=>date('Y-m-d'),
                  'user_post_jam'=>date('H:i:s'),
                  'id_session'=>md5($this->input->post('email')).'-'.date('YmdHis'),
                  'nama' => $this->input->post('nama'));
        $id_pelanggan = $this->Crud_m->tambah_user($data_user);
        $data_user_tenant = array(
                  'id_user' => $id_pelanggan,
									'user_tenant_nama' => $this->input->post('user_tenant_nama')
								);
        $this->Crud_m->insert('user_tenant',$data_user_tenant);
				$data_user_log = array(
                  'id_user' => $id_pelanggan,
									'user_log_ket' => 'Daftar Tenant Baru',
									'user_log_hari'=>hari_ini(date('w')),
                  'user_log_tanggal'=>date('Y-m-d'),
                  'user_log_jam'=>date('H:i:s'),
									'user_log_device'=> $agent,
									'user_log_ip' => $this->input->ip_address()
								);
        $this->Crud_m->insert('user_log',$data_user_log);

        $this->session->set_flashdata('user_registered', 'You are now registered and can log in');

        redirect(base_url("regist-success"));
    }

  }
	public function login()
	{
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if($this->form_validation->run() === FALSE){
                $this->load->view('frontend/user/login');
            } else {

                $email = $this->input->post('email');
                $password = sha1($this->input->post('password'));
								$cek = $this->Panel_m->cek_login($email,$password,'user');
							    $row = $cek->row_array();
							    $total = $cek->num_rows();
									if ($total > 0){
										$this->session->set_userdata(
											array(
												'email'=>$row['email'],
												'level'=>$row['level'],
												'id_users'=>$row['id_users'],
												'id_session'=>$row['id_session']));

										 $this->session->set_flashdata('user_loggedin','Selamat Anda Berhasil Login');
										$id = array('id_session' => $this->session->id_session);
									 	$data = array('user_login_status'=>'online','user_login_tanggal'=> date('Y-m-d'),'user_login_jam'=> date('H:i:s'));
									 	$this->db->update('user', $data, $id);
										redirect('paneluser/home');
									}else {
                    // Set message
                    $this->session->set_flashdata('login_failed', 'The email address and password you entered is unregisted');

                    redirect(base_url('login'));
                }
            }
        }
	public function logout()
	{
					$id = array('id_session' => $this->session->id_session);
									$data = array('user_login_status'=>'offline');
									$this->db->update('user', $data, $id);
			            // Unset user data
			            $this->session->unset_userdata('logged_in');
			            $this->session->unset_userdata('user_id');
			            $this->session->unset_userdata('email');

			            // Set message
			            $this->session->set_flashdata('user_logout', 'You are now logged out');
									$this->session->sess_destroy();
			            redirect(base_url());
	}
	public function success()
	{
		$this->load->view('frontend/user/success_regist');
	}

}
