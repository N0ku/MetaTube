<?php
if ($_SESSION["srch_cntnt"] == null) {
   $_SESSION["srch_cntnt"] = "";
}
ob_start() ?>
<nav class="wrapper--navbar">
    <div class="box--navbar">
        <div class="navbar--side">
            <div class="hamburger-button-home" onclick="openMenu()">
                <img src="./front-end/assets/img/Logo/menu.svg" alt="">
            </div>
            <button class="btn--logo--nav">
                <div class="header-menu">
                    <img src="./front-end/assets/img/Logo/meta.svg" class="logo-header-menu" />
                </div>
            </button>
        </div>
        <form method="POST" action="./back-end/actions/filters.php" class="navbar--center">
            <input type="text" name="searchBar" class="navbar__center__input" value=" <?= $_SESSION["srch_cntnt"] ?>"
                placeholder=" <?= $enJson['profile']['navBar']['placeolderSearch'] ?>" />
            <button class="navbar__center__search-btn" onclick="window.location.href = 'index.php?name=SearchPage';">
                <img src="./front-end/assets/img/Logo/search.svg" alt="">

            </button>
        </form>

        <div class="navbar--side">
            <div class="btn--navbar--icon">
                <a>
                    <img src="./front-end/assets/img/Logo/video.svg" alt="">
                </a>
            </div>
            <div class="btn--navbar--icon">
                <a href="/">
                    <img src="./front-end/assets/img/Logo/bell.svg" alt="">
                </a>
            </div>
            <?php if (empty($_SESSION['user'])) { ?>
            <div class="btn--navbar--register">
                <a href="index.php?name=Login">Login</a>
            </div>
            <?php } else { ?>
            <div class="dropdown">
                <img src="<?= $_SESSION['user']['profilePicture'] ?>" alt="" onclick="OpenTheDoor()" class="dropbtn" />
                <div id="myDropdown" class="dropdown-content">
                    <div class="drop-profil">
                        <img src="<?= $_SESSION['user']['profilePicture'] ?>" alt="" class="dropbtn" />
                        <h3><?= $_SESSION['user']['username'] ?></h3>
                    </div>
                    <hr />
                    <div class="drop-profil">
                        <label class="switch">
                            <span class="switch__span"><?= $enJson['profile']['navBar']['labelThemeDark'] ?> </span>
                            <input class="switch__input" type="checkbox" />
                            <i class="switch__icon"></i>
                            <span class="switch__span"><?= $enJson['profile']['navBar']['labelThemeBright'] ?></span>
                        </label>
                    </div>
                    <!-- LINK TO CHANNEL -->
                    <a href="/" class="drop--element">
                        <div>
                            <img src="./front-end/assets/img/Logo/link.svg" alt="">
                        </div>
                        <?= $enJson['profile']['navBar']['buttonChannel'] ?>
                    </a>
                    <!-- LINK TO BUY A -->
                    <a href="/" class="drop-profil">
                        <div>
                            <img src="./front-end/assets/img/Logo/dollar-sign.svg" alt="">
                        </div>
                        <?= $enJson['profile']['navBar']['buttonSubscription'] ?>
                    </a>
                    <!-- YOUTUBE STUDIO -->
                    <a href="/" class="drop-profil">
                        <div>
                            <img src="./front-end/assets/img/Logo/tv.svg" alt="">
                        </div>
                        <?= $enJson['profile']['navBar']['buttonStudio'] ?>
                    </a>
                    <!-- LINK TO SIGN OUT -->
                    <a href="/back-end/actions/disconnect.php" class="drop-profil">
                        <div>
                            <img src="./front-end/assets/img/Logo/log-out.svg" alt="">
                        </div>
                        <?= $enJson['profile']['navBar']['buttonSignOut'] ?>
                    </a>
                    <!-- LINK TO GO ON PROFIL -->
                    <a href="index.php?name=Profile" class="drop-profil">
                        <div>
                            <img src="./front-end/assets/img/Logo/user.svg" alt="">
                        </div>
                        <?= $enJson['profile']['navBar']['buttonAccount'] ?>
                    </a>
                    <!-- LINK TO DATA -->
                    <a href="/" class="drop-profil">
                        <div>
                            <img src="./front-end/assets/img/Logo/database.svg" alt="">
                        </div>
                        <?= $enJson['profile']['navBar']['buttonData'] ?>
                    </a>
                    <hr />
                    <a href="/" class="drop-profil"><?= $enJson['profile']['navBar']['buttonRestricted'] ?></a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</nav>
<script>
const dropprofil = document.getElementById("dropdown");

function OpenTheDoor() {
    document.getElementById("myDropdown").classList.toggle("show");
}

//Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches(".dropbtn")) {
        const dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            const openDropdown = dropdowns[i];
            if (openDropdown.classList.contains("show")) {
                openDropdown.classList.remove("show");
            }
        }
    }
};
</script>
<?php $navBar = ob_get_clean();