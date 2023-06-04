<?php

include __DIR__ . '/../../models/petCards.php';


$arrayProducts = [
    new petsProduct("https://shop-cdn-m.mediazs.com/bilder/tiragraffi/raleigh/8/800/216199_pla_kratzbaum_raleigh_fg_8122_8.jpg", "Scratcher-House", "79,99€", "an house with scratcher", "x", "cat"),
    
];

?>

<main>

    <div class="row">
        <?php foreach( $arrayProducts as $elem ) {?>
            <div class="col-4">
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

</main>