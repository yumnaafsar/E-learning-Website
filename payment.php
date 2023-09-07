<!-- Including Navbar -->
<?php
include('./mainComponent/navbar.php');
?>
<!-- End Navbar -->


<!-- Start Paymet Page Banner -->
<div class="container-fluid bg-drak">
    <div class="row">
        <img src="image/payment.jpg" alt="courses" style="height:500px; width:100%; object-fit:fill; padding:0px">
    </div>
</div>
<!-- End Payment Page Banner -->

<!-- Main Content -->
<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form class="row g-3" action="" method="post" style="justify-content:center">
        <div class="col-auto">
            <label for="inputPassword2">Order ID: </label>
        </div>
        <div class="col-auto">
            <input type="text" class="form-control">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn mb-3" style="background-color:#008080 ; color: white;"
                value="View">View</button>
        </div>
    </form>
</div>

<!-- End Main Content -->

<br><br>

<!-- Including Contact Page -->
<?php
include('./contact.php');
?>
<!-- End Contact Page -->



<!-- Including Footer -->
<?php
include('./mainComponent/footer.php');
?>
<!-- End Footer -->