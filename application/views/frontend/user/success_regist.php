<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
  <title>aSPanel | Success Registration</title>
  <?php $this->load->view('frontend/css')?>
  <script src="<?php echo base_url()?>bahan/frontend/template/js/html2canvas.js"></script>
  <script src="<?php echo base_url()?>bahan/frontend/template/js/jquery.min.js"></script>
</head>
<body class="account-page">
<div class="main-wrapper">
<div class="container">

<?php if(empty($qrcode)) { ?>
  <div class="on-board field-card">
    <div class="account-onborad complte-board back-home">
      <h2>
        <br><br>
          <a href="#"><img src="<?php echo base_url() ?>bahan/frontend/image/gandaria8.png" alt="" class="img-fluid"></a><br>
      </h2>

          <a href="<?php echo base_url() ?>" class="btn btn-primary btn-block btn-md login-btn">Back To Registration Form</a>

    </div>
  </div>
<?php }else{ ?>

    <div class="on-board field-card">
      <div  class="account-onborad complte-board back-home">
        <div id="html-content-holder" style="background:white;">
          <h2>
              <a href="#"><img src="<?php echo base_url() ?>bahan/frontend/image/gandaria8.png" alt="" class="img-fluid"></a><br>
              Visit Registration Code
          <h2>
          <img src="<?php echo base_url() ?>bahan/qrcode/<?php echo $qrcode ?>" class="img-fluid" alt="icon">
          <h4>Please show this code to the building receptionist for approval <p>Validate <?php echo tgl_indo($vdatefrom); ?> | 08.00 - 17.00</p>
          </h4>
          <h5>provided by Dhawy</h5>
        </div>
      <p>
        <a id="btn-Convert-Html2Image" class="btn btn-primary btn-block btn-md login-btn">Download
        </a>
      </p>
      </div>

    </div>


<?php } ?>



</div>
</div>

<script>
        $(document).ready(function() {


            // Global variable
            var element = $("#html-content-holder");

            // Global variable
            var getCanvas;
            $("#btn-Convert-Html2Image").on('click', function() {
              html2canvas(element, {
              onrendered: function(canvas) {
                      getCanvas = canvas;
                  }
              });

                var imgageData =
                    getCanvas.toDataURL("image/png",1);
                var newData = imgageData.replace(
                /^data:image\/png/, "data:application/octet-stream");

                $("#btn-Convert-Html2Image").attr(
                "download", "SistemITImage.png").attr(
                "href", newData);
            });
        });
    </script>


<?php $this->load->view('frontend/js')?>
</body></html>
