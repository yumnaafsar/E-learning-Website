<!-- Including Navbar -->
<?php
include('./mainComponent/navbar.php');
?>
<!-- End Navbar -->


<!-- Start Course Detail Page Banner -->
<div class="container-fluid bg-drak">
    <div class="row">
        <img src="image/course-bg.jpg" alt="courses" style="height:500px; width:100%; object-fit:fill; padding:0px">
    </div>
</div>
<!-- End Course Detail Page Banner -->


<!-- Start Main Content-->
<div class="card mb-3 mt-3  mx-auto" style="max-width: 700px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="image/flutter.png" class="img-fluid rounded-start" alt="Flutter" style="height: 100%;">
        </div>

        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Course Name: Learn Flutter Easy Way</h5>
                <p class="card-text">A 100% free, 14+ hour, lean and effective Flutter course focused on realistic, end
                    to end code examples and recipes. .</p>

                <p class="card-text"><small>Duration: 14+ Hours</small></p>

                <form action="" method="post">
                    <p class="card-text d-inline"><small>Price: <del>Rs 2000</del></small>
                        <span class="font-weight-bolder">Rs 200</span>
                    </p>
                    <button class="btn text-white float-right primary-btn" name="buy"
                        style="float:right; font-weight:bolder">Buy Now</button>

                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Lesson No.</th>
                        <th scope="col">Lesson Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Introduction</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Basic Of Dart</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
     
</div>

<!-- End Main Content -->

<br><br>

<!-- Including Footer -->
<?php
include('./mainComponent/footer.php');
?>
<!-- End Footer -->