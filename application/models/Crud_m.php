<?php
class Crud_m extends CI_model{

  public $blogs_id    = 'blogs_id';
  public $products_id    = 'products_id';
  public $services_id    = 'services_id ';
  public $products_cat_id    = 'products_cat_id';
  public $id_identitas    = 'id_identitas';
  public $table_identitas = 'identitas';
  public $table_products ='products';
  public $table_services ='services';
  public $table_products_category ='products_category';
  public $table_blogs ='blogs';


  public function view_ordering($table,$order,$ordering)
  {
      $this->db->select('*');
      $this->db->from($table);
      $this->db->order_by($order,$ordering);
      return $this->db->get()->result_array();
  }
  function get_by_id_identitas($id)
  {
      $this->db->where($this->id_identitas, $id);
      return $this->db->get($this->table_identitas)->row();
  }
  function get_by_id_products($products_id)
  {
      $this->db->where($this->products_id, $products_id);
      $this->db->or_where('products_judul_seo', $products_id);
      return $this->db->get($this->table_products)->row();
  }
  function get_by_id_services($services_id)
  {
      $this->db->where($this->services_id , $services_id );
      $this->db->or_where('services_judul_seo', $services_id );
      return $this->db->get($this->table_services)->row();
  }

  public function view_where_orderings($table,$data,$order,$ordering)
    {
         $this->db->select('*');
         $this->db->from($table);
         $this->db->where($data);
         $this->db->order_by($order,$ordering);
         return $this->db->get()->result();
     }
     public function view_where_orderings_limit($table,$data,$order,$ordering,$dari,$baris)
       {
            $this->db->select('*');
            $this->db->from($table);
            $this->db->where($data);
            $this->db->limit($dari, $baris);
            $this->db->order_by($order,$ordering);
            return $this->db->get()->result();
        }



     public function view_join_where_orderings($table1,$table2,$field,$data,$order,$ordering)
       {
            $this->db->select('*');
            $this->db->from($table1);
            $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
            $this->db->where($data);
            $this->db->order_by($order,$ordering);
            return $this->db->get()->result();
        }

  function saverecords($id_session,$gambar,$user_status)
  {
    $query="INSERT INTO `user`( `id_session`, `gambar`, `user_status`) 
    VALUES ('$id_session','$gambar','$user_status')";
    $this->db->query($query);
  }

  function get_by_id_products_category($products_cat_id)
  {
      $this->db->where($this->products_cat_id, $products_cat_id);
      $this->db->or_where('products_cat_judul_seo', $products_cat_id);
      return $this->db->get($this->table_products_category)->row();
  }

  function get_by_id_blogs($id)
  {
      $this->db->where($this->blogs_id, $id);
      $this->db->or_where('blogs_judul_seo', $id);
      return $this->db->get($this->table_blogs)->row();
  }

  public function view_join_where($table1,$table2,$field,$where)
  {
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->where($where);
        return $this->db->get()->result();
    }

    public function update_join_where($table1,$table2,$field,$data,$where)
    {
          $this->db->where($where);
          $this->db->from($table1);
          $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);

