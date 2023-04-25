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
              <h3 class="page-title">Edit Tenant</h3>       
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-body pt-0">
                  <div class="card-header">
                    <h5 class="card-title">Tenant Details</h5>
                  </div>
                  <?php $attributes = array('class'=>'form-horizontal','role'=>'form');
                    echo form_open_multipart('paneluser/tenantedit',$attributes); ?>
                    <input type="hidden" name="user_tenant_id_session" value="<?php echo $rows['user_tenant_id_session'] ?>">
                    <div class="settings-form">
                      <div class="form-group">
                        <label>Tenant Name <span class="star-red">*</span></label>
                        <input type="text" class="form-control" name="user_tenant_nama" value="<?php echo $rows['user_tenant_nama'] ?>">
                      </div>
                      <?php $b = explode(",", $rows['user_tenant_floor']); ?>
                      
                      <div class="form-group">
                          <label>Number Floor</label> 
                          <div class="row">
                            <div class="col-lg-9">
                              <div class="form-check form-check-inline">
                                <div>
                                  <input type="checkbox" name="floor_list[]" value="1" <?php if (in_array("1", $b)) {echo "checked";}?> />
                                  <label for="1">01</label>
                                </div>
                              </div>
                              <div class="form-check form-check-inline">
                                <div>
                                  <input type="checkbox" name="floor_list[]" value="2" <?php if (in_array("2", $b)) {echo "checked";}?> />
                                  <label for="2">02</label>
                                </div>
                              </div>
                              <div class="form-check form-check-inline">
                                <div>
                                  <input type="checkbox" name="floor_list[]" value="3" <?php if (in_array("3", $b)) {echo "checked";}?> />
                                  <label for="3">03</label>
                                </div>
                              </div>
                              <div class="form-check form-check-inline">
                                <div>
                                  <input type="checkbox" name="floor_list[]" value="4" <?php if (in_array("4", $b)) {echo "checked";}?> />
                                  <label for="4">04</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-9">
                            <div class="form-check form-check-inline">
                                <div>
                                  <input type="checkbox" name="floor_list[]" value="5" <?php if (in_array("5", $b)) {echo "checked";}?> />
                                  <label for="5">05</label>
                                </div>
                              </div>
                              <div class="form-check form-check-inline">
                                <div>
                                  <input type="checkbox" name="floor_list[]" value="6" <?php if (in_array("6", $b)) {echo "checked";}?> />
                                  <label for="6">06</label>
                                </div>
                              </div>
                              <div class="form-check form-check-inline">
                                <div>
                                  <input type="checkbox" name="floor_list[]" value="7" <?php if (in_array("7", $b)) {echo "checked";}?> />
                                  <label for="7">07</label>
                                </div>
                              </div>
                              <div class="form-check form-check-inline">
                                <div>
                                  <input type="checkbox" name="floor_list[]" value="8" <?php if (in_array("8", $b)) {echo "checked";}?> />
                                  <label for="8">08</label>
                                </div>
                              </div>                              
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-9">
                            <div class="form-check form-check-inline">
                                <div>
                                  <input type="checkbox" name="floor_list[]" value="9" <?php if (in_array("9", $b)) {echo "checked";}?> />
                                  <label for="9">09</label>
                                </div>
                              </div>
                              <div class="form-check form-check-inline">
                                <div>
                                  <input type="checkbox" name="floor_list[]" value="10" <?php if (in_array("10", $b)) {echo "checked";}?> />
                                  <label for="10">10</label>
                                </div>
                              </div>
                              <div class="form-check form-check-inline">
                                <div>
                                  <input type="checkbox" name="floor_list[]" value="11" <?php if (in_array("11", $b)) {echo "checked";}?> />
                                  <label for="11">11</label>
                                </div>
                              </div>
                              <div class="form-check form-check-inline">
                                <div>
                                  <input type="checkbox" name="floor_list[]" value="12" <?php if (in_array("12", $b)) {echo "checked";}?> />
                                  <label for="12">12</label>
                                </div>
                              </div>                              
                            </div>
                          </div>                            
                      </div>             
                      <div>                       
                        <div class="form-group mb-0">
                          <div class="settings-btns">
                            <button type="submit" name ="submit" class="btn btn-orange">Update</button>
                            <a href="../tenantssetting" class="btn btn-grey"><i class="fab fa-creative-commons-sa"></i>Cancel</a>
                          </div>
                        </div>
                    </div>
                   <?php echo form_close(); ?>
                </div>
              </div>
              </div>          
            </div>        
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
                        <th>Status</th>
                        <th>Modified by</th>
                        <th>Modified Dated</th>
                        <th>IP & Device</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $record_logs = $this->Crud_m->view_where_ordering2('user_log',array('user_log_ket'=>$rows['user_tenant_id_session']),'user_log_id','DESC');                  
                        $no = 1;
                        foreach ($record_logs as $row){                        
                      ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td>
                          <?php echo $row['user_log_status'] ?>
                          </td>
                          <?php $user= $this->Crud_m->view_where('user', array('id_session'=> $row['id_user']))->row_array(); ?>                 
                          <td><?php echo $user['nama'] ?></td>
                          <td><?php echo $row['user_log_hari'] ?>, <?php echo $row['user_log_tanggal'] ?> <?php echo $row['user_log_jam'] ?></td>
                          <td><?php echo $row['user_log_ip'] ?> <?php echo $row['user_log_device'] ?></td>
                     
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

    
 <?php $this->load->view('backend/js')?>
</body>
</html>