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
             
    
        if (isset($_SESSION['sproduct'][$id])) {
        $_SESSION['sproduct'][$id]++;
      
       } else {
        $_SESSION['sproduct'][$id]=1;
        echo"product added to bascket";
      
    
     } 
     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        foreach ($_POST['Quantity'] as $productss => $Quantity) {
            if ($Quantity >= 0) {
                // Update the quantity in the session cart
                $_SESSION['sproduct'][$id]['Quantity'] = $Quantity;
            }
        }
    }
    
     header("Location:bascket.php");   

    }
    
    
    exit();
   
    
?>
