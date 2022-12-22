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
      <?php if (empty($rows['user_detail_idsession'])){ ?>

      <?php }else{ ?>
        <?php $user= $this->Crud_m->view_where('user', array('id_user'=> $rows['id_user']))->row_array(); ?>
      <div class="content container-fluid">
        <div class="page-header subscribe-head">
          <div class="row align-items-center">
            <div class="col-auto">
              <a class="btn  export-btn" href="#" data-bs-toggle="modal" data-bs-target="#add-barcode">
                <i class="fa fa-qrcode"></i> Scan Barcode
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
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
          <div class="col-lg-4 d-flex">
            <div class="card w-100">
              <center>
              <div class="card-body pt-0">
                <br>
                <img style="height:300px; width:100%;" src="<?php echo base_url()?>bahan/foto_user_detail/<?php echo $rows['user_detail_gambar'] ?>" alt="Profile Cover">
                <div class="card-header mb-4">
                  <h5 class="card-title">Selfie Photo Registration</h5>
                </div>
              </div>
            </center>
            </div>
          </div>
          <div class="col-lg-4 d-flex">
            <div class="card w-100">
              <center>
              <div class="card-body pt-0">
                <br>
                <img style="height:300px; width:100%;" src="<?php echo base_url()?>bahan/foto_user_detail/<?php echo $rows['user_detail_idcard'] ?>" alt="Profile Cover">
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
  <div class="modal fade custom-modal" id="add-barcode">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header flex-wrap">
          <h4 class="modal-title">Scan Barcode Visitor</h4>
          <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <?php $attributes = array('class'=>'form-horizontal','role'=>'form');
          echo form_open_multipart('paneluser/home',$attributes); ?>
          <div class="form-group">
            <label>Scan Barcode</label>
            <input class="form-control" type="text" name="user_detail_idsession">
          </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
  <?php $this->load->view('backend/js')?>
</body>
</html>
