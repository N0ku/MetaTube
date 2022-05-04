<div class="feature-channel-flex-container-item" >
      <h3>Video Online</h3>
      <?php include "./front-end/views/components/video.php" ?>
   </div>
   <div class="feature-channel-video-online">
      <button><?php echo $enJson['channel']['videoOnline'] ?></button>
      <button><img src="./assets/img/Channel/play.png" alt=""></button>
      <?php include "./front-end/views/components/video.php" ?>
   </div>
   <div class="feature-channel-video-popular">
      <button><?php echo $enJson['channel']['popular'] ?></button>
      <?php include "./front-end/views/components/video.php" ?>
   </div>