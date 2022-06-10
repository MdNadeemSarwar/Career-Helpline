<?php
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    echo "<script> alert('$error')</script>";
}
include 'assets/globals/top.php';
?>
<!-- End Header/Navbar ftp -->

<!-- ======= Intro Section ======= -->
<form action="blog-grid.php" method="post">
    <div class="intro intro-carousel row align-items-center swiper position-relative bg-image" style="background-image: url(assets/img/header_bg.jpg)">
        <div style="position: absolute;top:0;right:0;z-index:0;background-color:rgba(0, 0, 0, 0.3)" class="w-100 h-100"></div>
        <div style="z-index: 1;" class="container">
            <div class="row align-items-center text-center justify-content-center">
                <div style="font-size: 38px;text-shadow: 5px 5px black;font-weight: 700;" class="col-12 mb-5 text-capitalize">
                    Welcome To The Best Career advisor
                </div>

                <div class="col-md-3 text-end">
                    <input style="height: 60px;" class="w-100 rounded-pill px-4 fs-5 mb-3" type="search" name="search" placeholder="Search Course, Colleges">
                </div>
                <div class="col-md-3">
                    <select style="height: 60px;" class="w-100 rounded-pill px-4 fs-5 mb-3" name="category" id="">
                        <option value="" selected>Choose..</option>
                        <option value="Scholarships">Scholarships</option>
                        <option value="Courses">Courses</option>
                        <option value="colleges ">colleges</option>

                    </select>
                </div>

                <div class="col-md-2 text-left">
                    <button name="explore" style="height: 60px;background-color:#2eca6a;font-weight:600" class="w-100 rounded-pill fs-5 mb-3" type="submit">Explore</button>
                </div>
            </div>
        </div>
    </div>
</form><!-- End Intro Section -->

