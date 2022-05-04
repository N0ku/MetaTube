<?php ob_start() ?>
<div class="short-menu">
    <div class="sticky-menu">
        <div class="short-menu-items">
            <a href="index.php?name=MetaCreator&link=Dashboard" class="menu-link">
                <div class="nav-item-short">
                    <img src="./front-end/assets/img/MetaCreatorImg/Dashboard.svg" alt="" srcset="" class="nav-logo-short" />
                    <p>
                        <?= $enJson['MetaCreator']['Dashbord'] ?>
                    </p>
                </div>
            </a>
            <a href="index.php?name=MetaCreator&link=Content" class="menu-link">
                <div class="nav-item-short">
                    <img src="./front-end/assets/img/MetaCreatorImg/Content.svg" alt="" srcset="" class="nav-logo-short" />
                    <p> <?= $enJson['MetaCreator']['Content'] ?></p>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="hamburger-menu-container">

</div>
<?php $menu = ob_get_clean() ?>