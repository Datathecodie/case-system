<?php
include ('dbConfig.php');

$name = $_POST['n'];
$email = $_POST['e'];
$mob = $_POST['mob'];
$gen = $_POST['gen'];
$pwd = $_POST['p'];
$bday = $_POST['bday'];
$rad = $_POST['usertype'];


if($rad == 'user')
{
    //user
    $insert ="Insert into users (name,email,pwd,mobile,gender,dateofbirth) value ('".$name."','".$email."','".$pwd."','".$mob."','".$gen."','".$bday."')";
    $result = mysqli_query($con,$insert);
     $_SESSION["email"]= $email;
    
        $validate = "SELECT id FROM users WHERE email = '".$email."' AND pwd = '".$pwd."'";
        $result1 = mysqli_query($con, $validate);
        $row = mysqli_fetch_array($result1);
        $_SESSION["user_id"]= $row["id"];
    
    header("Location:user/home.php");
    
}
else
{    
    //lawyer
    
    $insert ="Insert into lawyers (name,email,pwd,mobile,gender,dateofbirth) value ('".$name."','".$email."','".$pwd."','".$mob."','".$gen."','".$bday."')";
    $result = mysqli_query($con,$insert);
     $_SESSION["email"]= $email;
    
        $validate = "SELECT id FROM lawyers WHERE email = '".$email."' AND pwd = '".$pwd."'";
        $result1 = mysqli_query($con, $validate);
        $row = mysqli_fetch_array($result1);
        $_SESSION["user_id"]= $row["id"];
    
    header("Location:lawyer/home.php");

}

echo("error=Log in Please ");
exit;
?>