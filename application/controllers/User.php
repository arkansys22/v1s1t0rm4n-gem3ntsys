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
    $this->form_validation->set_rules('username','','required|min_length[5]|max_length[12]|is_unique[user.username]', array('required' => 'username masih kosong','is_unique' => 'Username telah digunakan, silahkan gunakan username lain.'));
    $this->form_validation->set_rules('nama','','required', array('required'=>'Nama masih kosong'));
    $this->form_validation->set_rules('email','','required|valid_email|is_unique[user.email]', array('required' => 'Email masih kosong','is_unique' => 'Email telah digunakan, silahkan gunakan email lain.'));
    $this->form_validation->set_rules('password','','required', array('required'=>'Password masih kosong'));
    $this->form_validation->set_rules('password2', '','required|matches[password]', array('required' => 'Konfirmasi password masih kosong','matches'=>'Password tidak sama! Cek kembali password Anda'));

    if($this->form_validation->run() === FALSE){
        $this->load->view('frontend/user/visitor-register',$data);
    }else{
        $enc_password = sha1($this->input->post('password'));
        $data_user = array(
                  'email' => $this->input->post('email'),
                  'password' => $enc_password,
                  'user_status' => '1',
                  'level' => '4',
                  'user_post_hari'=>hari_ini(date('w')),
                  'user_post_tanggal'=>date('Y-m-d'),
                  'user_post_jam'=>date('H:i:s'),
                  'id_session'=>md5($this->input->post('email')).'-'.date('YmdHis'),
                  'nama' => $this->input->post('nama'));
        $id_pelanggan = $this->Crud_m->tambah_user($data_user);
        $data_user_detail = array(
                  'id_user' => $id_pelanggan);
        $this->Crud_m->tambah_user_detail($data_user_detail);

        $this->session->set_flashdata('user_registered', 'You are now registered and can log in');

        redirect(base_url("login"));
    }

  }

}
