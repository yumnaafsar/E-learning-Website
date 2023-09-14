<!-- Registration FORM Start  -->
<form id="studRegForm">
    <div class="mb-3">
        <i class="fa-solid fa-user" style="color:#008080 ;"></i>
        <label for="studname" class="pl-2 font-weight-bolder" style="margin-bottom:6px ;">Name</label>

        <small id="statusMsg1"></small>

        <input type="text" class="form-control" placeholder="Name" name="studname" id="studname">
        <br>

        <i class="fa-solid fa-envelope" style="color:#008080 ;"></i>
        <label for="studemail" class=" pl-2 form-label font-weight-bolder">Email address</label>
        <small id="statusMsg2"></small>
        <input type="email" class="form-control" placeholder="Email" id="studemail" name="studemail">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>


    <div class="mb-3">
        <i class="fa-solid fa-key" style="color:#008080 ;"></i>
        <label for="studpass" class="form-label pl-2 font-weight-bolder">New Password</label>
        <small id="statusMsg3"></small>
        <input type="password" class="form-control" id="studpass" name="studpass" placeholder="Password">
    </div>



</form>
<!-- Registration FORM End  -->