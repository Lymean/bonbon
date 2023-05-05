<?php 
//corstantes ce connexton
define("HOST", "localhost");
define("BDD", "bonbons");
//connexion bdd
function connect(){
    try{
        $bdd=new PDO("mysql:host=localhost;dbname=bonbons","root","",array(PDO:: MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
    
    }
    catch(PDOException $e)
    {
        echo "problème de connexion à la BDD <br>" .$e->getMessage();
    
    }
    return $bdd;
}