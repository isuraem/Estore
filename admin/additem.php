<?php
include_once 'config.php' ;
?>
<?php

    $iname =$_POST["itemn"];
    $idescrip =$_POST["itemd"];
    $iprice =$_POST["itemp"];
	

    $sql = "insert into items(item_id,item_name,item_des,item_price)values('','$iname','$idescrip','$iprice')";
	
   if (mysqli_query($conn,$sql)){

   echo "<br>"."Success";
   echo"<script>location.href='admin.php'</script>";
   }
   else{
   echo "failes";
   }


?>