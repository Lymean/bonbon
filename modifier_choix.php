
  <?php
include "header.php" ;


  //connexion à la BDD
  include "connexion.php";
  $bdd = connect();
  //requête
  $sql = "select * from produit";

  //execution de la requête
  $resultat = $bdd->query($sql);

  //affichage des résultats dans un objet
  while ($produit = $resultat->fetch(PDO::FETCH_OBJ)) {
  ?>
    <div class="card" style="width: 18rem;">
      <img src="<?php echo $produit->photo ?>" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title"><?php echo $produit->nom ?></h5>
        <p class="card-text"><?php echo $produit->prix ?></p>
        <div class="modal-footer">
            <a href="modifier1.php?id=<?php echo $produit->id ?>" class="btn btn-primary"> modifier</a>
        </div>
      </div>
    </div>
  <?php
  }
  include "footer.php" ;
  ?>
