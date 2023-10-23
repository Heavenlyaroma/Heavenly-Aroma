
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
    <link rel="stylesheet" href="CSS/styles.css">
    <script language='javascript' id='cible' src='villes_dep.js'></script>
    <script src="wishlist2.js" async></script>
    
   
</head>
<body class="wishlistbacgroud">
    <section id="header">
        <a href="#"><img src="images/logohatype3.png" class="logo" alt=""></a>
     
        
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
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
    <section id="prodtitle">
    <h2 class="prouctTitle">THANK YOU FOR SOURCING FROM OUR WEBSITE </h2>
                              
    </section>
    
   
    
          
    <a href="shop.php"><button class="checkout">Continue shopping</button></a>
    <h2 class="titlebascket">Cart</h2>
                                
    <section id="prodetails" class="section-p1">

        <table class="content-table2">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Container</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    
                </tr>
            </thead>
            <tbody class="cart-item-allshop">
                <?php
                $total = 0;
                $ids=array_keys($_SESSION['sproduct']);
                if (empty($ids)) {
                    echo"Empty";
                    
                }else {
                    $products = mysqli_query($con ,"SELECT * FROM products WHERE id IN(".implode(',', $ids).")");  
               
                
                foreach($products as $product):
                    $total += $product['prix2']
                ?>
                <tr class="cart-item-all">
                    <td class="cart-item-col1">
                        <div class="cart-item-column">
                            <img class="cart-item-imag"  src="images/<?=$product['img']?>"
                            width="70" height="70">
                            <div class="cart-item-name-cas">
                                <ul class="cart-item-namcas">
                                    <span class="cart-item-title"> <?=$product['HEname']?></span>
                                    <span class="cart-item-cas"> <?=$product['CASnum']?> </span>
                                    

                                </ul>
                                

                            </div>
                            
                        </div>
                    </td>
                    <td >
                    <div class="input-box">
                  
                    <select id="container" name="container" title="container;" class="cart-container-input">
                            <option class="cart-container-input"value="1">Select a container</option> 
                            <option class="cart-container-input"value="1">1L</option>
                            <option class="cart-container-input"value="5">5L</option>
                            <option class="cart-container-input"value="10">10L</option>
                            <option class="cart-container-input"value="20">20L</option>
                    </select>
                       
                    
                   </div>
                
                        
                    </td>
                    <td >
                        <span class="item-container-price">$<?=$product['prix2']?> </span>
                    </td>
                    <td>
                        <form action="bascket.php" method="post" class="input-quantity">
                            <input type="hidden"  name="cart_Id" value= "<?=$product['id']?>">
                            <input  class="cart-quantity-input"type="number" min="1" name="cart_quantity" value= "<?=$product['Quantity']?>">
                            <input  type="submit"  name="update_cart" value= "update">

                        </form>
                    </td>
                    <td>
                        <span class="item-container-subtotalprice">$<?=$product['prix2']?></span>
                    </td>
                    <td>
                    <a href="bascket.php?del=<?=$product['id']?>"><button class="delete-item" type="button" ><img src="images/delet.jpg" alt=""></button></a>
                    </td>
                <?php endforeach ; } ?>  
             
            </tbody>


        </table>

  

    </section>
    <section>
        <div class="cart-total">
            <strong class="cart-total-title">Total:</strong>
            <span class="cart-total-price">$<?=$total?></span>
        </div>
    </section>

    <h2 class="titlebascket">Shipping estimation</h2>
    <div class="shipping">
     <div>
            <span class="contry_state"> Pleas select your Country & State</span>
            <div class="centre">
				<form id="formulaire" name="formulaire" method="post" action="index.php">
					<div class="titre_centre">
					<select id="choix_dep" name="choix_dep" class="liste" onChange="charger_villes()">
						<option value="00"> Pleas select your country</option>
						
                        <option value="AF">Afghanistan</option><option value="AX">Aland Islands</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarctica</option>
                        <option value="AG">Antigua and Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="47-BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                        <option value="BA">Bosnia and Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet Island</option>
                        <option value="BR">Brazil</option>
                        <option value="IO">British Indian Ocean Territory</option>
                        <option value="BN">Brunei Darussalam</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="33-CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY" >Cayman Islands</option><option value="CF" >Central African Republic</option><option value="TD" >Chad</option><option value="CL" >Chile</option>
                        <option value="49-CN" >China</option><option value="CX" >Christmas Island</option><option value="CC" >Cocos (Keeling) Islands</option><option value="CO" >Colombia</option><option value="KM" >Comoros</option><option value="CG" >Congo - Brazzaville</option><option value="CD" >Congo - Kinshasa</option><option value="CK" >Cook Islands</option><option value="CR" >Costa Rica</option><option value="CI" >Côte d’Ivoire</option>
                        <option value="48-HR" >Croatia</option><option value="CU" >Cuba</option><option value="CY" >Cyprus</option><option value="CZ" >Czech Republic</option>
                        <option value="DK" >Denmark</option><option value="DJ" >Djibouti</option><option value="DM" >Dominica</option><option value="DO" >Dominican Republic</option><option value="EC" >Ecuador</option><option value="EG" >Egypt</option><option value="SV" >El Salvador</option><option value="GQ" >Equatorial Guinea</option><option value="ER" >Eritrea</option><option value="EE" >Estonia</option><option value="ET" >Ethiopia</option><option value="FK" >Falkland Islands</option><option value="FO" >Faroe Islands</option><option value="FJ" >Fiji</option>
                        <option value="50-FI" >Finland</option>
                        <option value="46-FR" >France</option><option value="GF" >French Guiana</option><option value="PF" >French Polynesia</option><option value="TF" >French Southern Territories</option><option value="GA" >Gabon</option><option value="GM" >Gambia</option><option value="GE" >Georgia</option>
                        <option value="51-DE" >Germany</option><option value="GH" >Ghana</option><option value="GI" >Gibraltar</option><option value="GR" >Greece</option><option value="GL" >Greenland</option><option value="GD" >Grenada</option><option value="GP" >Guadeloupe</option><option value="GU" >Guam</option><option value="GT" >Guatemala</option><option value="GG" >Guernsey</option><option value="GN" >Guinea</option><option value="GW" >Guinea-Bissau</option><option value="GY" >Guyana</option><option value="HT" >Haiti</option><option value="HM" >Heard &amp; McDonald Islands</option><option value="HN" >Honduras</option><option value="HK" >Hong Kong SAR China</option><option value="HU" >Hungary</option><option value="IS" >Iceland</option><option value="IN" >India</option>
                        <option value="52-ID" >Indonesia</option><option value="IR" >Iran</option><option value="IQ" >Iraq</option><option value="IE" >Ireland</option><option value="IM" >Isle of Man</option><option value="IL" >Israel</option>
                        <option value="53-IT" >Italy</option><option value="JM" >Jamaica</option>
                        <option value="54-JP" >Japan</option><option value="JE" >Jersey</option><option value="JO" >Jordan</option><option value="KZ" >Kazakhstan</option><option value="KE" >Kenya</option><option value="KI" >Kiribati</option><option value="KW" >Kuwait</option><option value="KG" >Kyrgyzstan</option><option value="LA" >Laos</option><option value="LV" >Latvia</option><option value="LB" >Lebanon</option><option value="LS" >Lesotho</option><option value="LR" >Liberia</option><option value="LY" >Libya</option><option value="LI" >Liechtenstein</option><option value="LT" >Lithuania</option>
                        <option value="57-LU" >Luxembourg</option><option value="MO" >Macau SAR China</option><option value="MK" >Macedonia</option><option value="MG" >Madagascar</option><option value="MW" >Malawi</option><option value="MY" >Malaysia</option><option value="MV" >Maldives</option><option value="ML" >Mali</option><option value="MT" >Malta</option><option value="MH" >Marshall Islands</option><option value="MQ" >Martinique</option><option value="MR" >Mauritania</option><option value="MU" >Mauritius</option><option value="YT" >Mayotte</option><option value="MX" >Mexico</option><option value="FM" >Micronesia</option><option value="MD" >Moldova</option><option value="MC" >Monaco</option><option value="MN" >Mongolia</option><option value="ME" >Montenegro</option><option value="MS" >Montserrat</option><option value="MA" >Morocco</option><option value="MZ" >Mozambique</option><option value="MM" >Myanmar (Burma)</option><option value="NA" >Namibia</option><option value="NR" >Nauru</option><option value="NP" >Nepal</option>
                        <option value="58-NL" >Netherlands</option><option value="AN" >Netherlands Antilles</option><option value="NC" >New Caledonia</option><option value="NZ" >New Zealand</option><option value="NI" >Nicaragua</option><option value="NE" >Niger</option><option value="NG" >Nigeria</option><option value="NU" >Niue</option><option value="NF" >Norfolk Island</option><option value="MP" >Northern Mariana Islands</option>
                        <option value="55-KP" >North Korea</option>
                        <option value="40-NO" >Norway</option><option value="OM" >Oman</option><option value="PK" >Pakistan</option><option value="PW" >Palau</option><option value="PS" >Palestinian Territories</option><option value="PA" >Panama</option><option value="PG" >Papua New Guinea</option><option value="PY" >Paraguay</option><option value="PE" >Peru</option><option value="PH" >Philippines</option><option value="PN" >Pitcairn Islands</option>
                        <option value="PL" >Poland</option><option value="PT" >Portugal</option><option value="PR" >Puerto Rico</option><option value="QA" >Qatar</option><option value="RE" >Réunion</option><option value="RO" >Romania</option><option value="RU" >Russia</option><option value="RW" >Rwanda</option><option value="BL" >Saint Barthélemy</option><option value="SH" >Saint Helena</option><option value="KN" >Saint Kitts and Nevis</option><option value="LC" >Saint Lucia</option><option value="MF" >Saint Martin</option><option value="PM" >Saint Pierre and Miquelon</option><option value="WS" >Samoa</option><option value="SM" >San Marino</option><option value="ST" >São Tomé and Príncipe</option>
                        <option value="SA" >Saudi Arabia</option><option value="SN" >Senegal</option><option value="RS" >Serbia</option><option value="SC" >Seychelles</option><option value="SL" >Sierra Leone</option>
                        <option value="SG" >Singapore</option><option value="SK" >Slovakia</option><option value="SI" >Slovenia</option><option value="SB" >Solomon Islands</option><option value="SO" >Somalia</option><option value="ZA" >South Africa</option><option value="GS" >South Georgia &amp; South Sandwich Islands</option>
                        <option value="56-KR" >South Korea</option>
                        <option value="60-ES" >Spain</option><option value="LK" >Sri Lanka</option><option value="VC" >St. Vincent &amp; Grenadines</option><option value="SD" >Sudan</option><option value="SR" >Suriname</option><option value="SJ" >Svalbard and Jan Mayen</option><option value="SZ" >Swaziland</option>
                        <option value="59-SE" >Sweden</option><option value="43-CH" >Switzerland</option><option value="SY" >Syria</option><option value="TW" >Taiwan</option><option value="TJ" >Tajikistan</option><option value="TZ" >Tanzania</option><option value="TH" >Thailand</option><option value="TL" >Timor-Leste</option><option value="TG" >Togo</option><option value="TK" >Tokelau</option><option value="TO" >Tonga</option><option value="TT" >Trinidad and Tobago</option><option value="TN" >Tunisia</option>
                        <option value="61-TR" >Turkey</option><option value="TM" >Turkmenistan</option><option value="TC" >Turks and Caicos Islands</option><option value="TV" >Tuvalu</option><option value="UG" >Uganda</option><option value="UA" >Ukraine</option>
                        <option value="42-AE" >United Arab Emirates</option>
                        <option value="41-GB" >United Kingdom</option>
                        <option value="45-US" >United States</option>
                        <option value="UY" >Uruguay</option><option value="UM" >U.S. Outlying Islands</option><option value="VI" >U.S. Virgin Islands</option><option value="UZ" >Uzbekistan</option><option value="VU" >Vanuatu</option><option value="VA" >Vatican City</option><option value="VE" >Venezuela</option><option value="VN" >Vietnam</option><option value="WF" >Wallis and Futuna</option><option value="EH" >Western Sahara</option><option value="YE" >Yemen</option><option value="ZM" >Zambia</option>
                        <option value="ZW" >Zimbabwe</option>
        
					</select>
					
					<div id="calque_ville" class="liste_div" >
					&nbsp;
					</div>					
					</div>
				</form>
				</div>		

        </div>

    <div class="shipping_vat">
     <h3 class="shipping_estimation" value="20"> Estimated shipping value: $ 50 </h3> 
     <h3 class="vat_estimation" value="20"> Estimated VAT value: $ 20</h3>

    </div>    
    </div>

  
  
    <h3 class="total_estimation" value="20"> Estimated TOTAL VALUE: $ 20</h3>
    
    <div class="checkout">
          
            <a href="checkout.php"><button class="checkout">Proced to checkout</button></a>
        </div>
 
 <section id="caracttranistion">
    
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
            <a href="#">Sign In</a>
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
<script type="text/javascript" language="javascript">

	function charger_villes()
	{
		var tab_villes=""; var nb_villes=0; var chaine_liste="";
		var dep_texte = document.getElementById("choix_dep").value;
		var le_dep = dep_texte.substr(0,2);
		//alert(document.getElementById("choix_dep").value);
		//alert(le_dep);
		//alert(retour_villes(le_dep));
		if(le_dep!="00")
		{
			
			
			tab_villes = retour_villes(le_dep).split('|');
			nb_villes = tab_villes.length;
			//alert(nb_villes);
			
			chaine_liste = "<select id='choix_ville' name='choix_ville' class='liste' onChange='verif_villes(\"" + dep_texte + "\");document.getElementById(\"formulaire\").submit();'>";
			chaine_liste += "<option value='Sélection'>Select your State/City</option>";	
			
			for(var defil=0;defil<nb_villes;defil++)
			{
				chaine_liste += "<option value='" + tab_villes[defil] + "'>" + tab_villes[defil] + "</option>";
			}
			
			chaine_liste += "</select>";
			
			document.getElementById("calque_ville").innerHTML = chaine_liste;
		}
		else
			alert("Veuillez préciser un département");

	}
	


</script>

</html>