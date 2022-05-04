<?php ob_start();  ?>

<div class="main-page">

    <div class="all-pages">

        <div class="title-header">

            <div class="page-title-container">

                <h1 class="title-channel-page">Channel dashboard</h1>
                <a href="index.php?name=MetaCreator&link=Content"><h2>link to content page (test)</h2></a>

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

        </div>

    </div>

</div>

<?php $pageMeta = ob_get_clean() ?>