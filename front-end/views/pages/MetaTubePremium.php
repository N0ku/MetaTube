<?php ob_start(); $page = "MetaTubePremium"; ?>

<div class="MetaTubePremium-container">

    <img src="../../../front-end/assets/img/MetaTubePremium/logov3.svg" alt="MetaTube Premium" srcset="" />
    <p class="premium-p"><?= $enJson['MetaTubePremium']['title'] ?></p>

    <div class="button-container">
        <button class="btn-free"><?= $enJson['MetaTubePremium']['txt-button'] ?></button>
    </div>
    <h2><?= $enJson['MetaTubePremium']['price'] ?></h2>
    <p><?= $enJson['MetaTubePremium']['remind-text'] ?></p>
    <p><?= $enJson['MetaTubePremium']['add-price'] ?><a href="" class="link-premium"><?= $enJson['MetaTubePremium']['link-add-price'] ?></a></p>
    <a class="link-premium" href=""><?= $enJson['MetaTubePremium']['link-premium'] ?></a>
</div>

<div class="container2">
    <div class="ad-free">
        
    </div>
</div>

<?php $pageName = ob_get_clean() ?>