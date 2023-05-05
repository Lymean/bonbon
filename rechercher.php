<?php 
include "connexion.php";
$bdd=connect() ;
include "header.php";

$nom_produit=$_POST["nom_produit"];
//requête
$sql = "SELECT * from produit where nom like '%$nom_produit%'";
//execution de la requête
$resultat = $bdd->query($sql);

//affichage des résultats dans un objet
while ($produit = $resultat->fetch(PDO::FETCH_OBJ)) {
?>

  <div class="card" style="width: 18rem;">
   <img src="<?php echo $produit->photo ?>" class="card-img-top" alt="...">
   <div class="card-body">
     <h5 class="card-title"><?php echo $produit->nom ?></h5>
     <p class="card-text"><?php echo $produit->prix. "€"?></p>
     <a href="#" class="btn btn-primary">Acheter</a>
   </div>
 </div>


<?php
}
?>

</body>

</html
