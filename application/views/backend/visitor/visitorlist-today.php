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
            <div class="row align-items-center">
              <div class="col">
              <h3 class="page-title">Visitor List</h3>       
              </div>

              <div class="col-auto">
                <a href="<?php echo base_url()?>paneluser/verify_visitor"class="btn btn-sm btn-danger me-2" >
               SCAN BARCODE VISITOR
                </a>
              </div>
            </div>
          </div>
          <div class="subscribe-employe users-list">
          <ul>
            <li class="active"><a href="#">This Month</a></li>
            <li><a href="#">This Year</a></li>
            <li><a href="#">All Visitor</a></li>
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
                      <th>Designation</th>
                      <th>Tenant</th>
                      <th>Visit Date From</th>
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
                        <?=$row['nama']?>
                        </td>                        
                        <td><?=$row['user_detail_contactto']?></td>
                        <?php $user_tenant= $this->Crud_m->view_where('user_tenant', array('user_tenant_id_session'=> $row['user_tenant_id_session']))->row_array(); ?>
                        <td><?=$user_tenant['user_tenant_nama']?></td>
                        <td><?=$row['user_detail_vdatefrom']?></td>
                        <?php $user_status= $this->Crud_m->view_where('user_status', array('user_status_id'=> $row['user_status']))->row_array(); ?>
                        <td><?=$user_status['user_status_nama']?></td>
                        <td class="text-end">
                        <a href="<?php echo base_url()?>paneluser/visitor_edit/<?=$row['id_session']?>" class="btn btn-sm btn-secondary me-2"><i class="far fa-edit"></i></a>
                     
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


    
   
    
 <?php $this->load->view('backend/js')?>
</body>
</html>