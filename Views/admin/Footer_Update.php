<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['Name'])) {
AdminRequered('Admin_Link');
 ?>

          <!-- sidebar menu -->
          <?php AdminRequered('Admin_Sidebar') ?>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <?php AdminRequered('Admin_Header') ?>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Top Header</h3>
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Design <small>Contact Information</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form action="../Controllers/Admin/Header" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-contact">Contact Number <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="phone" name="phone" id="first-contact" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="email" id="email" name="email" required="required" class="form-control">
											</div>
										</div>
										<div class="item form-group">
											<label for="Location" class="col-form-label col-md-3 col-sm-3 label-align">Location</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="Location" class="form-control" required="required" type="text" name="Location">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" name="update" class="btn btn-success">Update</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
      <!-- /page content -->

<?php 
  AdminRequered('Admin_Footer');
  }
  else{
     header("Location: ../Login");
    exit();
  }
 ?>