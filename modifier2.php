
<?php
session_start();

include "header.php";
require "connexion.php" ;
$bdd=connect() ;
extract($_POST) ;
$id=$_SESSION["id"] ;
//update reqûete 
try {
    $sql="update produit set nom='$nom',prix=$prix,photo='$photo' where id=$id";
    echo $sql;
    $resultat = $bdd->exec($sql);
    

}
catch (PDOException $e){
    echo "erreur dans la requête <br>".$e->getMessage();

}

?>
</body>
