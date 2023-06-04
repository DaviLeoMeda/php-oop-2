<?php

include __DIR__ . '/../../models/petCards.php';


$arrayProducts = [
    new petsProduct("https://shop-cdn-m.mediazs.com/bilder/tiragraffi/raleigh/8/800/216199_pla_kratzbaum_raleigh_fg_8122_8.jpg", "Scratcher-House", "79,99€", "an house with scratcher", "x", "cat"),
    new petsProduct("https://www.miasuite.it/media/catalog/product/cache/5c2d664e6744d807e5b7de3517c1a3b2/a/m/ambientato-rettangolare-spalliere-reale.jpg", "Dog-House", "19,99€", "a confortable house for your dog", "x", "dog"),
    new petsProduct("https://shop-cdn-m.mediazs.com/bilder/royal/canin/medium/adult/crocchette/per/cane/4/800/icon_topseller_1_2022_02_24t120615_324_4.jpg", "Dog-food", "29,99€", "your dog healty lunch", "x", "dog"),
    new petsProduct("https://shop-cdn-m.mediazs.com/bilder/osso/gioco/in/tpr/per/cani/8/800/icon_topseller_1000x1000_int_7__8.jpg", "Bone for Dogs", "1,99€", "a perfect bone foy your dog", "x", "dog"),
    new petsProduct("https://shop-cdn-m.mediazs.com/bilder/smilla/adult/pollo/3/800/38420_pla_smilla_adult_poultry_1kg_3.jpg", "Cat-Food", "29,99€", "your cat healty lunch", "x", "cat"),
    new petsProduct("https://ss-pics.s3.eu-west-1.amazonaws.com/files/1866115/page-61dtDY8xeuL._AC_SL1000_.jpg?1618649509", "Cat-Ball", "1,99€", "the perfect toy for your cat", "x", "cat"),
];

?>

<main>

    <div class="container">

        <div class="row">
            <?php foreach( $arrayProducts as $elem ) {?>
                <div class="col-4 py-3">
                    <div class="card position-relative" style="width: 18rem;">
                      <img src="<?php echo $elem->picture ?>" class="card-img-top" alt="pet-pic">
                      <img src="<?php echo $elem->kind ?>" class="card-img-top position-absolute top-0 end-0" alt="pet-pic">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $elem->title ?></h5>
                        <p class="card-text"><?php echo $elem->description ?></p>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $elem->price ?></li>
                        <li class="list-group-item"><?php echo $elem->pet ?></li>
                      </ul>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>


</main>