<?php
include ('../dbConfig.php');
//login
session_start();  
 $r_email = $_SESSION["email"];
 $r_id = $_SESSION["user_id"];

 $validate = "SELECT * FROM lawyers WHERE id = '".$r_id."' ";
        $result1 = mysqli_query($con, $validate);
        $row = mysqli_fetch_array($result1);
        $name = $row["name"];
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
            <h2>Lawyer Home</h2>
            </center>
            
        </div>
    </div>  

        <!-- Dashboard-->
        <div class="container bg-inverse text-white">
            <h1>Welcome <?php echo ($name);?>  </h1> 
            <form action="../lawyer_login.php" method="post"><button type="submit" class="btn btn-danger float-md-left" onclick="logout.php">Logout</button> </form>
          
            <div class="row">
            <div class="col-md-2 text-primary">
              
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                    <a class="nav-link active" href="Home.php">Current Cases</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="upload.php">Close a Case</a>
                  </li>
                     <li class="nav-item">
                    <a class="nav-link" href="doverify.php">Recent Chats</a>
                  </li>
                                        
                </ul>
                
            </div>
            <div class="col-md-9" style="background-color:inverse;">
                
                <div class="title"> List of Cases Available:</div>
                   
                <table class ="table" style ="margin:10px;">
                <thead>
                <th>ID</th><th>Clients Name </th><th>Case Description</th><th>Chat</th><th>Choose</th>
                </thead>
                <tbody>
                   
                </tbody>
                </table> 

               
            </div>
          </div>
        </div>

	      
        <!--JS Code-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins)  -->
        <script src="../js/jquery-3.0.0.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
	</body>
</html>
