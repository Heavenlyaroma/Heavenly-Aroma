<?php
session_start();


/* Si l'utilisateur a cliqué sur le bouton "Ajouter au panier" sur la page du produit, nous pouvons vérifier les données du formulaire.*/   
if (isset($_POST['id'], $_POST['Quantity']) && is_numeric($_POST['id']) && is_numeric($_POST['Quantity'])) {   
    /* Définissez les variables post afin que nous puissions les identifier facilement, assurez-vous également qu'elles sont entières.*/   
    $id = (int)$_POST['id'];   
    $Quantity = (int)$_POST['Quantity'];   
    /* Préparez l'instruction SQL, nous vérifions essentiellement si le produit existe dans notre base de données.*/   
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');   
    $stmt->execute([$_POST['id']]);   
    /* Récupère le produit depuis la base de données et renvoie le résultat sous forme de tableau.*/   
    $produit = $stmt->fetch(PDO::FETCH_ASSOC);   
    // Vérifier si le produit existe (le tableau n'est pas vide)   
    if ($produit && $Quantity > 0) {   
        /*Le produit existe dans la base de données, maintenant nous pouvons créer/mettre à jour la variable de session pour le panier.*/   
        if (isset($_SESSION['panier']) && is_array($_SESSION['panier'])) {   
            if (array_key_exists($id, $_SESSION['panier'])) {   
                // Le produit existe dans le panier, il suffit de mettre à jour la Quantity.   
                $_SESSION['panier'][$id] += $Quantity;   
            } else {   
                // Le produit n'est pas dans le panier, ajoutez-le   
                $_SESSION['panier'][$id] = $Quantity;   
            }
        } else {   
            /* Il n'y a aucun produit dans le panier, ceci ajoutera le premier pro
duit au panier.*/   
            $_SESSION['panier'] = array($id => $Quantity);   
        }
    }   
    // Empêcher la resoumission des formulaires...   
    
    exit;
}



	 /* Mettre à jour les quantités de produits dans le panier si l'utilisateur clique sur le bouton "Mettre à jour" sur la page du panier d'achat*/   
     if (isset($_POST['update']) && isset($_SESSION['panier'])) {   
        /* Boucle à travers les données postales afin de mettre à jour les quantités pour chaque produit du panier.*/   
        foreach ($_POST as $k => $v) {   
            if (strpos($k, 'Quantity') !== false && is_numeric($v)) {   
                $id = str_replace('Quantity-', '', $k);   
                $Quantity = (int)$v;   
                // Effectuez toujours des contrôles et des validations   
                if (is_numeric($id) && isset($_SESSION['panier'][$id]) && $Quantity > 0) {   
                    // Mise à jour de la nouvelle Quantity   
                    $_SESSION['panier'][$id] = $Quantity;   
                }
            }   
        }
        // Empêcher la re-soumission de formulaires...   
        header('location: index.php?page=panier');   
        exit;
    }


?>

/* Mettre à jour les quantités de produits dans le panier si l'utilisateur clique sur le bouton "Mettre à jour" sur la page du panier d'achat*/   
	if (isset($_POST['update']) && isset($_SESSION['panier'])) {   
	     /* Boucle à travers les données postales afin de mettre à jour les quantités pour chaque produit du panier.*/   
	     foreach ($_POST as $k => $v) {   
	         if (strpos($k, 'Quantity') !== false && is_numeric($v)) {   
	             $id = str_replace('Quantity-', '', $k);   
	             $Quantity = (int)$v;   
	             // Effectuez toujours des contrôles et des validations   
	             if (is_numeric($id) && isset($_SESSION['panier'][$id]) && $Quantity > 0) {   
	                 // Mise à jour de la nouvelle Quantity   
	                 $_SESSION['panier'][$id] = $Quantity;   
	             }
	         }   
	     }
	     // Empêcher la re-soumission de formulaires...   
	     header('location: index.php?page=panier');   
	     exit;
	 }

	<div class="panier content-wrapper">
	       <h1>Panier d'achat</h1>
	       <form action="index.php?page=panier" method="post">
	           <table>
	              <thead>
	                  <tr>
	                      <td colspan="2">produit</td>
	                      <td>prix</td>
	                      <td>Quantity</td>
	                      <td>Total</td>
	                  </tr>
	              </thead>
	              <tbody>
	                  <?php if (empty($produits)): ?>
	                  <tr>
	                      <td colspan="5" style="text-align:center;">Vous n'avez aucun produit ajouté dans votre panier</td>
	                  </tr>
	                  <?php else: ?>
	                  <?php foreach ($produits as $produit): ?>
	                  <tr>
	                      <td class="img">
	                          <a href="index.php?page=produit&id=<?=$produit['id']?>">
	                              <img src="imgs/<?=$produit['img']?>" width="50" height="50" alt="<?=$produit['nom']?>">
	                          </a>
	                      </td>
	       <td><a href="index.php?page=produit&id=<?=$produit['id']?>"><?=$produit['nom']?></a>
	                          <br>
	                          <a href="index.php?page=panier&remove=<?=$produit['id']?>" class="remove"><i class="fas fa-trash">&nbsp;</i>Supprimer </a></td>
	                      <td class="prix">&dollar;<?=$produit['prix']?></td>
	                      <td class="Quantity"><input type="number" name="Quantity-<?=$produit['id']?>" value="<?=$produits_in_panier[$produit['id']]?>" min="1" max="<?=$produit['Quantity']?>" placeholder="Quantity" required></td>
	    <td class="prix">&dollar;<?=$produit['prix']*$produits_in_panier[$produit['id']]?></td>
	                  </tr>
	                  <?php endforeach; ?>
	                  <?php endif; ?>
	              </tbody>
	          </table>
	          <div class="subtotal">
	              <span class="text">Subtotal</span>
	              <span class="prix">&dollar;<?=$subtotal?></span>
	          </div>
	          <div class="buttons">
	              <input type="submit" value="Mettre à jour" name="update">
	              <input type="submit" value="Passer la commande" name="placerCommade">           </div>
	      </form>
	</div>
	<?=template_footer()?>
