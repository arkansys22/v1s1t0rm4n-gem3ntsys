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
            <li class="nav-item ">
              <a class="nav-link" href="<?php echo base_url() ?>paneluser/usersettings/#">User Settings</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url() ?>paneluser/tenantssetting/#">Tenant Settings</a>
            </li>
          </ul>
        </div>
        <div class="col-auto">
          <a class="btn  add-user" href="#" data-bs-toggle="modal" data-bs-target="#add-tenant">
          <i class="fas fa-plus "></i> Add Tenant
          </a>
        </div>
        <br>

        <div class="subscribe-employe users-list">
          <ul>
            <li class="active"><a href="<?php echo base_url() ?>paneluser/tenantssetting/">Active Tenant </a></li>
            <li><a href="<?php echo base_url() ?>paneluser/tenantssettinginactive/">Inactive Tenant</a></li>
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
                      <th>Tenant Name</th>
                      <th>Tenant Floor</th>
                      <th>Status</th>
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
                        <?=$row['user_tenant_nama']?>
                        </td>
                        <td><?=$row['user_tenant_floor']?></td>
                        <td><?=$row['user_tenant_status']?></td>
                        <td class="text-end">
                        <a href="<?php echo base_url()?>paneluser/tenantedit/<?=$row['user_tenant_id_session']?>" class="btn btn-sm btn-secondary me-2"><i class="far fa-edit"></i></a>

                        <?php  
                          echo" <a class='btn btn-sm btn-danger' href='".base_url()."paneluser/tenant_delete_temp/$row[user_tenant_id_session]' onclick=\"return confirm('Are you sure want to delete this $row[user_tenant_nama]?')\"><i class='far fa-trash-alt'></i>
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


    <div class="modal fade custom-modal" id="add-tenant">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header flex-wrap">
            <div class="text-center w-100 mb-3">
            <img src="assets/img/logo-small.png" alt="">
            </div>
            <h4 class="modal-title">Add New Tenant</h4>
            <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
          </div>
          <div class="modal-body">
            <?php $attributes = array('class'=>'form-horizontal','role'=>'form');
            echo form_open_multipart('paneluser/tenantssetting',$attributes); ?>
            <div class="form-group">
              <label>Tenant Name</label>
              <input type="text" class="form-control floating" name="user_tenant_nama" value="<?php echo set_value('user_tenant_nama') ?>">
              <small><?php echo form_error('user_tenant_nama'); ?></small>
            </div>
            <div class="form-group">      
              <label>Number Floor</label>
              <div class="row">
                              <div class="col-lg-9">
                                <div class="form-check form-check-inline">
                                  <div>
                                    <input type="checkbox" name="floor_list[]" value="1" />
                                    <label for="1">01</label>
                                  </div>
                                </div>
                                <div class="form-check form-check-inline">
                                  <div>
                                    <input type="checkbox" name="floor_list[]" value="2" />
                                    <label for="2">02</label>
                                  </div>
                                </div>
                                <div class="form-check form-check-inline">
                                  <div>
                                    <input type="checkbox" name="floor_list[]" value="3" />
                                    <label for="3">03</label>
                                  </div>
                                </div>
                                <div class="form-check form-check-inline">
                                  <div>
                                    <input type="checkbox" name="floor_list[]" value="4" />
                                    <label for="4">04</label>
                                  </div>
                                </div>
                              </div>
              </div>
              <div class="row">
                              <div class="col-lg-9">
                                <div class="form-check form-check-inline">
                                  <div>
                                    <input type="checkbox" name="floor_list[]" value="5" />
                                    <label for="5">05</label>
                                  </div>
                                </div>
                                <div class="form-check form-check-inline">
                                  <div>
                                    <input type="checkbox" name="floor_list[]" value="6" />
                                    <label for="6">06</label>
                                  </div>
                                </div>
                                <div class="form-check form-check-inline">
                                  <div>
                                    <input type="checkbox" name="floor_list[]" value="7" />
                                    <label for="7">07</label>
                                  </div>
                                </div>
                                <div class="form-check form-check-inline">
                                  <div>
                                    <input type="checkbox" name="floor_list[]" value="8" />
                                    <label for="8">08</label>
                                  </div>
                                </div>
                              </div>
              </div>    
              <div class="row">
                              <div class="col-lg-9">
                                <div class="form-check form-check-inline">
                                  <div>
                                    <input type="checkbox" name="floor_list[]" value="9" />
                                    <label for="9">09</label>
                                  </div>
                                </div>
                                <div class="form-check form-check-inline">
                                  <div>
                                    <input type="checkbox" name="floor_list[]" value="10" />
                                    <label for="10">10</label>
                                  </div>
                                </div>
                                <div class="form-check form-check-inline">
                                  <div>
                                    <input type="checkbox" name="floor_list[]" value="11" />
                                    <label for="11">11</label>
                                  </div>
                                </div>
                                <div class="form-check form-check-inline">
                                  <div>
                                    <input type="checkbox" name="floor_list[]" value="12" />
                                    <label for="12">12</label>
                                  </div>
                                </div>
                              </div>              
              </div>
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