<?php
session_start();

if(!isset($_SESSION['Name'])){
  header('location:admin.php');
}
include 'connection.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Admin Pannel</title>
  </head>
  <body>
    <div class="container m-5 p-3">
       <div class="row">
         <div class="md-10">
           <div class="card">
             <h1 style="color:#581845;" class="bg-success">Hi welcome <?php echo $_SESSION['Name']?>
             </h1>
           </div>
         </div>
      </div>
    </div>
    <div class="container">
       <table class="table table-responsive table-dark table-stripted table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Address</th>
      <th>Message</th>
    </tr>
  </thead>
  <tbody>
    <?php
       $selectquery = "select *from contactus";
       $query = mysqli_query($conn,$selectquery);
       $nums = mysqli_num_rows($query);

       while($res = mysqli_fetch_array($query)){
        ?>
    <tr>
       
      <td><?php echo $res['ID'];?></td>
      <td><?php echo $res['Name'];?></td>
      <td><?php echo $res['Email'];?></td>
      <td><?php echo $res['Password'];?></td>
      <td><?php echo $res['Address'];?></td>
      <td><?php echo $res['Message'];?></td>
    </tr> 
    <?php 
 
  }

// for ($res=0; $res < 0; $res++) { 
//   $res = mysqli_fetch_array($query)
//     echo $res['Name'];
  

?>
   </tbody>
</table>

    </div>


      <!--   echo $res['ID']. "<br>";
        echo $res['Name']. "<br>";
        echo $res['Email']. "<br>";
        echo $res['Password']. "<br>";
        echo $res['Address']. "<br>";
        echo $res['Message']. "<br>";
       }

       ?> -->




        
    
    <div class="container">
      <a href="logout.php" class="btn btn-danger"> Logout </a> 
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
