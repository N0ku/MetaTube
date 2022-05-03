<?php
   $title = "Profile";
   ob_start();
   if (!(isset($_SESSION['connect']) == true)) {
      header('Location: /index.php?name=Home');
   }
   ?>
<section id="pageprofile">
   <div class="headerprofile">
      <h2 id="titleProfile"><?= $enJson['profile']['page']['title'] ?></h2>
      <small><?= $enJson['profile']['page']['smallTitle'] ?> <?= $_SESSION['user']['email'] ?></small>
   </div>
   <hr class="division--part">
   <div class="accordion">
      <input type="radio" name="select" class="accordion-select" checked />
      <div class="accordion-title">
         <h2 class="underTitle"><?= $enJson['profile']['accordeon']['underTitle1'] ?></h2>
      </div>
      <div class="accordion-content">
         <div class="profile-info">
            <div class="profile-name">
               <?php if ($_SESSION['user']['profilePicture'] == "No photo") { ?>
               <img class="profile-user" src="/front-end//assets/img/default-user-img.jpeg" alt="" />
               <?php } else { ?>
               <img class="profile-user" src="data:image/png;base64,<?= $_SESSION['user']['profilePicture'] ?>" alt="">
               <?php } ?>
               <h2>
               <?= $_SESSION['user']['username'] ?>
               <h2>
            </div>
            <button class="btnprofile"><?= $enJson['profile']['accordeon']['buttonCreate'] ?></button>
         </div>
      </div>
      <input type="radio" name="select" class="accordion-select" />
      <div class="accordion-title">
         <h2 class="underTitle"><?= $enJson['profile']['accordeon']['underTitle2'] ?></h2>
      </div>
      <div class="accordion-content">
         <div class="profile-info">
            <div class="profilestools">
               <!-- UPDATE PASSWORD -->
               <div class="tools">
                  <?php include("front-end/partials/ModalUpdatePass.php"); ?>
               </div>
               <!-- DELETE YOUR ACCOUNT -->
               <div class="tools">
                  <?php include("front-end/partials/ModalDeleteAccount.php"); ?>
               </div>
               <div class="tools">
                  <?php include("front-end/partials/ModalUpdateUser.php"); ?>
               </div>
            </div>
         </div>
      </div>
      <input type="radio" name="select" class="accordion-select" />
      <div class="accordion-title">
         <h2 class="underTitle"><?= $enJson['profile']['accordeon']['underTitle3'] ?></h2>
      </div>
      <div class="accordion-content">
          <div class="profile-info">
            <div class="profilestools">
               <!-- UPDATE PASSWORD -->
               <div class="tools">
                 <?= $_SESSION['user']['username'] ?>
          
               </div>
               <!-- DELETE YOUR ACCOUNT -->
               <div class="tools">
                   <?= $_SESSION['user']['email'] ?>
            
               </div>
               <div class="tools">
                  <?= $_SESSION['user']['birthday'] ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<script>
   //TOASTR 
   $(function() {
      <?php
      if (isset($_SESSION['toastr'])) {
         echo 'toastr.' . $_SESSION['toastr']['type'] . '("' . $_SESSION['toastr']['message'] . '", "' . $_SESSION['toastr']['title'] . '")';
         unset($_SESSION['toastr']);
      }
      ?>
   });
</script>
<?php $pageName = ob_get_clean();
