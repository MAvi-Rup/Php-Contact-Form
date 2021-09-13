<?php
 session_start();
 $conn = mysqli_connect('localhost','root');
  if($conn){
    ?>
    <script>
      alert("connection Succesful");
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

    if(isset($_POST['submit'])){
        $name=$_POST['name'];        
        $password=$_POST['password'];
       
        $sql=  "select * from login where Name ='$name' and
        Password ='$password' " ;
        $query = mysqli_query($conn,$sql);
        $row = mysqli_num_rows($query);
            if($row == 1){
                echo "Login successful";
                $_SESSION['Name'] = $name; 
                header('location:adminindex.php');
            }else{
                echo "login failled";
               
               header('location:admin.php');
            }
        }     
?>