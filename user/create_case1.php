<?php
include ('../dbConfig.php');
//login
session_start();  
 $r_email = $_SESSION["email"];
 $r_id = $_SESSION["user_id"];
// read name, 
$casename = $_POST["name"];
// read file

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["mob"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (move_uploaded_file($_FILES["mob"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["mob"]["name"]). " has been uploaded.";
} else {
        echo "Sorry, there was an error uploading your file.";
}


// upload
//date
date_default_timezone_set("Asia/Kolkata");
$date =  date("Y/m/d");

// insert into

    $insert ="Insert into cases (name, userid, lawyerid, date, documents, status) value ('".$casename."','".$r_id."','','".$date."','".$target_file."','open')";
    $result = mysqli_query($con,$insert);


// redirect to create case
header("Location: create_case.php?up=done");
 ?>
