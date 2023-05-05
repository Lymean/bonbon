
<?php
session_start();
include "header.php";
require "connexion.php" ;
$bdd=connect() ;
extract($_GET) ;
$_SESSION["id"]=$id;

try{
//creation de la requête
$sql=" select * from produit where id=$id";
echo $sql;
  //execution de la requête
  $resultat = $bdd->query($sql);
  //récupérer les résultats
  $produit = $resultat->fetch(PDO::FETCH_OBJ);

}
catch (PDOException $e){

    echo "erreur dans la requête <br>". $e->getMessage() ;
}

?>
    <h2 class="text-danger  text-center">Modifier un produit</h2>  
    <form method="POST" action="modifier2.php" enctype="multipart/form-data">


        <div class="mb-3">
        <label class="form-label" for="autoSizingInput">Nom produit</label>
        <input type="text" class="form-control" id="autoSizingInput" value="<?php echo $produit->nom ?>" name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label" for="autoSizingInput">Prix du produits</label>
            <input type="text" class="form-control" id="autoSizingInput" value="<?php echo $produit->prix ?>" name="prix">
            </div>
        image du produit <input type="text"  accept="images/pgn, images/jpg"value="<?php echo $produit->photo ?>" name="photo">

        
        <br>
    <button type="submit" class="btn btn-primary">Enregistre</button>
    </form>
    
    