<?php
require "connexion.php" ;
$bdd= connect();
$nom=$_POST["nom"] ;
$prix=$_POST["prix"] ;
$nom_image=$_FILES["doc"]["name"];
var_dump($_FILES["doc"]) ;
$chemin_destination="images/$nom_image";
//move image dans le uploaded file
move_uploaded_file($_FILES["doc"]["tmp_name"],$chemin_destination);

try {
    $sql="INSERT INTO produit (nom, prix, photo) values('$nom', $prix, 'images/$nom_image')";
    echo $sql;
    $resultat = $bdd->exec($sql);

}
catch (PDOException $e){
    echo "erreur dans la requête <br>".$e->getMessage();

}
?>
</body>
