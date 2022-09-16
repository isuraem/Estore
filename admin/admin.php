


<!DOCTYPE html>


<html lang="en">
<head>
 <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="../styles/header.css">
</head>


<body>
   <header>
        <div class="logo">
            <img src="images/logo.png" alt="logo image">
        </div>

        <div class="stuff">
          
            <div class="stuff1">
                
            </div>
        </div>

   </header>

<br>
<hr>
<br>
<div class="sizeing">
<div  class="item" >
<p style="font-size:24px">ADDING ITEMS</P>
<form method="POST" action="additem.php" >
<input class="" type="text" placeholder="item Name" name="itemn" required>
<input class="" type="text" placeholder="item description" name="itemd" required>
<input class="" type="text" placeholder="Price" name="itemp" required>
 <button type="submit" name="upload">upload</button>
</form>
</div>

<div class="zoom">

<p>On Going Delivery</p>
<?php

 include_once 'config.php' ;


	$query="SELECT COUNT(item_code) AS total FROM delivery";	
    $result=mysqli_query($conn,$query);
	$values=mysqli_fetch_assoc($result);
	$num_rows= $values['total'];
 

   echo "<p1>$num_rows</p1>";
   

						$sql="SELECT * FROM delivery ";
						$result =mysqli_query($conn,$sql);
						
						if($result ->num_rows>0){
							while($row =$result->fetch_assoc()){
						
							
							echo "<td>"."<p>".$row['fname_d']."  |  ".$row['address_d']."  |  ".$row['email_d']."  |  "."</p>";
							echo "<a href='remove.php?id=$row[id]'>Remove</a>"." | "."<a href='edit.php?id=$row[id]'>Edit</a>";
							
						}
						}






?>
</div>
<div class="zoom2">
<form method="post" action="logout.php">
    <button type="submit"  >logout</button></a>
	</div>
</div>
</form>
</body>
</html>
