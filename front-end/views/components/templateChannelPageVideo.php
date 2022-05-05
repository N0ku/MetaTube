<div class="home-video-content">
      <img src="data:image/png;base64,<?= $vids[$i]->thumbnail ?>"  alt="thumbnail" class="thumbnail" />
      <div class="below-content">
         <div class="below-content-img">
         </div>
         <div class="below-content-text">
            <strong class="video-title"><?= $vids[$i]->title?></strong>
            <p class="video-channel-name"><?= $vids[$i]->creator?></p>
            <div class="video-infos">
               <p class="video-number-views"><?= $vids[$i]->viewNumber?></p>
               <p class="video-date"><?= $vids[$i]->Date?></p>
            </div>
         </div>
      </div>
   </div>
