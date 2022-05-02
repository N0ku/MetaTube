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
                    <p><?= $enJson['menu']['nav-elements']['Home'] ?></p>
                </div>
            </a>
            <a href="index.php?name=Explorer" class="menu-link">
                <div class="nav-item">
                    <img src="./front-end/assets/img/Menu-svg/compass.svg" alt="" srcset="" class="nav-logo" />
                    <p><?= $enJson['menu']['nav-elements']['Explorer'] ?></p>
                </div>
            </a>
            <a href="index.php?name=Subscriptions" class="menu-link">
                <div class="nav-item">
                    <img src="./front-end/assets/img/Menu-svg/sublogo.svg" alt="" srcset="" class="nav-logo" />
                    <p><?= $enJson['menu']['nav-elements']['Subscriptions'] ?></p>
                </div>
            </a>
        </div>

        <div class="border"></div>
        <div class="nav-items">
            <a href="index.php?name=Library" class="menu-link">
                <div class="nav-item">
                    <img src="./front-end/assets/img/Menu-svg/library.svg" alt="" srcset="" class="nav-logo" />
                    <p><?= $enJson['menu']['nav-elements']['Library'] ?></p>
                </div>
            </a>
            <a href="index.php?name=History" class="menu-link">
                <div class="nav-item">
                    <img src="./front-end/assets/img/Menu-svg/history.svg" alt="" srcset="" class="nav-logo" />
                    <p><?= $enJson['menu']['nav-elements']['History'] ?></p>
                </div>
            </a>
            <a href="index.php?name=WatchLater" class="menu-link">
                <div class="nav-item">
                    <img src="./front-end/assets/img/Menu-svg/watchlater.svg" alt="" srcset="" class="nav-logo" />
                    <p><?= $enJson['menu']['nav-elements']['WatchLaters'] ?></p>
                </div>
            </a>
            <a href="index.php?name=LikedVideo" class="menu-link">
                <div class="nav-item">
                    <img src="./front-end/assets/img/Menu-svg/like.svg" alt="" srcset="" class="nav-logo" />
                    <p><?= $enJson['menu']['nav-elements']['LikedVideos'] ?></p>
                </div>
            </a>
            <div class="nav-item">
                <img src="./front-end/assets/img/Menu-svg/angle-down-solid.svg" alt="" srcset="" class="nav-logo" />
                <p>More</p>
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

        <div class="nav-items menu-footer">
            <div class="border"></div>
            <div class="links">
                <div class="primary-guide-links">
                    
                    <a class="menu-text-footer" href="https://about.youtube/"><?= $enJson['menu']['footer']['About'] ?></a>
                    <a class="menu-text-footer" href="https://blog.youtube/"><?= $enJson['menu']['footer']['Press'] ?></a>
                    <a class="menu-text-footer" href="https://www.youtube.com/howyoutubeworks/policies/copyright/"><?= $enJson['menu']['footer']['Copyright'] ?></a>
                    <a class="menu-text-footer" href="https://www.youtube.com/t/contact_us/"><?= $enJson['menu']['footer']['Contact us'] ?></a>
                    <a class="menu-text-footer" href="https://www.youtube.com/creators/"><?= $enJson['menu']['footer']['Creators'] ?></a>
                    <a class="menu-text-footer" href="https://www.youtube.com/ads/"><?= $enJson['menu']['footer']['Advertise'] ?></a>
                    <a class="menu-text-footer" href="https://developers.google.com/youtube"><?= $enJson['menu']['footer']['Developers'] ?></a>
                    <a class="menu-text-footer" href="https://support.google.com/youtube/contact/FR_Complaints"><?= $enJson['menu']['footer']['Report hateful content under LCEN'] ?></a>
                
                </div>
                
                <div class="secondary-guide-links">

                    <a class="menu-text-footer" href="https://www.youtube.com/t/terms"><?= $enJson['menu']['footer']['Terms'] ?></a>
                    <a class="menu-text-footer" href="https://policies.google.com/privacy?hl=en"><?= $enJson['menu']['footer']['Privacy'] ?></a>
                    <a class="menu-text-footer" href="https://www.youtube.com/howyoutubeworks/policies/community-guidelines/"><?= $enJson['menu']['footer']['Policy & Safety'] ?></a>
                    <a class="menu-text-footer" href="https://www.youtube.com/howyoutubeworks/?utm_campaign=ytgen&utm_source=ythp&utm_medium=LeftNav&utm_content=txt&u=https%3A%2F%2Fwww.youtube.com%2Fhowyoutubeworks%3Futm_source%3Dythp%26utm_medium%3DLeftNav%26utm_campaign%3Dytgen"><?= $enJson['menu']['footer']['How YouTube works'] ?></a>
                    <a class="menu-text-footer" href="https://www.youtube.com/new"><?= $enJson['menu']['footer']['Test new features'] ?></a>  
                
                </div>

            </div>
            
        </div>
        <a class="menu-text-footer copyright">
                <?= $enJson['menu']['footer']['copyright'] ?>
        </a>
    </div>
</div>

<?php $menu = ob_get_clean() ?>