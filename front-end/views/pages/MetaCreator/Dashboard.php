<?php ob_start();?>

<div class="main-page">

    <div class="all-pages">

        <div class="title-header">

            <div class="page-title-container">

                <h1 class="title-channel-page"><?= $enJson['MetaCreator']['dashboard-title']?></h1>

                <div class="container-buttons">

                    <a class="btn1">
                        <button class="upload-btn">
                            <img src="../../../front-end/assets/img/MetaCreatorImg/logo-upload.svg" alt="upload-btn" class="upload-logo">
                        </button>
                    </a>

                    <a class="btn1">
                        <button class="golive-btn">
                            <img src="../../../front-end/assets/img/MetaCreatorImg/logo-go-live.svg" alt="upload-btn" class="upload-logo">
                        </button>
                    </a>
                    
                </div>

            </div>


        </div>

        <div class="channel">

            <div class="dashboard-cards">

                <div class="card-colomn">
                    
                    <div class="card-upload">

                        <div class="card-video-upload">

                            <div class="main-container-card">

                                <div class="img-card-upload">
                                    <img class="img-container" src="https://www.gstatic.com/youtube/img/creator/no_content_illustration_upload_video_v3_darkmode.svg" alt="img-video-upload">
                                </div>
                                <div class="p-container">
                                    <p class="p-txt-video-upload"><?= $enJson['MetaCreator']['dashboard-upload-video-p']?></p>
                                </div>
                                <div class="button-container">
                                    <button class="btn-upload">UPLOAD VIDEOS</button>
                                </div>

                            </div>

                        </div>

                    </div>
                
                </div>

            </div>

        </div>

    </div>

</div>

<?php $pageMeta = ob_get_clean() ?>