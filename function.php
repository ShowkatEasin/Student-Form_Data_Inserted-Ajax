<?php

$con = new mysqli ("localhost","root","","batch05_php");

$action = $_POST['action'];

$action();

function insert(){
    global $con;
    $studentName = $_POST["studentName"];
    $fName = $_POST["fName"];
    $mName = $_POST["mName"];
    $email = $_POST["email"];
    $status = $_POST["status"];
    

   $result= $con->query("INSERT INTO tbl_student(studentName,fName,mName,email,status)VALUES(
    '$studentName','$fName','$mName','$email','$status')");

    if($result){
        echo "Success";
    }
}
