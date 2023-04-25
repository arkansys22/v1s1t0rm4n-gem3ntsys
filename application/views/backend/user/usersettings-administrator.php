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

        <div class="settings-menu-links">
          <ul class="nav nav-tabs menu-tabs">
            <li class="nav-item ">
              <a class="nav-link" href="<?php echo base_url() ?>paneluser/cnfig/#">Profile Settings</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url() ?>paneluser/usersettings/#">User Settings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>paneluser/tenantssetting/#">Tenant Settings</a>
            </li>
          </ul>
        </div>
        <div class="col-auto">
          <a class="btn  add-user" href="#" data-bs-toggle="modal" data-bs-target="#add-user">
          <i class="fas fa-plus "></i> Add User
          </a>
        </div>
        <br>

        <div class="subscribe-employe users-list">
          <ul>
            <li class="active"><a href="#">Active Users </a></li>
            <li><a href="#">Inactive Users</a></li>
          </ul>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <div class="table-responsive">
                    <table class="table table-center table-hover mb-0 datatable">
                    <thead>
                      <tr>
                      <th></th>
                      <th>Name</th>
                      <th>Level</th>
                      <th>Last Online</th>
                      <th class="text-end">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      $no = 1;
                      foreach ($record as $row){
                        
                    ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td>
                        <?=$row['nama']?>
                        </td>
                        <?php $level= $this->Crud_m->view_where('user_level', array('user_level_id'=> $row['level']))->row_array(); ?>
                        <td><?=$level['user_level_nama']?></td>
                        <td><?=$row['user_login_tanggal']?> <?=$row['user_login_jam']?></td>
                        <td class="text-end">
                        <a href="<?php echo base_url()?>paneluser/useredit/<?=$row['id_session']?>" class="btn btn-sm btn-secondary me-2"><i class="far fa-edit"></i></a>

                        <?php  
                          echo" <a class='btn btn-sm btn-danger' href='".base_url()."paneluser/user_delete_temp/$row[id_session]' onclick=\"return confirm('Are you sure want to delete this $row[nama]?')\"><i class='far fa-trash-alt'></i>
                        </a>";
                        ?>                       
                        </td>
                      </tr>
                    
                    
                    <?php } ?>
                    </tbody>
                    </table>
                  </div>
                </div>
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
            <div class="form-group">
            <label>Tenant</label>
            <select class="form-control form-select" name="user_tenant_id_session">           
            <option></option>
            <?php foreach ($records_tenant as $row) { ?>
            <option value="<?php echo $row['user_tenant_id_session'] ?>"> <?php echo $row['user_tenant_nama'] ?>
            </option>
            <?php } ?>
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