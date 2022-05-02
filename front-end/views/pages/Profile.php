<?php 
   $title ="Profile";
   ob_start();
   if (!(isset($_SESSION['connect']) == true)){
    header('Location: /index.php?name=Home');

}
   ?>
<section id="pageprofile">
    <!-- BACKGOUND PART PROFILE -->
   <div class="backgroundprofile">
      <div class="profile-info">
         <img class="profile-user" src="<?= $_SESSION['user']['profilePicture'] ?>" alt="" >
         <div class="profile-name">
            <h2>
            <?= $_SESSION['user']['username'] ?>
            <h2>
         </div>
      </div>
   </div>
   <!-- TOOLS FOR USER  -->
   <div class="profilestools">
       <!-- UPDATE PASSWORD -->
      <div class="tools">
        <?php include("front-end/partials/ModalUpdatePass.php");?>
      </div>
      <!-- DELETE YOUR ACCOUNT -->
      <div class="tools">
          <?php include   ("front-end/partials/ModalDeleteAccount.php");?>
      </div>
      <div class="tools">
          <button class="buttonModale" >View advanced settings</button>
      </div>
      <!-- <div class="tools-info">
         <span><?= $_SESSION['user']['username'] ?></span>
         <span><?= $_SESSION['user']['years'] ?></span>
         <span><?= $_SESSION['user']['email'] ?></span>
         <span><?= $_SESSION['user']['premium'] ?></span>
      </div> -->
   </div>
</section>
<?php $pageName = ob_get_clean();