<?php
include ('dbConfig.php');
//login
session_start();
$email = $_POST['e'];
$pwd = $_POST['p'];
$rad1 = $_POST['usertype'];

if($rad1 == 'user')
{
    $validate = "SELECT * FROM users WHERE email = '".$email."' AND pwd = '".$pwd."'";
    $result1 = mysqli_query($con, $validate);
    if(mysqli_num_rows($result1) > 0)
            {
                $row = mysqli_fetch_array($result1);
                $_SESSION["email"]= $row["email"];
                $_SESSION["user_id"]= $row["id"];
                header("Location:user/home.php");
                exit;
            }
        else
            {
                header("Location:index.php?error=Invalid Credetials");
                exit;
            }
}
else
{    
    $validate = "SELECT * FROM lawyers WHERE email = '".$email."' AND pwd = '".$pwd."' ";
    $result2 = mysqli_query($con,$validate);
    if(mysqli_num_rows($result2) > 0)
            {
                $row = mysqli_fetch_array($result2);
                $_SESSION["email"]= $row["email"];
                $_SESSION["user_id"]= $row["id"];

                header("Location:lawyer/home.php");
                exit;
            }
        else
            {
                header("Location:index.php?error=Invalid Credetials");
                exit;
            }  
}

header("Location:index.php?error=Log in Please ");
exit;


?>