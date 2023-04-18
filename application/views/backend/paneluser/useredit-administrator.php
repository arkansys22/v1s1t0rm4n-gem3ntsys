<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>VMS Panel | Dashboard Administrator</title>
<?php $this->load->view('backend/css')?>
</head>
<body>

    <div class="main-wrapper">
      <?php $this->load->view('backend/header')?>
      <?php $this->load->view('backend/menu')?>


      <div class="page-wrapper">
        <div class="content container-fluid">

          <div class="page-header">
            <div class="row">
              <div class="col-sm-6">
              <h3 class="page-title">Edit User</h3>       
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-body pt-0">
                  <div class="card-header">
                    <h5 class="card-title">User Details</h5>
                  </div>
                  <?php $attributes = array('class'=>'form-horizontal','role'=>'form');
                    echo form_open_multipart('paneluser/useredit',$attributes); ?>
                    <input type="hidden" name="id_session" value="<?php echo $rows['id_session'] ?>">
                    <div class="settings-form">
                      <div class="form-group">
                        <label>Name <span class="star-red">*</span></label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $rows['nama'] ?>">
                      </div>
                      <div class="form-group">
                        <label>Email <span class="star-red">*</span></label>
                        <input type="email" class="form-control" name="email" value="<?php echo $rows['email'] ?>">
                      </div>
                      <div class="form-group">
                        <label>Password <span class="star-red">*</span></label>
                        <input type="password" class="form-control" name="password">
                      </div>
                      <div class="form-group">
                        <label>Level</label>
                        <select class="form-control form-select" name="level">
                        <?php if ($rows['level'] == '2') { ?>
                        <option value="2">Administrator</option>                        
                        <option value="3">Tenant</option>
                        <?php }else{?>                                                
                        <option value="3">Tenant</option>
                        <option value="2">Administrator</option>  
                        <?php } ?>
                        </select>
                        <small><?php echo form_error('level'); ?></small>
                      </div>                        
                      <div>                       
                        <div class="form-group mb-0">
                          <div class="settings-btns">
                            <button type="submit" name ="submit" class="btn btn-orange">Update</button>
                            <a href="../usersettings" class="btn btn-grey"><i class="fab fa-creative-commons-sa"></i>Cancel</a>
                          </div>
                        </div>
                    </div>
                   <?php echo form_close(); ?>
                </div>
              </div>
            </div>          
            </div>        
          </div>

      </div>
    </div>


    <div class="modal fade custom-modal" id="add-user">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header flex-wrap">
            <div class="text-center w-100 mb-3">
            <img src="assets/img/logo-small.png" alt="">
            </div>
            <h4 class="modal-title">Add New User</h4>
            <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
          </div>
          <div class="modal-body">
            <?php $attributes = array('class'=>'form-horizontal','role'=>'form');
            echo form_open_multipart('paneluser/usersettings',$attributes); ?>
            
            <div class="form-group">
              <label>Full Name</label>
              <input type="text" class="form-control floating" name="nama" value="<?php echo set_value('nama') ?>">
              <small><?php echo form_error('nama'); ?></small>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control floating" name="email" value="<?php echo set_value('email') ?>">
              <small><?php echo form_error('email'); ?></small>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control floating" name="password" value="<?php echo set_value('password') ?>">
              <small><?php echo form_error('password'); ?></small>
            </div>
            <div class="form-group">
              <label>Confirm Password</label>
              <input type="password" class="form-control floating" name="password2" value="<?php echo set_value('password2') ?>">
              <small><?php echo form_error('password2'); ?></small>
            </div>
            <div class="form-group">
            <label>Level</label>
            <select class="form-control form-select" name="level">           
            <option></option>
            <option value="2">Administrator</option>
            <option value="3">Tenant</option>
            </select>
            <small><?php echo form_error('level'); ?></small>
            </div>
            <div class="mt-4">
            <button class="btn btn-primary btn-block btn-lg login-btn" name="submit" type="submit">Submit</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
   
    
 <?php $this->load->view('backend/js')?>
</body>
</html>