<?php
include __DIR__.'/../src/Entity/Produit.php';

?>
<h1>Catalog</h1>
    <br />
    <br />  

    <div class="container">
        <div class="row">
    <?php foreach ($p as $produit ) { ?>
    

 
           <div class="card col-sm" style="width: 18rem;">
                <img src="http://localhost:3000/img/<?=$produit->image_produit ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Article : <?=$produit->nom_produit ?></p>
                    <p class="card-text">Article : <?=$produit->description_produit ?></p>

                    <form method="POST" action="/add_cart">
                        <input type="hidden" value="<?=$produit->id_produit ?>" name="id">
                        Quantité<input type="number" name="quantite" value=1 min=1 max=10>
                        <input type="submit" value="Ajouter au panier">
                    </form>
                </div>
            </div>
      
    <?php } ?> 
    
    </div>
</div>