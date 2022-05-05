<?php ob_start();

include_once './back-end/actions/ContentBack.php';

$vids = getVids($_SESSION['channel'][0]->channelId);
?>

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

   
    <?php for ($i = 0; $i < count($vids); $i++) { ?>
    <?php include "./front-end/views/components/templateMetaCreatorVideo.php"?>
      

    <?php } ?>  
    </div>
   
 




<?php $pageMeta = ob_get_clean(); ?>