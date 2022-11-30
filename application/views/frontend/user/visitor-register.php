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

          <div class="multistep-progress" id="freelance_step">
            <div class="first-progress">
              <div class="board-logo">
                <a href="index.html"><img src="<?php base_url() ?>bahan/frontend/template/img/logo-01.png" alt="" class="img-fluid"></a>
              </div>
            </div>
          </div>



    <div class="on-board field-card select-account group-select">
      <div class="select-type">
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
                <label class="focus-label">Profil Picture <span>*</span></label>
            </div>
            <div class="col-md-12 col-lg-4 col-xl-4">
              <div class="form-group">
                <div class="pro-form-img">
                <img src="assets/img/user/avatar-3.jpg" alt="User Image">
                <label class="file-upload image-upbtn ">
                Upload Avator <input type="file" accept="image/*" capture="camera">
                </label>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-2 col-xl-2">
              <label class="focus-label">Contact Details <span>*</span></label>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-5">
              <div class="form-group">
              <label>Phone Number</label>
              <input type="text" class="form-control" value="+33 43685825">
              </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-5">
              <div class="form-group">
              <label>Email Address</label>
              <input type="text" class="form-control" value="eugeneforest@example.com">
              </div>
            </div>
            <div class="col-md-12 col-lg-2 col-xl-2">
              <label class="focus-label">Security <span>*</span></label>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-5">
              <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" value="">
              </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-5">
              <div class="form-group">
              <label>Password Confirm</label>
              <input type="password" class="form-control" value="">
              </div>
            </div>
            <div class="col-md-12 col-lg-2 col-xl-2">
              <label class="focus-label">Reason <span>*</span></label>
            </div>
            <div class="col-md-12 col-lg-10 col-xl-10">
              <div class="form-group min-characters">
              <textarea class="form-control" rows="5"></textarea>
              <p>Min 150 characters</p>
              </div>
            </div>
            <div class="col-md-12 col-lg-2 col-xl-2">
              <label class="focus-label">Description <span>*</span></label>
            </div>
            <div class="col-md-12 col-lg-10 col-xl-10">
            <div class="row">
            <div class="col-md-4 col-lg-4 col-xl-4">
            <div class="form-group description-group">
            <label>Language</label>
            <input type="text" class="form-control" value="English">
            </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4">
             <div class="form-group description-group">
            <label>Level</label>
            <select name="price" class="form-control select-level" id="business-type">
            <option value="Individual" selected>Choose Level</option>
            <option value="">Basic</option>
            </select>
            </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4">
            <div class="new-addd">
            <a id="new_add" class="add-new"><i class="fas fa-plus "></i> Add New</a>
            </div>
            </div>
            <div id="add_row"></div>
            </div>
            </div>
            </div>
          </form>
        </div>
        <div class="text-center">
          <input class="btn next_btn btn-primary btn-get" name="next" type="button" value="Next">
        </div>
      </div>
    </div>
    <div class="on-board field-card select-account select-btn">
      <div class="text-center onboard-head">
          <h2>Professional info</h2>
          <p>This is your time to shine. Let potential buyers know what you do best and how you gained your skills, certifications and experience</p>
      </div>
      <div class="field-item personal-info space-info">
        <div id="individual">
        <div class="row">
        <div class="col-md-12 col-lg-2">
        <label class="focus-label">Skill <span>*</span></label>
        </div>
        <div class="col-md-4 col-lg-3">
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Ex : UI UX Design">
        </div>
        </div>
        <div class="col-md-4 col-lg-3">
        <div class="form-group">
        <select name="price" class="form-control select-level">
        <option value="">Intermediate</option>
        <option value="">Medium</option>
        </select>
        </div>
        </div>
        <div class="col-md-4 col-lg-4">
        <div class="new-addd">
        <a class="add-new" id="skill_add"><i class="fas fa-plus"></i> Add New</a>
        </div>
        </div>
        <div id="skill_add_row"></div>
        </div>
        <div class="row">
        <div class="col-md-12 col-lg-2">
        <label class="focus-label">Education</label>
        </div>
        <div class="col-md-2 col-lg-1">
        <div class="form-group">
        <select name="price" class="form-control select-level select-edu">
        <option value="0">India</option>
        <option value="1">Chinna</option>
        </select>
        </div>
        </div>
        <div class="col-md-3">
        <div class="form-group">
        <select name="price" class="form-control select-level">
        <option value="0">College/University Name</option>
        <option value="1">University Name</option>
        </select>
        </div>
        </div>
        <div class="col-md-3">
        <div class="form-group">
        <select name="price" class="form-control select-level">
        <option value="0">Intermediate</option>
        <option value="1">Average</option>
        </select>
        </div>
        </div>
        <div class="col-md-2 col-lg-1">
        <div class="form-group">
        <select name="price" class="form-control select-level select-edu">
        <option value="0">Year</option>
        <option value="1">2012</option>
        </select>
        </div>
        </div>
        <div class="col-md-2">
        <div class="new-addd">
        <a class="add-new" id="edu_add"><i class="fas fa-plus"></i> Add New</a>
        </div>
        </div>
        <div id="education_add_row"></div>
        </div>
        <div class="row">
        <div class="col-md-12 col-lg-2">
        <label class="focus-label">Certification </label>
        </div>
        <div class="col-md-4 col-lg-3">
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Certification or Award">
        </div>
        </div>
        <div class="col-md-4 col-lg-3">
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Certified from (e.g. Adobe)">
        </div>
        </div>
        <div class="col-md-2">
        <div class="form-group">
        <select name="price" class="form-control select-level">
        <option value="0">Year</option>
        <option value="1">2012</option>
        </select>
        </div>
        </div>
        <div class="col-md-2">
        <div class="new-addd">
        <a class="add-new" id="certify_add"><i class="fas fa-plus"></i> Add New</a>
        </div>
        </div>
        <div id="certify_add_row"></div>
        </div>
        <div class="row">
        <div class="col-md-12 col-lg-2">
        <label class="focus-label">Experiance </label>
        </div>
        <div class="col-md-10 col-lg-8">
        <div class="row">
        <div class="col-md-6">
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Enter your position or title">
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Enter company name">
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-3 d-flex align-items-end">
        <div class="form-group">
        <label>Start</label>
        <select name="price" class="form-control select-level">
        <option value="">Select Month</option>
        <option value="">1</option>
        <option value="">2</option>
        <option value="">3</option>
        <option value="">4</option>
        </select>
        </div>
        </div>
        <div class="col-md-3 d-flex align-items-end">
        <div class="form-group">
        <select name="price" class="form-control select-level">
        <option value="0">Select Year</option>
        <option value="1">2012</option>
        <option value="1">2013</option>
        <option value="1">2014</option>
        <option value="1">2015</option>
        </select>
        </div>
        </div>
        <div class="col-md-3 d-flex align-items-end">
        <div class="form-group">
        <label>End</label>
        <select name="price" class="form-control select-level">
        <option value="">Select Month</option>
        <option value="">1</option>
        <option value="">2</option>
        <option value="">3</option>
        <option value="">4</option>
        </select>
        </div>
        </div>
        <div class="col-md-3 d-flex align-items-end">
        <div class="form-group">
        <select name="price" class="form-control select-level">
        <option value="0">Select Year</option>
        <option value="1">2012</option>
        <option value="1">2013</option>
        <option value="1">2014</option>
        <option value="1">2015</option>
        </select>
         </div>
        </div>
        </div>
        </div>
        <div class="col-md-2">
        <div class="new-addd">
        <a class="add-new" id="experience_add"><i class="fas fa-plus"></i> Add New</a>
        </div>
        </div>
        <div id="experience_add_row"></div>
        </div>
        <div class="row">
        <div class="col-md-12 col-lg-2"></div>
        <div class="col-md-12 col-lg-10">
        <div class="form-group workin-check">
        <input class="form-check-input" type="checkbox" name="remember"> I'm currently working here
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-12 col-lg-2"></div>
        <div class="col-md-10 col-lg-8">
        <div class="form-group min-characters">
        <textarea class="form-control" rows="5"></textarea>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-12 col-lg-2">
        <label class="focus-label">Personal website </label>
        </div>
        <div class="col-md-10 col-lg-8">
        <div class="form-group">
        <input type="text" class="form-control">
        </div>
        </div>
        </div>
        </div>
      </div>
      <div class="text-center">
        <input class="btn btn-prev prev_btn btn-back" name="next" type="button" value="Back">
        <input class="btn next_btn btn-primary btn-get btn-next" name="next" type="button" value="Submit">
      </div>
    </div>



    <div class="on-board field-card">
    <div class="account-onborad complte-board back-home">
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

  </div>
<?php $this->load->view('frontend/js')?>
</body>
</html>
