<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section id="search-page">
        <button onclick="displayFilter()" type="button" id="filter-button"><?php $enJson['search']['filter-button'] ?></button>
        <div id="search-page-content" class="row">
            <div id="filter-box" class="row">
                <div class="column filter-box-menu">
                    <h3 class="filter-box-title"><?php $enJson['search']['filter-box-title1'] ?></h3>
                    <a onclick="" class="filter-box-menu-button"><?php $enJson['search']['filter-box-menu-button1'] ?></a>
                    <a onclick="" class="filter-box-menu-button"><?php $enJson['search']['filter-box-menu-button2'] ?></a>
                    <a onclick="" class="filter-box-menu-button"><?php $enJson['search']['filter-box-menu-button3'] ?></a>
                    <a onclick="" class="filter-box-menu-button"><?php $enJson['search']['filter-box-menu-button4'] ?></a>
                </div>
                <div class="column filter-box-menu">
                    <h3 class="filter-box-title"><?php $enJson['search']['filter-box-title2'] ?></h3>
                    <a onclick="" class="filter-box-menu-button"><?php $enJson['search']['filter-box-menu-button5'] ?></a>
                    <a onclick="" class="filter-box-menu-button"><?php $enJson['search']['filter-box-menu-button6'] ?></a>
                    <a onclick="" class="filter-box-menu-button"><?php $enJson['search']['filter-box-menu-button7'] ?></a>
                </div>
                <div class="column filter-box-menu">
                    <h3 class="filter-box-title"><?php $enJson['search']['filter-box-title3'] ?></h3>
                    <a onclick="" class="filter-box-menu-button"><?php $enJson['search']['filter-box-menu-button8'] ?></a>
                    <a onclick="" class="filter-box-menu-button"><?php $enJson['search']['filter-box-menu-button9'] ?></a>
                    <a onclick="" class="filter-box-menu-button"><?php $enJson['search']['filter-box-menu-button10'] ?></a>
                    <a onclick="" class="filter-box-menu-button"><?php $enJson['search']['filter-box-menu-button11'] ?></a>
                </div>
            </div>
            <div class="column search-card">
                <div class="row">
                    <img src="./assets/img/kokomi.jpeg" class="video-img" alt="CUCUMBER POWER">
                    <div class="searchpage-description-side">
                        <h3 class="filter-box-title video-title"><?php $enJson['search']['filter-box-title'] ?></h3>
                        <p class="video-text video-watch-count"><?php $enJson['search']['video-watch-count'] ?></p>
                        <div class="row">
                            <img src="./assets/img/metatuber.jpeg" alt="channel icon" class="searchpage-channel-icon">
                            <p class="searchpage-channel-name"><?php $enJson['search']['searchpage-channel-name'] ?></p>
                        </div>
                        <p class="video-text video-description"><?php $enJson['search']['video-description'] ?></p>
                    </div>
                </div>
            </div>
            <div class="column search-card">
                <div class="row">
                    <img src="./assets/img/kokomi.jpeg" class="video-img" alt="CUCUMBER POWER">
                    <div class="searchpage-description-side">
                        <h3 class="filter-box-title video-title"><?php $enJson['search']['filter-box-title'] ?></h3>
                        <p class="video-text video-watch-count"><?php $enJson['search']['video-watch-count'] ?></p>
                        <div class="row">
                            <img src="./assets/img/metatuber.jpeg" alt="channel icon" class="searchpage-channel-icon">
                            <p class="searchpage-channel-name"><?php $enJson['search']['searchpage-channel-name'] ?></p>
                        </div>
                        <p class="video-text video-description"><?php $enJson['search']['video-description'] ?></p>
                    </div>
                </div>
            </div>
            <div class="column search-card">
                <div class="row">
                    <img src="./assets/img/kokomi.jpeg" class="video-img" alt="CUCUMBER POWER">
                    <div class="searchpage-description-side">
                        <h3 class="filter-box-title video-title"><?php $enJson['search']['filter-box-title'] ?></h3>
                        <p class="video-text video-watch-count"><?php $enJson['search']['video-watch-count'] ?></p>
                        <div class="row">
                            <img src="./assets/img/metatuber.jpeg" alt="channel icon" class="searchpage-channel-icon">
                            <p class="searchpage-channel-name"><?php $enJson['search']['searchpage-channel-name'] ?></p>
                        </div>
                        <p class="video-text video-description"><?php $enJson['search']['video-description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>