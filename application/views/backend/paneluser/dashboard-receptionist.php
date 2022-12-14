<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>VMS Panel | Dashboard Visitor</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	<?php $this->load->view('backend/css')?>
</head>
<body>

  <div class="main-wrapper">
    <?php $this->load->view('backend/header')?>
    <?php $this->load->view('backend/menu')?>
    <div class="page-wrapper">
      <div class="content report-box container-fluid">
        <div class="page-header subscribe-head">
        <div class="row align-items-center">
        <div class="col">
          <h3 class="page-title">Visitor List</h3>

        </div>
          <div class="col-auto">
            <a class="btn  export-btn" href="#" data-bs-toggle="modal" data-bs-target="#add-barcode">
              <i class="fa fa-qrcode"></i> Scan Barcode
            </a>
          </div>
        </div>
      </div>

        <div class="row">
          <div class="col-sm-12">
            <div class="subscribe-employe users-list">
                <ul>
                  <li class="active"><a href="#">Waiting Visitor </a></li>
                  <li><a href="#">Accept Visitor</a></li>
                  <li><a href="#">Reject Visitor</a></li>
                  <li><a href="#">Trash</a></li>
                </ul>
              </div>
            <div class="page-header user-active">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="page-title">Number Of Visitors</h3>
                  <p>Total <span>57</span> Visitor</p>
                </div>
                <div class="col-auto">                
                  <a class="btn filter-btn" href="javascript:void(0);" id="filter_search">
                    <i class="fas fa-filter"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="card filter-card" id="filter_inputs">
              <div class="card-body pb-0">
                <form action="#" method="post">
                  <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label>Expertise</label>
                        <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Submit</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card ">
                <div class="table-responsive">
                  <table class="table table-center table-hover mb-0 user-tables">
                    <thead>
                      <tr>
                        <th>
                        <div class="form-check custom-checkbox">
                        <input type="checkbox" class="form-check-input" id="select-all">
                        <label class="form-check-label"></label>
                        </div>
                        </th>
                        <th>Visitor Name</th>
                        <th>Expertise</th>
                        <th>Verified</th>
                        <th>Account Balance </th>
                        <th>Joined Date</th>
                        <th>Last Login</th>
                        <th>Status</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-check custom-checkbox">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label"></label>
                            </div>
                        </td>
                        <td>
                          <div class="table-avatar user-profile">
                            <a href="profile.html"><img class="avatar-img rounded-circle " src="assets/img/profiles/avatar-14.jpg" alt="User Image"></a>
                            <div>
                              <h5><a href="#">Janet Paden</a></h5>
                              <p> <a href="https://kofejob.dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8deae8e2ffeae8fae8e1e1fecde8f5ece0fde1e8a3eee2e0">[email&#160;protected]</a></p>
                              </div>
                          </div>
                        </td>
                        <td>Frontend Developer</td>
                        <td class="verify-mail"><i data-feather="check-circle" class="me-1 text-success"></i>Email</td>
                        <td>$7,763.05</td>
                        <td>21 April 2022</td>
                        <td>10 May 2022</td>
                        <td>
                          <a href="#" class="user-active-btn">Active</a>
                        </td>
                        <td class="text-end three-dots">
                        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
                          <div class="dropdown-menu user-menu-list">
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#transaction-category"><img class="me-2 " src="assets/img/icon/icon-01.svg" alt=""> View Details</a>
                            <a class="dropdown-item" href="#"><img class="me-2 " src="assets/img/icon/icon-02.svg" alt=""> Transaction</a>
                            <a class="dropdown-item" href="#"><img class="me-2 " src="assets/img/icon/icon-03.svg" alt=""> Reset Password</a>
                            <a class="dropdown-item" href="#"><img class="me-2 " src="assets/img/icon/icon-04.svg" alt=""> Suspend user</a>
                            <a class="dropdown-item" href="#"><i data-feather="edit" class="me-2"></i> Edit</a>
                            <a class="dropdown-item mb-0" href="#"><i data-feather="trash-2" class="me-2 text-danger"></i> Delete</a>
                          </div>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                  <ul class="paginations list-pagination text-end mb-4">
                    <li><a href="#"><i class="fas fa-angle-left"></i> Previous</a></li>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">Next <i class="fas fa-angle-right"></i></a></li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
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
