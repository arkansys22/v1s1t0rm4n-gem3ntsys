<?php $users= $this->Crud_m->view_where('user', array('username'=> $this->session->username))->row_array(); ?>
<<<<<<< HEAD

<header class="header_wrap dark_skin hover_menu_style3">
  <div class="container">
    <nav class="navbar navbar-expand-lg">
    	  <a class="navbar-brand" href="<?php echo base_url()?>">
            <img class="logo_dark" src="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->logo?>" alt="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
      	<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
=======
<header class="main-header">
    <!-- logo   -->
    <a href="<?php echo base_url()?>" class="logo-holder"><img src="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->logo?>" alt="" width="100%" height="100%"></a>
    <!-- logo end  -->
    <!-- search
    <div class="search-button"><i class="far fa-search"></i></div>
    <div class="search-input"><input name="se" id="se" type="text" class="search" placeholder="Search.." /></div>
    search end  -->
    <div class="sb-button"></div>

    <!-- mobile nav -->
    <div class="nav-button-wrap">
        <div class="nav-button"><span></span><span></span><span></span></div>
    </div>
    <!-- mobile nav end-->
    <!--  navigation -->
    <div class="nav-holder main-menu">
        <nav>
            <ul>
>>>>>>> 42cf6319091cf091480b9dbec2cf805972a6f4bb
                <li>
                    <a class="nav-link" href="<?php echo base_url()?>">HOME</a>
                </li>
                <li>
                    <a class="nav-link" href="<?php echo base_url()?>services">PRICELIST</a>
                </li>
<<<<<<< HEAD
                <li >
                    <a class="nav-link" href="<?php echo base_url()?>gallery">GALLERY</a>
                </li>
                <li >
                    <a class="nav-link" href="<?php echo base_url()?>">BOOKING</a>
                </li>
=======
                <li>
                    <a href="<?php echo base_url()?>">Portfolio </a>
                    <!--second level -->
                    <ul>
                        <li><a href="<?php echo base_url()?>gallery">Gallery</a></li>
                        <li><a href="<?php echo base_url()?>portfolio/design">Desain</a></li>
                        <li><a href="<?php echo base_url()?>equipment">Equipment</a></li>
                        <li><a href="<?php echo base_url()?>workshop">Workshop</a></li>
                    </ul>
                    <!--second level end-->
                </li>
>>>>>>> 42cf6319091cf091480b9dbec2cf805972a6f4bb

            </ul>
        </div>

    </nav>
  </div>
</header>
