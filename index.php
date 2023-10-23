
<?php
    session_start();
    include_once "testconect.php";
    if(isset($_GET['del'])) {
        $id_del= $_GET['del'] ;
        unset($_SESSION['sproduct'][$id_del]) ;
      
        } 
    if (!isset($_SESSION['sproduct'])) {
            $_SESSION['sproduct'] = array();
           
        }
    if (isset($_POST['id'], $_POST['Quantity']) && is_numeric($_POST['id']) && is_numeric($_POST['Quantity'])) {   
             
            $id = (int)$_POST['id'];   
            $Quantity = (int)$_POST['Quantity']; 
        {
        $update_query = "UPDATE products SET Quantity = '$Quantity', WHERE id = '$id'";
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
    <script src="script.js" async></script>
    
    
   
</head>
<body>
    <section id="header">
        <a href="wishlist2.php"><img src="images/logohatype3.png" class="logo" alt=""></a>
     
        
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="myaccont.php">My account</a></li>
                <div></div>
          
              

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
   
    <section id="hero">
        <h1>HEAVENLY AROMA </h1>
        <h2>Madagascar Essential Oil </h2>
        <h2>Growers, Distillers & Wholesale Distributors</h2>

    </section>
    <section id="pure">
        <div class="nature">
            <div class="naturetext">
                <h3>From our best selection of raw materials</h3>
                <h3>Distillation performed <br> with love, skills and knowledges</h3>
                <h3>Distillation tools finely adjusted</h3>
                

            </div>
            <div class="natureimg">
                <img src="./images/clovebud3.jpg" alt="">

            </div>
            
        </div>
        <div class="drop">
            <div class="droptext">

                <h3>We strive to produce the finest quality of essential oils,</h3>
                <h3>100% pure and natural</h3>
                

            </div>
            <div class="dropimg">
                <img src="./images/drop.jpg" alt="">

            </div>
            

        </div>
    </section>
    <section id="prodtitle">
            <h2 class="prouctTitle">On Season & freshly distilled</h2>
    </section>
    
    <section id="rangeproduct">
        <?php
            include_once "testconect.php";
            
            $req = mysqli_query($con, "SELECT * FROM products WHERE Saison='1'" );
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
    <section id="prodtitle">
            <h2 class="prouctTitle">Our Best seller</h2>
    </section>
 
    <section id="product2">
         <?php
             $req = mysqli_query($con, "SELECT * FROM products WHERE Promotion ='1'" );
            while($row = mysqli_fetch_assoc($req)){ 
            ?>
            <form action="" class="procuct_lists"onclick="window.location.href='link_product2.php?id=<?=$row['id']?>';">
                <div class="pro">
                    <img src="images/<?=$row['img']?>" alt="">
                    <div class="des">
                        <span><?=$row['HEname']?></span>
                        <h5><?=$row['INCI']?></h5>
                        <h5><?=$row['Chemotype']?></h5>
                        <span>$<?=$row['prix2']?></span>
                    </div>
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
            <h4>Copyright © -Heavenly Aroma-design 2021</h4>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="terms.php">Terms & Conditions </a >
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
       
    </footer>
  

</body>

</html>