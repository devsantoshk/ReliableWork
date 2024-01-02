<style>
    .ttm-tab-style-02 ul.tabs li a h5 {
        margin-left: 181px !important;
    }

    .img_my {
        max-width: 54% !important;
        height: auto;
        margin-right: 175px !important;
    }
</style>
<div id="root">
    <div class="page">
        <div class="site-main">
            <div class="page-header-area bg-img" style="background-image: url(&quot;Src/Inc/Img/pagetitle-bg.jpg&quot;);">
                <div class="page-header-area-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="page-header-content-inner">
                                    <div class="page-header-content">
                                        <h2>register</h2>
                                        <div></div>
                                        <div class="breadcrumb-wrapper"><span><a href="/react/hireco/" title="Homepage"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a></span><span class="bread-sep">&nbsp;/&nbsp;</span>register</div>
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
                                        <h3>Create An Account</h3>
                                    </div>
                                    <div class="ttm-tabs ttm-tab-style-02">
                                        <div class="react-tabs" data-tabs="true">
                                            <ul class="tabs" role="tablist">
                                                <li class="tab react-tabs__tab--selected" role="tab" id="react-tabs-0" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-1" tabindex="0">
                                                    <a href="#"><img class="img_my" src="Src/Inc/Img/user.png" alt=""><span>Candidate</span>
                                                        <h5>Login as a Candidate</h5>
                                                    </a>
                                                </li>
                                                <li class="tab" role="tab" id="react-tabs-2" aria-selected="false" aria-disabled="false" aria-controls="react-tabs-3">
                                                    <a href="#"><img class="img_my" src="Src/Inc/Img/profile.png" alt=""><span>Employer</span>
                                                        <h5>Login as a Employer</h5>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="content-tab">
                                                <div class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" id="react-tabs-1" aria-labelledby="react-tabs-0">
                                                    <form action="Controllers/SignUp" method="post" id="SignUp_form" class="login_form wrap-form">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <label>
                                                                    <i class="ti ti-crown"></i>
                                                                    <input type="text" id="OrgName" name="OrgName" placeholder="Organization Name" aria-required="true" required>
                                                                </label>
                                                           </div>
                                                            <div class="col-lg-6">
                                                                <label>
                                                                    <i class="ti ti-blackboard"></i>
                                                                    <!-- <input type="text" id="txtname" placeholder="Organization type"> -->
                                                                    <Select name="OrgType">
                                                                        <option value="1">Organization Type</option>
                                                                        <option value="JEE_NEET">JEE - NEET Coaching Institute</option>
                                                                        <option value="School">School</option>
                                                                    </Select>
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label>
                                                                    <i class="ti ti-time"></i>
                                                                    <input type="date" id="EstYearOrg" name="EstYearOrg" placeholder="Establishment year of the organization" aria-required="true" required>
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label>
                                                                    <i class="ti ti-user"></i>
                                                                    <input type="text" id="UserName" name="UserName" placeholder="User Name" aria-required="true" required>
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label>
                                                                    <i class="ti ti-mobile"></i>
                                                                    <input type="tel" id="phone" name="phone" placeholder="Phone Number">
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label>
                                                                    <i class="ti ti-email"></i>
                                                                    <input type="email" id="email" name="email" placeholder="Email Address" aria-required="true" required>
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label>
                                                                    <i class="ti ti-lock"></i>
                                                                    <input type="password" id="password" name="password" placeholder="Password" aria-required="true" required>
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label>
                                                                    <i class="ti ti-lock"></i>
                                                                    <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password *" aria-required="true" required>
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-12"><label class="mt-0">
                                                                    <div class="d-md-flex align-items-center justify-content-between">
                                                                        <div class="cookies-checkbox mt-15">
                                                                            <div class="d-flex flex-row justify-content-start">
                                                                                <input class="w-auto mr-10 mt-5" id="cookies-consent" name="cookies-consent" type="checkbox" value="yes" aria-required="true" required><span>you accept our
                                                                                    Terms and Conditions and Privacy
                                                                                    Policy</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-15">
                                                                            <p>Already registered?<a href="login" class="text-theme-SkinColor"> Sign
                                                                                    in here</a></p>
                                                                        </div>
                                                                    </div>
                                                                </label></div>
                                                            <div class="col-lg-12">
                                                                <label class="mb-0">
                                                                    <button class="submit w-100 ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" type="submit" name="SignUp" value="signup">Sign up</button>
                                                                </label>
                                                            </div>
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