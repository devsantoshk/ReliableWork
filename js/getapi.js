/************* Start Latest Courses Function ************/
function LatestCourses(id, where) {
    let FetchURL = fetch("https://electrotechsolution.com/api/courses&Department&" + where);
    FetchURL.then(result => result.json())
        .then(data => {
            // console.log(data);
            var Fetchid = document.getElementById(id);
            var html = "";
            for (var i in data) {
                html += '<div class="col-xl-3 col-lg-4 col-md-6">';
                html += '<div class="product type-product post-359 status-publish first instock product_cat-fresh-fruit product_cat-uncategorized product_cat-vegetables product_tag-brown product_tag-organic product_tag-snack has-post-thumbnail sale shipping-taxable purchasable product-type-simple">';
                html += '<div class="product_wrapper product-cart-wrap style_one">';
                html += '<div class="product-img-action-wrap">';
                html += '<div class="product-badges product-badges-position product-badges-mrg">';
                // html += '<span class="badge_type_one onsale">13%</span>';
                html += '</div>';
                html += '</div>';
                html += '<div class="product-content-wrap">';
                html += '<div class="product-category">';
                html += '<div class="pro_cat"></div>';
                html += '</div>';
                html += '<img src="Src/Inc/img/blog/' + data[i].course_image + '" alt="not found"/>';
                html += '<h2><a href="#">' + data[i].courses_list + '</a></h2>';
                html += '<div class="product-card-bottom">';
                html += '<span>' + data[i].discription + '</span>';
                html += '</div>';
                html += '<div class="product-card-bottom">';
                html += '<div class="et-btn">';
                html += '<a class="text-white" href="' + data[i].course_link + '"><i class="fa fa-arrow-right"> </i> View More</a>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
            }
            Fetchid.innerHTML = html;
        })
        .catch((error) => {
            var error = "Con't be able to fetch";
            //console.log(error);
            // Fetchid.innerHTML = error;
        })
}
/************* End Latest Courses Function **************/

LatestCourses("LatestAll", "programming-frameworks");
LatestCourses("LatestProgrammingFramwork", "programming-frameworks");
LatestCourses("LatestEmbedded", "embedded");
LatestCourses("LatestIOT", "iot");
LatestCourses("LatestAutomation", "automation");
LatestCourses("LatestRobotics", "robotics");

/************* Start Why Choose Electro-Tech Solution ***/
function WhyChooseET(id) {
    let FetchURL = fetch("https://electrotechsolution.com/api/courses&Department&" + id);
    FetchURL.then(result => result.json())
        .then(data => {
            console.log("WhyChooseET : ".data);
            var Fetchid = document.getElementById(id);
            var html = "";
            for (var i in data) {
                html += '<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-ed28ee6" data-id="ed28ee6" data-element_type="column">';
                html += '<div class="elementor-widget-wrap elementor-element-populated">';
                html += '<div class="elementor-element elementor-element-6ac04f3 elementor-widget elementor-widget-nest-icon-box-v1" data-id="6ac04f3" data-element_type="widget" data-widget_type="nest-icon-box-v1.default">';
                html += '<div class="elementor-widget-container">';
                html += '<div class="card text-white bg-primary d-flex wow animate__animated animate__fadeInUp" data-wow-delay=".1s" style="max-width: 18rem;">';
                html += '<div class="card-header my-bg">Header</div>';
                html += '<div class="card-body">';
                html += '<h5 class="card-title text-white">Secondary card title</h5>';
                html += '<p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the cards content.</p>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
            }
            Fetchid.innerHTML = html;
        })
        .catch((error) => {
            var error = "Con't be able to fetch";
            console.log(error);
            Fetchid.innerHTML = error;
        })
}
/************* End Why Choose Electro-Tech Solution *****/
// WhyChooseET("WhyChooseET");

