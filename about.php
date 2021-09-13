<?php 
 
 // echo $_GET["Name"];  
 // echo $_GET["email"];
 
       
 //  echo $_GET["password"];
 //  echo $_GET["address"];
  
 //  echo $_GET["message"]; 

 //  function readCSV($csvFile){
 //    $file_handle = fopen($csvFile, 'r');
 //    while (!feof($file_handle) ) {
 //      $line_of_text[] = fgetcsv($file_handle, 1024);
 //    }
 //    fclose($file_handle);
 //    return $line_of_text;
 //  }

 //  $filename ='FinalMissingData.csv';
 //  $new_csv = fopen($filename, 'w');
 //  $resOrder = array(
 //    0 => $_GET["name"],
 //    1 =>$_GET["email"],
 //    3=> $_GET["password"],
 //    4=>$_GET["address"],
 //    5=>$_GET["message"]
 //  );
 //  fputcsv($new_csv, $resOrder);

?>


<?php
   

  $conn = new mysqli('localhost','root','','contact');
  if($conn){
    ?>
    <script>
      alert("connection Succesful");
    </script>

    <?php
  }else{
    ?>
    <script>
      alert("connection Succesful");
    </script>

    <?php
    die("No Connection" .mysqli_connect_error());
    };

if(isset($_GET['submit'])){
    $name=$_GET["name"];  
    $email=$_GET["email"];
    
          
    $password=$_GET["password"];
    $address=$_GET["address"];
     
    $message=$_GET["message"];

    $Myquery= "INSERT INTO `contactus`(`Name`, `Email`, `Password`, `Address`, `Message`) 
    VALUES ('$name','$email','$password','$address','$message')";
    mysqli_query($conn,$Myquery);
    header('location:Contact.php');

};
?>
 