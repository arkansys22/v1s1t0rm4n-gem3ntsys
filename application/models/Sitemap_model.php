<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sitemap_model extends CI_Model
{


public function generate($table,$judul_seo,$id)
    {
        $this->db->select($judul_seo);
        $this->db->from($table);
        $this->db->order_by($id,"DESC");
        $query = $this->db->get();
        return $query->result();
    }



}
