<!-- [ auth-signin ] start -->

<div class="page-header-area bg-img" style="background-image: url(&quot;Src/Inc/Img/pagetitle-bg.jpg&quot;);">
	<div class="page-header-area-inner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="page-header-content-inner">
						<div class="page-header-content">
							<h2>Login</h2>
							<div></div>
							<div class="breadcrumb-wrapper"><span><a href="/" title="Homepage"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a></span><span class="bread-sep">&nbsp;/&nbsp;</span>Login</div>
							<div></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="ttm-row login-section clearfix">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bg-theme-GreyColor ttm-col-bgcolor-yes ttm-bg rounded p-50 p-lg-20">
					<div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
					<div class="layer-content">
						<div class="text-center mb-20">
							<h3>Login To Your Account</h3>
						</div>
						<div class="ttm-tabs ttm-tab-style-02">
							<div class="react-tabs" data-tabs="true">
								<ul class="tabs" role="tablist">
									<li class="tab react-tabs__tab--selected" role="tab" id="react-tabs-0" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-1" tabindex="0"><a><img class="img_my" src="Src/Inc/Img/user.png" alt=""><span>Candidate</span>
											<h5>Login as a Candidate</h5>
										</a></li>
									<li class="tab" role="tab" id="react-tabs-2" aria-selected="false" aria-disabled="false" aria-controls="react-tabs-3"><a><img class="img_my" src="Src/Inc/Img/profile.png" alt=""><span>Employer</span>
											<h5>Login as a Employer</h5>
										</a></li>
								</ul>
								<div class="content-tab">
									<div class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" id="react-tabs-1" aria-labelledby="react-tabs-0">
										<form action="Controllers/Login" id="login_form" class="login_form wrap-form" method="post">
											<div class="row">
											<?php if (isset($_GET['error'])) { ?>
												<p class="error"><?php echo $_GET['error']; ?></p>
											<?php }
											elseif(isset($_GET['Success'])) 
											   echo "<p class='success'>". $_GET['Success'] . "</p>";
										    ?>
												<div class="col-lg-12"><label><i class="ti ti-email"></i><input type="email" name="uname" id="txtemail" placeholder="Email Address"></label></div>
												<div class="col-lg-12"><label><i class="ti ti-lock"></i><input type="password" name="password" id="password" placeholder="Password"></label>
												</div>
												<div class="col-lg-12"><label>
														<div class="forgot-pwd text-center mt-5">
															<p><a href="ResetPassword" class="text-theme-SkinColor">Forgot
																	Password?</a></p>
															<p>Don't have account? <a href="SignUp" class="text-theme-SkinColor">Sign Up
																	here</a></p>
														</div>
													</label></div>
												<div class="col-lg-6 mx-auto"><label class="mb-0"><button name="login" class="submit w-100 ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">Sign in</button></label></div>
											</div>
										</form>
									</div>
									<div class="react-tabs__tab-panel" role="tabpanel" id="react-tabs-3" aria-labelledby="react-tabs-2"></div>
								</div>
							</div>
						</div>
						<div class="login-social-buttons">
							<div class="row">
								<div class="col-md-6"><button id="login-with-facebook" class="social-account-button w-100 facebook-button"><i class="ti ti-facebook"></i><span>Login With
											facebook</span></button></div>
								<div class="col-md-6"><button id="login-with-google" class="social-account-button w-100 google-button"><i class="ti ti-google"></i><span>Login With Google</span></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- [ auth-signin ] end -->