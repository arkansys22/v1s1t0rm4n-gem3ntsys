<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
  <title>aSPanel | Log in to VMS</title>
  <?php $this->load->view('frontend/css')?>
</head>
<body class="account-page">
<div class="main-wrapper">
<div class="content">
<div class="container">
<div class="row">
<div class="col-md-6 offset-md-3">

<div class="account-content">
<div class="align-items-center justify-content-center">
<div class="login-right">
<div class="login-header text-center">
<a href="index.html"><img src="<?php echo base_url() ?>bahan/frontend/template/img/logo-01.png" alt="" class="img-fluid"></a>
<h2>Log in to VMS</h2>
<?php echo $this->session->flashdata('user_registered'); ?>
<?php echo $this->session->flashdata('login_failed'); ?>
<?php echo $this->session->flashdata('user_loggedout'); ?>
</div>
<?php echo form_open('login'); ?>
<div class="form-group form-focus">
<input type="text" class="form-control floating" name="email">
<label class="focus-label">Email</label>
</div>
<div class="form-group form-focus">
<input type="password" class="form-control floating" name="password">
<label class="focus-label">Password</label>
</div>
<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Log in</button>
<div class="row">
  <div class="col-6 text-start">
    <a class="forgot-link" href="#">Forgotten password ?</a>
  </div>
  <div class="col-6 text-end dont-have"><a href="regist-visitor">Visit Registration</a></div>
</div>

<?php echo form_close(); ?>
</div>
</div>
</div>

</div>
</div>
</div>
</div></div>
<?php $this->load->view('frontend/js')?>
</body>

<!-- Mirrored from kofejob.dreamguystech.com/template/chats.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 06:53:28 GMT -->
</html>
