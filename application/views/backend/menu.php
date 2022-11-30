<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <?php $users= $this->Crud_m->view_where('user', array('username'=> $this->session->username))->row_array(); ?>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link" href="<?php echo base_url()?>" target="_blank">
        <span>Pratinjau Perubahan</span>
      </a>
    </li>
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown user-menu">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        <?php if(empty($users['user_gambar'])) { ?>
          <img src="<?php echo base_url()?>bahan/foto_profil/logo-default.png" class="user-image img-circle elevation-2">
        <?php }else { ?>
          <img src="<?php echo base_url()?>bahan/foto_profil/<?php echo $users['user_gambar'];?>" class="user-image img-circle elevation-2" >
        <?php }?>
        <span class="d-none d-md-inline">Hai, <?php echo $users['username'];?></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <!-- User image -->
        <li class="user-header bg-primary">
          <?php if(empty($users['user_gambar'])) { ?>
            <img src="<?php echo base_url()?>bahan/foto_profil/logo-default.png" class="img-circle elevation-2">
          <?php }else { ?>
            <img src="<?php echo base_url()?>bahan/foto_profil/<?php echo $users['user_gambar'];?>" class="img-circle elevation-2">
          <?php }?>

          <p>
            <?php echo "$users[nama]";?>
            <small>Bergabung sejak <?php echo tgl_indo($users['user_post_tanggal']);?>.</small>
          </p>
        </li>
        <!-- Menu Body -->

        <!-- Menu Footer-->
        <li class="user-footer">
          <a href="<?php echo base_url(); ?>paneladmin/profil" class="btn btn-default btn-flat">Profil</a>
          <a href="<?php echo base_url(); ?>paneladmin/logout" class="btn btn-default btn-flat float-right">Keluar</a>
        </li>
      </ul>
    </li>

  </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo base_url('paneladmin/home')?>" class="brand-link">

    <center><span class="brand-text font-weight-light">aSPanel Admin</span></center>
  </a>

<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3">
    <div class="info d-block text-white">
      <h2 class="text-center"><label id="hours"><?= date('H') ?></label>:<label id="minutes"><?= date('i') ?></label>:<label id="seconds"><?= date('s') ?></label></h2>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="<?php echo base_url(); ?>paneladmin/home" class="nav-link" >
          <i class="nav-icon fas fa-th"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
    <?php  if($this->session->level=='1'){ ?>
      <li class="nav-item">
        <a href="<?php echo base_url(); ?>paneladmin/identitaswebsite" class="nav-link" >
          <i class="nav-icon fas fa-cogs"></i>
          <p>
            Data Website
          </p>
        </a>
      </li>
      <?php }?>
      <?php  if($this->session->level=='1'){ ?>
      <!-- <li class="nav-item">
        <a href="<?php echo base_url(); ?>paneladmin/konsumen" class="nav-link" >
          <i class="nav-icon fas fa-user-check"></i>
          <p>
            Daftar Klien
          </p>
        </a>
      </li> -->


      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon far fas fa-fw fa-users"></i>
          <p>
            Pengguna
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>


        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>paneladmin/divisi" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>Divisi / Posisi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>paneladmin/add_user" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Karyawan</p>
            </a>
          </li>
        </ul>
        <?php } ?>
      </li>
      <li class="nav-item ">
        <a href="<?php echo base_url(); ?>paneladmin/profil" class="nav-link">
          <i class="nav-icon fas fa-cogs"></i>
          <p>
            Pengaturan
          </p>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>

    <!-- Sidebar -->

    <!-- /.sidebar -->
  </aside>
