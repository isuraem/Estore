<?php
 session_start();
 
 
  if(isset($_SESSION['username'])){
	 
	 
  }
	else{
	
		echo"<script>location.href='../login/login.php'</script>";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRENDZ|Store</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
    
   <nav>
        <a href="../home.php">HOME </a>|
        <a href="../Category/Cat.html">CATEGORIES </a>|
        <a href="../login/login.php">LOGIN </a>|
        <a href="../create/createacc.html">SIGN IN </a>|
        <a href="../profile/profile.php">MY PROFILE</a>
        
   </nav>
<hr>
   <main>

        <div class="trendzbox">
            <div class="clip">
                <h1>Shopping Cart</h1>
            </div>
            <div class="mycart">
                <div class="topic"> 
                    <div class="qty">
                        <p>Quantity</p>
                    </div>
                    <div class="price">
                        <p>Price</p> 
                    </div>
                    <div class="mc">
                        <p>My Cart</p>
                    </div>
                
                </div>
                <hr>
                <div class="sample1">
                    <div class="img1">
                        <img src="Cart Images/a.jpg" alt="">
                    </div>

                    <div class="ides">
                        <p>Cap with a sweatband in a cotton weave and an adjustable plastic fastener at the back.
                            <br>
                            <br>

                          CompositionLining: Cotton 100%Shell: Cotton 100%
                         </p>
                    </div>
                    <div class="iprice">
                        <p>RS.699.00</p>
                  
						
						
                    </div>

                    <div class="iqty">
                        <form action="/action_page.php">
                            <label for="quantity"></label>
                            <input type="number" id="quantity" name="quantity" min="0" max="3">
                            <div class="submit">
                                <input type="submit">
                            </div>
                            
                        </form>
                    </div>
                </div>

                <div class="sample1">
                    <div class="img1">
                        <img src="Cart Images/b.jpg" alt="">
                    </div>

                    <div class="ides">
                        <p>Double-layered hat in a fine knit with a motif.

                        <br>
                        <br>
                        CompositionAcrylic 100%
                        </p>
                    </div>

                    <div class="iprice">
                        <p>RS.599.00</p>
                    </div>

                    <div class="iqty">
                        
                        <form action="/action_page.php">
                            <label for="quantity"></label>
                            <input type="number" id="quantity" name="quantity" min="0" max="3">
                
                            <div class="submit">
                                 <input type="submit">
                            </div>
                           
                        </form>
                    </div>
                </div>

<form method="post" action="../profile/logout.php">
    <button type="submit"  >logout</button></a>
	
</form>
               
            </div>
            <div class="vl">

            </div>
            <div class="purchase">
                <div class="b1">
                    <button>
                        <i class="fa  fa-check"></i> Continue Shopping
                    </button>
                </div>
                <div class="b1">
                    <button>
                        <i class="fa fa-trash"></i> Clear Cart
                    </button>
                </div>
                <div class="b2">
                    <button>
                        <i class="fa fa-shopping-cart"></i> Procced To Checkout
                    </button>
                </div>
            </div>
            
        </div>
   </main>
<div class="hr">
    <hr>
</div>
   <footer>
    <div class="footermain">
        <div class="main">
            <div class="quick">
                <h1>QUICK LINKS</h1>
                <p> <a href="../Aboutus/About.html">About us</a>  <br> <br>
                <a href="../privacypolicy/PrivacyPolicy.html">Privacy Policy</a>  <br> <br>
                <a href="../contactus/contactus.html">Contact Us</a> </p>
            </div>
                
            <div class="get">
                <h1>GET IN TOUCH</h1>
                <p>Call us at <br> <br>
                <a href="#">(+94)11 2345678</a>  <br> <br>
                <a href="#">trendz.lk@gmail.com</a>
                </p>
            </div>
        </div>

        <div class="links">
            <div class="empty"></div>
            <div class="location">
                <br>
                <br>
                <a href="https://www.google.lk/maps/place/One+Galle+Face+Mall/@6.9273279,79.8428999,17z/data=!3m1!4b1!4m5!3m4!1s0x3ae25bcfdee7764d:0xdf97fbb66912b0c5!8m2!3d6.9273279!4d79.8450886"><i 
                    class="material-icons" style="font-size:24px;">location_on</i></a>
                <div class="line">
                <hr>
                <div class="morelinks">
                    <a href="#"><i 
                        class="material-icons" style="font-size:24px;">facebook</i></a>
                    <a href="#"><i class="fa fa-twitter" style="font-size:24px;"></i></a>
                    <a href="#"><i class="fa fa-instagram" style="font-size:24px;"></i></a>
                    <a href="#"><i class="fa fa-google-plus" style="font-size:24px;"></i></a>
                </div>
                </div>
            </div>
        </div>
        <div class="btmlogo">
            <div class="empty2">
                <img src="images/bottom logo.jpg-1.png" alt="">
            </div>

            <div class="credit">
             <div class="cards">
                <i class="fa fa-cc-visa" style="font-size:24px; color:#d1d7e0 ;"></i>
                <i class="fa fa-cc-amex" style="font-size:24px;color:#d1d7e0"></i>
                <i class="fa fa-cc-paypal" style="font-size:24px;color:#d1d7e0"></i>
                <i class="fa fa-cc-discover" style="font-size:24px;color:#d1d7e0"></i>
             </div>   
            </div>
        </div>
    </div>
   </footer>

</body>
</html>