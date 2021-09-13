<?php

 $conn = mysqli_connect('localhost','root');
  if($conn){
    ?>
    <script>
      alert("Login Succesful");
    </script>

    <?php
  }else{
    ?>
    <script>
      alert("connection Failled");
    </script>
 
    <?php
    die("No Connection" .mysqli_connect_error());
    };
    $db = mysqli_select_db($conn, 'contact');

?>