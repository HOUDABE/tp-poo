<?php
class Produit{
     public function findAll(){
          // 1 Connexion à la BD 
        include __DIR__.'/../../src/Database.php';
        $pdo=Database::getPdo();
        // notre requête SQL
        $sql = "SELECT * FROM produit";
        $resultat = $pdo->query($sql);
        // var_dump($resultat);
        //3 On met les resultats dans un tableau
        $tab=$resultat->fetchAll(PDO::FETCH_OBJ);
        return $tab;
       
     }

     public function findOne(){
          // 1 Connexion à la BD 
        include __DIR__.'/../../src/Database.php';
        $pdo=Database::getPdo();
        $sql = "SELECT * FROM produit WHERE id_produit=2";
        $resultat = $pdo->query($sql);
        $tab=$resultat->fetchAll();
        var_dump($tab);
     }
     }
     
