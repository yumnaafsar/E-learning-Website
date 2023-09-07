 <!-- Start Footer -->
 <footer class="container-fluid bg-dark text-center p-2">
        <small class="text-white">Copyright &copy; 2023 || Designed by E-learning || <a href="#login" data-bs-toggle="modal"
            data-bs-target="#AdminloginModal" class="text-white" style="text-decoration: none;">Admin</a> </small>
    </footer>
     <!-- End Footer -->
   

    <!-- Start Registration form Modal  -->
    <!-- Modal -->
    <div class="modal fade" id="StudentRegModal" tabindex="-1" aria-labelledby="StudentRegModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="StudentRegModalLabel">Student Registration</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Registration FORM Start  -->
                    <form id="studRegForm">
                        <div class="mb-3">
                            <i class="fa-solid fa-user" style="color:#008080 ;"></i>
                            <label for="studname" class="pl-2 font-weight-bolder"
                                style="margin-bottom:6px ;">Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="studname" id="studname">
                            <br>

                            <i class="fa-solid fa-envelope" style="color:#008080 ;"></i>
                            <label for="studemail" class=" pl-2 form-label font-weight-bolder">Email address</label>
                            <input type="email" class="form-control" placeholder="Email" id="studemail"
                                name="studemail">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>


                        <div class="mb-3">
                            <i class="fa-solid fa-key" style="color:#008080 ;"></i>
                            <label for="studpass" class="form-label pl-2 font-weight-bolder">New Password</label>
                            <input type="password" class="form-control" id="studpass" name="studpass"
                                placeholder="Password">
                        </div>



                    </form>
                    <!-- Registration FORM End  -->
                    <div class="modal-footer">
                        <button type="submit" class="btn" style="background-color:#008080 ; color: white;">Sign
                            Up</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END Registration form Modal  -->

     <!-- Start student login form Modal  -->
    <!-- Modal -->
    <div class="modal fade" id="StudentloginModal" tabindex="-1" aria-labelledby="StudentloginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="StudentloginModalLabel">Student LoginIn</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Login FORM Start  -->
                    <form id="studLoginForm">
                        <div class="mb-3">

                            <i class="fa-solid fa-envelope" style="color:#008080 ;"></i>
                            <label for="studlogemail" class=" pl-2 form-label font-weight-bolder">Email address</label>
                            <input type="email" class="form-control" placeholder="Email" id="studlogemail"
                                name="studlogemail">
                        </div>


                        <div class="mb-3">
                            <i class="fa-solid fa-key" style="color:#008080 ;"></i>
                            <label for="studlogpass" class="form-label pl-2 font-weight-bolder">Password</label>
                            <input type="password" class="form-control" id="studlogpass" name="studlogpass"
                                placeholder="Password">
                        </div>



                    </form>
                    <!-- Login FORM End  -->
                    <div class="modal-footer">
                        <button type="submit" class="btn" style="background-color:#008080 ; color: white;" id="studLoginbtn">Login</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END student Login form Modal  -->


    <!-- Start Admin login form Modal  -->
    <!-- Modal -->
    <div class="modal fade" id="AdminloginModal" tabindex="-1" aria-labelledby="AdminloginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="AdminloginModalLabel">Admin LoginIn</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Login FORM Start  -->
                    <form id="adminLoginForm">
                        <div class="mb-3">

                            <i class="fa-solid fa-envelope" style="color:#008080 ;"></i>
                            <label for="adminlogemail" class=" pl-2 form-label font-weight-bolder">Email address</label>
                            <input type="email" class="form-control" placeholder="Email" id="adminlogemail"
                                name="adminlogemail">
                        </div>


                        <div class="mb-3">
                            <i class="fa-solid fa-key" style="color:#008080 ;"></i>
                            <label for="adminlogpass" class="form-label pl-2 font-weight-bolder">Password</label>
                            <input type="password" class="form-control" id="adminlogpass" name="adminlogpass"
                                placeholder="Password">
                        </div>



                    </form>
                    <!-- Login FORM End  -->
                    <div class="modal-footer">
                        <button type="submit" class="btn" style="background-color:#008080 ; color: white;" id="studLoginbtn">Login</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END Admin Login form Modal  -->




    <!-- Bootstarp  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
        crossorigin="anonymous"></script>
    <!-- Font awasome -->

    <script src="https://kit.fontawesome.com/de702c352c.js" crossorigin="anonymous"></script>
</body>
</body>

</html>