<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "studentdatabase";

$con = mysqli_connect($host,$username,$password,$database);
 
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 
 
 $Sql_Query = "insert into student (name,email,phone) values ('$name','$email','$phone')";
 
 $response = array();
 
 if(mysqli_query($con,$Sql_Query)){
 
     $code = "Congratulations";
     $message = "Data Successfully inserted into database";
     array_push($response,array("code"=>$code,"message"=>$message));
     echo json_encode($response);
 
 }
 else{
 
     $code = "Opps!";
     $message = "Due to server/System Error data not insert successfull";
     array_push($response,array("code"=>$code,"message"=>$message));
     echo json_encode($response);
 
 }
 mysqli_close($con);
 
?>
