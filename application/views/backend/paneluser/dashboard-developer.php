<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>VMS Panel | Dashboard Developer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	<?php $this->load->view('backend/css')?>
</head>


<div class="main-wrapper">
<?php $this->load->view('backend/header')?>
<?php $this->load->view('backend/menu')?>

<div class="page-wrapper">
<div class="content container-fluid">
  <div class="page-header">
    <div class="row align-items-center">
      <div class="col">
        <h3 class="page-title">Dashboard Developer</h3>
      </div>
    </div>
  </div>
<div class="row">
<div class="col-lg-12">
<div class="card bg-white projects-card">
<div class="card-body pt-0">
<div class="card-header">
<h5 class="card-title">Reviews</h5>
</div>
<div class="reviews-menu-links">
<ul role="tablist" class="nav nav-pills card-header-pills nav-justified">
<li class="nav-item">
<a href="#tab-4" data-bs-toggle="tab" class="nav-link active">All (272)</a>
</li>
<li class="nav-item">
<a href="#tab-5" data-bs-toggle="tab" class="nav-link">Active (218)</a>
</li>
<li class="nav-item">
<a href="#tab-6" data-bs-toggle="tab" class="nav-link"> Pending Approval (03)
</a>
</li>
<li class="nav-item">
<a href="#tab-7" data-bs-toggle="tab" class="nav-link">Trash (0)</a>
</li>
</ul>
</div>
<div class="tab-content pt-0">
<div role="tabpanel" id="tab-4" class="tab-pane fade active show">
<div class="table-responsive">
<table class="table table-hover table-center mb-0 datatable">
<thead>
<tr>
 <th></th>
<th>Profile</th>
<th>Designation</th>
<th>comments</th>
<th>Stars</th>
<th>Category</th>
<th class="text-end">Actions</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck1">
<label class="form-check-label" for="customCheck1"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-14.jpg" alt="User Image">
Janet Paden
</a>
</h2>
</td>
<td>
CEO
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
Angular
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck2">
<label class="form-check-label" for="customCheck2"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-01.jpg" alt="User Image">
George Wells
</a>
</h2>
</td>
<td>
Tech Lead
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
Node
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck3">
<label class="form-check-label" for="customCheck3"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-15.jpg" alt="User Image">
Timothy Smith
</a>
 </h2>
</td>
<td>
Technial Manager
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
Angular
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck10">
<label class="form-check-label" for="customCheck10"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-16.jpg" alt="User Image">
Lois Alexander
</a>
</h2>
</td>
<td>
Designer
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
Laravel
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck4">
<label class="form-check-label" for="customCheck4"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-03.jpg" alt="User Image">
Sara Grayson
</a>
</h2>
</td>
<td>
Developer
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
Angular
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck5">
<label class="form-check-label" for="customCheck5"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-04.jpg" alt="User Image">
Deboarah
</a>
</h2>
</td>
<td>
Associate Engineer
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
React
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck6">
<label class="form-check-label" for="customCheck6"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-11.jpg" alt="User Image">
Sofia Briant
</a>
</h2>
</td>
<td>
Technial Manager
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
JAVA
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck7">
<label class="form-check-label" for="customCheck7"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-02.jpg" alt="User Image">
Bess Twishes
</a>
</h2>
</td>
<td>
Designer
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
.NET
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck8">
<label class="form-check-label" for="customCheck8"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-05.jpg" alt="User Image">
Rayan Lester
</a>
</h2>
</td>
<td>
Technial Manager
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
Python
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck9">
<label class="form-check-label" for="customCheck9"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-06.jpg" alt="User Image">
Sarah Alexander
</a>
</h2>
</td>
<td>
Designer
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
Golang
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div role="tabpanel" id="tab-5" class="tab-pane fade">
<div class="table-responsive">
<table class="table table-center table-bordered table-hover datatable">
<thead>
<tr>
<th></th>
<th>Profile</th>
<th>Designation</th>
<th>comments</th>
<th>Stars</th>
<th>Category</th>
<th class="text-end">Actions</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck11">
<label class="form-check-label" for="customCheck11"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-04.jpg" alt="User Image">
Deboarah
</a>
</h2>
</td>
<td>
Associate Engineer
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
React
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck12">
<label class="form-check-label" for="customCheck12"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-11.jpg" alt="User Image">
Sofia Briant
</a>
</h2>
</td>
<td>
Technial Manager
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
JAVA
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck13">
<label class="form-check-label" for="customCheck13"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-02.jpg" alt="User Image">
Bess Twishes
</a>
</h2>
</td>
<td>
Designer
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
.NET
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck14">
<label class="form-check-label" for="customCheck14"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-05.jpg" alt="User Image">
Rayan Lester
</a>
</h2>
</td>
<td>
Technial Manager
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
Python
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck15">
<label class="form-check-label" for="customCheck15"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-06.jpg" alt="User Image">
Sarah Alexander
</a>
</h2>
</td>
<td>
Designer
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
 <i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
