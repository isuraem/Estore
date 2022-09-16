<?php 
 include_once 'config.php' ;
 ?>
 <?php 

 session_start();
  
  
    $id=$_SESSION['id'];
    $cname =$_POST['ucomment'];
    $cmt =$_POST['comments'];
	

    $sql1= "insert into comments(id,cus_name,comment)values('$id','$cname','$cmt')";


   if (mysqli_query($conn,$sql1)){

   echo "<br>"."Success";
   echo"<script>location.href='profile.php'</script>";
   }
   else{
   echo "failes";
      echo"<script>location.href='profile.php'</script>";
   }

    mysqli_close($conn);

?>