/************* Start Courses Categories ****************/
function FetchCotegory(id) {
    let FetchURL = fetch("https://electrotechsolution.com/api/courses&Department&" + id);
    FetchURL.then(result => result.json())
        .then(data => {
            //  console.log(data);
            var Fetchid = document.getElementById(id);
            var html = "";
            for (var i in data) {
                html += '<li class="list-inline-item nav-item"><a class="nav_link" href="' + data[i].course_link + '">' + data[i].courses_list + '</a></li>';
            }
            Fetchid.innerHTML = html;
        })
        .catch((error) => {
            var error = "Con't be able to fetch";
            console.log(error);
            Fetchid.innerHTML = error;
        })
}
/************* End Courses Categories *****************/

FetchCotegory("programming-frameworks");
FetchCotegory("embedded");
FetchCotegory("iot");
FetchCotegory("automation");
FetchCotegory("robotics");

/************* Start Courses All Categories ************/
function FetchAllCotegory(id) {
    let FetchURL = fetch("https://electrotechsolution.com/api/" + id);
    FetchURL.then(result => result.json())
        .then(data => {
            //console.log(data);
            var Fetchid = document.getElementById(id);
            var html = "";
            for (var i in data) {
                html += '<li class="content_cat_list  cat_image_in "><a href="https://themepanthers.com/wp/nest/d1/product-category/baking-material/">';
                html += '<img decoding="async" src="https://themepanthers.com/wp/nest/d1/wp-content/uploads/2022/05/category-2.png" alt="Baking material" />' + data[i].dep_title + '</a></li>';
            }
            Fetchid.innerHTML = html;
        })
        .catch((error) => {
            var error = "Con't be able to fetch";
            // console.log(error);
            Fetchid.innerHTML = error;
        })
}
FetchAllCotegory("department");
/************* End Courses All Categories **************/

/************* Start All Trainding Courses  ************/
function FetchAllTrainding(id) {
    let FetchURL = fetch("http://127.0.0.1:8080/api/" + id);
    FetchURL.then(result => result.json())
        .then(data => {
            //console.log(data);
            var Fetchid = document.getElementById(id);
            var html = "";
            for (var i in data) {
                html += '<div class="card-2 bg-9 " style="background:#FFFCEB!important;">';
                html += '<figure class="img-hover-scale">';
                html += '<a href="#" target=&quot;_blank&quot; rel=&quot;nofollow&quot; class="d-block">';
                html += '<img decoding="async" src="https://themepanthers.com/wp/nest/d1/wp-content/uploads/2022/05/cat-12.png" alt="" />';
                html += '</a>';
                html += '</figure>';
                html += '<h6><a href="#" target=&quot;_blank&quot; rel=&quot;nofollow&quot;>Project Training</a>';
                html += '<span>11 items</span></div>';
            }
            Fetchid.innerHTML = html;
        })
        .catch((error) => {
            var error = "Con't be able to fetch";
            console.log(error);
            Fetchid.innerHTML = error;
        })
}
// FetchAllTrainding("Trainings");
/************* End All Trainding Courses  *************/

/***************** Blog Topic *************************/
function FetchAllBlog(id) {
    let FetchURL = fetch("https://electrotechsolution.com/api/" + id);
    FetchURL.then(result => result.json())
        .then(data => {
            // console.log(data);
            var Fetchid = document.getElementById(id);
            var html = "";
            for (var i in data) {
                html += '<div class="SidenavAccordion-module--section--82c19">';
                html += '<a class="SidenavAccordion-module--sectionTitle--fd7d8 " href="' + data[i].TopicLink + '">';
                html += '<div class="SidenavAccordion-module--sectionTitleIcon--af2b3">';
                html += '<div data-testid="volt-hspacer" style="width:12px;display:block"></div>';
                html += '<h6 class="Text-module__text___2yycX Text-module__h6___dlIYV" data-testid="volt-text">' + data[i].TopicName;
                html += '</h6>';
                html += '</a>';
                html += '</div>';
            }
            Fetchid.innerHTML = html;
        })
        .catch((error) => {
            var error = "Con't be able to fetch Blog";
            //console.log(error);
            //Fetchid.innerHTML = error;
        })
}
FetchAllBlog("blogtopic");