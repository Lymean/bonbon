<?php 
include "header.php";
include "connexion.php";
$bdd =connect();
$sql=" select * from produit";
$resultat =$bdd->query($sql);
while ($produit = $resultat->fetch(PDO::FETCH_OBJ)){
    ?>

    <div class="card" style="width: 18rem;">
    <img src="<?php echo $produit->photo ?>" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title"><?php echo $produit->nom ?></h5>
        <p class="card-text"><?php echo $produit->prix ?></p>
        <div class="modal-footer">
        <a href="supprimer.php?id=<?php echo $produit->id?>" class="btn btn-primary"> supprimer</a>
            
    </div>
    </div>


    </div>




  <?php
  }
include "footer.php";
?>