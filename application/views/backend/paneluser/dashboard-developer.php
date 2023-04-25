<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>VMS Panel | Dashboard Administrator</title>
<?php $this->load->view('backend/css')?>
</head>
<?php $appointment = $this->Panel_m->view_where_this_today('user',array('user_status'=>'2'))->num_rows(); ?>
<?php $lobby = $this->Panel_m->view_where_this_today('user',array('user_status'=>'1'))->num_rows(); ?>
<?php $checkin = $this->Panel_m->view_where_this_today('user',array('user_status'=>'3'))->num_rows(); ?>
<?php $thismonth = $this->Panel_m->view_where_this_month('user',array('user_status'=>'3'))->num_rows(); ?>
<?php $thisyear = $this->Panel_m->view_where_this_year('user',array('user_status'=>'3'))->num_rows(); ?>
<?php $users= $this->Crud_m->view_where('user', array('email'=> $this->session->email))->row_array(); ?>
<?php $users_detail= $this->Crud_m->view_where('user_detail', array('id_session'=> $users['id_session']))->row_array(); ?>
<?php $users_tenant= $this->Crud_m->view_where('user_tenant', array('user_tenant_id_session'=> $users_detail['user_tenant_id_session']))->row_array(); ?>
<body>

    <div class="main-wrapper">
      <?php $this->load->view('backend/header')?>
      <?php $this->load->view('backend/menu')?>


      <div class="page-wrapper">
        <div class="content container-fluid">

          <div class="page-header">
            <div class="row">
              <div class="col-sm-6">
              <h3 class="page-title">Dashboard Developer</h3>       
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <p><h3>Today</h3></p>
              <div class="row">
                <div class="col-md-4 d-flex">
                  <div class="card wizard-card flex-fill">
                    <div class="card-body">
                    <p class="text-primary mt-0 mb-2">Visitors Appointment</p>
                    <h5><?php echo $appointment; ?></h5>
                    <p><a href="#">view details</a></p>
                    <span class="dash-widget-icon bg-1">
                    <i class="fas fa-users"></i>
                    </span>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 d-flex">
                  <div class="card wizard-card flex-fill">
                    <div class="card-body">
                      <p class="text-primary mt-0 mb-2">Visitors On Lobby</p>
                      <h5><?php echo $lobby; ?></h5>
                      <p><a href="#">view details</a></p>
                      <span class="dash-widget-icon bg-1">
                        <i class="fas fa-th-large"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 d-flex">
                  <div class="card wizard-card flex-fill">
                    <div class="card-body">
                      <p class="text-primary mt-0 mb-2">Visitors Check In</p>
                      <h5><?php echo $checkin; ?></h5>
                      <p><a href="#">view details</a></p>
                      <span class="dash-widget-icon bg-1">
                        <i class="fas fa-bezier-curve"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <p><h3>Count Of Visitors</h3></p>
              <div class="row">
                <div class="col-md-4 d-flex">
                  <div class="card wizard-card flex-fill">
                    <div class="card-body">
                    <p class="text-primary mt-0 mb-2">Visitors This Month</p>
                    <h5><?php echo $thismonth; ?></h5>
                    <p><a href="#">view details</a></p>
                    <span class="dash-widget-icon bg-1">
                    <i class="fas fa-users"></i>
                    </span>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 d-flex">
                  <div class="card wizard-card flex-fill">
                    <div class="card-body">
                      <p class="text-primary mt-0 mb-2">Visitors This Year</p>
                      <h5><?php echo $thisyear; ?></h5>
                      <p><a href="#">view details</a></p>
                      <span class="dash-widget-icon bg-1">
                        <i class="fas fa-th-large"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>         
            </div>
            <div class="col-md-4 d-flex">
              <div class="card w-100">
                <div class="card-body pt-0">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-7">
                        <p>Welcome back,</p>
                        <h6 class="text-primary"><?php echo $users['nama'];?></h6>
                      </div>
                      <div class="col-5 text-end">
                        <span class="welcome-dash-icon bg-1">
                          <i class="fas fa-user"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="account-balance">
                    <p>Name Of Company</p>
                    <h6><?php echo $users_tenant['user_tenant_nama'];?></h6>
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