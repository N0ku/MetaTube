<?php ob_start();?>

<div class="main-page">

    <div class="all-pages">

        <div class="title-header">

            <div class="page-title-container">

                <h1 class="title-channel-page">Channel dashboard</h1>

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



                    </div>
                
                </div>

            </div>

        </div>

    </div>

</div>

<?php $pageMeta = ob_get_clean() ?>