<main id="main">

    <!-- ======= Services Section ======= -->
    <!-- Modal -->
    <div class="modal fade" id="collegePopup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="min-width:80%">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body container row">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->
    <section class="section-services section-t8" style="background-color: #f1f1f1;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap">
                        <div class="title-box text-center text-capitalize">
                            <h2 style="width: 100%;" class="title-a w-100">We Always Deliver More Than expected</h2>
                            <h6>here we can explain about your career</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div onclick="getsub(this)" class="col-md-6 col-lg-3 col-12 text-center p-3 zoom" data-main="colleges" data-bs-toggle="modal" data-bs-target="#collegePopup">
                    <div class="ser-box p-3">
                        <div class="card-box-c foo">
                            <div class="card-header-c">
                                <div class="card-box-ico">
                                    <i class="fas fa-university"></i>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h2 class="title-c">College</h2>
                                </div>
                            </div>
                            <div class="card-body-c">
                                <p class="content-c m-0">
                                    know more about colleges that you want to apply for
                                </p>
                            </div>
                            <div class="card-footer-c">

                            </div>
                        </div>
                    </div>
                </div>
                <div onclick="getsub(this)" class="col-md-6 col-lg-3 col-12 text-center p-3 zoom" data-main="Courses" data-bs-toggle="modal" data-bs-target="#collegePopup">
                    <div class="ser-box p-3">
                        <div class="card-box-c foo">
                            <div class="card-header-c">
                                <div class="card-box-ico">
                                    <i class="fas fa-swatchbook"></i>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h2 class="title-c">Courses</h2>
                                </div>
                            </div>
                            <div class="card-body-c">
                                <p class="content-c m-0">
                                    Know more about the courses you wish to pursue and best institutes that can offer them.
                                </p>
                            </div>
                            <div class="card-footer-c">
                                <!-- <a href="blog-grid.php?category=courses-m" class="link-c link-icon">Read more
                                    <span class="bi bi-chevron-right"></span>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div onclick="getsub(this)" class="col-md-6 col-lg-3 col-12 text-center p-3 zoom" data-main="more" data-bs-toggle="modal" data-bs-target="#collegePopup">
                    <div class="ser-box p-3">
                        <div class="card-box-c foo">
                            <div class="card-header-c">
                                <div class="card-box-ico">
                                    <i class="fa-solid fa-school"></i>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h2 class="title-c">Career</h2>
                                </div>
                            </div>
                            <div class="card-body-c">
                                <p class="content-c m-0">
                                    Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,

                                </p>
                            </div>
                            <div class="card-footer-c">
                                <!-- <a href="#" class="link-c link-icon">Read more
                                    <span class="bi bi-chevron-right"></span>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div onclick="getsub(this)" class="col-md-6 col-lg-3 col-12 text-center p-3 zoom" data-main="exams" data-bs-toggle="modal" data-bs-target="#collegePopup">
                    <div class="ser-box p-3">
                        <!-- <a style="color: black;" href="blog-grid.php?category=Exams-s" class="link-c link-icon"> -->
                        <div class="card-box-c foo">
                            <div class="card-header-c">
                                <div class="card-box-ico">
                                    <i class="fas fa-edit"></i>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h2 class="title-c">Exams</h2>
                                </div>
                            </div>
                            <div class="card-body-c">
                                <p class="content-c m-0">
                                    know more about enterance exams that are taking place for any course
                                </p>
                            </div>
                            <div class="card-footer-c">
                                <!-- <a href="blog-grid.php?category=Exams-s" class="link-c link-icon">Read more
                                    <span class="bi bi-chevron-right"></span>
                                </a> -->
                            </div>
                        </div>
                        <!-- </a> -->
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-12 text-center p-3 zoom">
                    <div class="ser-box p-3">
                        <a style="color: black;" href="blog-grid.php?category=scholarships-m" class="link-c link-icon">
                            <div class="card-box-c foo">
                                <div class="card-header-c">
                                    <div class="card-box-ico">
                                        <i class="fas fa-funnel-dollar"></i>
                                    </div>
                                    <div class="card-title-c align-self-center">
                                        <h2 class="title-c">Scholarships</h2>
                                    </div>
                                </div>
                                <div class="card-body-c">
                                    <p class="content-c m-0">
                                        know more about different scholarships that can help you cover your acadnemic expenses
                                    </p>
                                </div>
                                <div class="card-footer-c">
                                    <!-- <a href="blog-grid.php?category=Scholarships-m" class="link-c link-icon">Read more
                                    <span class="bi bi-chevron-right"></span>
                                </a> -->
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-md-6 col-lg-3 col-12 text-center p-3 zoom">
                    <div class="ser-box p-3">
                        <a style="color: black;" href="blog-grid.php?category=Abroad study-s" class="link-c link-icon">
                            <div class="card-box-c foo">
                                <div class="card-header-c">
                                    <div class="card-box-ico">
                                        <i class="fas fa-user-graduate"></i>
                                    </div>
                                    <div class="card-title-c align-self-center">
                                        <h2 class="title-c">Abroad study</h2>
                                    </div>
                                </div>
                                <div class="card-body-c">
                                    <p class="content-c m-0">
                                        know more about how to apply for a course abroad
                                    </p>
                                </div>
                                <div class="card-footer-c">
                                    <!-- <a href="blog-grid.php?category=Abroad study-s" class="link-c link-icon">Read more
                                    <span class="bi bi-chevron-right"></span>
                                </a> -->
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 col-12 text-center p-3 zoom">
                    <div class="ser-box p-3">
                        <a style="color: black;" href="blog-grid.php?category=Job-s" class="link-c link-icon">
                            <div class="card-box-c foo">
                                <div class="card-header-c">
                                    <div class="card-box-ico">
                                        <i class="fas fa-user-md"></i>
                                    </div>
                                    <div class="card-title-c align-self-center">
                                        <h2 class="title-c">Job</h2>
                                    </div>
                                </div>
                                <div class="card-body-c">
                                    <p class="content-c m-0">
                                        know more about different job oppurtunities that are available
                                    </p>
                                </div>
                                <div class="card-footer-c">
                                    <!-- <a href="blog-grid.php?category=Job-s" class="link-c link-icon">Read more
                                    <span class="bi bi-chevron-right"></span>
                                </a> -->
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-12 text-center p-3 zoom">
                    <div class="ser-box p-3">
                        <a style="color: black;" href="blog-grid.php?category=study loan-s" class="link-c link-icon">
                            <div class="card-box-c foo">
                                <div class="card-header-c">
                                    <div class="card-box-ico">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <div class="card-title-c align-self-center">
                                        <h2 class="title-c">Study Loan</h2>
                                    </div>
                                </div>
                                <div class="card-body-c">
                                    <p class="content-c m-0">
                                        Know more about the Study Loan you want to pursue.
                                    </p>
                                </div>
                                <div class="card-footer-c">
                                    <!-- <a href="blog-grid.php?category=Admission-s" class="link-c link-icon">Read more
                                    <span class="bi bi-chevron-right"></span>
                                </a> -->
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Services Section -->
    <div id="counter" class="vw-100">
        <div class="container p-5">
            <div class="row">
                <br />
                <div class="col text-center mb-4">
                    <h2 class="text-white">WE HAVE COVERED</h2>

                </div>



            </div>
            <div class="row text-center">
                <div class="col-12 col-md-3 mb-3 ">
                    <div class="counter counter-item">
                        <i class="fas fa-university fa-mx counter-item p-3"></i>
                        <h2 class="timer count-title fw-bold count-number" data-to="100" data-speed="1500"></h2>
                        <p class="count-text text-dark ">COLLEGES</p>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-3 ">
                    <div class="counter counter-item">
                        <i class="fas fa-user-graduate fa-mx counter-item p-3"></i>
                        <h2 class="timer count-title fw-bold count-number" data-to="1700" data-speed="1500"></h2>
                        <p class="count-text text-dark ">Happy Students</p>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-3 ">
                    <div class="counter counter-item">
                        <i class="fas fa-book-reader fa-mx counter-item p-3"></i>
                        <h2 class="timer count-title fw-bold count-number" data-to="11900" data-speed="1500"></h2>
                        <p class="count-text text-dark ">Courses</p>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-3 ">
                    <div class="counter counter-item">
                        <i class="fas fa-user-md fa-mx counter-item p-3"></i>
                        <h2 class="timer count-title fw-bold count-number" data-to="157" data-speed="1500"></h2>
                        <p class="count-text text-dark ">Jobs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end covers section -->

    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box text-center mb-3" style="width: 100%;">
                            <h2 class="title-a">Trending Skills</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div id="property-carousel" style="height: 250px;" class="swiper">
                <div class="swiper-wrapper">

                    <div class="carousel-item-b border swiper-slide row justify-content-center ms-0 text-center text-white rounded-3" style="background-color:#68ef00">

                        <div class="col-12 card-symbol">
                            <lord-icon src="https://cdn.lordicon.com/ybfcwnqv.json" trigger="loop" colors="primary:#ffffff,secondary:#08a88a" style="width:150px;height:150px">
                            </lord-icon>
                        </div>
                        <div class="col-12 text-light card-text">
                            <a href="blog-grid.php?category=machine learning-s" class="text-light">Machine Learning</a>
                        </div>

                    </div><!-- End carousel item -->

                    <div class="carousel-item-b border swiper-slide row justify-content-center ms-0 text-center text-white rounded-3" style="background-color:#025393">

                        <div class="col-12 card-symbol">
                            <lord-icon src="https://cdn.lordicon.com/qhgmphtg.json" trigger="loop" colors="primary:#ffffff,secondary:#08a88a" style="width:150px;height:150px">
                            </lord-icon>
                        </div>
                        <div class="col-12 text-light card-text">
                            <a href="blog-grid.php?category=artificial intelligence-s" class="text-light">Artificial Intelligence</a>
                        </div>

                    </div><!-- End carousel item -->
                    <div class="carousel-item-b border swiper-slide row justify-content-center ms-0 text-center text-white rounded-3" style="background-color:#ffb9cb">

                        <div class="col-12 card-symbol">
                            <lord-icon src="https://cdn.lordicon.com/ochimkct.json" trigger="loop" colors="primary:#ffffff,secondary:#08a88a" style="width:150px;height:150px">
                            </lord-icon>
                        </div>
                        <div class="col-12 text-light card-text">
                            <a href="blog-grid.php?category=cloud computing-s" class="text-light">Cloud Computing</a>
                        </div>

                    </div><!-- End carousel item -->
                    <div class="carousel-item-b border swiper-slide row justify-content-center ms-0 text-center text-white rounded-3" style="background-color:#fd56dc">

                        <div class="col-12 card-symbol">
                            <lord-icon src="https://cdn.lordicon.com/gqdnbnwt.json" trigger="loop" colors="primary:#ffffff,secondary:#08a88a" style="width:150px;height:150px">
                            </lord-icon>
                        </div>
                        <div class="col-12 text-light card-text">
                            <a href="blog-grid.php?category=data science-s" class="text-light">Data Science</a>
                        </div>

                    </div><!-- End carousel item -->
                    <div class="carousel-item-b border swiper-slide row justify-content-center ms-0 text-center text-white rounded-3" style="background-color:#01d3fc">

                        <div class="col-12 card-symbol">
                            <lord-icon src="https://cdn.lordicon.com/dtgezzsi.json" trigger="loop" colors="primary:#ffffff,secondary:#08a88a" style="width:150px;height:150px">
                            </lord-icon>
                        </div>
                        <div class="col-12 text-light card-text">
                            <a href="blog-grid.php?category=programming language-s" class="text-light">Programming Language</a>
                        </div>

                    </div><!-- End carousel item -->
                    <div class="carousel-item-b border swiper-slide row justify-content-center ms-0 text-center text-white rounded-3" style="background-color:#a1dffb">

                        <div class="col-12 card-symbol">
                            <lord-icon src="https://cdn.lordicon.com/rqqkvjqf.json" trigger="loop" colors="primary:#ffffff,secondary:#08a88a" style="width:130px;height:130px">
                            </lord-icon>
                        </div>
                        <div class="col-12 text-light card-text">
                            <a class="text-light" href="blog-grid.php?category=cybersecurity-s">Cybersecurity</a>
                        </div>

                    </div><!-- End carousel item -->
                </div>
            </div>
            <div class="propery-carousel-pagination carousel-pagination"></div>

        </div>
    </section><!-- End Latest Properties Section -->

    <!-- ======= Latest News Section ======= -->
    <section class="section-news section-t8">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box text-center mb-3" style="width: 100%;">
                            <h2 class="title-a">Our Blog</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-4">
                <div class="row">
                    <?php
                    $posts = $obj->getDatabyLimit("content", "8");
                    foreach ($posts as $blogs) {


                    ?>

                        <div class="card-height col-md-4 col-lg-3 col-12 p-3">
                            <a href="blog-single.php?slug=<?php echo $blogs["slug"] ?>">
                                <div class="position-relative mycard" style="background-image: url('assets/thumb_image/<?php echo $blogs["image"] ?>');background-position: center;background-size: cover;background-repeat: no-repeat;height:100%;">
                                    <div class="card-overlay" style="background-color: rgba(0,0,0,0.2);">
                                        <div class="card-header-b" style="padding: 0 10px;width:100%;background-color:#62585894">
                                            <div class="card-title-b">
                                                <h2 style="white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;" class="fs-5 text-white">
                                                    <?php echo $blogs["title"] ?>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest News Section -->

    <!-- ======= Testimonials Section ======= -->
    <section class="section-testimonials section-t8 nav-arrow-a">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center ">
                        <div class="title-box">
                            <h2 class="title-a">Testimonials</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div id="testimonial-carousel" class="swiper">
                <div class="swiper-wrapper">
                    <div class="carousel-item-a swiper-slide p-2">
                        <div class="testimonials-box">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="testimonial-ico">
                                        <i class="bi bi-chat-quote-fill"></i>
                                    </div>
                                    <div class="testimonials-content">
                                        <p class="testimonial-text">
                                            Career helpline helped me gather a lot of information about the career field I have chosen for myself. They solved my queries and doubts that I had. Career helpline made it so much easier for me to put together all the details of the career option I want to know about. It helped me in preparing myself by providing all the important details to get my dream carrier.
                                        </p>
                                    </div>
                                    <div class="testimonial-author-box">
                                        <img src="assets/img/motka.jpeg" alt="" class="testimonial-avatar">
                                        <h5 class="testimonial-author">Md Azhar Imam</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End carousel item -->

                    <div class="carousel-item-a swiper-slide p-2">
                        <div class="testimonials-box">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="testimonial-ico">
                                        <i class="bi bi-chat-quote-fill"></i>
                                    </div>
                                    <div class="testimonials-content">
                                        <p class="testimonial-text">
                                            Career helpline made my mind clearer about what carrier option I want to choose for myself. I was confused about what career option would be best for me. Career Helpline helped me find career options that suited my skills and matched my interests. They provide me a detailed information about all the career options and helped me to explore them.
                                        </p>
                                    </div>
                                    <div class="testimonial-author-box">
                                        <img src="assets/img/avishi.jpeg" alt="" class="testimonial-avatar">
                                        <h5 class="testimonial-author">Avishi Dayal</h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End carousel item -->
                    <div class="carousel-item-a swiper-slide p-2">
                        <div class="testimonials-box">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="testimonial-ico">
                                        <i class="bi bi-chat-quote-fill"></i>
                                    </div>
                                    <div class="testimonials-content">
                                        <p class="testimonial-text">
                                            Career helpline has proved to be very helpful for me. I have been looking upto and following this channel since last 2 years. I got good percentage in 10th boards and my parents told me to go for PCM in 12th so I went for it, later I thought of doing b.tech but was unable to score enough in jee exams. At that time, I found this channel and was happy after knowing about marine engineering, as a result, I am sitting today as a proud imu student and my parents are also relieved with my secure future.
                                        </p>
                                    </div>
                                    <div class="testimonial-author-box">
                                        <img src="assets/img/saurav.jpeg" alt="" class="testimonial-avatar">
                                        <h5 class="testimonial-author">Saurav Kumar</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End carousel item -->
                    <!-- End carousel item -->
                    <div class="carousel-item-a swiper-slide p-2">
                        <div class="testimonials-box">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="testimonial-ico">
                                        <i class="bi bi-chat-quote-fill"></i>
                                    </div>
                                    <div class="testimonials-content">
                                        <p class="testimonial-text">
                                            Career helpline is a very good site. It has got all sorts of information about all sorts of courses and colleges. I keep learning about courses in different colleges, scholarships for students and a lot of other things. It's a good thing as it is helping me with my future in a lot of ways, I keep learning from here in the hope of gathering enough knowledge to choose the right career for myself. It even helps me in debates and interactive sessions at my school. Thank you career helpline, keep Posting.
                                        </p>
                                    </div>
                                    <div class="testimonial-author-box">
                                        <img src="assets/img/azhar.jpeg" alt="" class="testimonial-avatar">
                                        <h5 class="testimonial-author">Md Azhar Imam</h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End carousel item -->

                </div>
            </div>
            <div class="testimonial-carousel-pagination carousel-pagination"></div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- map box -->

    <section class="w-100 mt-4">
        <div class="contact-map box">
            <div id="map" class="contact-map">
                <iframe width="100%" height="350px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.7046350526675!2d77.49874701507935!3d28.488440482474843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ceb9e27241a4f%3A0x3e601d5de9cd3212!2sCareer%20Helpline!5e0!3m2!1sen!2sin!4v1645140143685!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
    <section class="w-100 mt-4 ternding-buttons p-2 text-center">
        <?php
        $data = $obj->getdatabyquery("SELECT sub FROM categories");
        // print_r($data);
        foreach ($data as $tag) {


        ?>

            <a href="blog-grid.php?category=<?php echo $tag['sub']; ?>-s"><button type="button" class="btn btn-outline-primary mb-2"><?php echo $tag['sub']; ?></button></a>
        <?php } ?>
        <!-- <button type="button" class="btn btn-outline-primary">Best courses</button>
    <button type="button" class="btn btn-outline-primary">Engineering Colleges</button>
    <button type="button" class="btn btn-outline-primary">Trending Skills</button>
    <button type="button" class="btn btn-outline-primary">Trending Job</button>
    <button type="button" class="btn btn-outline-primary">Skills You must Learn</button> -->
    </section>
    <!-- map box end -->
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include "assets/globals/bottom.php"; ?>
<script>
    function getsub(cat) {
        $(".modal-body").empty();
        // $("#mcat").change(function() {

        let category = $(cat).attr("data-main");
        $("#staticBackdropLabel").text(category);
        // alert(cat);
        // alert(img);
        $.ajax({
            url: "career-admin/get-sub.php",
            type: "POST",
            data: {
                val: category,
            },
            success: function(data) {

                // console.log(data);
                var as = JSON.parse(data);
                $.each(as, function(key, value) {
                    // alert(key + ": " + value);
                    console.log(value);
                    let tag = "<div class='col-md-4 col-lg-3 col-6'><a class='dropdown-item text-capitalize' href='blog-grid.php?category=" + value + "-s'>" + value + "</a></div>"
                    $(".modal-body").append(tag);
                });

            }

        })

        // })
    }
</script>