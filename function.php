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

            if($data["status"]==1){

                $status = "<button class='btnActive btn btn-success btn-sm' value='".$data["student_id"]."'>Active</button>";
            }
            else{
                $status = "<button class='btnInactive btn btn-warning btn-sm' value='".$data["student_id"]."'>Inactive</button>";
            }

            $tdata .='<tr>
            <td>'.$sl.'</td>
            <td>'.$data["studentName"].'</td>
            <td>'.$data["fName"].'</td>
            <td>'.$data["mName"].'</td>
            <td>'.$data["email"].'</td>
            <td>'.$status.'</td>
            <td><button href="#" class="btnEdit btn btn-info btn-sm"><i class="fa fa-edit"></i></button></td>
			<td><button href="#" class="btnDelete btn btn-danger btn-sm" value="'.$data["student_id"].'"><i class="fa fa-trash"></i></button></td>
            
            </tr>';

        }
        echo $tdata;
    }
    else{
        echo "<tr> <td colspan='8' class ='alert alert-danger text-center'> Data Not Found </td> </tr>";
    }
}

function active(){
	global $con;
	$id = $_POST['id'];
	$result = $con->query("UPDATE tbl_student SET status = '2' WHERE student_id = '$id'");
}
function inactive(){
	global $con;
	$id = $_POST['id'];
	$result = $con->query("UPDATE tbl_student SET status = '1' WHERE student_id = '$id'");
}

function delete(){
	global $con;
	$id = $_POST['id'];
	$result = $con->query("DELETE FROM tbl_student WHERE student_id = '$id'");
}