          $this->db->set($data);
          $this->db->update($table1,$table2);

      }

    public function view_join_where_array($table1,$table2,$field,$where){
          $this->db->select('*');
          $this->db->from($table1);
          $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
          $this->db->where($where);
          return $this->db->get();
      }
    public function view_join_one($table1,$table2,$field,$where,$order,$ordering,$baris,$dari){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->where($where);
        $this->db->order_by($order,$ordering);
        $this->db->limit($dari, $baris);
        return $this->db->get()->result();
    }
  public function view_join_where_promo($table1,$table2,$field,$status,$status2,$order,$ordering,$baris,$dari)
  {
          $this->db->select('*');
          $this->db->from($table1);
          $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
          $this->db->where($status,'publish');
          $this->db->where($status2,'PROMO');
          $this->db->order_by($order,$ordering);
          $this->db->limit($dari, $baris);
          return $this->db->get()->result();
  }
  public function view_join_where_publish($table1,$table2,$field,$status,$status2,$order,$ordering,$baris,$dari)
  {
            $this->db->select('*');
            $this->db->from($table1);
            $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
            $this->db->where($status,'publish');
            $this->db->where($status2,'NON PROMO');
            $this->db->order_by($order,$ordering);
            $this->db->limit($dari, $baris);
            return $this->db->get()->result();
  }
  public function view_where_ordering($table,$data,$order,$ordering)
  {
      $this->db->where($data);
      $this->db->order_by($order,$ordering);
      $query = $this->db->get($table);
      return $query->result_array();
  }

 
  public function view_join_where_ordering($table1,$table2,$field,$data,$order,$ordering)
  {
    $this->db->select('*');
    $this->db->from($table1);
    $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
      $this->db->where($data);
      $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
  }

  public function view_where_ordering2($table1,$data,$order,$ordering)
  {
    $this->db->select('*');
    $this->db->from($table1);
      $this->db->where($data);
      $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
  }
  public function view_join_where2($table1,$table2,$field,$data)
  {
    $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
    return $this->db->get_where($table1, $data);
  }
  public function view_join_where2_ordering($table1,$table2,$field,$field2,$data,$order,$ordering)
  {
    $this->db->select('*');
    $this->db->from($table1);
    $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field2);
      $this->db->where($data);
      $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
  }

  public function view_join_where_ordering_user23($table1,$table2,$field,$field2,$data,$order,$ordering)
  {
    $this->db->select('*');
    $this->db->from($table1);
    $this->db->where('level BETWEEN '. "2" .' AND '. "3");
    $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field2);
      $this->db->where($data);
      $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
  }

  public function view_join_where_ordering_user4($table1,$table2,$field,$field2,$data,$order,$ordering)
  {
    $this->db->select('*');
    $this->db->from($table1);    
    $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field2);
      $this->db->where($data);
      $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
  }

  public function view_join_where_ordering_user_month($table1,$table2,$field,$field2,$data,$order,$ordering)
  {
    $this->db->select('*');
    $this->db->from($table1);    
    $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field2);

      $this->db->where($data);
      $this->db->where('user_post_tanggal BETWEEN '. date("'20y-m-01'") .' AND '. date("'20y-m-31'"));
      $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
  }


  public function view_join_ordering($table1,$table2,$field,$order,$ordering)
  {
    $this->db->select('*');
    $this->db->from($table1);
    $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
    $this->db->order_by($order,$ordering);
    return $this->db->get()->result_array();
  }
  public function view_where_ordering_publish($table,$data,$order,$ordering)
  {
      $this->db->where($data);
      $this->db->where('blogs_status','publish');
      $this->db->order_by($order,$ordering);
      $query = $this->db->get($table);
      return $query->result_array();
  }
  public function delete($table, $where)
  {
      return $this->db->delete($table, $where);
  }
  public function insert($table,$data)
  {
      return $this->db->insert($table, $data);
  }
  public function view_where($table,$data)
  {
      $this->db->where($data);
      return $this->db->get($table);
  }
  public function views_row($table1,$status,$order,$ordering)
  {

     $this->db->from($table1);
     $this->db->where($status,'publish');
     $this->db->order_by($order,$ordering);
     return $this->db->get()->num_rows();
   }
  public function view_one_limit($table1,$status,$order,$ordering,$baris,$dari)
  {
         $this->db->from($table1);
         $this->db->where($status,'publish');
         $this->db->order_by($order,$ordering);
         $this->db->limit($dari, $baris);
         return $this->db->get()->result();
  }


  public function viewz($table,$order,$ordering)
  {
      $this->db->from($table);
      $this->db->order_by($order,$ordering);
      return $this->db->get()->result();
  }
  public function view_one_limit_v2($table1,$status,$status2,$order,$ordering,$baris,$dari)
  {
         $this->db->from($table1);
         $this->db->where($status,'publish');
         $this->db->where($status2,'PROMO');
         $this->db->order_by($order,$ordering);
         $this->db->limit($dari, $baris);
         return $this->db->get()->result();
  }
  function update_counter_products($products_id)
  {
       //return current article views
       $this->db->where('products_judul_seo', urldecode($products_id));
       $this->db->select('products_dibaca');
       $count = $this->db->get('products')->row();
       // then increase by one
       $this->db->where('products_judul_seo', urldecode($products_id));
       $this->db->set('products_dibaca', ($count->products_dibaca + 1));
       $this->db->update('products');
   }

  function update_counter_blogs($id)
   {
        //return current article views
        $this->db->where('blogs_judul_seo', urldecode($id));
        $this->db->select('blogs_dibaca');
        $count = $this->db->get('blogs')->row();
        // then increase by one
        $this->db->where('blogs_judul_seo', urldecode($id));
        $this->db->set('blogs_dibaca', ($count->blogs_dibaca + 1));
        $this->db->update('blogs');
    }
    function update_counters($id,$table,$judul_seo,$dibaca)
   {
        
        $this->db->where($judul_seo, urldecode($id));
        $this->db->select($dibaca);
        $count = $this->db->get($table)->row();
        // then increase by one
        $this->db->where($judul_seo, urldecode($id));
        $this->db->set($dibaca, ($count->$dibaca + 1));
        $this->db->update($table);
    }

  public function view_ordering_limits($table,$order,$ordering,$baris,$dari)
    {
         $this->db->select('*');
         $this->db->from($table);
         $this->db->order_by($order,$ordering);
         $this->db->limit($dari, $baris);
         return $this->db->get()->result();
     }

  public function tambah_user($data)
   	{
   		$this->db->insert('user', $data);
   		$id = $this->db->insert_id();
   		return (isset($id)) ? $id : FALSE;
   	}

  public function tambah_user_detail($data)
   {
     $this->db->insert('user_detail', $data);
     $id = $this->db->insert_id();
     return (isset($id)) ? $id : FALSE;
   }
  public function tambah_order($data)
   {
      $this->db->insert('products_order', $data);
      $id = $this->db->insert_id();
      return (isset($id)) ? $id : FALSE;
    }

  public function tambah_detail_order($data)
	 {
		   $this->db->insert('products_order_detail', $data);
	 }

}
