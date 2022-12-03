<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
  <title>aSPanel | Sign up tenant to VMS</title>
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
<h2>Tenant Registration</h2>
</div>
<?php echo form_open('signup-tenant'); ?>
<div class="row">
  <div class="col-md-12 col-lg-6 col-xl-6 ">
    <div class="form-group form-focus">
      <input type="text" class="form-control floating" name="nama" required>
      <label class="focus-label">Name</label>
    </div>
    <small><?php echo form_error('nama'); ?></small>
  </div>
  <div class="col-md-12 col-lg-6 col-xl-6 ">
    <div class="form-group form-focus">
      <input type="email" class="form-control floating" name="email" required>
      <label class="focus-label">Email Address</label>
    </div>
    <small><?php echo form_error('email'); ?></small>
  </div>
  <div class="col-md-12 col-lg-6 col-xl-6 ">
    <div class="form-group form-focus">
      <input type="password" class="form-control floating" name="password" required>
      <label class="focus-label">Password</label>
    </div>
    <small><?php echo form_error('password'); ?></small>
  </div>
  <div class="col-md-12 col-lg-6 col-xl-6 ">
    <div class="form-group form-focus">
      <input type="text" class="form-control floating" name="user_tenant_nama" required>
      <label class="focus-label">Tenant Name</label>
    </div>
    <small><?php echo form_error('user_tenant_nama'); ?></small>
  </div>
</div>
<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Submit</button>

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
