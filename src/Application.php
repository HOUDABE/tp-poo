<?php
class Application{
    public static function routeur(){
                
            if (!isset($_SERVER['PATH_INFO'])) {
                $path="";
            }

            if (isset($_SERVER['PATH_INFO'])) {
                $path=$_SERVER['PATH_INFO'];
            }
            if ($path==''){
                include __DIR__.'/../src/Controller/HomeController.php';
                 $controller=new HomeController();
                 $controller->index(); //Renvoyer la vue du formulaire de connexion
             }
             
         if ($path=='/produits'){
        include __DIR__.'/../src/controller/ProduitController.php';
        $annonces = new ProduitController();
        $annonces-> toutes_annonces(); //Renvoyer la vue du formulaire de connexion
    }
        
    if ($path=='/un_produit'){
        include __DIR__.'/../src/controller/ProduitController.php';
        $annonces = new ProduitController();
        $annonces-> une_annonces(); //Renvoyer la vue du formulaire de connexion
    }

}
}