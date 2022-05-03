 <button class="buttonModale" onclick="document.getElementById('password').style.display='block'">Update password</button>
 
        
            

 <div id="password" class="modal" <?php if ($_SESSION['process'] == true) echo 'style = "display : block";' ?>>
    <form class="modal-content" enctype="multipart/form-data" id="form" method="post" action="/back-end/actions/UpdatePassword.php">
       <div class="close-form">
          <a onclick="document.getElementById('password').style.display='none'" class="close" title="Close Modal"><img src="./front-end/assets/img/Logo/x.svg" alt=""></a>

       </div>
       <div class="wrapper-part-profile">
          <div>
             <label class="label-form" for="password">Old Password</label>
             <input name="old-password" class="input--register" type="password" placeholder=" Your old password " id="old-password" />
          </div>

          <div>
             <label class="label-form" for="password">New Password</label>
             <input name="new-password" class="input--register" type="password" placeholder="New password" id="new-password" />
          </div>

          <div>
             <label class="label-form" for="password">Confirm password</label>
             <input name="confirm-password" class="input--register" type="password" placeholder="Confirm password" id="confirm-password" />
          </div>
       </div>

       <div class="backtoback">
          <button class="btn--register" id="update"><?= $enJson['form']['updatePass']['buttonUpdate'] ?></button>
       </div>
    </form>
 </div>

 <script>
    var data = [];
    data.push(document.getElementById('old-password'));
    data.push(document.getElementById('new-password'));
    data.push(document.getElementById('confirm-password'));
    form.addEventListener("keyup", function(e) {
       for (var i in data) {

          if (data[i].value != 0) {
             data[i].classList.remove("show-error-connection");
          }
       }
    });
    form.onsubmit = (e) => {
       for (var i in data) {
          if (data[i].value == 0) {
             e.preventDefault();
             data[i].placeholder = ('Put your ' + data[i].id);
             data[i].classList.add("show-error-connection");
          }
       }
       setTimeout(() => {
          $(function() {
             toastr.error('<?= $enJson['form']['error']['signup'] ?>', '');
          });
       }, 200);

    }
 </script>