Golang
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck16">
<label class="form-check-label" for="customCheck16"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-14.jpg" alt="User Image">
Janet Paden
</a>
</h2>
</td>
<td>
CEO
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
Angular
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck17">
<label class="form-check-label" for="customCheck17"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-01.jpg" alt="User Image">
George Wells
</a>
</h2>
</td>
<td>
Tech Lead
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
Node
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck18">
<label class="form-check-label" for="customCheck18"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-15.jpg" alt="User Image">
Timothy Smith
</a>
</h2>
</td>
<td>
Technial Manager
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
Angular
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div role="tabpanel" id="tab-6" class="tab-pane fade">
<div class="table-responsive">
<table class="table table-bordered table-hover datatable">
<thead>
<tr>
<th></th>
<th>Profile</th>
<th>Designation</th>
<th>comments</th>
<th>Stars</th>
<th>Category</th>
<th class="text-end">Actions</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck21">
<label class="form-check-label" for="customCheck21"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-05.jpg" alt="User Image">
Albert Boone
</a>
</h2>
</td>
<td>
CEO
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
React
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck22">
<label class="form-check-label" for="customCheck22"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-14.jpg" alt="User Image">
Janet Paden
</a>
</h2>
</td>
<td>
CEO
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
Angular
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck23">
<label class="form-check-label" for="customCheck23"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-01.jpg" alt="User Image">
George Wells
</a>
</h2>
</td>
<td>
Tech Lead
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
Node
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck24">
<label class="form-check-label" for="customCheck24"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-15.jpg" alt="User Image">
Timothy Smith
</a>
</h2>
</td>
<td>
Technial Manager
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
Angular
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
 <a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck25">
<label class="form-check-label" for="customCheck25"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-06.jpg" alt="User Image">
Jessie Montoya
</a>
</h2>
</td>
<td>
PROJECT LEAD
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
Node
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck26">
<label class="form-check-label" for="customCheck26"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-10.jpg" alt="User Image">
Gary Green
</a>
</h2>
</td>
<td>
TEAM LEAD
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
Angular
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck27">
<label class="form-check-label" for="customCheck27"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-11.jpg" alt="User Image">
Sofia Briant
</a>
</h2>
</td>
<td>
Technial Manager
</td>
<td>
<div class="desc-info">
 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
JAVA
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck28">
<label class="form-check-label" for="customCheck28"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-02.jpg" alt="User Image">
Bess Twishes
</a>
</h2>
</td>
<td>
Designer
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
.NET
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck29">
<label class="form-check-label" for="customCheck29"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-05.jpg" alt="User Image">
Rayan Lester
</a>
</h2>
</td>
<td>
Technial Manager
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
Python
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
<tr>
<td>
<div class="form-check custom-checkbox">
<input type="checkbox" class="form-check-input" id="customCheck30">
<label class="form-check-label" for="customCheck30"></label>
</div>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html"><img class="avatar-img rounded-circle me-2" src="assets/img/profiles/avatar-06.jpg" alt="User Image">
Sarah Alexander
</a>
</h2>
</td>
<td>
Designer
</td>
<td>
<div class="desc-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
</div>
</td>
<td class="text-nowrap">
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-primary"></i>
<i class="fas fa-star text-muted"></i>
</td>
<td>
Golang
</td>
<td class="text-end text-nowrap">
<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div role="tabpanel" id="tab-7" class="tab-pane fade">
<div class="table-responsive">
<table class="table table-bordered table-hover datatable">
<thead>
<tr>
<th></th>
<th>Profile</th>
<th>Designation</th>
<th>comments</th>
<th>Stars</th>
<th>Category</th>
<th class="text-end">Actions</th>
</tr>
</thead>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>

</div>
  <?php $this->load->view('backend/js')?>
  </body>

  </html>
