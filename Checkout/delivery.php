<?php
     
     include_once 'config.php';
?>
<?php


    $item =$_POST["itemc"];
    $name =$_POST["fname"];
    $address =$_POST["addressd"];
	$phone =$_POST["cnum"];
    $emaild =$_POST["emaild"];
   
	


    $sql = "insert into delivery(item_code,	fname_d,address_d,phone_d,email_d)values('$item ','$name ','$address','$phone','$emaild')";

   if (mysqli_query($conn,$sql)){

   echo "<br>"."Success";
   echo"<script>location.href='../home.php'</script>";
   }
   else{
   echo "failes";
   }

    mysqli_close($conn);

?>
