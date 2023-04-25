<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>VMS Panel | Dashboard Administrator</title>
<?php $this->load->view('backend/css')?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>
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
              <h3 class="page-title">Visitor</h3>       
              </div>
            </div>
          </div>     
          <?php $user_detail= $this->Crud_m->view_where('user_detail', array('id_session'=> $rows['id_session']))->row_array(); ?>
          <div class="row">
              <div class="col-lg-3">
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
                      <?php echo $rows['nama'] ?>
                    </li>
                    <li class="pt-2 pb-0">
                      <small class="text-dark">Phone Number</small>
                    </li>
                    <li>
                      <?php echo $user_detail['user_detail_notlp'] ?>
                    </li>
                    <li class="pt-2 pb-0">
                      <small class="text-dark">Designation</small>
                    </li>
                    <li>
                      <?php echo $user_detail['user_detail_contactto'] ?>
                    </li>
                    <li class="pt-2 pb-0">
                      <small class="text-dark">Tenant</small>
                    </li>
                    <li>
                      <?php $tenant= $this->Crud_m->view_where('user_tenant', array('user_tenant_id'=> $user_detail['user_tenant_id']))->row_array(); ?>
                      <?php echo $tenant['user_tenant_nama'] ?>
                    </li>
                    <li class="pt-2 pb-0">
                      <small class="text-dark">Floor Tenant</small>
                    </li>
                    <li>
                      <?php echo $user_detail['user_detail_floor'] ?>
                    </li>
                    <li class="pt-2 pb-0">
                      <small class="text-dark">Visit Date</small>
                    </li>
                    <li>
                      <?php echo $user_detail['user_detail_vdatefrom'] ?>
                    </li>
                    <li class="pt-2 pb-0">
                      <small class="text-dark">Purpose Of The Visit</small>
                    </li>
                    <li>
                      <?php echo $user_detail['user_detail_reason'] ?>
                    </li>
                  </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 d-flex">
                <div class="card w-100">
                  <center>
                  <div class="card-body pt-0">
                    <br>
                    <?php if ( empty($user_detail['user_detail_gambar'])) { ?> 
                      <img style="height:400px; width:100%;" src="<?php echo base_url()?>bahan/backend/foto/user-default.png">
                    <?php }else{?>
                      <img style="height:400px; width:100%;" src="<?php echo base_url()?>bahan/foto_user_detail/<?php echo $user_detail['user_detail_gambar'] ?>">

                    <?php }?>
                    <div class="card-header mb-4">
                      <h5 class="card-title">Selfie Photo Registration</h5>
                    </div>
                  </div>
                </center>
                </div>
              </div>
              <div class="col-lg-3 d-flex">
                <div class="card w-100">
                  <center>
                  <div class="card-body pt-0">
                  <?php if (empty($rows['gambar'])){ ?>
                    <br>
                    <div id="my_camera"></div>
                    <br/>                    
                    <div id="results">Your captured image will appear here...</div>
                    <div class="card-header mb-4">
                      <input type= "button" value="Take Snapshot" onClick="take_snapshot()">
                      <h5 class="card-title">Selfie Photo Confirm</h5>
                    </div>
                  <?php }else{ ?>
                        <br>
                      <img style="height:200px; width:100%;" src="<?php echo base_url()?>bahan/foto_user_detail/<?php echo $rows['gambar'] ?>">
                      <div class="card-header mb-4">
                        <h5 class="card-title">Selfie Photo Confirm</h5>
                      </div>
                  <?php } ?>                    
                     
                  </div>
                </center>
                </div>
              </div>
              <div class="col-lg-3 d-flex">
                <div class="card w-100">
                  <center>
                  <div class="card-body pt-0">
                    <br>
                    <?php if ( empty($user_detail['user_detail_gambar'])) { ?> 
                      <img style="height:400px; width:100%;" src="<?php echo base_url()?>bahan/backend/foto/idcard-default.png">
                    <?php }else{?>
                    <img style="height:200px; width:100%;" src="<?php echo base_url()?>bahan/foto_user_detail/<?php echo $user_detail['user_detail_idcard'] ?>" alt="Profile Cover">
                    <?php }?>
                    <div class="card-header mb-4">
                      <h5 class="card-title">Indonesian Identity Card</h5>
                    </div>
                  </div>
                </center>
                </div>
              </div>

              <?php $attributes = array('class'=>'form-horizontal','role'=>'form');
                    echo form_open_multipart('paneluser/visitor_edit',$attributes); ?>
              <div>
              
                    <input type="hidden" name="id_session" value="<?php echo $rows['id_session']
                     ?>">
                   
                     <input type="hidden" name="imagecam" class="image-tag">
                 

                    
                 
                <div class="form-group mb-0">
                    <div class="settings-btns">
                      <button type="submit" name ="submit" class="btn btn-orange">Verified</button>
                      <a href="../visitor_list" class="btn btn-grey">Cancel</a>
                    </div>
                </div>
              </div>
              <?php echo form_close(); ?>
          </div>
          <br><br>

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

      <?php if (empty($rows['gambar'])){ ?>
    <script language="JavaScript">
        Webcam.set({
            width: 200,
            height: 200,
            image_format: 'jpeg',
            jpeg_quality: 90
        });
      
        Webcam.attach( '#my_camera' );

          function take_snapshot() {
            Webcam.snap( function(data_uri) {
                $(".image-tag").val(data_uri);
                document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
         
            } );
             }
    </script>
        <?php }else{ ?>

         <?php } ?>   
    
 <?php $this->load->view('backend/js')?>
</body>
</html>