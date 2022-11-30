<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $identitas->nama_website?> - <?php echo $identitas->slogan?></title>
  <meta name="title" content="<?php echo $identitas->nama_website?> <?php echo $identitas->no_telp?> | <?php echo $identitas->meta_keyword?>">
  <meta property="og:title" content="<?php echo $identitas->nama_website?> <?php echo $identitas->no_telp?> | <?php echo $identitas->meta_keyword?>">
  <meta NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
  <meta name="site_url" content="<?php echo base_url()?>">
  <meta name="description" content="<?php echo $identitas->meta_deskripsi?>">
  <meta name="keywords" content="<?php echo $identitas->meta_keyword?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="msvalidate.01" content="DA329AB9B967ABBCBD6B9280D0C3991A" />
  <meta name="web_author" content="arkansys.com">
  <link rel="alternate" href="<?php echo base_url()?>" hreflang="id" />
  <link href='<?php echo base_url()?>' rel='canonical'/>
  <meta property="og:site_name" content="<?php echo $identitas->nama_website?>">
  <meta property="og:description" content="<?php echo $identitas->meta_deskripsi?>">
  <meta property="og:url" content="<?php echo base_url()?>">
  <meta property="og:image" content="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->logo?>">
  <meta property="og:image:url" content="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->logo?>">
  <meta property="og:type" content="article">
  <link rel="shortcut icon" href="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->favicon?>" type="image/x-icon">
  <?php $this->load->view('frontend/analytics')?>
  <?php $this->load->view('frontend/css')?>


</head>


<body>
  <div class="loader-wrap">
      <div class="spinner">
          <div class="double-bounce1"></div>
          <div class="double-bounce2"></div>
      </div>
  </div>
  <div id="main">
    <?php $this->load->view('frontend/menu')?>
    <div id="wrapper">
        <!-- content -->
        <div class="content">
            <!-- column-image  -->
            <div class="column-image">
                <div class="bg" data-bg="<?php echo base_url()?>bahan/frontend/images/bg/19.jpg"></div>
                <div class="overlay"></div>

                <div class="column-notifer">
                    <div class="scroll-down-wrap transparent_sdw">
                        <div class="mousey">
                            <div class="scroller"></div>
                        </div>
                        <span>Scroll down  to Discover</span>
                    </div>
                </div>
                <div class="fixed-column-dec"></div>
            </div>
            <!-- column-image end  -->
            <!-- column-wrapper -->
            <div class="column-wrapper">
                <div class="scroll-nav-wrap">
                    <nav class="scroll-nav scroll-init">
                        <ul>
                            <li><a class="act-scrlink" href="#sec1">About</a></li>
                        </ul>
                    </nav>
                </div>
                <!--section  -->
                <section id="sec1">
                    <div class="container small-container">
                        <div class="section-title fl-wrap">
                            <h3>About Us</h3>
                            <div class="section-number">01.</div>
                        </div>
                        <div class="column-wrapper_item fl-wrap">
                            <div class="column-wrapper_text fl-wrap">
                                <p>Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros. Lorem ipsum dolor sit amet, consectetur adipisici elit, petierunt uti sibi concilium totius Galliae in diem sed eius mod tempor incidunt ut labore et dolore magna aliqua. Pellentesque habitant morbi tristique senectus et netus piros labore et dolore magna.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.
                                </p>
                                <p>Praesent nec leo venenatis elit semper aliquet id ac enim. Maecenas nec mi leo. Etiam venenatis ut dui non hendrerit. Integer dictum, diam vitae blandit accumsan, dolor odio tempus arcu, vel ultrices nisi nibh vitae ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi varius lacinia vestibulum. Aliquam lobortis facilisis tellus, in facilisis ex vehicula ac. In malesuada quis turpis vel viverra.</p>
                                <div class="inline-facts-holder fl-wrap">
                                  <?php $kategori_produk = $this->Crud_m->view_where_orderings('products_category',array('products_cat_status'=>'publish'),'products_cat_id','ASC'); ?>
                                    <?php foreach ($kategori_produk as $post) {  ?>
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                              <?php $produks = $this->Panel_m->view_where('products',array('products_status'=>'publish','products_cat_id'=>$post->products_cat_id))->num_rows(); ?>
                                                <div class="num" data-content="<?php echo $produks; ?>" data-num="<?php echo $produks; ?>"><?php echo $produks; ?></div>
                                            </div>
                                        </div>
                                        <h6><?php echo $post->products_cat_judul?></h6>
                                    </div>
                                  <?php } ?>
                                </div>
                                <a href="<?php echo base_url() ?>portfolio/hybrid-event" class="btn fl-btn">My Portfolio</a>
                            </div>
                        </div>
                    </div>
                </section>
                <!--section end  -->
                <div class="sec-dec"></div>

                <!--section end  -->
                <!--footer -->
                <footer class="min-footer fl-wrap content-animvisible">
                    <div class="container small-container">
                        <div class="footer-inner fl-wrap">
                            <!-- policy-box-->
                            <div class="policy-box">
                                <span>&#169; Localevex 2022  /  All rights reserved. </span>
                            </div>
                            <!-- policy-box end-->
                            <a href="#" class="to-top-btn to-top">Back to top <i class="fal fa-long-arrow-up"></i></a>
                        </div>
                    </div>
                </footer>
                <!--footer end  -->
            </div>
            <!-- column-wrapper -->
        </div>
        <!--content end-->
        <!--share-wrapper-->
        <div class="share-wrapper">
            <div class="share-container fl-wrap  isShare"></div>
        </div>
        <!--share-wrapper end-->
    </div>
    <div class="sb-overlay"></div>
    <div class="hiiden-sidebar-wrap outsb">
        <!-- sb-widget-wrap-->
        <div class="sb-widget-wrap fl-wrap">
            <h3>Office & Workshop</h3>
            <div class="sb-widget  fl-wrap">
                <p>Office : Jl. Kelapa puyuh raya blok KE No.19, Kelapa Gading, Jakarta Utara</p>
                <p>Workshop & Office : Jl. Caringin No. 235 Bandung, Jawa Barat</p>
                <p>Workshop & Office : Jl. Dewi Sri No. 19 Renon Denpasar, Bali</p>
                <p>Workshop & Office : Jl. Pahlawan Ende No. 257, Labuan Baju, NTT</p>
            </div>
        </div>
        <!-- sb-widget-wrap end-->
        <!-- sb-widget-wrap-->
        <div class="sb-widget-wrap fl-wrap">
            <h3>We're Are Social</h3>
            <div class="sb-widget    fl-wrap">
                <div class="sidebar-social fl-wrap">
                    <ul>
                        <li><a href="<?php echo $identitas->facebook?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="<?php echo $identitas->instagram?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="<?php echo $identitas->youtube?>" target="_blank"><i class="fab fa-youtube"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="element">
        <div class="element-item"></div>
    </div>
  </div>

<?php $this->load->view('frontend/js')?>
</div>
</body>
</html>
