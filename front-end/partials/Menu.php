<?php ob_start() ?>
<?php if ($pageName != 'Watch') {
?>
<div class="short-menu">
    <div class="sticky-menu">
        <div class="short-menu-items">
            <a href="index.php?name=Home" class="menu-link">
                <div class="nav-item-short">
                    <img src="./front-end/assets/img/Menu-svg/Home.svg" alt="" srcset="" class="nav-logo-short" />
                    <p>
                        <?= $enJson['menu']['nav-elements']['Home'] ?>
                    </p>
                </div>
            </a>
            <a href="index.php?name=Explorer" class="menu-link">
                <div class="nav-item-short">
                    <img src="./front-end/assets/img/Menu-svg/compass.svg" alt="" srcset="" class="nav-logo-short" />
                    <p> <?= $enJson['menu']['nav-elements']['Explorer'] ?></p>
                </div>
            </a>
            <a href="index.php?name=Subscriptions" class="menu-link">
                <div class="nav-item-short">
                    <img src="./front-end/assets/img/Menu-svg/sublogo.svg" alt="" srcset="" class="nav-logo-short" />
                    <p> <?= $enJson['menu']['nav-elements']['Subscriptions'] ?></p>
                </div>
            </a>
            <a href="index.php?name=Library" class="menu-link">
                <div class="nav-item-short">
                    <img src="./front-end/assets/img/Menu-svg/library.svg" alt="" srcset="" class="nav-logo-short" />
                    <p><?= $enJson['menu']['nav-elements']['Library'] ?></p>
                </div>
            </a>
        </div>
    </div>
</div>
<?php } ?>


