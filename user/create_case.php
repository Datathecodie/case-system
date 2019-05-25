<?php
include ('../dbConfig.php');
//login
session_start();  
 $r_email = $_SESSION["email"];
 $r_id = $_SESSION["user_id"];

 $validate = "SELECT * FROM users WHERE id = '".$r_id."' ";
        $result1 = mysqli_query($con, $validate);
        $row = mysqli_fetch_array($result1);
        $name = $row["name"];
$msg = '';
if(isset($_GET['up']))
{
    $msg = "Upload successful ";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
  

	</head>
	<body >
        <!--Header -->
          <div class="bg-primary "> 
        <div class=" jumbotron " style="background:transparent !important">
          <center> <h1>Case Management System</h1>  
            <h2>User Home</h2>
              <h3><?php echo $msg;?></h3>
            </center>
            
        </div>
    </div>  

        <!-- Dashboard-->
        <div class="container bg-inverse text-white">
            <h1>Welcome <?php echo $name;?> </h1> 
            <form action="../user_login.php" method="post"><button type="submit" class="btn btn-danger float-md-left" onclick="logout.php">Logout</button> </form>
          
            <div class="row">
            <div class="col-md-2 text-primary">
              
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                    <a class="nav-link active" href="case_list.php">Current Cases</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="create_case.php">Create New Case</a>
                  </li>
                     <li class="nav-item">
                    <a class="nav-link" href="doverify.php">Recent Chats</a>
                  </li>
                                        
                </ul>
                
            </div>
            <div class="col-md-9" style="background-color:inverse;">
                
                  <div class="row">
                   
                    <form method="post" enctype="multipart/form-data" action="create_case1.php">
                        <input type="hidden" name="usertype" value="lawyer">
                    <table class="table " >
                <caption><h2 align="center">Create a New case:</h2></caption>

                            <tr>
                                <td>Enter case Name</td>
                                <td><input  type="text"  name="name" class="form-control" required value =""/></td>
                            </tr>
                             
                            <tr>
                                <td>Enter Documents for the case</td>
                                <td><input type="file" name="mob" class="form-control" required value =""/></td>
                            </tr>

                            <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" value="Save" class="btn btn-info" name="save"/>
                                    <input type="reset" value="Reset" class="btn btn-info"/>
                                </td>
                            </tr>
                        </table>
                    </form>
                    </div> 


               
            </div>
          </div>
        </div>

	      
        <!--JS Code-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins)  -->
        <script src="../js/jquery-3.0.0.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
 
        
	</body>
</html>
