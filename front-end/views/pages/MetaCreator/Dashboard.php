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

                <div class="card-colomn">
                    
                    <div class="card-analytics">

                        <div class="card-analytics-container">

                            <div class="main-container-card">

                                <div class="elements-container-dashboard">

                                    <div class="final-container">

                                        <p class="title-analytics"><?= $enJson['MetaCreator']['analytic-title']?></p>

                                        <div class="container-p-analytics">

                                            <p class="txt-analytics"><?= $enJson['MetaCreator']['analytic-current-subscribers']?></p>
                                            <p>3</p>

                                        </div>
                                        <hr></hr>

                                    </div>

                                    <div class="summary-container">
                                        <p class="title-summary"><?= $enJson['MetaCreator']['summary-title'] ?></p>
                                        <p class=date-summary>Last 24 days</p>
                                    </div>

                                    <div class="whatch-time-container">
                                        <p class="views"><?= $enJson['MetaCreator']['views'] ?></p>
                                        <p class="watch-time"><?= $enJson['MetaCreator']['watch-time'] ?></p>
                                    </div>

                                    <hr></hr>
                                    <div class="top-videos-container">
                                        <p class="views"><?= $enJson['MetaCreator']['top-videos-title']?></p>
                                        <p class="date-summary">Last 48 hours · Views</p>
                                    </div>

                                    <button class="btn-upload">GOT TO THE CHANNEL ANALYTICS</button>


                                </div>

                        
                            </div>


                        </div>


                    </div>

                </div>

                <div class="card-colomn">
                    
                    <div class="card-analytics">

                        <div class="card-analytics-container">

                            <div class="main-container-card">

                                <div class="elements-container-dashboard">

                                    <p class="title-analytics"><?= $enJson['MetaCreator']['dashboard-recent-desc']?></p>
                                    <p class="date-summary">Lifetime</p>
                                    <button class="btn-upload">SEE ALL</button>
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