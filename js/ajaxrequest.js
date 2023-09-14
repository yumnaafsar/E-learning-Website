$(document).ready(function () {
    // Ajax call to check already existing email
    $("#studemail").on("keypress blur", function () {
        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var studemail = $("#studemail").val();
        $.ajax({
            url: 'Student/addStudent.php',
            method: 'POST',
            data: {
                checkEmail: "checkEmail",
                studemail: studemail,
            },
            success: function (data) {
                // console.log(data)
                if (data != 0) {
                    $("#statusMsg2").html("<small style='color:red;'>Email already registered </small>");
                    $("#studemail").focus();
                    $("#signup").attr("disabled", true);
                }
                else if (data == 0 && reg.test(studemail)) {
                    $("#statusMsg2").html("<small style='color:green;'>There you go </small>");
                    $("#studemail").focus();
                    $("#signup").attr("disabled", false);
                }
                else if(studemail==""){
                    $("#statusMsg2").html("<small style='color:red;'>Please enter email </small>");
                 }
                else if(!reg.test(studemail)){
                    $("#statusMsg2").html("<small style='color:red;'>Please enter valid email e.g example@mail.com</small>");
                    // $("#studemail").focus();
                    $("#signup").attr("disabled", false);
                    return false; 
                 }
                 
            }
        })
    })
})


function addStud() {
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    // to capture the data
    var studname = $("#studname").val();
    var studemail = $("#studemail").val();
    var studpass = $("#studpass").val();


    // checking from feilds beforw submission
    if (studname.trim() == "") {
        $("#statusMsg1").html("<small style='color:red;'>Please enter a name </small>");
        $("#studname").focus();
        return false;
    }
    else if (studemail.trim() == "") {
        $("#statusMsg2").html("<small style='color:red;'>Please enter an email </small>");
        $("#studemail").focus();
        return false;
    }
    else if (studemail.trim() != "" && !reg.test(studemail)) {
        $("#statusMsg2").html("<small style='color:red;'>Please enter valid email e.g example@mail.com</small>");
        $("#studemail").focus();
        return false;
    }
    else if (studpass.trim() == "") {
        $("#statusMsg3").html("<small style='color:red;'>Please enter a password </small>");
        $("#studpass").focus();
        return false;
    }
    else {
        $.ajax({
            //to send data to server for saving
            // tell what to data to send , type of request, method of request
            url: 'Student/addStudent.php',
            method: 'POST',
            dataType: 'json',
            data: {
                studsignup: "StudentSigUp",
                name: studname,
                email: studemail,
                pass: studpass
            },
            success: function (data) {
                console.log(data);
                if (data == "OK") {
                    $("#successMsg").html("<span class='alert alert-success'> Registration Successful !</span>");
                    clearStudRegFrild()
                }
                else if (data == 'Failed') {
                    $("#successMsg").html("<span class='alert alert-danger'>Unable to Register</span>");
                }
            },//to save the response which we are getting back

        })
    }


}

// empty all feilds after regisyer
function clearStudRegFrild() {
    $("#studRegForm").trigger("reset");
    $("#statusMsg1").html("");
    $("#statusMsg2").html("");
    $("#statusMsg3").html("");
}