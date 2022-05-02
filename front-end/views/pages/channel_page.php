<?php ob_start() ?>

<body>

<div class="feature-channel-flex-container">

<div class="feature-channel-flex-items">
<div class="custom-file-channel">
            <label for="avatar" class="label-file"><?= $enJson['form']['register']['labelProfile'] ?></label>
            <input accept="image/png, image/jpeg, image/webp, image/svg" type="file" name="avatar" id="avatar" class="input-file" value="">
            <img class="previewProfile"  src="/front-end/assets/img/Logo/Banner.svg">
         </div>
</div>

<div class="feature-channel-flex-items">
   

   <div class="feature-channel-navigation-container">

      <div class="feature-channel-navigation-container-zone1">

         <div class="feature-channel-navigation-container-profil">

            <div class="feature-channel-navigation-container-profilPicture">
               <button>
                  <img class="img-profile-channel" src="<?php echo $enJson['creation']['Image'] ?>" alt="">
               </button>
            </div>
            <div class="feature-channel-navigation-userInformation">
               <h2>Name</h2>
               <h3>Follower</h3>
            </div>
         </div>
         <div class="feature-channel-navigation-optionChannelPage">
            <button class="feature-channel-btn-customChannel">CUSTOMIZE THE CHANNEL </button>
            <button class="feature-channel-btn-metaStudio">EDIT YOUR VIDEOS </button>
         </div>

      </div>
      <div class="feature-channel-navigation-container-zone2">
         <div></div>
         <div class="feature-channel-elements"><button class="feature-channel-btn-Home">
               <h3>
                  <?php echo $enJson['channel']['HomeSelection'] ?>
               </h3>
            </button> </div>
         <div class="feature-channel-elements"><button class="feature-channel-btn-Videos">
               <h3>
                  <?php echo $enJson['channel']['VideoSelection'] ?>
               </h3>
            </button></div>
         <div class="feature-channel-elements"><button class="feature-channel-btn-Playlists">
               <h3>
                  <?php echo $enJson['channel']['PlaylistsSelection'] ?>
               </h3>
            </button></div>
         <div class="feature-channel-elements"><button class="feature-channel-btn-Channels">
               <h3>
                  <?php echo $enJson['channel']['ChannelSelection'] ?>
               </h3>
            </button></div>
         <div class="feature-channel-elements"><button class="feature-channel-btn-AboutUs">
               <h3>
                  <?php echo $enJson['channel']['AboutUsSelection'] ?>
               </h3>
            </button></div>
         <div class="feature-channel-elements"><button class="feature-channel-btn-Locker">
               <h3>
                  <?php echo $enJson['channel']['LockerSelection'] ?>
               </h3>
            </button></div>
         <div></div>
         <div></div>
         <div></div>
      </div>



   </div>
</div>
<div class="feature-channel-separator"></div>

<div class="feature-channel-flex-container-item">   
<h3>Video Online</h3>
<div class="feature-channel-flex-items">
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
    
   </div>
   
   </div>

   </div>
   <div class="feature-channel-video-online">
      <button><?php echo $enJson['channel']['videoOnline'] ?></button>
      <button><img src="./assets/img/Channel/play.png" alt=""></button>
   </div>
   <div class="feature-channel-video-popular"><button><?php echo $enJson['channel']['popular'] ?></button</div>
   </div>
</div>

</body>
<script>
   const test = document.querySelector(".feature-channel-flex-items:nth-child(1)");
$('input[type="file"]').on('change', (e) => {
        let that = e.currentTarget
        if (that.files && that.files[0]) {
            let reader = new FileReader() 
            reader.onload = (e) => {
                $('.feature-channel-flex-items:nth-child(1)').css('backgroundImage','url(' + e.target.result +')')
                console.log(e.target.result)

            }
            reader.readAsDataURL(that.files[0])
            console.log(test)
            
        
        }
       
    }) </script>
<?php $pageName = ob_get_clean() ?>