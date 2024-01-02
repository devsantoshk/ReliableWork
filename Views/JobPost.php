<div id="root">
    <div class="page">
      <div class="site-main">
        <div class="page-header-area bg-img" style="background-image: url(&quot;https://themetechmount.com/react/hireco/images/pagetitle-bg.jpg&quot;);">
          <div class="page-header-area-inner">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 text-center">
                  <div class="page-header-content-inner">
                    <div class="page-header-content">
                      <h2>Job Post</h2>
                      <div></div>
                      <div class="breadcrumb-wrapper">
                        <span>
                          <a href="/react/hireco/" title="Homepage">
                            <i class="ti ti-home"></i>&nbsp;&nbsp;Home </a>
                        </span>
                        <span class="bread-sep">&nbsp;/&nbsp;</span>Job Post
                      </div>
                      <div></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="ttm-row register-section clearfix">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="bg-theme-GreyColor ttm-col-bgcolor-yes ttm-bg rounded p-50 p-lg-20">
                  <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                  <div class="layer-content">
                    <div class="text-center mb-20">
                      <h3>Job Post</h3>
                      <?php if (isset($_GET['success'])) { ?>
												<p class="success"><?php echo $_GET['success']; ?></p>
											<?php } ?>
                    </div>
                    <div class="ttm-tabs ttm-tab-style-02">
                      <div class="react-tabs" data-tabs="true">
                        <div class="content-tab">
                          <div class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" id="react-tabs-1" aria-labelledby="react-tabs-0">
                            <form action="Controllers/ftp" method="post" id="login_form" class="login_form wrap-form">
                              <div class="row">
                                <div class="col-lg-6">
                                  <label class="form-label">Name</label>
                                  <label>
                                    <i class="ti ti-user"></i>
                                    <input name="Name" type="text" id="txtname" placeholder="Name" required>
                                  </label>
                                </div>
                                <div class="col-lg-6">
                                  <label class="form-label">Date of Bith</label>
                                  <label>
                                    <i class="ti ti-calender"></i>
                                    <input name="DOB" type="date" id="txtedob" placeholder="Date of birth" required>
                                  </label>
                                </div>
                                <div class="col-lg-6">
                                  <label class="form-label">Gender</label>
                                  <label>
                                    <i class="ti ti-user"></i>
                                    <select name="Gender"  class="form-control" required>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
                                  </label>
                                </div>
                                <div class="col-lg-6">
                                  <label class="form-label">Subjects</label>
                                  <label>
                                    <i class="ti ti-book"></i>
                                    <input name="Subjects" type="text" id="txtsubjects" placeholder="Subjects *" required>
                                  </label>
                                </div>
                                <div class="col-lg-6">
                                 <label class="form-label">Phone Number</label>
                                  <label>
                                    <i class="ti ti-mobile"></i>
                                    <input name="Phone" type="phone" id="txtphone" placeholder="Phone Number" required>
                                  </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Email *</label>
                                    <label>
                                      <i class="ti ti-email"></i>
                                      <input name="Email" type="email" id="txtemail" placeholder="Email" required>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">State *</label>
                                    <label>
                                      <select name="State" class="form-control" id="ddlstate" required>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                        <option value="Daman and Diu">Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Puducherry">Puducherry</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                      </select>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">District *</label>
                                    <label>
                                      <!-- <i class="ti ti-email"></i> -->
                                      <input name="District" type="text" id="txtemail" placeholder="District" required>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                  <label class="mt-0">
                                    <div class="d-md-flex align-items-center justify-content-between">
                                      <div class="cookies-checkbox mt-15">
                                        <div class="d-flex flex-row justify-content-start">
                                          <input class="w-auto mr-10 mt-5" id="cookies-consent" name="cookies-consent" type="checkbox" required value="yes">
                                          <span>you accept our Terms and Conditions and Privacy Policy</span>
                                        </div>
                                      </div>
                                      <div class="mt-15">
                                        <p>Already registered? <a href="login" class="text-theme-SkinColor"> Sign in here</a>
                                        </p>
                                      </div>
                                    </div>
                                  </label>
                                </div>
                                <div class="col-lg-12">
                                  <label class="mb-0">
                                    <button class="submit w-100 ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">Submit</button>
                                  </label>
                                </div>
                              </div>
                            </form>
                          </div>
                          <div class="react-tabs__tab-panel" role="tabpanel" id="react-tabs-3" aria-labelledby="react-tabs-2"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>