<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['Name'])) {
	AdminRequered('Admin_Link');
	$conn = DbConfig();
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
							<form action="../Controllers/Admin/Top_Header" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
								<?php
								$sql = "SELECT * FROM `top-header` WHERE 1";
								$result = $conn->query($sql);
								if ($row = $result->fetch_assoc()){

								?>
									<div class="item form-group">
										<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-contact">Contact Number <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 ">
											<input type="phone" name="Contact" id="first-contact" value="<?php echo $row["Contact"] ?>" class="form-control ">
										</div>
									</div>
									<div class="item form-group">
										<label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 ">
											<input type="email" id="Email" name="Email" value="<?php echo $row["Email"] ?>" class="form-control">
										</div>
									</div>
									<div class="item form-group">
										<label for="Location" class="col-form-label col-md-3 col-sm-3 label-align">Location <span class="required">*</span></label>
										<div class="col-md-6 col-sm-6 ">
											<input id="Location" name="Location" class="form-control" value="<?php echo $row["Location"] ?>" type="text">
										</div>
									</div>
									<div class="ln_solid"></div>
									<div class="item form-group">
										<div class="col-md-6 col-sm-6 offset-md-3">
											<input id="id" name="id" value="<?php echo $row["id"] ?>" class="hidden-lg" hidden>
											<button type="submit" name="Update_Top_Header" class="btn btn-success" data-toggle="modal">Update</button>
										</div>
									</div>
								<?php
								} else echo "Record Zero or Error: " . $conn->error;
								$result->free();
								if (isset($_GET['success']))
									echo '<script>$(document).ready(function() {$("#myModal").modal("show");});</script>';
						        ?>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 ">
					<div class="x_panel">
						<div class="x_title">
							<h2>Form Design <small>Socialmedia Detail</small></h2>
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
							<form action="../Controllers/Admin/Top_Header" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
							<?php
								$sql = "SELECT * FROM `social_media` WHERE 1";
								$result = $conn->query($sql);
								if ($row = $result->fetch_assoc()){
								?>
								<div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-facebook">Facebook <span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 ">
										<input type="url" name="Facebook" id="first-facebook" value="<?php echo $row["Facebook"] ?>" class="form-control ">
									</div>
								</div>
								<div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align" for="Twitter">Twitter <span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 ">
										<input type="url" id="Twitter" name="Twitter" value="<?php echo $row["Twitter"] ?>" class="form-control">
									</div>
								</div>
								<div class="item form-group">
									<label for="Linkdin" class="col-form-label col-md-3 col-sm-3 label-align">LinkedIn</label>
									<div class="col-md-6 col-sm-6 ">
										<input type="url" name="LinkedIn" id="LinkedIn" value="<?php echo $row["LinkedIn"] ?>" class="form-control">
									</div>
								</div>
								<div class="ln_solid"></div>
								<div class="item form-group">
									<div class="col-md-6 col-sm-6 offset-md-3">
										<input id="id" name="id" value="<?php echo $row["id"] ?>" class="hidden-lg" hidden>
										<button type="submit" name="update-socialmedia" class="btn btn-success">Update Socialmedia</button>
									</div>
								</div>
								<?php
								} else echo "Record Zero or Error: " . $conn->error;
								$result->free();
								$conn->close();
								if (isset($_GET['success']))
									echo '<script>$(document).ready(function() {$("#myModal").modal("show");});</script>';
						        ?>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /page content -->

	

<?php
	AdminRequered('pop_model');
	AdminRequered('Admin_Footer');
} else {
	header("Location: ../Login");
	exit();
}
?>