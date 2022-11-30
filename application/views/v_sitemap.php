<?php header('Content-type: application/xml; charset="ISO-8859-1"',true);  ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
     <loc><?php echo base_url();?></loc>
     <priority>1.0</priority>
  </url>
  <url>
<<<<<<< HEAD
     <loc><?php echo base_url("services/");?></loc>
     <priority>0.5</priority>
  </url>
  <?php foreach($services as $data) { ?>
  <url>
     <loc><?php echo base_url("services/").$data->services_judul_seo;?></loc>
     <priority>0.5</priority>
  </url>
  <?php } ?>
  
  <?php foreach($blogs as $data) { ?>
=======
     <loc><?php echo base_url("about/");?></loc>
     <priority>0.5</priority>
  </url>
  <url>
     <loc><?php echo base_url("gallery/");?></loc>
     <priority>0.5</priority>
  </url>
>>>>>>> 42cf6319091cf091480b9dbec2cf805972a6f4bb
  <url>
     <loc><?php echo base_url("equipment/");?></loc>
     <priority>0.5</priority>
  </url>
  <url>
     <loc><?php echo base_url("workshop/");?></loc>
     <priority>0.5</priority>
  </url>
  <?php foreach($products as $data) { ?>
  <url>
     <loc><?php echo base_url("portfolio-detail/").$data->products_judul_seo;?></loc>
     <priority>0.5</priority>
  </url>
  <?php } ?>
  <?php foreach($products_cat as $data) { ?>
  <url>
     <loc><?php echo base_url("portfolio/").$data->products_cat_judul_seo;?></loc>
     <priority>0.5</priority>
  </url>
  <?php } ?>




</urlset>
