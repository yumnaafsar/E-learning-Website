<?php

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

?>