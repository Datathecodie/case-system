
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
            </center>
            
        </div>
    </div>  

        <!-- Dashboard-->
        <div class="container bg-inverse text-white">
            <h1>Welcome User </h1> 
            <form action="logout.php" method="post"><button type="submit" class="btn btn-danger float-md-left" onclick="logout.php">Logout</button> </form>
          
            <div class="row">
            <div class="col-md-2 text-primary">
              
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                    <a class="nav-link active" href="Home.php">Current Chats</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="upload.php">Create New Chats</a>
                                        
                </ul>
                
            </div>
            <div class="col-md-9" style="background-color:inverse;">
                
                <div class="container1">
                  <img src="" alt="Image">
                  <p>Hello. How are you today?</p>
                  <span class="time-right">11:00</span>
                </div>

                <div class="container1 darker">
                  <img src="/w3images/avatar_g2.jpg" alt="Image" class="right">
                  <p>Hey! I'm fine. Thanks for asking!</p>
                  <span class="time-left">11:01</span>
                </div>

                <div class="container1">
                  <img src="" alt="Img">
                  <p>Sweet! So, what do you wanna do Know?</p>
                  <span class="time-right">11:02</span>
                </div>

                <div class="container1 darker">
                  <img src="" alt="Img" class="right">
                  <p>I want to know about the Laws for 75% Attendance in Colleges</p>
                  <span class="time-left">11:05</span>
                </div>

               
            </div>
          </div>
        </div>

	      <div class="container jumbotron bg-primary text-white" style="background:#337ab7 !important">
                
                <center><h2 class="text-white" style="color: white"> Case Management System </h2> </center>
				</div>
        <!--JS Code-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins)  -->
        <script src="../js/jquery-3.0.0.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
    <style>
        .container1 {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

/* Darker chat container */
.darker {
  border-color: #ccc;
  background-color: #ddd;
}

/* Clear floats */
.container1::after {
  content: "";
  clear: both;
  display: table;
}

/* Style images */
.container1 img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

/* Style the right image */
.container1 img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

/* Style time text */
.time-right {
  float: right;
  color: #aaa;
}

/* Style time text */
.time-left {
  float: left;
  color: #999;
}
        
        
        </style>
        
	</body>
</html>
