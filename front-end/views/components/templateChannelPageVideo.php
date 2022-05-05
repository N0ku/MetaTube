<div class="home-video-content">
    <a href="index.php?name=Watch&id=<?= $vids[$i]->id ?>" >
      <img src="data:image/png;base64,<?= $vids[$i]->thumbnail ?>"  alt="thumbnail" class="thumbnail" />
      <div class="below-content">
         <div class="below-content-img">
         </div>
         <div class="below-content-text">
            <strong class="video-title"><?= $vids[$i]->title?></strong>
            <div class="video-infos">
               <p class="video-number-views"><?= $vids[$i]->viewNumber?></p>
            </div>
         </div>
      </div>
   </div>
