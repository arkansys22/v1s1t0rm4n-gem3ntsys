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

                      <?php $user_detail= $this->Crud_m->view_where('user_detail', array('id_session'=> $rows['id_session']))->row_array(); ?>
                      <div class="form-group">
                        <label>Tenant Name <span class="star-red">*</span></label>
                        <select name='user_tenant_id_session' class="form-control select2" style="width: 100%;">
                            <?php foreach ($records_tenant as $row) {
                              if ($user_detail['user_tenant_id_session'] == $row['user_tenant_id_session']){
                                echo"<option selected='selected' value='$row[user_tenant_id_session]'>$row[user_tenant_nama]</option>";
                              }else{
                                echo"<option value='$row[user_tenant_id_session]'>$row[user_tenant_nama]</option>";
                           }
                         } ?>
                        </select>
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
                        $record_logs = $this->Crud_m->view_where_ordering2('user_log',array('user_log_ket'=>$rows['id_session']),'user_log_id','DESC');                  
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