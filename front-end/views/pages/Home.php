<?php ob_start();
$page_title = "Home"; ?>

<div class="home-videos-grid">
    <?php
    $allVideoJson = json_decode('');
    //foreach ($allVideoJson as $video) { 
    ?>

<script>
    $(function(){
        <?php
        if(isset($_SESSION['toastr']))
        {
            echo 'toastr.'.$_SESSION['toastr']['type'].'("'.$_SESSION['toastr']['message'].'", "'.$_SESSION['toastr']['title'].'")';
            unset($_SESSION['toastr']);
        }
        ?>          
    });
</script>

    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-video-content">
        <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail" />
        <div class="below-content">
            <div class="below-content-img">
                <img src="/front-end/assets/img/Home/sadkitty.gif" alt="" class="video-channel-img" />
            </div>
            <div class="below-content-text">
                <strong class="video-title">I'M THE TITLE OF THE VIDEO</strong>
                <p class="video-channel-name">Name of the chanel</p>
                <div class="video-infos">
                    <p class="video-number-views">200k views</p>
                    <p class="video-date">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>

    <?php
    //}
    ?>
</div>
<?php $pageName = ob_get_clean() ?>