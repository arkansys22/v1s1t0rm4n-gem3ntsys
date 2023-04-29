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
        <br>

        <div class="subscribe-employe users-list">
          <ul>
            <li ><a href="<?php echo base_url() ?>paneluser/usersettings/">Active Users </a></li>
            <li class="active"><a href="<?php echo base_url() ?>paneluser/usersettingsinactive/">Inactive Users</a></li>
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
                        <a href="<?php echo base_url()?>paneluser/user_replace_temp/<?=$row['id_session']?>" class="btn btn-sm btn-secondary me-2"><i class="fas fa-undo"></i></a>

                        <?php  
                          echo" <a class='btn btn-sm btn-danger' href='".base_url()."paneluser/user_delete_perm/$row[id_session]' onclick=\"return confirm('Are you sure want to delete Permanent this $row[nama]?')\"><i class='far fa-trash-alt'></i>
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


   
    
 <?php $this->load->view('backend/js')?>
</body>
</html>