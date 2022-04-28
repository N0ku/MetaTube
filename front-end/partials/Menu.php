<?php ob_start() ?>

<div class="short-menu">
    <div class="sticky-menu">
        <div class="hamburger-button-home" onclick="openMenu()">
            <div class="lines">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
        <div class="short-menu-items">
            <a href="index.php?name=Home" class="menu-link">
                <div class="nav-item-short">
                    <img src="assets/img/Menu-svg/Home.svg" alt="" srcset="" class="nav-logo-short" />
                    <p>Home</p>
                </div>
            </a>
            <a href="index.php?name=Explorer" class="menu-link">
                <div class="nav-item-short">
                    <img src="assets/img/Menu-svg/compass.svg" alt="" srcset="" class="nav-logo-short" />
                    <p>Explorer</p>
                </div>
            </a>
            <a href="index.php?name=Subscriptions" class="menu-link">
                <div class="nav-item-short">
                    <img src="assets/img/Menu-svg/sublogo.svg" alt="" srcset="" class="nav-logo-short" />
                    <p>Subscriptions</p>
                </div>
            </a>
            <a href="index.php?name=Library" class="menu-link">
                <div class="nav-item-short">
                    <img src="assets/img/Menu-svg/library.svg" alt="" srcset="" class="nav-logo-short" />
                    <p>Library</p>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="hamburger-menu-container">
    <div class="header-menu">
        <div class="hamburger-button" onclick="closeMenu()">
            <div class="lines">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
        <img src="assets/img/Logo/LogoMetatube.svg" class="logo-header-menu" />
    </div>

    <div class="nav-body">
        <div class="nav-items">
            <a href="index.php?name=Home" class="menu-link">
                <div class="nav-item">
                    <img src="assets/img/Menu-svg/Home.svg" alt="" srcset="" class="nav-logo" />
                    <p>Home</p>
                </div>
            </a>
            <a href="index.php?name=Explorer" class="menu-link">
                <div class="nav-item">
                    <img src="assets/img/Menu-svg/compass.svg" alt="" srcset="" class="nav-logo" />
                    <p>Explorer</p>
                </div>
            </a>
            <a href="index.php?name=Subscriptions" class="menu-link">
                <div class="nav-item">
                    <img src="assets/img/Menu-svg/sublogo.svg" alt="" srcset="" class="nav-logo" />
                    <p>Subscriptions</p>
                </div>
            </a>
        </div>

        <div class="nav-items">
            <a href="index.php?name=Library" class="menu-link">
                <div class="nav-item">
                    <img src="assets/img/Menu-svg/library.svg" alt="" srcset="" class="nav-logo" />
                    <p>Library</p>
                </div>
            </a>
            <a href="index.php?name=History" class="menu-link">
                <div class="nav-item">
                    <img src="assets/img/Menu-svg/history.svg" alt="" srcset="" class="nav-logo" />
                    <p>History</p>
                </div>
            </a>
            <a href="index.php?name=WatchLater" class="menu-link">
                <div class="nav-item">
                    <img src="assets/img/Menu-svg/watchlater.svg" alt="" srcset="" class="nav-logo" />
                    <p>Watch Later</p>
                </div>
            </a>
            <a href="index.php?name=LikedVideo" class="menu-link">
                <div class="nav-item">
                    <img src="assets/img/Menu-svg/like.svg" alt="" srcset="" class="nav-logo" />
                    <p>Liked Videos</p>
                </div>
            </a>
            <div class="nav-item">
                <img src="assets/img/Menu-svg/angle-down-solid.svg" alt="" srcset="" class="nav-logo" />
                <p>More</p>
            </div>
        </div>
        <div class="menu-subscriptions">
            <strong class="title-subscriptions">
                SUBSCRIPTIONS
            </strong>
        </div>

        <div class="menu-subscriptions nav-items">
            <strong class="title-others">
                OTHERS YOUTUBE CONTENTS
            </strong>


        </div>

        <div class="nav-items">

        </div>

        <div class="nav-items menu-footer">
            <div class="links">
                <a class="menu-text-footer">link</a>
                <a class="menu-text-footer">link</a>
                <a class="menu-text-footer">link</a>
                <a class="menu-text-footer">link</a>
                <a class="menu-text-footer">link</a>
            </div>
            <a class="menu-text-footer copyright">
                © 2022 Metatubes -L1 Alt Cergy/Paris ❤️
            </a>
        </div>
    </div>
</div>

<?php $menu = ob_get_clean() ?>