<?php

if(!isset($_SESSION)){
    session_start();
}

include_once('../dbConnection.php');

// Check email already registered
if(isset($_POST["checkEmail"]) && $_POST["studemail"]){
    $studemail=$_POST['studemail'];
    $sql="SELECT stud_email FROM student Where stud_email='".$studemail."'";
    $result=$conn->query($sql);
    $row=$result->num_rows;
    echo json_encode($row);
}

// Register Student
// isset to check if data is set
if(isset($_POST['studsignup']) &&isset($_POST['name'])  && isset($_POST['email']) && isset($_POST['pass'])){

    // to add each data in db
    // the variable in post should be same as made in ajax data the variable capturing it can be any
    $studname=$_POST['name'];
    $studemail=$_POST['email'];
    $studpass=$_POST['pass'];

    $sql="INSERT INTO student(stud_name, stud_email, stud_pass) VALUE ('$studname', '$studemail', '$studpass')";

    if($conn->query($sql)==TRUE){
        echo json_encode("OK");
    }
    else{
        echo json_encode("Failed");
    }

}




// Student login verification
if(!isset($_SESSION['is_login'])){

    if (isset($_POST['checkLogEmail']) && isset($_POST['studLogEmail']) && isset($_POST['studLogPass'])) {

        $studLogEmail = $_POST['studLogEmail'];
        $studLogPass = $_POST['studLogPass'];
    
        $sql = "SELECT stud_email, stud_pass FROM student WHERE stud_email = '$studLogEmail' AND stud_pass = '$studLogPass' ";
    
        $result = $conn->query($sql);
        $row=$result->num_rows;
    
        if ( $row === 1) {
            $_SESSION['is_login']=true;
            $_SESSION['is_email']=$is_email;
            echo json_encode($row);
        } else if( $row === 0) {
            echo json_encode($row);
        }
    }
    
}

?>