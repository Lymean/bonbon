<?php
include "header.php";
include "footer.php" ;
?>
    <h2 class="text-danger  text-center">Ajouter du produit</h2>  
    <form method="POST" action="ajout1.php" enctype="multipart/form-data">


        <div class="mb-3">
        <label class="form-label" for="autoSizingInput">Nom produit</label>
        <input type="text" class="form-control" id="autoSizingInput" placeholder="Nom du produit" name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label" for="autoSizingInput">Prix du produits</label>
            <input type="text" class="form-control" id="autoSizingInput" placeholder="prix du produit" name="prix">
            </div>
        image du produit <input type="file" name="doc" accept="images/pgn, images/jpg">
        <br>
    <button type="submit" class="btn btn-primary">Enregistre</button>
    </form>
    
    