<?php ob_start();

include_once './back-end/actions/ContentBack.php';

$vids = getVids($_SESSION['channel'][0]->channelId);
?>

<div class="feature-channel-flex-container">
    <div class="feature-channel-flex-items">
        <div class="feature-channel-custom-file">
            <label for="banner" class="feature-channel-label-test"><img class="feature-channel-label-img"
                    src="<?php echo $enJson['creation']['Image'] ?>" alt=""> </label>
            <input accept="image/png, image/jpeg, image/webp, image/svg" type="file" name="banner" id="banner"
                class="feature-channel-input-banner" value="">
        </div>
    </div>
    <div class="feature-channel-flex-items">
        <div class="feature-channel-navigation-container">
            <div class="feature-channel-navigation-container-zone1">
                <div class="feature-channel-navigation-container-profil">
                    <div class="feature-channel-navigation-container-profilPicture">
                        <button class="label-file">
                             <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' name="" id="profileChannel" accept=".png, .jpg, .jpeg" />
                                    <label for="profileChannel"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="profileChannelPreview" class="img-profile-channel">
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="feature-channel-navigation-userInformation">
                        <h2>Name</h2>
                        <h3>Follower</h3>
                    </div>
                </div>
                <div class="feature-channel-navigation-optionChannelPage">
                    <button class="feature-channel-btn-customChannel">CUSTOMIZE THE CHANNEL <href="index.php?name=ChannelPage"></button>
                    <button href="index.php?name=MetaCreator" class="feature-channel-btn-metaStudio">EDIT YOUR VIDEOS
                    </button>
                </div>
            </div>
            <div class="feature-channel-navigation-container-zone2">
                <div></div>
                <div class="feature-channel-elements">
                    <button class="feature-channel-btn-Home tablinks" onclick="openCity(event, 'Home')"
                        id="defaultOpen">
                        <h3>
                            <?php echo $enJson['channel']['HomeSelection'] ?>
                        </h3>
                    </button>
                </div>
                <div class="feature-channel-elements">
                    <button class="feature-channel-btn-Videos tablinks" onclick="openCity(event, 'Videos')">
                        <h3>
                            <?php echo $enJson['channel']['VideoSelection'] ?>
                        </h3>
                    </button>
                </div>
                <div class="feature-channel-elements">
                    <button class="feature-channel-btn-Playlists tablinks" onclick="openCity(event, 'Playlists')">
                        <h3>
                            <?php echo $enJson['channel']['PlaylistsSelection'] ?>
                        </h3>
                    </button>
                </div>
                <div class="feature-channel-elements">
                    <button class="feature-channel-btn-Channels tablinks" onclick="openCity(event, 'Channel')">
                        <h3>
                            <?php echo $enJson['channel']['ChannelSelection'] ?>
                        </h3>
                    </button>
                </div>
                <div class="feature-channel-elements">
                    <button class="feature-channel-btn-AboutUs tablinks" onclick="openCity(event, 'Abouts')">
                        <h3>
                            <?php echo $enJson['channel']['AboutUsSelection'] ?>
                        </h3>
                    </button>
                </div>
                <div class="feature-channel-elements">
                    <button class="feature-channel-btn-Locker">
                        <h3>
                            <?php echo $enJson['channel']['LockerSelection'] ?>
                        </h3>
                    </button>
                </div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <div class="feature-channel-separator"></div>
</div>
<section class="tabcontent" id="Home">
    <?php include "./front-end/partials/ChannelHome.php" ?>
</section>
<section class="tabcontent" id="Videos">
    <?php include "./front-end/partials/ChannelVideos.php" ?>
</section>
<section class="tabcontent" id="Playlists">
    <?php include "./front-end/partials/ChannelPlaylists.php" ?>
</section>
<section class="tabcontent" id="Channel">
    <?php include "./front-end/partials/ChannelChannel.php" ?>
</section>
<section class="tabcontent" id="Abouts">
    <?php include "./front-end/partials/ChannelAbout.php" ?>
</section>

<script>

const test = document.querySelector(".feature-channel-flex-items:nth-child(1)");
console.log(test)
$('#banner').on('change', (e) => {
    let that = e.currentTarget
    if (that.files && that.files[0]) {
        let reader = new FileReader()
        reader.onload = (e) => {
            $('.feature-channel-flex-items:nth-child(1)').css('backgroundImage', 'url(' + e.target.result +
                ')')
        }
        reader.readAsDataURL(that.files[0])


    }

})
$('#profileChannel').on('change', (e) => {
    let that = e.currentTarget
    if (that.files && that.files[0]) {
        let reader = new FileReader()
        reader.onload = (e) => {
            $('#profileChannelPreview').css('backgroundImage', 'url(' + e.target.result +
                ')')

        }
        reader.readAsDataURL(that.files[0])
    }

})


function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<?php $pageName = ob_get_clean() ?>