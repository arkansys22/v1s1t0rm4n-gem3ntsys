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
        
        <li class="nav-item dropdown has-arrow main-drop">
        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
        <span class="user-img">
        <img src="<?php echo base_url()?>bahan/backend/template/img/profiles/avatar-07.jpg" alt="">
        <span class="status online"></span>
        </span>
        </a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="#"><i data-feather="user" class="me-1"></i> Profile</a>
        <a class="dropdown-item" href="<?php echo base_url()?>logout"><i data-feather="log-out" class="me-1"></i> Logout</a>
        </div>
        </li>

    </ul>

</div>
