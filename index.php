<?php
include("header.php");
include ("config.php");
//connexion à la BDD
$bdd=connect() ;

//requête SQL
$sql="SELECT * FROM produit";
//execution de la requéte 
$resultat=$bdd->query($sql);
//affichage des resultats dans un objets

while ($produit=$resultat->fetch(PDO::FETCH_OBJ))
{

  
      ?>
      <div class="card" style="width: 18rem;">
       <img src="<?php echo $produit->photo ?>" class="card-img-top" alt="...">
       <div class="card-body">
         <h5 class="card-title"><?php echo $produit->nom ?></h5>
         <p class="card-text"><?php echo $produit->prix ?></p>
         <a href="#" class="btn btn-primary">Acheter</a>
       </div>
     </div>
       
       
       <?php
}

//"<tr> <td> $produit->nom </td> <td> $produit->prix  </td> <td> <img src='$produit->photo' > </td></tr>";
include "footer.php" ;
?>


