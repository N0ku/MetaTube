const page = document.querySelector('.home-video-grid');
const pageContent = document.querySelector('.page-content');

const grid = `
    <? php
    for ($i = 0; $i < count($vids); $i++) {
    $creator = getCreator($vids[$i] -> creator);

    ?>
    <a href="index.php?name=Watch&id=<?= $vids[$i]->id ?>" class="video-link-home">
        <div class="home-video-content">
            <img src="data:image/png;base64,<?= $vids[$i]->thumbnail ?>" alt="thumbnail" class="thumbnail" />
            <div class="below-content">
                <div class="below-content-img">
                    <img src="data:image/png;base64,<?= $creator[0]->channelProfilePicture ?>" alt=""
                        class="video-channel-img" />
                </div>
                <div class="below-content-text">
                    <strong class="video-title"><?= $vids[$i]->title ?></strong>
                    <p class="video-channel-name"><?= $creator[0]->channelName; ?></p>
                    <div class="video-infos">
                        <p class="video-number-views"><?= $vids[$i]->viewNumber ?></p>
                        <p class="video-date"><?= $vids[$i]->date ?></p>
                    </div>
                </div>
            </div>
        </div>
    </a>

    <?php }?>`;

    /* 
    const grid = document.querySelector('.home-video-grid');
    
    */

function loadGrid() {
    page.appendChild(grid);
}

pageContent.addEventListener('scroll', evt => {
    var scrollPosY = evt.target.scrollTop;
    var pageHeight = page.offsetHeight;
    var heightPourcent = (scrollPosY * 7) / pageHeight * 100;
    if (heightPourcent > 80) {
        console.log("RATIO SUP A 80%")
        loadGrid();
    }
});