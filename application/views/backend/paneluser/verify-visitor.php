<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>VMS Panel | Verify Visitor</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	<?php $this->load->view('backend/css')?>
</head>
<body>

  <div class="main-wrapper">
    <?php $this->load->view('backend/header')?>
    <?php $this->load->view('backend/menu')?>
    <div class="page-wrapper">
      <div class="content container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body pb-0">
                <?php $attributes = array('class'=>'form-horizontal','role'=>'form');
                echo form_open_multipart('paneluser/home',$attributes); ?>
                  <div class="row filter-row">
                    <div class="col-md-12">
                      Scan Visitors Barcode
                    </div>
                    <div class="col-sm-12 col-md-12">
                      <div class="form-group">
                        <input class="form-control" type="text" name="user_detail_idsession">
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                      <div class="form-group">
                        <button class="btn btn-primary btn-block" name="submit" type="submit">Submit</button>
                      </div>
                    </div>
                  </div>
                <?php echo form_close(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php if (empty($rows['user_detail_idsession'])){ ?>

      <?php }else{ ?>
        <?php $user= $this->Crud_m->view_where('user', array('id_user'=> $rows['id_user']))->row_array(); ?>
      <div class="content container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body pt-0">
                <div class="card-header mb-4">
                  <h5 class="card-title d-flex justify-content-between">
                    <span>Visit Registration Data</span>
                  </h5>
                </div>
              <ul class="list-unstyled mb-0">
                <li class="py-0">
                  <small class="text-dark">Full Name</small>
                </li>
                <li>
                  <?php echo $user['nama'] ?>
                </li>
                <li class="pt-2 pb-0">
                  <small class="text-dark">Phone Number</small>
                </li>
                <li>
                  <?php echo $rows['user_detail_notlp'] ?>
                </li>
                <li class="pt-2 pb-0">
                  <small class="text-dark">Designation</small>
                </li>
                <li>
                  <?php echo $rows['user_detail_contactto'] ?>
                </li>
                <li class="pt-2 pb-0">
                  <small class="text-dark">Tenant</small>
                </li>
                <li>
                  <?php $tenant= $this->Crud_m->view_where('user_tenant', array('user_tenant_id'=> $rows['user_tenant_id']))->row_array(); ?>
                  <?php echo $tenant['user_tenant_nama'] ?>
                </li>
                <li class="pt-2 pb-0">
                  <small class="text-dark">Floor Tenant</small>
                </li>
                <li>
                  <?php echo $rows['user_detail_floor'] ?>
                </li>
                <li class="pt-2 pb-0">
                  <small class="text-dark">Visit Date</small>
                </li>
                <li>
                  <?php echo $rows['user_detail_vdatefrom'] ?>
                </li>
                <li class="pt-2 pb-0">
                  <small class="text-dark">Purpose Of The Visit</small>
                </li>
                <li>
                  <?php echo $rows['user_detail_reason'] ?>
                </li>
              </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex">
            <div class="card w-100">
              <center>
              <div class="card-body pt-0">
                <br>
                <img style="height:400px; width:100%;" src="<?php echo base_url()?>bahan/foto_user_detail/<?php echo $rows['user_detail_gambar'] ?>" alt="Profile Cover">
                <div class="card-header mb-4">
                  <h5 class="card-title">Selfie Photo Registration</h5>
                </div>
              </div>
              <div class="card-body pt-0">
                <br>
                <img style="height:200px; width:100%;" src="<?php echo base_url()?>bahan/foto_user_detail/<?php echo $rows['user_detail_idcard'] ?>" alt="Profile Cover">
                <div class="card-header mb-4">
                  <h5 class="card-title">Indonesian Identity Card</h5>
                </div>
              </div>
            </center>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <a href="#" type="button" class="btn btn-warning btn-block" style="color:white;">INVALID</a>
          </div>
          <div class="col-lg-3 col-sm-6">
            <a href="#" type="button" class="btn btn-success btn-block">APPROVED</a>
          </div>

        </div>
      <br>
      <br>
      </div>
    <?php } ?>
    </div>
  </div>
  <?php $this->load->view('backend/js')?>
</body>
</html>
