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
        echo ' <div class="alert alert-success"><strong>Success : </strong> Student info successfully added</div>';
    }
}

function show(){
    global $con;
    $obj =$con->query("SELECT * FROM tbl_student");

    if($obj->num_rows>0) {
        $tdata ="";
        $sl = 0;

        while($data = $obj->fetch_assoc()){
            $sl++;
            $tdata .='<tr>
            <td>'.$sl.'</td>
            <td>'.$data["studentName"].'</td>
            <td>'.$data["fName"].'</td>
            <td>'.$data["mName"].'</td>
            <td>'.$data["email"].'</td>
            <td>'.$data["status"].'</td>
            <td><a href="#" class "btn btn-info btn-sm"><i class="fa fa-edit"></i></a></td>
            <td><a href="#" class "btn btn-danger btn-sm"> <i class="fa fa-trash"></i></a></td>
            
            </tr>';

        }
        echo $tdata;
    }
    else{
        echo "<tr> <td colspan='8' class ='alert alert-danger text-center'> Data Not Found </td> </tr>";
    }
}
