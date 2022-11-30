
<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Perbarui Layanan / Services</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url()?>paneladmin/services">Layanan</a></li>
            <li class="breadcrumb-item active">Perbarui Layanan</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12 col-xs-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <?php $attributes = array('class'=>'form-horizontal','role'=>'form');
            echo form_open_multipart('paneladmin/services_update',$attributes); ?>


              <div class="card-body">
                <div class="form-group">
                  <input type="hidden" name="services_id" value="<?php echo $rows['services_id'] ?>">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Judul SEO</label>
                        <input type="text" class="form-control" name="services_judul" value="<?php echo $rows['services_judul'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" name="services_judul_konten" value="<?php echo $rows['services_judul_konten'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Harga</label>
                        <input type="number" class="form-control" name="services_harga" value="<?php echo $rows['services_harga'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-12">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 col-form-label">Kategori</label>
                    <div class="col-sm-12">
                      <select name='products_cat_id' class="form-control select2" style="width: 100%;">
                        <?php foreach ($records as $row) {
                          if ($rows['products_cat_id'] == $row['products_cat_id']){
                            echo"<option selected='selected' value='$row[products_cat_id]'>$row[products_cat_judul]</option>";
                          }else{
                            echo"<option value='$row[products_cat_id]'>$row[products_cat_judul]</option>";
                       }
                     } ?>
                    </select>
                    </div>
                  </div>
                </div></div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Isi Konten</label>
                        <textarea class="textarea"  name ="services_desk" style="width: 100%; height: 100px;"><?php echo $rows['services_desk'] ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Meta SEO</label>
                        <input type="text" class="form-control" name="services_meta_desk" value="<?php echo $rows['services_meta_desk'] ?>">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Kata kunci</label>
                        <input type="text" class="form-control tags" id="products_keyword" name="services_keyword" value="<?php echo $rows['services_keyword'] ?>">
                      <?php   $_arrNilai = explode(',', $rows['services_keyword']);
                        foreach ($tag as $tag){
                            $_ck = (array_search($tag['keyword_nama_seo'], $_arrNilai) === false)? '' : 'checked';
                         } ?>
                      </div>
                    </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Gambar Sekarang</label>
                      <div class="row">
                        <img class="img-fluid mb-3" src="<?php echo base_url()?>bahan/foto_products/<?php echo $rows['services_gambar'] ?>" alt="Photo">
                      </div>

                    </div>
                  </div>
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Gambar</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="gambar">
                          <label class="custom-file-label" for="exampleInputFile">Tambah Gambar <?php echo $rows['services_gambar'] ?></label>
                        </div>
                      </div>
                    </div>


                  </div>

                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name ="submit" class="btn btn-success" title="Update"><i class="fas fa-file-upload"></i> Perbarui</button>
                <a class="btn btn-primary" title="Batal" href="<?php echo base_url()?>paneladmin/services"><i class="fab fa-creative-commons-sa"></i> Batal</a>

              </div>
            <?php echo form_close(); ?>
          </div>


        </div>

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

</div>
  <!-- /.content-wrapper -->


<?php $this->load->view('backend/bottom')?>
