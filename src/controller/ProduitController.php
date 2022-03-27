<?php
class ProduitController{
    public function home(){
    include __DIR__.'/../../templates/produit.php';
    }
    public function toutes_annonces(){
        include __DIR__.'/../../src/Entity/Produit.php';
        $a=new Produit();
        $a->findAll();
        include __DIR__.'/../../templates/produit.php';
    }

    public function une_annonces(){
        include __DIR__.'/../../src/Entity/Produit.php';
        $a=new Produit();
        $a->findOne();
        include __DIR__.'/../../templates/produit.php';
      
    }
  
}