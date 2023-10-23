<?php
    include_once "testconect.php";
    if (!isset($_SESSION)) {
        session_start();
      
    }
    
    if (!isset($_SESSION['sproduct'])) {
        $_SESSION['sproduct'] = array();
       
    }
    if (isset($_GET['id'])) {
        $id = $_GET['id'] ;
        $productss = mysqli_query($con ,"SELECT * FROM products WHERE id = $id");
        if(empty(mysqli_fetch_assoc($productss))) {
         die("Procuct out of stock");
        }   
             
    }

        
?>

<!DOCTYPE html
>
<html
 lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heavenly Aroma</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <script src="wishlist2.js" async></script>
  
   
</head>
<body class="link_prodbackgroundc">
    <section id="header">
        <a href="wishlist2.php
        "><img src="images/logohatype3.png" class="logo" alt=""></a>
     
        
        <div>
            <ul id="navbar">
                <li><a href="index.php
                ">Home</a></li>
                <li><a class="active" href="shop.php
                ">Shop</a></li>
                <li><a href="about.php
                ">About</a></li>
                <li><a href="contact.php
                ">Contact</a></li>
                <li><a href="myaccont.php
                ">My account</a></li>

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


    <section class="product">
    <?php
       
       
        $req = mysqli_query($con, "SELECT * FROM products WHERE id = $id" );
        while($row = mysqli_fetch_assoc($req)){ 
        ?>
         <section id="prodtitle">
            <h2 class="prouctTitle"><?=$row['HEname']?></h2>
        </section>
        <section id="prodetails" class="section-p1">
                    <div class="single-pro-image">
                        <img src="images/<?=$row['img']?>" width="90%" id="MainImg"   alt="">
            
                    </div>
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th >Cntr</th>
                                <th >Price</th>
                                <th>discount</th>
                                <th>Price-dsc</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="container-size1">0,5L</td>
                                <td class="price-size1">$<?=$row['prix1']?></td>
                                <td class="dicout-size1">0%</td>
                                <td class="price-discounted1">$23</td>
                            
                                
                                <td>
                                    <button class="bascketadd"  onclick="window.location.href='link_product3.php?id=<?=$row['id']?>';">Add to bascket</button>
                                </td>
                              
                            </tr>
                            <tr>
                                <td class="container-size1">1L</td>
                                <td class="price-size1">$<?=$row['prix2']?></td>
                                <td class="dicout-size1">0%</td>
                                <td class="price-discounted1">$23</td>
                            
                                
                                <td>
                                <button class="bascketadd"  onclick="window.location.href='link_product3.php?id=<?=$row['id']?>';">Add to basket</button>
                                </td>
                            
                        
                            </tr>
                            <tr>
                                <td class="container-size1">5L</td>
                                <td class="price-size1">$25</td>
                                <td class="dicout-size1">2%</td>
                                <td class="price-discounted1">$23</td>
                            
                                
                                <td>
                                <button class="bascketadd"  onclick="window.location.href='link_product3.php?id=<?=$row['id']?>';">Add to basket</button>
                                </td>
                            
                        
                            </tr>
                            <tr>
                                <td class="container-size1">10L</td>
                                <td class="price-size1">$25</td>
                                <td class="dicout-size1">2%</td>
                                <td class="price-discounted1">$23</td>
                            
                                
                                <td>
                                <button class="bascketadd"  onclick="window.location.href='link_product3.php?id=<?=$row['id']?>';">Add to basket</button>
                                </td>
                            
                        
                            </tr>
                            <tr>
                                <td class="container-size1">20L</td>
                                <td class="price-size1">$25</td>
                                <td class="dicout-size1">2%</td>
                                <td class="price-discounted1">$23</td>
                            
                                
                                <td>
                                <button class="bascketadd"  onclick="window.location.href='link_product3.php?id=<?=$row['id']?>';">Add to basket</button>
                                </td>
                            
                        
                            </tr>
                                            
                        </tbody>

            
                    </table>
                    <div class="sproductbutton">
                        
                        <a href="shop.php
                        "><button class="backtosphop">Back to Shop</button></a>
                    </div>
                    
            
                </section>
                <section id="caracttranistion">
            
                </section>
                <section id="prodcaract">
                    <h3>REFERENCES</h3>
                    <p class="cas-num"><strong>CAS N°:</strong> <?=$row['CASnum']?></p>
            
            
                <p><strong>INCI name:</strong>  <?=$row['HEname']?> </p>
                <p><strong>Botanical Name: </strong> <?=$row['INCI']?> </p>
                <p><strong>Chemotype:</strong>   <?=$row['Chemotype']?>  </p>
                <p><strong>Extraction Method:</strong>  Steam distillation</p>
                <p><strong>Plant  part distilled: </strong>  Buds </p>
                
                <p><strong>Color: </strong> Pale yellow to yellow clear liquid.</p>
                <p><strong>Odor:</strong>  Eugenol characteristic</p>
                <p><strong>Description: </strong>  Clove Bud Essential Oil is derived from the tree Syzygium aromaticum plant.   <br>  It is a slender evergreen that grows up to 12 meters in height (approximately 36 feet).  <br>   At the start of the rainy season, long buds appear. They change color over time and are beaten from the trees and dried</p>
                <p><strong>Cautions:</strong>  Should be avoided during pregnancy or breastfeeding, keep out of the reach of children</p>
                <p><strong>Important:</strong>  The information given on essential oils is just a general information and should not replace <br>   a doctor advices  before using this product we recommend  a professional consultation</p>
            
                </section>

        <?php } ?>
      
    </section>
       
    
    <section id="caracttranistion">
        
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
            <h4>Copyright-Heavenly Aroma-php
                -design 2021</h4>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="terms.php">Terms & Conditions</a>
            <a href="#">Contact Us</a>
            
        </div>
        <div class="col">
            <h4>My account</h4>
            <a href="#">Sing In</a>
            <a href="#">View Cart</a>
            <a href="wishlist2.php
            ">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
            
        </div>
 
 
 
        <div class="col">
            <h4>Install App</h4>
           
            <div class="payement">
                <p>Secured Payement</p>
                <img src="./images/Payement-2-edit.png" alt="">
                
            </div>
            <div class="appgoo">
                <p>From App Store or Google Play</p>
                <img src="./images/Apple-Google-Play.png" alt="">
            </div>
            
                

  
        </div>
        
     

    </footer>
  

  

</body>

</html
>