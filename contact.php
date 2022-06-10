<?php include 'assets/globals/top.php' ?>
<!-- End Header/Navbar -->

<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Contact US</h1>
                        <span class="color-text-a">If you have any questions, just fill in the contact form, and we will answer you shortly. if you are living nearby, come visit Career Helpline at one of our Comfortable offices.</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Contact
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Intro Single-->

    <!-- ======= Contact Single ======= -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-map box">
                        <div id="map" class="contact-map">
                            <iframe width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.7046350526675!2d77.49874701507935!3d28.488440482474843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ceb9e27241a4f%3A0x3e601d5de9cd3212!2sCareer%20Helpline!5e0!3m2!1sen!2sin!4v1645140143685!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 section-t8">
                    <div class="row">
                        <div class="col-md-7">
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="Subject" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" name="message" cols="45" rows="8" placeholder="Message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 my-3">
                                        <div class="mb-3">
                                            <!-- <div class="loading">Loading</div> -->
                                            <!-- <div class="error-message"></div> -->
                                            <!-- <div class="sent-message background-su">Your message has been sent. Thank you!</div> -->
                                        </div>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <button name="sendmsg" class="btn btn-a">Send Message</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                            if (isset($_POST['sendmsg'])) {
                                $name = $_POST['name'];
                                // echo "<script> alert('Thanks for your message')</script>";
                                $email = $_POST['email'];
                                $subject = $_POST['subject'];
                                $sunject .= "name:" . $name . "<br>";
                                $msg = $_POST['message'];
                                $to = "info@mycareerhelpline.com";
                                $headers = "From: $email";
                                if (mail($to, $subject, $subject, $headers)) {
                                    echo "<script> alert('Thanks for your message')</script>";
                                }
                            }
                            ?>
                        </div>
                        <div class="col-md-5 section-md-t3">
                            <div class="icon-box section-b2">
                                <div class="icon-box-icon">
                                    <span class="bi bi-envelope"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">Say Hello</h4>
                                    </div>
                                    <div class="icon-box-content">
                                        <p class="mb-1">Email.
                                            <span class="color-a"><a href="mailto:info@mycareerhelpline.com">info@mycareerhelpline.com</a></span>
                                        </p>
                                        <p class="mb-1">Phone.
                                            <span class="color-a"><a href="tel:+91 7764943755">+91 7764943755</a></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box section-b2">
                                <div class="icon-box-icon">
                                    <span class="bi bi-geo-alt"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">Find us in</h4>
                                    </div>
                                    <div class="icon-box-content">
                                        <p class="mb-1">
                                            Gamma-1, Greater Noida
                                            <br> Uttar Pradesh, India
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box">
                                <div class="icon-box-icon">
                                    <span class="bi bi-share"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">Social networks</h4>
                                    </div>
                                    <div class="socials-a">
                                        <ul class="list-inline">
                                            <li class="list-inline-item fs-4 m-1" style="margin: 0;">
                                                <a href=" https://www.facebook.com/CareerHelpliner/ ">
                                                    <i class="bi bi-facebook" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item fs-4 m-1" style="margin: 0;">
                                                <a href="https://twitter.com/mycareerhelplin">
                                                    <i class="bi bi-twitter" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item fs-4 m-1" style="margin: 0;">
                                                <a href=" https://www.instagram.com/mycareerhelpline/ ">
                                                    <i class="bi bi-instagram" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item fs-4 m-1" style="margin: 0;">
                                                <a href=" https://www.linkedin.com/in/mycareerhelpline/">
                                                    <i class="bi bi-linkedin" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item fs-4 m-1" style="margin: 0;">
                                                <a href="https://www.youtube.com/c/Merchantnavyhelpline">
                                                    <i class="fa-brands fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item fs-4 m-1" style="margin: 0;">
                                                <a href="https://t.me/MyCareerhelpline">
                                                    <i class="fa-brands fa-telegram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Contact Single-->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include "assets/globals/bottom.php"; ?>