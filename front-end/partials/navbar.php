<?php ob_start() ?>

<nav class="wrapper--navbar">
    <div class="box--navbar">
        <div class="navbar--side">
            <div class="hamburger-button-home" onclick="openMenu()">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
                    stroke-linecap="round" stroke-linejoin="round" class="navbar--logo">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </div>
            <button class="btn--logo--nav">
                <div class="header-menu">
                    <img src="./front-end/assets/img/Logo/LogoMetatube.svg" class="logo-header-menu" />
                </div>
            </button>
        </div>
        <div class="navbar--center">
            <input type="text" class="navbar__center__input"
                placeholder=" <?= $enJson['profile']['navBar']['placeolderSearch'] ?>" />
            <button class="navbar__center__search-btn">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
                    stroke-linecap="round" stroke-linejoin="round" class="navbar--logo">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </button>
        </div>
        <div class="navbar--side">
            <div class="btn--navbar--icon">
                <a href="/"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                        fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                        <polygon points="23 7 16 12 23 17 23 7"></polygon>
                        <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                    </svg></a>
            </div>
            <div class="btn--navbar--icon">
                <a href="/"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                        fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                    </svg></a>
            </div>
            <div class="btn--navbar--register">
                <a href="/login">Login</a>
            </div>
            <div class="dropdown">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzslQrjpEHSPbE3teWMa1qA8fUwgRlbg4bGA&usqp=CAU"
                    alt="" onclick="myFunction()" style="width: 60px; border-radius: 50%" class="dropbtn" />
                <div id="myDropdown" class="dropdown-content">
                    <div class="drop-profil">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzslQrjpEHSPbE3teWMa1qA8fUwgRlbg4bGA&usqp=CAU"
                            alt="" style="width: 60px; border-radius: 50%" />
                        <h3>UserName</h3>
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
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <?= $enJson['profile']['navBar']['buttonChannel'] ?>
                    </a>
                    <!-- LINK TO BUY A -->
                    <a href="/" class="drop-profil">
                        <div>
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                        <?= $enJson['profile']['navBar']['buttonSubscription'] ?>
                    </a>
                    <!-- LINK TO SIGN OUT -->
                    <a href="/" class="drop-profil">
                        <div>
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg>
                        </div>
                        <?= $enJson['profile']['navBar']['buttonSignOut'] ?>
                    </a>
                    <!-- LINK TO GO ON PROFIL -->
                    <a href="/profils" class="drop-profil">
                        <div>
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path
                                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                </path>
                            </svg>
                        </div>
                        <?= $enJson['profile']['navBar']['buttonAccount'] ?>
                    </a>
                    <!-- LINK TO DATA -->
                    <a href="/" class="drop-profil">
                        <div>
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                        </div>
                        <?= $enJson['profile']['navBar']['buttonData'] ?>
                    </a>
                    <hr />
                    <a href="/" class="drop-profil"><?= $enJson['profile']['navBar']['buttonRestricted'] ?></a>
                </div>
            </div>
        </div>
    </div>
</nav>
<script>
const dropprofil = document.getElementById("dropdown");

function myFunction() {
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