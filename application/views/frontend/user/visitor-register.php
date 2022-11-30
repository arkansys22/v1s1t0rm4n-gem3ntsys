<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
  <title>aSPanel | Registrasi</title>
  <?php $this->load->view('frontend/css')?>
</head>
<body>
  <div class="main-wrapper">
    <div class="page-wrapper board-screen">
    <div class="content container-fluid">
    <div class="acc-content">
    <div class="row">
    <div class="col-sm-12">
    <div class="multistep-form">

    <div class="on-board field-card select-account group-select">
      <div class="select-type">
          <center><a href="index.html"><img src="<?php base_url() ?>bahan/frontend/template/img/logo-01.png" alt="" class="img-fluid"></a></center>
        <div class="account-onborad onboard-head">
          <h2>Visit Registration</h2>
          <p>Tell a bit about yourself. This information will appear on your public profile, so that potential buyers can get to know you better.</p>
        </div>
        <div class="field-item personal-info space-info">
          <form>
            <div class="row">
              <div class="col-md-12 col-lg-2 col-xl-2">
                  <label class="focus-label">Name <span>*</span></label>
              </div>
              <div class="col-md-12 col-lg-4 col-xl-4">
                <div class="form-group">
                    <input type="text" class="form-control" value="">
                </div>
              </div>
              <div class="col-md-12 col-lg-2 col-xl-2">
                  <label class="focus-label">Phone Number <span>*</span></label>
              </div>
              <div class="col-md-12 col-lg-4 col-xl-4">
                <div class="form-group">
                    <input type="text" class="form-control" value="">
                </div>
              </div>
              <div class="col-md-12 col-lg-2 col-xl-2">
                  <label class="focus-label">Profil Picture <span>*</span></label>
              </div>
              <div class="col-md-12 col-lg-4 col-xl-4">
                <div class="form-group">
                  <div class="pro-form-img">
                  <img src="assets/img/user/avatar-3.jpg" alt="User Image">
                  <label class="file-upload image-upbtn ">
                  Get From Camera <input type="file" accept="image/*" capture="camera">
                  </label>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-lg-2 col-xl-2">
                  <label class="focus-label">ID Card (KTP) <span>*</span></label>
              </div>
              <div class="col-md-12 col-lg-4 col-xl-4">
                <div class="form-group">
                  <div class="pro-form-img">
                  <img src="assets/img/user/avatar-3.jpg" alt="User Image">
                  <label class="file-upload image-upbtn ">
                  Get From File <input type="file" >
                  </label>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-lg-2 col-xl-2">
                  <label class="focus-label">Email Address <span>*</span></label>
              </div>
              <div class="col-md-12 col-lg-4 col-xl-4">
                <div class="form-group">
                    <input type="email" class="form-control" value="">
                </div>
              </div>
              <div class="col-md-12 col-lg-2 col-xl-2">
                  <label class="focus-label">Password <span>*</span></label>
              </div>
              <div class="col-md-12 col-lg-4 col-xl-4">
                <div class="form-group">
                  <input type="password" class="form-control" value="">
                </div>
              </div>
              <div class="col-md-12 col-lg-2 col-xl-2">
                  <label class="focus-label">Tenant <span>*</span></label>
              </div>
              <div class="col-md-12 col-lg-4 col-xl-4">
                <div class="form-group">
                  <select name="price" class="form-control select-level" id="business-type">
                  <option value="Individual" selected>Choose Level</option>
                  <option value="">Basic</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12 col-lg-2 col-xl-2">
                  <label class="focus-label">Tenant Floor <span>*</span></label>
              </div>
              <div class="col-md-12 col-lg-4 col-xl-4">
                <div class="form-group">
                  <input type="text" class="form-control" value="">
                </div>
              </div>
              <div class="col-md-12 col-lg-2 col-xl-2">
                  <label class="focus-label">Contact To <span>*</span></label>
              </div>
              <div class="col-md-12 col-lg-4 col-xl-2">
                <div class="form-group">
                  <input type="text" class="form-control" value="">
                </div>
              </div>
              <div class="col-xs-2 col-sm-2 col-lg-2 col-xl-2">
                  <label class="focus-label">Visit Date From <span>*</span></label>
              </div>
              <div class="col-xs-4 col-sm-4 col-lg-4 col-xl-2">
                <div class="form-group">
                  <input type="date" class="form-control" value="">
                </div>
              </div>
              <div class="col-xs-2 col-sm-2 col-lg-2 col-xl-2">
                  <label class="focus-label">Visit Date End <span>*</span></label>
              </div>
              <div class="col-xs-4 col-sm-4 col-lg-4 col-xl-2">
                <div class="form-group">
                  <input type="date" class="form-control" value="">
                </div>
              </div>
              <div class="col-md-12 col-lg-2 col-xl-2">
                <label class="focus-label">Reason <span>*</span></label>
              </div>
              <div class="col-md-12 col-lg-4 col-xl-4">
                <div class="form-group min-characters">
                <textarea class="form-control" rows="2"></textarea>
                </div>
              </div>
            </div>

          </form>
        </div>
        <div class="text-center">
          <input class="btn next_btn btn-primary btn-get btn-next" name="next" type="button" value="Submit">
        </div>
      </div>
    </div>

    <div class="on-board field-card select-account select-btn">
    <img src="assets/img/select-03.png" class="img-fluid" alt="icon">
    <h2>Hi, Eugene Forest</h2>
    <p>Your onboarding process has been successfully completed. Please check your registered email for other information.</p>
    <a href="onboard-screen.html" class="btn btn-primary"> Back to Home</a>

    </div>

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

  </div>
<?php $this->load->view('frontend/js')?>
</body>
</html>
