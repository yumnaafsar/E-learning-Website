<!-- Including Navbar -->
<?php
 include('./mainComponent/navbar.php');
?>
<!-- End Navbar -->

    <!-- Start Video Background -->

    <div class="container-fluid remove-vid-marg">
        <div class="vid-parent">
            <video playsinline autoplay muted loop>
                <source src="video/banner1.mp4">
            </video>
        </div>
        <div class="vid-overlay"></div>
        <div class="vid-content">
            <h1 class="my-content">Welcome to E-learning</h1>
            <small class="my-content">Learn and grow</small>
            <br>
            <a href="#" class="btn vid-btn primary-btn" data-bs-toggle="modal" data-bs-target="#StudentRegModal">Get
                started</a>


        </div>
    </div>
    <!-- End Video Background -->

    <!-- Start Text banner -->
    <div class="container-fluid txt-banner">
        <div class="row bottom-banner">
            <div class="col-sm">
                <h5><i class="fas fa-book-open txt-icon"></i>100+ Online courses</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-users txt-icon"></i>Expert Instructors</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-keyboard txt-icon"></i>Lifetime Access</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fa-solid fa-money-bill-1-wave txt-icon"></i>Money Back Guarantee*</h5>

            </div>
        </div>
    </div>
    <!-- End Text banner -->

    <!-- Start Most Popular Course -->

    <div class="container mt-5">
        <h1 class="text-center">Popular Course</h1>

        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <!-- Start Most Popular Course 1st Card Deck -->
                    <div class="card-deck" style="margin-top:4px">
                        <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px">
                            <div class="card">
                                <img src="image/flutter.png" alt="Flutter" class="card-img-top" />
                                <div class="card-body">
                                    <h5 class="card-title">Learn Flutter Easy Way</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                </div>
                                <div class="card-footer">
                                    <p class="card-text d-inline">Price <small><del>Rs 2000</del></small>
                                        <span class="font-weight-bolder">Rs 200</span>
                                    </p>
                                    <a href="#" class="btn text-white primary-btn"
                                        style="float:right; font-weight:bolder">Enroll</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col">
                    <!-- Start Most Popular Course 2nd Card Deck -->
                    <div class="card-deck " style="margin-top:4px">
                        <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px">
                            <div class="card">
                                <img src="image/python.jpg" alt="Python" class="card-img-top" />
                                <div class="card-body">
                                    <h5 class="card-title">Python For Beginners </h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                </div>
                                <div class="card-footer">
                                    <p class="card-text d-inline">Price <small><del>Rs 2000</del></small>
                                        <span class="font-weight-bolder">Rs 200</span>
                                    </p>
                                    <a href="#" class="btn text-white  primary-btn" style="float:right">Enroll</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col">
                    <!-- Start Most Popular Course 3nd Card Deck -->
                    <div class="card-deck" style="margin-top:4px">
                        <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px">
                            <div class="card">
                                <img src="image/ai.png" alt="AI" class="card-img-top" />
                                <div class="card-body">
                                    <h5 class="card-title">AI For Everyone </h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                </div>
                                <div class="card-footer">
                                    <p class="card-text d-inline">Price <small><del>Rs 2000</del></small>
                                        <span class="font-weight-bolder">Rs 200</span>
                                    </p>
                                    <a href="#" class="btn text-white primary-btn" style="float:right">Enroll</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>



        <!-- All Courses Option -->
        <div class="text-center m-2 ">
            <a href="#" class="btn btn-sm primary-btn all-course-btn" style="margin-top:30px">View All Courses</a>
        </div>
    </div>
    </div>
    </div>
    <!-- End Most Popular Course -->

    <br>
    <br>
    <br>

    <!-- Start Contact Us -->
    <?php
    include('./contact.php');
    ?>
    <!-- End Contact Us -->



    <!--Start Testimonial Section -->
    <?php
    include('./testimonial.php');
    ?>
    <!--End Testimonial Section-->



    <br /><br /> <br /><br />

    <!-- Start Social Media Section -->

    <div class="container-fluid txt-banner" style="margin-top: 60px;">
        <div class="row text-white text-center p-1">
            <div class="col-sm">
                <a href="" class="text-white social-hover"><i class="fab fa-facebook-f social-icon"></i>Facebook</a>
            </div>
            <div class="col-sm">
                <a href="" class="text-white social-hover"><i class="fab fa-twitter social-icon"></i>Twitter</a>
            </div>
            <div class="col-sm">
                <a href="" class="text-white social-hover"><i class="fab fa-whatsapp social-icon"></i>WhatsApp</a>
            </div>
            <div class="col-sm">
                <a href="" class="text-white social-hover"><i class="fab fa-instagram social-icon"></i>Instagram</a>
            </div>
        </div>
    </div>

    <!-- End Social Media Section -->


    <!-- #E9ECEF -->
    <!-- Start About Section -->
    <div class="container-fluid p-4" style="background-color:black">
        <div class="container" style="background-color:black; color:white">
            <div class="row text-center">
                <div class="col-sm">
                    <h5>About Us</h5>
                    <p>E-Learning platform provides a variety of course in differnt domain to help young minds to grow,
                        learn and explore!</p>
                </div>
                <div class="col-sm">
                    <h5>Category</h5>
                    <a href="" class="text-light cat">Cloud Computing</a><br />
                    <a href="" class="text-light cat">Web Development</a> <br />
                    <a href="" class="text-light cat">Artificil Intelligence</a><br />
                    <a href="" class="text-light cat">Mobile App Development</a><br />
                </div>
                <div class="col-sm">
                    <h5>Contact Us</h5>
                    <p>
                        E-learning,
                        Near Shahr-e-faisal, Karachi
                        Pakistan <br>
                        Phone: 03401909090 <br>
                        Website: E-learning.com
                    </p>
                </div>
            </div>

        </div>

    </div>
    <!-- End About Section -->
 
    <!-- Including Footer -->
    <?php
    include('./mainComponent/footer.php');
    ?>
    <!-- End Footer -->