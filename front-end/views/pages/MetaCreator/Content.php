<?php ob_start(); ?>
<div class="MetaStudio-content-global">
    <div class="MetaStudio-title">
        <h1 id="MetaStudio-title-h1">Content of the channel</h1>
    </div>
    <div class="MetaStudio-separator-rgb"></div>
    <div class="MetaStudio-selected-category">
        <div class="MetaStudio-selected-video">
            <h2 id="MetaStudio-selected-video-h2">Videos</h2>
        </div>
        <div class="MetaStudio-selected-commentary">
            <h2 id="MetaStudio-selected-commentary-h2">Commentary</h2>
        </div>
    </div>
    <div class="MetaStudio-filter-bar">
    <h2>FilterBar</h2>
    </div>
    <div class="MetaStudio-user-video-config">
        <h4 class="MetaStudio-videolist">Video</h4>
        <h4 class="MetaStudio-visibilitylist">Visibility</h4>
        <h4 class="MetaStudio-restrictionlist">Restriction</h4>
        <h4 class="MetaStudio-datelist">Date</h4>
        <h4 class="MetaStudio-viewlist">View</h4>
        <h4 class="MetaStudio-numbercommentarylist">Commentary</h4>
        <h4 class="MetaStudio-likelist">% Like</h4>




    </div>

    <div class="MetaStudio-user-video-template">
         <div class="MetaStudo-user-video-container">
         <div class="MetaStudo-user-video-this-video">
            <div class="home-video-content">
            <?php include "./front-end/views/components/templateMetaCreatorVideo.php" ?>
            </div>
         </div>
         <div class="MetaStudo-user-video-this-visibility">
         </div>
         <div class="MetaStudo-user-video-this-restriction"></div>
         <div class="MetaStudo-user-video-this-date"></div>
         <div class="MetaStudo-user-video-this-vues"></div>
         <div class="MetaStudo-user-video-this-commentary"></div>
         <div class="MetaStudo-user-video-this-like"></div>
    </div>

   
</div>


</div>

<?php $pageMeta = ob_get_clean();?>