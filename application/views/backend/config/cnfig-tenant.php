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
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url() ?>paneluser/cnfig/#">Profile Settings</a>
            </li>
          
          </ul>
        </div>
        <div class="row">
            

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body pt-0">
                            <?php $attributes = array('class'=>'form-horizontal','role'=>'form');
                                echo form_open_multipart('paneluser/cnfig',$attributes); ?>
                                <input type="hidden" name="id_session" value="<?php echo $rows['id_session'] ?>">
                                <div class="settings-form">
                                    <div class="form-group">
                                        <label>Full Name <span class="star-red">*</span></label>
                                        <input type="text" class="form-control" name="nama" value="<?php echo $rows['nama'] ?>">
                                        <small><?php echo form_error('nama'); ?></small>
                                    </div>                               
                                  
                                    <div class="form-group">
                                        <label>Email <span class="star-red">*</span></label>
                                        <input type="email" class="form-control" name="email" value="<?php echo $rows['email'] ?>">
                                        <small><?php echo form_error('email'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>                                
                                    <div class="form-group">
                                        <label>Photo Profile</label>
                                        <input type="file" name="user_detail_gambar" class="form-control">
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="settings-btns">
                                            <button type="submit" name="submit" class="btn btn-orange">Update</button>
                                        </div>
                                    </div>   
                                </div>
                             <?php echo form_close(); ?>                          
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body pt-0">
                            <div class="settings-form">
                            <?php $user_detail= $this->Crud_m->view_where('user_detail', array('id_session'=> $rows['id_session']))->row_array(); ?>
                            <?php $user_tenant= $this->Crud_m->view_where('user_tenant', array('user_tenant_id_session'=> $user_detail['user_tenant_id_session']))->row_array(); ?>
                                <div class="form-group">
                                    <label>Tenant</label>
                                    <input type="text" class="form-control" value="<?php echo $user_tenant['user_tenant_nama'] ?>" disabled="">
                                </div>                               
                                <div class="form-group">
                                    <label>Regist Date</label>
                                    <input type="text" class="form-control" value="<?php echo $rows['user_post_tanggal'] ?>" disabled="">
                                </div>
                                <div class="form-group">
                                    <label>Last Login </label>
                                    <input type="text" class="form-control" value="<?php echo $rows['user_login_tanggal'] ?> <?php echo $rows['user_login_jam'] ?>" disabled="">
                                </div>
                                <div class="form-group">
                                    <label>Photo Profile Preview </label>
                                     <?php if ( empty($rows['gambar'])) { ?> 
                                      <img style="height:100px; width:100px;" src="<?php echo base_url()?>bahan/backend/foto/user-default.png">
                                    <?php }else{?>
                                      <img style="height:100px; width:100px;" src="<?php echo base_url()?>bahan/foto_user_detail/<?php echo $rows['gambar'] ?>">

                                    <?php }?>
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

