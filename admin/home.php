
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
            <h2>Admin Home</h2>
            </center>
            
        </div>
    </div>  

        <!-- Dashboard-->
        <div class="container bg-inverse text-white">
            <h1>Welcome Admin </h1> 
            <form action="logout.php" method="post"><button type="submit" class="btn btn-danger float-md-left" onclick="logout.php">Logout</button> </form>
          
            <div class="row">
            <div class="col-md-2 text-primary">
              
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                    <a class="nav-link active" href="Home.php">Users List</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="upload.php"> Lawyer's List</a>
                                        
                </ul>
                
            </div>
            <div class="col-md-9" style="background-color:inverse;">
                
                <div class="title"> List of Users :</div>
                   
                <table class ="table" style ="margin:10px;">
                <thead>
                <th>ID</th><th>Users Name </th><th>Details</th><th>Edit</th><th>Delete</th>
                </thead>
                <tbody>
                   
                </tbody>
                </table> 
                
                 <div class="title"> List of Lawyers :</div>
                   
                <table class ="table" style ="margin:10px;">
                <thead>
                <th>ID</th><th>Lawyers Name </th><th>Details</th><th>Validate</th><th>Edit</th><th>Delete</th>
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
