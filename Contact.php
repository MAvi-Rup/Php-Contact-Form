<?php
include 'about.php';
if(isset($_GET['submit'])){
    $name=$_GET["name"];  
    $email=$_GET["email"];
    
          
    $password=$_GET["password"];
    $address=$_GET["address"];
     
    $message=$_GET["message"];

    $Myquery= "INSERT INTO `contactus`(`ID`, `Name`, `Email`, `Password`, `Address`, `Message`) 
    VALUES ('$name','$email','$password','$address','$message')";
    mysqli_query($conn,$Myquery);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>

    <!-- Bootstrap.css link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- Fontawesome Link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container py-3">
        <div class="jumbotron bg-dark">
            <div class="row">
                <div class="col-md-5 text-center py-5">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h1 class="display-4">Stay Tuned</h1>
                            <p class="lead">Please submit Your information.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1 py-3">
                    <div class="card">
                        <div class="card-body">
                            <form method="GET" action="about.php">
                                <div class="form-group">
                                    <label for="name" class="ml-5">What is your Name...?</label>
                                    <div class="d-flex">
                                        <span class="mr-3 mt-1"><i class="fa fa-user-circle fa-2x"  aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="name" placeholder="Your Name" id="name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="ml-5">What is your Email...?</label>
                                    <div class="d-flex">
                                        <span class="mr-3 mt-1"><i class="fa fa-envelope fa-2x"  aria-hidden="true"></i></span>
                                        <input type="email" class="form-control" name="email" placeholder="Your Email" id="email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="ml-5">Your Password...?</label>
                                    <div class="d-flex">
                                        <span class="mr-3 mt-1"><i class="fa fa-unlock fa-2x"  aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="password" placeholder="***" id="password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="ml-5">Your Address...?</label>
                                    <div class="d-flex">
                                        <span class="mr-3 mt-1"><i class="fa fa-address-book fa-2x" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="address" placeholder="give your address" id="address" required>
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="message" class="ml-5">Your Massage</label>
                                    <div class="d-flex">
                                        <span class="mr-3 mt-4"><i class="fa fa-comment fa-2x"  aria-hidden="true"></i></span>
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="3" placeholder="Write your message"></textarea>
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
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>