<div class="hamburger-menu-container">


    <div class="nav-body">
        <div class="nav-items">
            <a href="index.php?name=Home" class="menu-link">
                <div class="nav-item">
                    <img src="./front-end/assets/img/Menu-svg/Home.svg" alt="" srcset="" class="nav-logo" />
                    <p class="nav-item-text"><?= $enJson['menu']['nav-elements']['Home'] ?></p>
                </div>
            </a>
            <a href="index.php?name=Explorer" class="menu-link">
                <div class="nav-item">
                    <img src="./front-end/assets/img/Menu-svg/compass.svg" alt="" srcset="" class="nav-logo" />
                    <p class="nav-item-text"><?= $enJson['menu']['nav-elements']['Explorer'] ?></p>
                </div>
            </a>
            <a href="index.php?name=Subscriptions" class="menu-link">
                <div class="nav-item">
                    <img src="./front-end/assets/img/Menu-svg/sublogo.svg" alt="" srcset="" class="nav-logo" />
                    <p class="nav-item-text"><?= $enJson['menu']['nav-elements']['Subscriptions'] ?></p>
                </div>
            </a>
        </div>

        <div class="border"></div>
        <div class="nav-items">
            <a href="index.php?name=Library" class="menu-link">
                <div class="nav-item">
                    <img src="./front-end/assets/img/Menu-svg/library.svg" alt="" srcset="" class="nav-logo" />
                    <p class="nav-item-text"><?= $enJson['menu']['nav-elements']['Library'] ?></p>
                </div>
            </a>
            <a href="index.php?name=History" class="menu-link">
                <div class="nav-item">
                    <img src="./front-end/assets/img/Menu-svg/history.svg" alt="" srcset="" class="nav-logo" />
                    <p class="nav-item-text"><?= $enJson['menu']['nav-elements']['History'] ?></p>
                </div>
            </a>
            <a href="index.php?name=WatchLater" class="menu-link">
                <div class="nav-item">
                    <img src="./front-end/assets/img/Menu-svg/watchlater.svg" alt="" srcset="" class="nav-logo" />
                    <p class="nav-item-text"><?= $enJson['menu']['nav-elements']['WatchLaters'] ?></p>
                </div>
            </a>
            <a href="index.php?name=LikedVideo" class="menu-link">
                <div class="nav-item">
                    <img src="./front-end/assets/img/Menu-svg/like.svg" alt="" srcset="" class="nav-logo" />
                    <p class="nav-item-text"><?= $enJson['menu']['nav-elements']['LikedVideos'] ?></p>
                </div>
            </a>
            <a href="index.php?name=LikedVideo" class="menu-link">
                <div class="nav-item">
                    <img src="./front-end/assets/img/Menu-svg/like.svg" alt="" srcset="" class="nav-logo" />
                    <p class="nav-item-text"><?= $enJson['menu']['nav-elements']['LikedVideos'] ?></p>
                </div>
            </a>
            <a href="index.php?name=LikedVideo" class="menu-link">
                <div class="nav-item">
                    <img src="./front-end/assets/img/Menu-svg/like.svg" alt="" srcset="" class="nav-logo" />
                    <p class="nav-item-text"><?= $enJson['menu']['nav-elements']['LikedVideos'] ?></p>
                </div>
            </a>
            <a href="index.php?name=LikedVideo" class="menu-link">
                <div class="nav-item">
                    <img src="./front-end/assets/img/Menu-svg/like.svg" alt="" srcset="" class="nav-logo" />
                    <p class="nav-item-text"><?= $enJson['menu']['nav-elements']['LikedVideos'] ?></p>
                </div>
            </a>
            <a href="index.php?name=LikedVideo" class="menu-link">
                <div class="nav-item">
                    <img src="./front-end/assets/img/Menu-svg/like.svg" alt="" srcset="" class="nav-logo" />
                    <p class="nav-item-text"><?= $enJson['menu']['nav-elements']['LikedVideos'] ?></p>
                </div>
            </a>
            <a href="index.php?name=LikedVideo" class="menu-link">
                <div class="nav-item">
                    <img src="./front-end/assets/img/Menu-svg/like.svg" alt="" srcset="" class="nav-logo" />
                    <p class="nav-item-text"><?= $enJson['menu']['nav-elements']['LikedVideos'] ?></p>
                </div>
            </a>
            <a href="index.php?name=LikedVideo" class="menu-link">
                <div class="nav-item">
                    <img src="./front-end/assets/img/Menu-svg/like.svg" alt="" srcset="" class="nav-logo" />
                    <p class="nav-item-text"><?= $enJson['menu']['nav-elements']['LikedVideos'] ?></p>
                </div>
            </a>
            <div class="nav-item">
                <img src="./front-end/assets/img/Menu-svg/angle-down-solid.svg" alt="" srcset="" class="nav-logo" />
                <p class="nav-item-text">More</p>
            </div>
        </div>
        <div class="border"></div>
        <div class="menu-subscriptions">
            <strong class="title-subscriptions">
                <?= $enJson['menu']['titles']['subscriptions'] ?>
            </strong>
        </div>
        <div class="border"></div>

        <div class="menu-subscriptions nav-items">
            <strong class="title-others">
                <?= $enJson['menu']['titles']['others'] ?>
            </strong>
            <div class="border"></div>

        </div>

        <div class="nav-items">

        </div>
        <div class="border"></div>

        <div class="nav-items menu-footer">
            <div class="links">
                <a class="menu-text-footer"><?= $enJson['menu']['footer']['link1'] ?></a>
                <a class="menu-text-footer"><?= $enJson['menu']['footer']['link2'] ?></a>
                <a class="menu-text-footer"><?= $enJson['menu']['footer']['link3'] ?></a>
                <a class="menu-text-footer"><?= $enJson['menu']['footer']['link4'] ?></a>
                <a class="menu-text-footer"><?= $enJson['menu']['footer']['link5'] ?></a>
            </div>
            <a class="menu-text-footer copyright">
                <?= $enJson['menu']['footer']['copyright'] ?>
            </a>
        </div>
    </div>
</div>

<?php $menu = ob_get_clean() ?>