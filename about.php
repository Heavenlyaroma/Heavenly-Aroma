

<?php
    session_start();
    include_once "testconect.php";
    if(isset($_GET['del'])) {
        $id_del= $_GET['del'] ;
        unset($_SESSION['sproduct'][$id_del]) ;
      
        } 
    if (isset($_POST['id'], $_POST['Quantity']) && is_numeric($_POST['id']) && is_numeric($_POST['Quantity'])) {   
            /* Définissez les variables post afin que nous puissions les identifier facilement, assurez-vous également qu'elles sont entières.*/   
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
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="CSS/styles.css">
    
   
</head>
<body class="about">
    <section id="header">
        <a href="#"><img src="images/logohatype3.png" class="logo" alt=""></a>
     
        
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a class="active" href="about.php">About</a></li>
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
  
    <section id="slider1">
        <img src="images/nature1.jpg" alt="img1" class="image_slider active"/>
        <img src="images/tree.jpg" alt="img2"  class="image_slider"/>
        <img src="images/rano.webp" alt="img3"  class="image_slider"/>
        <div class="suivant">
            <i class="fa fa-angle-double-right"></i>

        </div>
        <div class="precedent">
            <i class="fa fa-angle-double-left"></i>

        </div>
        <div class="hvaromatitle">
             <h1>HEAVENLY AROMA</h1>
           
        
        </div>
     
         
    </section>

    <script src="app.js"></script>
   
    <section id="pwsentenses">
        <h3>Who we are & how we work</h3>
        <h4>“We care deeply about QUALITY but above all we value TRUST and SUSTAINABLE PARTNERSHIPS”</h4>

    </section>
    <section id="hatext">
            <h4>HEAVENLY AROMA LTD trades as an Essential Oils producer and wholesaler. 
                The company is based in Madagascar and ships products worldwide. 
                We have studied and have a good understanding about each product that we promote.
                 Our processes and procedures framework comply with International standards. 
                 Strict inspections and controls are implemented on the entire oil production
                  cycle to maintain the highest levels of hygiene, quality , service, 
                  and to achieve continual improvement .We carefully perform follow-up and
                   monitoring through continual research and analysis on how we can improve every 
                   aspect of our production cycle from pre-seeding to essential oil dispatching. 
                   Product documentation is available upon request for traceability 
                and transparency.In order to fulfil our aim  of “growing with our customer for
                 long term partnership”,each member of our expert team works with integrity,
                  reliability, and love.
            </h4>
    </section>
    <section id="caracttranistion">

    </section>

    
    <section id="pwsentenses">
        <h3>Environment policies</h3>
        <h4>“Thanks to Nature for every single drop”</h4>   
    </section>
    <section id="invironment">
        
        <li>Deep understanding of Environmental issues </li>
        <li>Ensuring Sustainability of wild culture </li>
        <li>Promote biodiversity by mixing cultivation  </li>
        <li>Distillation Tools setting with water cooling system 
            on semi closed circuit </li>
       
      
    </section>



    <section id="invironment1">
        <div class="reforest">
            <h3>Massively engaged in reforestation</h3>
        
            <img src="images/youngplant2.jpg" alt="">

        </div>
        <div class="fire">
            <h3>Fighting brush fire</h3>
            <img src="images/firefighting.jpeg" alt="">
          

        </div>
        <div class="bio">
            <h3>Fertilizer 500% Bio</h3>
            <img src="images/fert2.jpeg" alt="">

        </div>
  

    </section>
    <section id="caracttranistion">

    </section>
    <section id="pwsentenses">
        <h3>Social integration </h3>
        <h4>“Promote small farmers and reward their hard work”</h4>   
    </section>
  
 
    
    <section id="social">
        <h4> “How can we share wellbeing to the rest of the world and not give it to local
             residents where we grow our plants and distil the products?"<br>
             Our policy is to provide a sustainable living for the less fortunate habitants of our rural lands,
              especially for vulnerable people by providing their prime needs. <br> </h4>
         <img src="images/social3.jpg" alt="">
     
        
        


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
            <h4>Copyright-Heavenly Aroma-php-design 2021</h4>
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
            <div class="appgoo">
                <p>From App Store or Google Play</p>
                <img src="./images/Apple-Google-Play.png" alt="">
            </div>
            
                

  
        </div>
        
     

    </footer>
  

  

</body>


</html>