
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
                <li><a class="active" href="blog.php">About</a></li>
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
        
      
        <div class="langues">
            <a href="#"><img src="images/languageE.png"logo" alt=""></a>
            <a href="#"><img src="images/languageJ.png"logo" alt=""></a>
        </div>
          
   
    </section>
  


    
   
    <section id="pwsentenses">
        <h3>TERMS & CONDITIONS</h3>
      

    </section>
    <section id="hatext">
            <h4>Welcome to Heavenly Aroma website.  These Terms of Service are a contract 
                between you and Heavenly Aroma Ltd.
                 This Agreement governs your purchase and use of the Site,
                  as well as any services provided to you by us.  PLEASE READ IT 
                  CAREFULLY BEFORE PROCEEDING.
         </h4>
    </section>
   

    
    <section id="pwsentenses">
      
        <h4>Liability limitation</h4>   
    </section>
    <section id="invironment">
        
        <li>By purchasing raw materials on this site you recognize 
            that it is your responsibility to test any and all raw materials 
            prior to using it to blend, repackage or manufacture another product.
              Heavenly Aroma Ltd liability is limited to the product cost of the 
              product you purchase on this site and will not extend to the further 
              finished product you manufacture or re-package. </li>

        
      
    </section>
    <section id="pwsentenses">
      
        <h4> Placing order</h4>   
    </section>
    <section id="invironment">
        
     
              
        <li>Pre-order is available and following   the distillation schedule “Just 
            distilled just despatched”
            This option is only available for those who have a loyalty card 
             </li>
        <li>Customer must ensure the content of his order template
             (identification, quantity of products selected, price, terms,
             and delivery costs) before validating it  </li>
        <li>Once an order has been confirmed we will not accept any additions or 
            deletions. 
            Confirmation of the order implies acceptance of the terms and conditions </li>
        <li> If order cancellation exceeds six (6) hours after orders submission, 20% restocking fee will be charged
            Orders placed on the weekend are considered such an order placed on Monday 08:00 AM
             </li>
       
      
    </section>
    <section id="pwsentenses">
      
        <h4> Payment Methods</h4>   
    </section>
    <section id="invironment">
        
      
        <li>Our price is seat in dollar and doesn't include taxes,
             taxes depends on the customers country  </li>
        <li>Other costs concerning loading, unloading, carriage, and insurance
             all of which amounts the buyer will 
            also pay when it is due to pay for the Products.  </li>
        <li> All orders are prepaid, payments will be taken before an order is processed,
             packed and dispatched </li>
        <li>We accept Visa, MasterCard, Direct Bank Transfers, and Wire Transfers </li>
       
      
    </section>
    <section id="pwsentenses">
      
        <h4> Shipping Policy</h4>   
    </section>
    <section id="invironment">
        
        <li>Our default shipping agent is VELOGIC although in some cases we may,
             at our own discretion,
             ship through an alternate shipper. </li>

        <li>Customers shipping arrangement are also available, in this case, 
            we aren't held accountable for 
            any shipping issue outside of our control, </li>
        <li>We recommend our customer to subscribe insurances on their products  </li>
        <li>Heavenly Aroma Ltd. will not be held responsible for refunding the cost of freight for
             Expedited or on any orders that are delayed for reasons outside of our control</li>

       
      
    </section>
    <section id="pwsentenses">
      
        <h4> Return Policy</h4>   
    </section>
    <section id="invironment">
        
        <li>We have a 100% Customer Satisfaction Policy. Any item can be returned 
            within two weeks of receipt of shipment
             for a refund on the cost of goods, returns of conforming products
              are subject to a restocking charge of 20% computed at original 
              invoice value ,if returned intact and unopened. Similarly, 
              all returns must be received by us within 15 business days to qualify for a
               refund. Please note that items on final sale or liquidation cannot be returned, refunded, or exchanged. </li>

        <li>If an error has been made by us on a written order, we will gladly pay 
            for re-shipment. </li>
        <li> All errors arising from miscommunication on verbal orders will be the sole responsibility of the customer
             and they will be accountable for return freight.  </li>
        <li>All product returns require an authorization number.
            All subjective returns must be returned in saleable condition. 
            If we do not receive the merchandise or if it is damaged, we will not 
            issue a refund 
            </li>
        <li>Products that are returned due to quality issues will be refunded only after
             a quality control inspection </li>
        <li>Any item that has been used or altered will not cover for return. 
            Similarly the cost of the return freight will only be refunded if the quality of the 
            returned item was deemed defective by our supplier's QA Department.</li>
        <li>Refunds or credits for any reason can take up to 2 weeks to process and may take up to 2 weeks for your 
            financial institution to process before appearing on your statement.</li>
       
      
    </section>
    <section id="pwsentenses">
      
        <h4> Dispute Resolution</h4>   
    </section>
    <section id="invironment">
        
        <li>We will try to resolve any disputes with you quickly
             and efficiently. If you are unsatisfied in any way with your 
             purchase, please contact us as soon as possible .If you want to take court proceedings, Antananarivo 
            Commercial Court and the relevant Malagasy law will apply to these Terms. </li>


      
    </section>
    <section id="pwsentenses">
      
        <h4> Intellectual Property</h4>   
    </section>
    <section id="invironment">
        
        <li>The content of this website is copyrighted .The compilation 
            of all content made available on the website is protected by Copyright
             2023, Heavenly Aroma Ltd, unless otherwise specified. All rights reserved. </li>

        <li>All trademarks, trade names and logos used on the site are 
            registered trademarks of Heavenly Aroma Ltd. You agree not to
             modify or create
             derivative works based on the site, in whole or in part, unless authorized </li>
        <li>However copy and print hard copy portions of this website are allowed for the
             sole purpose of placing an order to Heavenly Aroma Ltd.  </li>
        <li>Distillation Tools setting with water cooling system 
            on semi closed circuit </li>
        <li> Reproduction of the content of this site is strictly prohibited,
             unless authorized by Heavenly Aroma Ltd </li>
       
      
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
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
            
        </div>
        <div class="col">
            <h4>My account</h4>
            <a href="#">Sing In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
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