
<?php
    session_start();
    include_once "testconect.php";
    if(isset($_GET['del'])) {
        $id_del= $_GET['del'] ;
        unset($_SESSION['sproduct'][$id_del]) ;
      
        } 
    if (isset($_POST['id'], $_POST['Quantity']) && is_numeric($_POST['id']) && is_numeric($_POST['Quantity'])) {   
          
            $id = (int)$_POST['id'];   
            $Quantity = (int)$_POST['Quantity']; 
        {
        $update_query = "UPDATE products SET Quantity = '$Quantity' WHERE id = '$id'";
        foreach($_POST['Quantity'] as $key => $value) {
        $req->execute(array(
        'Quantity'=>$value,
        'id'=>$key,
        'id'=>$id
        ));
        $req->closeCursor();
        }
    }
}
        

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heavenly Aroma</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/fontawesome.css">
   
</head>

<body class="shopbackground">
    <section id="header">
        <a href="#"><img src="images/logohatype3.png" class="logo" alt=""></a>
     
        
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="myaccont.php">My account</a></li>

            </ul>
        </div>
        <div class="card">
            <div class="shopcard0">
                <a  class="active" href="bascket.php"><img src="images/shopc.webp" class="shopcard1" alt=""></a>
         
            </div>
            <div>
                <p id="count"><?=array_sum($_SESSION['sproduct'])?></p>
            </div>
          
        </div>
        
        
        <div id="mobile">
            <div id="bar">
                <img src="images/icon2.png" alt="">

            </div>
            
        </div>
        <div class="langues">
            <a href="#"><img src="images/languageE.png"logo" alt=""></a>
            <a href="#"><img src="images/languageJ.png"logo" alt=""></a>
        </div>
          
    </section>
  
    <section id="heroshop">
        <h1>HEAVENLY AROMA </h1>
        <h2>Madagascar Essential Oil </h2>
        <h2>Growers, Distillers & Wholesale Providers</h2>
        <h2>You have come to the right place to securely procure pure, top quality essential oil</h2>
        <h2>Welcome to HEAVENLY AROMA!</h2>

    </section>

    <section id="rangeproduct">
        
        <?php
        include_once "testconect.php";
        
        $req = mysqli_query($con, "SELECT * FROM products" );
        while($row = mysqli_fetch_assoc($req)){ 
        ?>
        <form action="" class="procuct_lists">
        <div class="fe-box" onclick="window.location.href='link_product2.php?id=<?=$row['id']?>';">
            <img src="images/<?=$row['img']?>" alt="">
            <h2><?=$row['HEname']?></h2>
            <h3><?=$row['INCI']?></h3>
            
        </div>

        </form>

    
        <?php } ?>
        
       
    </section>

    <section id="fidelity">
         <h3>Loyalty Discount</h3>
         <h2>Up to <span>20% off</span> - for quantity order more than 200L</h2>
         <button>Explore More</button>
    </section>

    <section id="newsletter">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest product and <span> special Offers</span> .</p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button>Sign Up</button>
        </div>
    </section>
    
    <footer class="section.p1">
        <div class="col">
        
            <h4>Contact</h4>
            <p><strong>Address: </strong>  N36 Ambohidrazaka, Alasora,Antananarivo</p>
            <p><strong>Phone: </strong>  +261 34 88 456 06 / +33 74 56 83 383</p>
            <p><strong>Hours: </strong>  09 00 - 18 00</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <a href="#"><img src="images/facebook2.jpg"logo" alt=""></a>
                    <a href="#"><img src="images/youtube2.jpg"logo" alt=""></a>
                    <a href="#"><img src="images/linkedin2.jpg"logo" alt=""></a>
                    <a href="#"><img src="images/instagram2.jpg"logo" alt=""></a>
              
                   
                </div>
            </div>
            <h4>Copyright &#169; Heavenly Aroma design 2023 All right reserved</h4>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="about.php">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="terms.php">Terms & Conditions</a>
            <a href="#">Contact Us</a>
            
        </div>
        <div class="col">
            <h4>My account</h4>
            <a href="#">Sing In</a>
            <a href="#">View Cart</a>
            <a href="wishlist2.php">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
            
        </div>
        <div class="col">
            <h4>Install App</h4>
           
            <div class="payement">
                <p>Secured Payement</p>
                <img src="./images/Payement-2-edit.png" alt="">
                
            </div>
           
        </div>
        
     

    </footer>
  

  

</body>

</html>