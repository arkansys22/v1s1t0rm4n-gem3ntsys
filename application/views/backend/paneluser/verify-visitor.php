<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>VMS Panel | Verify Visitor</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	<?php $this->load->view('backend/css')?>
</head>
<body>

  <div class="main-wrapper">
    <?php $this->load->view('backend/header')?>
    <?php $this->load->view('backend/menu')?>
    <div class="page-wrapper">
      <div class="content container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body pb-0">
                <form action="#" method="post">
                  <div class="row filter-row">
                    <div class="col-sm-6 col-md-6">
                      <div class="form-group">
                        <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                      <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Submit</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body pt-0">
                <div class="card-header mb-4">
                  <h5 class="card-title d-flex justify-content-between">
                    <span>Visit Registration Data</span>
                  </h5>
                </div>
              <ul class="list-unstyled mb-0">
                <li class="py-0">
                  <small class="text-dark">Name</small>
                </li>
                <li>
                  Damon Cohn
                </li>
                <li class="pt-2 pb-0">
                  <small class="text-dark">Phone Number</small>
                </li>
                <li>
                  081388314678
                </li>
                <li class="pt-2 pb-0">
                  <small class="text-dark">Email Address</small>
                </li>
                <li>
                  email@gmail.com
                </li>
                <li class="pt-2 pb-0">
                  <small class="text-dark">Contact To</small>
                </li>
                <li>
                  Mr.Name
                </li>
                <li class="pt-2 pb-0">
                  <small class="text-dark">Tenant</small>
                </li>
                <li>
                  PT. Name
                </li>
                <li class="pt-2 pb-0">
                  <small class="text-dark">Floor Tenant</small>
                </li>
                <li>
                  Floor 1
                </li>
                <li class="pt-2 pb-0">
                  <small class="text-dark">Visit Date From</small>
                </li>
                <li>
                  14 Desember 2022
                </li>
                <li class="pt-2 pb-0">
                  <small class="text-dark">Visit Date End</small>
                </li>
                <li>
                  14 Desember 2022
                </li>
                <li class="pt-2 pb-0">
                  <small class="text-dark">Reason</small>
                </li>
                <li>
                  Bussiness Presentation
                </li>
              </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex">
            <div class="card w-100">
              <center>
              <div class="card-body pt-0">
                <br>
                <img class="" src="<?php echo base_url()?>bahan/backend/template/img/profiles/avatar-07.jpg" alt="Profile Cover">
                <div class="card-header mb-4">
                  <h5 class="card-title">Selfie Photo Registration</h5>
                </div>
              </div>
              <div class="card-body pt-0">
                <br>
                <img class="" src="<?php echo base_url()?>bahan/frontend/image/ktp.png" alt="Profile Cover">
                <div class="card-header mb-4">
                  <h5 class="card-title">Indonesian Identity Card</h5>
                </div>
              </div>
            </center>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <button type="submit" name="submit" class="btn btn-primary btn-block">APPROVED</button>
          </div>
        </div>
      <br>
      <br>
      </div>
    </div>
  </div>
  <div class="modal fade custom-modal" id="add-barcode">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header flex-wrap">
          <h4 class="modal-title">Scan Barcode Visitor</h4>
          <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <form>
          <div class="form-group">
            <label>Scan Barcode</label>
            <input type="text" name="barcode" class="form-control">
          </div>
          <div class="mt-4">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php $this->load->view('backend/js')?>
</body>
</html>
