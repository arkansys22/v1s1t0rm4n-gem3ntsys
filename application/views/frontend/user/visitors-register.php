<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
  <title>aSPanel | Sign up to VMS</title>
  <?php $this->load->view('frontend/css')?>
</head>
<body class="account-page">
<div class="main-wrapper">
<div class="container">
  <br><br>
<div class="account-content">
<div class="align-items-center justify-content-center">
<div class="login-right">
<div class="login-header text-center">
<a href="#"><img src="<?php echo base_url() ?>bahan/frontend/template/img/logo-01.png" alt="" class="img-fluid"></a>
<h2>Visitor Registration Form</h2>
</div>
<?php $attributes = array('class'=>'form-horizontal','role'=>'form');
echo form_open_multipart('regist-visitor',$attributes); ?>
<div class="row">
  <div class="col-md-12 col-lg-6 col-xl-6 ">
    <div class="form-group form-focus">
      <input type="text" class="form-control floating" name="nama" value="<?php echo set_value('nama') ?>">
      <label class="focus-label">Name</label>
    </div>
    <small><?php echo form_error('nama'); ?></small>
  </div>
  <div class="col-md-12 col-lg-6 col-xl-6 ">
    <div class="form-group form-focus">
      <input type="text" class="form-control floating" name="user_detail_notlp" value="<?php echo set_value('user_detail_notlp') ?>">
      <label class="focus-label">Phone Number</label>
    </div>
    <small><?php echo form_error('user_detail_notlp'); ?></small>
  </div>
  <div class="col-md-12 col-lg-6 col-xl-6 ">
    <div class="form-group form-focus">
      <div class="pro-form-img">
      <img src="<?php echo base_url() ?>bahan/frontend/image/selfie.png" alt="User Image">
      <label class="file-upload image-upbtn ">
      Your Photo Selfie
      <input type="file" accept="image/*" capture="camera" name="user_detail_gambar">
      </label>
      </div>
    </div>
    <small><?php echo form_error('user_detail_gambar'); ?></small>
  </div>
  <div class="col-md-12 col-lg-6 col-xl-6 ">
    <div class="form-group form-focus">
      <div class="pro-form-img">
      <img src="<?php echo base_url() ?>bahan/frontend/image/ktp.png" alt="Indonesian Identity Card">
      <label class="file-upload image-upbtn ">
     Your Photo Indonesian Identity Card
      <input type="file" accept="image/*" capture="camera" name="user_detail_idcard">
      </label>
      </div>
    </div>
    <small><?php echo form_error('user_detail_idcard'); ?></small>
  </div>
  <div class="col-md-12 col-lg-6 col-xl-6 ">
    <div class="form-group form-focus">
      <input type="email" class="form-control floating" name="email" value="<?php echo set_value('email') ?>">
      <label class="focus-label">Email Address</label>
    </div>
    <small><?php echo form_error('email'); ?></small>
  </div>
  <div class="col-md-12 col-lg-6 col-xl-6 ">
    <div class="form-group form-focus">
      <input type="text" class="form-control floating" name="user_detail_contactto" value="<?php echo set_value('user_detail_contactto') ?>">
      <label class="focus-label">Designation</label>
    </div>
    <small><?php echo form_error('user_detail_contactto'); ?></small>
  </div>
  <div class="col-md-12 col-lg-6 col-xl-6 ">
    <div class="form-group form-focus">
      <select name="user_tenant_id" class="form-control select-level" id="business-type">
      <option value="" selected>Select Tenant</option>
      <option value="1">PT. Sukses Berangin angin</option>
      <option value="2">PT. Makmur Sedekah</option>
      </select>
      <label class="focus-label">Tenant</label>
    </div>
    <small><?php echo form_error('user_tenant_id'); ?></small>
  </div>
  <div class="col-md-12 col-lg-6 col-xl-6 ">
    <div class="form-group form-focus">
      <select name="user_detail_floor" class="form-control select-level" id="business-type">
      <option value="" selected>Select Floor Tenant</option>
      <option value="Lantai 1">Lantai 1</option>
      <option value="Lantai 2">Lantai 2</option>
      </select>
      <label class="focus-label">Floor Tenant</label>
    </div>
    <small><?php echo form_error('user_detail_floor'); ?></small>
  </div>
  <div class="col-md-12 col-lg-6 col-xl-6 ">
    <div class="form-group form-focus">
      <input type="date" name="user_detail_vdatefrom" class="form-control" value="<?php echo set_value('user_detail_vdatefrom') ?>">
      <label class="focus-label">Visit Date From</label>
    </div>
    <small><?php echo form_error('user_detail_vdatefrom'); ?></small>
  </div>
  <div class="col-md-12 col-lg-6 col-xl-6 ">
    <div class="form-group form-focus">
      <input type="date" name="user_detail_vdateend" class="form-control" value="<?php echo set_value('user_detail_vdateend') ?>">
      <label class="focus-label">Visit Date End</label>
    </div>
    <small><?php echo form_error('user_detail_vdateend'); ?></small>
  </div>
  <div class="col-md-12 col-lg-6 col-xl-6 ">
    <div class="form-group form-focus">
      <input type="text" class="form-control" name="user_detail_reason"  value="<?php echo set_value('user_detail_reason') ?>">
      <label class="focus-label">Purpose Of The Visit</label>
    </div>
    <small><?php echo form_error('user_detail_reason'); ?></small>
  </div>
</div>
<button class="btn btn-primary btn-block btn-lg login-btn" name="submit" type="submit">Submit</button>

<?php echo form_close(); ?>
</div>
</div>
</div>

</div></div>
<br>
<br>
<script src="<?php echo base_url()?>bahan/frontend/template/js/bootstrap-datetimepicker.min.js"></script>
<?php $this->load->view('frontend/js')?>
</body>
</html>
