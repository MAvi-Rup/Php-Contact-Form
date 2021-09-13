<?php
 session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title> 
        Admin
    </title>
    

    
  </head>
  <body>
  <div class="container col-md-6s py-3">
                    <div class="card">
                        <div class="card-header">
                            Admin Login
                        </div>
                        <div class="card-body">
                            <form method="POST" action="logincheck.php">
                                <div class="form-group">
                                    <label for="name" class="ml-5">Enter User Name</label>
                                    <div class="d-flex">
                                        <span class="mr-3 mt-1"><i class="fa fa-user-circle fa-2x"  aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="name" placeholder="Your Name" id="name" required>
                                    </div>
                                </div>
                              
                                <div class="form-group">
                                    <label for="password" class="ml-5">Enter Your Password</label>
                                    <div class="d-flex">
                                        <span class="mr-3 mt-1"><i class="fa fa-unlock fa-2x"  aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="password" placeholder="***" id="password" required>
                                    </div>
                                </div>
                                
                                <div class="ml-5">
                                    <input type="submit" name="submit" class="btn btn-success" value="Submit">
                                    <input type="reset" name="reset" class="btn btn-warning" value="Reset">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
  
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
