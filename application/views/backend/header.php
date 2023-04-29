<div class="header">
    <div class="header-left">
        <a href="<?php echo base_url()?>paneluser/home" class="logo">
          <img src="<?php echo base_url()?>bahan/backend/template/img/logo.png" alt="Logo">
        </a>
        <a href="<?php echo base_url()?>paneluser/home" class="logo logo-small">
          <img src="<?php echo base_url()?>bahan/backend/template/img/logo-small.png" alt="Logo" width="30" height="30">
        </a>
        <a href="javascript:void(0);" id="toggle_btn">
          <i class="feather-chevrons-left"></i>
        </a>
        <a class="mobile_btn" id="mobile_btn">
          <i class="feather-chevrons-left"></i>
        </a>
    </div>


    <ul class="nav user-menu">
    <?php $userss= $this->Crud_m->view_where('user', array('id_session'=> $this->session->id_session))->row_array(); ?>
        
        <li class="nav-item dropdown has-arrow main-drop">
        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
        <span class="user-img">
        <span class="status online"><?php echo $userss['nama'] ?> </span>
            <?php if ( empty($userss['gambar'])) { ?> 
                <img src="<?php echo base_url()?>bahan/backend/foto/user-default.png">
            <?php }else{?>
                <img src="<?php echo base_url()?>bahan/foto_user_detail/<?php echo $userss['gambar'] ?>">
            <?php }?>

    
        
        </span>
        </a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="#"><i data-feather="user" class="me-1"></i> Profile</a>
        <a class="dropdown-item" href="<?php echo base_url()?>logout"><i data-feather="log-out" class="me-1"></i> Logout</a>
        </div>
        </li>

    </ul>

</div>
