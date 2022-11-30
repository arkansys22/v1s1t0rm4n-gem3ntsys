<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Petacrawl extends CI_Controller {

 public function index(){
     $this->load->helper('url');
     $this->load->model('Sitemap_model');
<<<<<<< HEAD
     $data['blogs'] = $this->Sitemap_model->generate_blogs('blogs');
     $data['services'] = $this->Sitemap_model->generate_services('services');
=======
     $data['products'] = $this->Sitemap_model->generate('products','products_judul_seo','products_id');
     $data['products_cat'] = $this->Sitemap_model->generate('products_category','products_cat_judul_seo','products_cat_id');
>>>>>>> 42cf6319091cf091480b9dbec2cf805972a6f4bb
     $this->load->view('v_sitemap',$data);
 }

}
