<?php ob_start() ?>
<div class="short-menu-metacreator">
    <div class="sticky-menu">
        <div class="short-menu-items">
            <div class="dropdown imgProfils-creator">
                <img src="data:image/png;base64,<?= $_SESSION['user']['profilePicture'] ?>" alt="" width="90px" height="90px" />
            </div>
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
                <a href="index.php?name=MetaCreator&link=Analystic" class="menu-link">
                <div class="nav-item-short">
                    <img src="./front-end/assets/img/MetaCreatorImg/Analystic.svg" alt="" srcset="" class="nav-logo-short" />
                    <p> <?= $enJson['MetaCreator']['Analystic'] ?></p>
                </div>
            </a>
            </a>
        </div>
    </div>
</div>
<div class="hamburger-menu-metacreator">
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
<?php $menu = ob_get_clean() ?>