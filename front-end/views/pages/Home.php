<?php ob_start();

include_once './back-end/actions/Timeline.php';
$vids = getVids(12);
?>

<div class="home-videos-grid">
    <?php
    for ($i = 0; $i < count($vids); $i++) {
    ?>
        <a href="index.php?name=Watch&id=<?= $vids[$i]->id ?>" class="video-link-home">
            <div class="home-video-content">
                <img src="data:image/png;base64,<?= $vids[$i]->thumbnail ?>" alt="thumbnail" class="thumbnail" />
                <div class="below-content">
                    <div class="below-content-img">
                        <img src="data:image/png;base64,<?= $vids[$i]->channelProfilePicture ?>" alt="" class="video-channel-img" />
                    </div>
                    <div class="below-content-text">
                        <strong class="video-title"><?= $vids[$i]->title ?></strong>
                        <p class="video-channel-name"><?= $vids[$i]->channelName; ?></p>
                        <div class="video-infos">
                            <p class="video-number-views"><?= $vids[$i]->viewNumber ?></p>
                            <p class="video-date"><?= $vids[$i]->date ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </a>

    <?php
    }
    ?>
</div>
<?php $pageName = ob_get_clean() ?>