<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>
      
    <div class="bg-primary "> 
        <div class=" jumbotron " style="background:transparent !important">
          <center> <h1>Case Management System</h1>  
            <h2>User Login</h2>
            </center>
            
        </div>
    </div>  
      <center> 
      <div class="container row">
          <div class="col-md-6">
            <div class="row">

                    <form method="post" action="confirmlogin.php">
                        <input type="hidden" name="usertype" value="user">
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4"><h2><center>Login </center></h2></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4"></div>
                        </div>

                        <div class="row" style="margin-top:10px">
                            <div class="col-sm-4">Enter Email </div>
                            <div class="col-sm-5">
                            <input type="text" name="e" class="form-control"/></div>
                        </div>

                        <div class="row" style="margin-top:10px">
                            <div class="col-sm-4">Enter Password</div>
                            <div class="col-sm-5">
                            <input type="password" name="p" class="form-control"/></div>
                        </div>
                        <div class="row" style="margin-top:10px">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-8">
                            <input type="submit" value="Login" name="save" class="btn btn-info"/>

                            </div>
                        </div>
                    </form>	
                    
              </div>
          </div>
          <div class="col-md-6">
                <div class="row">
                    <form method="post" enctype="multipart/form-data" action="confirmreg.php">
                        <input type="hidden" name="usertype" value="user">
                    <table class="table " >
                <caption><h2 align="center">Registration Form</h2></caption>

                            <tr>
                                <td>Enter Your Name</td>
                                <td><input  type="text" name="n" class="form-control" required value =""/></td>
                            </tr>
                            <tr>
                                <td>Enter Your Email ID</td>
                                <td><input type="email" name="e" class="form-control" required value =""/></td>
                            </tr>

                            <tr>
                                <td>Enter Your Password </td>
                                <td><input type="password" name="p"  class="form-control" required/></td>
                            </tr>

                            <tr>
                                <td>Confirm Password </td>
                                <td><input type="password" name="p1" class="form-control" required/></td>
                            </tr>

                            <tr>
                                <td>Enter Your Mobile </td>
                                <td><input type="text" name="mob" class="form-control" required value =""/></td>
                            </tr>


                            <tr>
                                <td>Select Your Gender</td>
                                <td>
                                    Male<input type="radio" name="gen" value="m"/>
                                    Female<input type="radio" name="gen" value="f"/>	
                                </td>
                            </tr>

                            <tr>
                                <td>Enter Your Date of Birth</td>
                                <td>
                                <input type="date" name="bday" value ="">
                                </td>
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
          </center>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
  </body>
</html>