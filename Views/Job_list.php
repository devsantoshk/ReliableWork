
<?php 
    $conn = DbConfig();
    $sql = "SELECT * FROM find_job LIMIT 5";
    $LocSql = "SELECT * FROM locations";
    $result = $conn->query($sql);
    $LocResult = $conn->query($LocSql);
    ?>
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
                                            <h2>Find Your Dream Job Here !!!</h2>
                                            <div></div>
                                            <div class="breadcrumb-wrapper"><span><a href="index" title="Homepage"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a></span><span class="bread-sep">&nbsp;/&nbsp;</span>job</div>
                                            <div class="pb-65 pb-lg-0"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-section clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="bg-theme-GreyColor ttm-col-bgcolor-yes ttm-bg border rounded p-40 p-lg-20 mt_70 mt-lg-50">
                                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                    <div class="layer-content">
                                        <form id="search_Form" class="search_Form wrap-form" method="post" action="Controllers/JobList" data-mailchimp="true">
                                            <label>
                                                <i class="ti ti-search"></i>
                                                <input type="text" id="filter" name="JobTitel" placeholder="Job Title or Keywords">
                                            </label>
                                            <label>
                                                <i class="ti ti-list"></i>
                                                <select name="JobCategories" id="JobCategories">
                                                    <option value="0">Job Categories</option>
                                                    <?php
                                                        $Catsql = "SELECT * FROM jobcategory";
                                                        $Catresult = $conn->query($Catsql);
                                                        
                                                        if ($Catresult->num_rows > 0) 
                                                        {
                                                            $count = 0;
                                                            while ($row = $Catresult->fetch_assoc()) 
                                                            {
                                                                echo '<option value="'.$row["Job_CatId"].'">' . $row["JobCategoryName"] . '</option>';
                                                            }
                                                        } 
                                                        else
                                                            echo "0 results";           
                                                    ?>
                                                </select>
                                            </label>
                                            <label>
                                                <i class="ti ti-location-pin"></i>
                                                <select name="locations" id="locations">
                                                    <option value="0">Select Location</option>
                                                    <?php
                                                        if ($LocResult->num_rows > 0) 
                                                        {
                                                            $count = 0;
                                                            while ($row = $LocResult->fetch_assoc()) 
                                                            {
                                                                echo '<option value="'.$row["Loc_Id"].'">' . $row["Location"] . '</option>';
                                                            }
                                                        } 
                                                        else
                                                            echo "0 results";           
                                                    ?>
                                                </select>
                                            </label>
                                            <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">Find Jobs</button>
                                        </form>
                                    </div>
                                    <p data-animation="animate__fadeInDown" class="d-none d-md-block"><span class="">Popular Searches : </span>
                                        <?php
                                        if ($result->num_rows > 0) 
                                        {
                                            $count = 0;
                                            while ($row = $result->fetch_assoc()) 
                                            {
                                                echo "<a href=\"".$row["JobID"]."\">" . $row["JobTitle"] . "</a>";
                                                $count++;
                                                if ($count < $result->num_rows) echo ", ";
                                            }
                                        } 
                                        else
                                            echo "0 results";           
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ttm-row sidebar job-sidebar clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 widget-area sidebar-left job_list-widget-area">
                                <div class="job_list-widget">
                                    <aside class="widget job-widget">
                                        <h3 class="widget-title"><i class="flaticon flaticon-calendar"></i>Date Posted</h3>
                                        <form id="list1" class="list-filter">
                                            <div><label class="radio"><input type="radio" name="post_date" value="Today">Today</label><label class="radio"><input type="radio" name="post_date" value="Last 7 days" checked="">Last 7 days</label><label class="radio"><input type="radio" name="post_date" value="Last 14 days">Last 14 days</label>
                                                <label class="radio"><input type="radio" name="post_date" value="Last 21 days">Last 21 days</label><label class="radio"><input type="radio" name="post_date" value="Last 30 days">Last 30 days</label></div>
                                        </form>
                                    </aside>
                                    <aside class="widget job-widget">
                                        <h3 class="widget-title"><i class="flaticon flaticon-subfolder-1"></i>Categories</h3>
                                        <form id="list2" class="list-filter">
                                            <div><label class="radio"><input type="radio" name="categories" value="Digital Marketing" checked="">Digital Marketing</label><label class="radio"><input type="radio" name="categories" value="Charity &amp; Voluntary">Charity &amp; Voluntary</label>
                                                <label class="radio"><input type="radio" name="categories" value="IT Contractor">IT Contractor</label><label class="radio"><input type="radio" name="categories" value="Estate Agency">Estate Agency</label>
                                                <label class="radio"><input type="radio" name="categories" value="Graduate">Graduate</label>
                                            </div>
                                        </form>
                                    </aside>
                                    <aside class="widget job-widget">
                                        <h3 class="widget-title"><i class="flaticon flaticon-expert"></i>Experince</h3>
                                        <form id="list3" class="list-filter">
                                            <div><label class="radio"><input type="radio" name="ex_year" value="0Year to 1Year">0Year to 1Year</label><label class="radio"><input type="radio" name="ex_year" value="1Year to 2Year">1Year to 2Year</label>
                                                <label class="radio"><input type="radio" name="ex_year" value="2Year to 3Year">2Year to 3Year</label>
                                                <label class="radio"><input type="radio" name="ex_year" value="3Year or more" checked="">3Year or more</label>
                                            </div>
                                        </form>
                                    </aside>
                                </div>
                                <aside class="widget widget-banner text-theme-WhiteColor">
                                    <div class="ttm-col-bgcolor-yes bg-theme-DarkColor text-theme-WhitColor col-bg-img-seven ttm-col-bgimage-yes ttm-bg p-40">
                                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer bg-theme-DarkColor" style="background-image: url(&quot;https://themetechmount.com/react/hireco/images/bg-image/col-bgimage-7.jpg&quot;);">
                                            <div class="ttm-col-wrapper-bg-layer-inner bg-theme-DarkColor"></div>
                                        </div>
                                        <div class="layer-content text-center">
                                            <div class="widget-banner-inner">
                                                <h3 class="mb-15">Make a Difference with Online Resume!</h3>
                                                <p class="mb-30">Your Resume in Minutes with Jobs Resume Assistant is Ready!</p><a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" href="/react/hireco/">appoinments!</a></div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-lg-8 content-area">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="showing-result-block d-sm-flex align-items-center justify-content-between"><span class="showing-result">Showing 1–10 of 50 Jobs Results :</span>
                                            <form>
                                                <div class="sort-by">Sort By:<select><option value="" disabled="" selected="">A to Z</option><option value="popularity">a</option><option value="rating">b</option><option value="date">c</option><option value="price">d</option><option value="price-desc">e</option></select></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                   <?php
                                        $JobPstsql = "SELECT * FROM jobpostings";
                                        $JobPostresult = $conn->query($JobPstsql);
                                        
                                        if ($JobPostresult->num_rows > 0) 
                                        {
                                            $count = 0;
                                            while ($row = $JobPostresult->fetch_assoc()) 
                                            {
                                                     
                                   ?>
                                     <div class="col-lg-12 col-md-12">
                                        <div class="featured-imagebox featured-imagebox-job bg-theme-GreyColor">
                                            <div class="featured-thumbnail"><img src="https://themetechmount.com/react/hireco/images/job/job-01.png"></div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3><a href="Job_details?JobId=<?php echo $row["JobId"]?>"><?php echo $row["JobTitle"]?></a></h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p><?php echo $row["Description"]?></p>
                                                    <p><?php echo $row["JobPost_Date"]?></p>
                                                </div>
                                                <div class="featured-bottom">
                                                    <div class="job-meta"><span><i class="fa fa-map-marker-alt"></i><?php echo $row["Location"]?></span><span><i class="fa fa-filter"></i><?php echo $row["JobCategory"]?></span></div>
                                                    <div class="job-time"><span class="green"><a href="Job_details?JobId=<?php echo $row["JobId"]?>">View More Details</a></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   <?php
                                        }
                                    } 
                                    else
                                        echo "0 results";  
                                   ?>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="featured-imagebox featured-imagebox-job bg-theme-GreyColor">
                                            <div class="featured-thumbnail"><img src="https://themetechmount.com/react/hireco/images/job/job-04.png"></div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3><a href="/react/hireco/Job_details"><a href="/react/hireco/Job_details">Opening For The Content Creator</a></a>
                                                    </h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Published 2Days Ago.</p>
                                                </div>
                                                <div class="featured-bottom">
                                                    <div class="job-meta"><span><i class="fa fa-map-marker-alt"></i>California</span><span><i class="fa fa-filter"></i>Automotive Jobs</span></div>
                                                    <div class="job-time"><span class="green">full time</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="job-pagination-block"><a class="page-nav-link">prev</a><a class="page-nav-link current">1</a><a class="page-nav-link" href="#">2</a><a class="page-nav-link" href="#">3</a><a class="page-nav-link" href="#">....</a><a class="page-nav-link">next</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="ttm-row action-section bg-theme-SkinColor text-theme-WhiteColor clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-md-flex align-items-center justify-content-between">
                                    <div class="featured-icon-box icon-align-before-content style2">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-xl"><i class="flaticon flaticon-recruitment-5"></i></div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Incredible Recruitment &amp; Staffing Agency</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>We have over 30 years experience oft Business porro qusquam dol ipsum quia dolor sit amet.</p>
                                            </div>
                                        </div>
                                    </div><a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-white" href="/react/hireco/">Hiring Now!</a></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>