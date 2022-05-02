 <button class="buttonModale" onclick="document.getElementById('password').style.display='block'">Update password</button>
         <div id="password" class="modal">
            <span onclick="document.getElementById('password').style.display='none'" class="close" title="Close Modal">&times;</span>
            <form class="modal-content" enctype="multipart/form-data"  id="form" method="post" action="/back-end/actions/update_password.php">
               
               <div class="wrapper-part-profile">
                  <div>
                     <label class="label-form" for="email"><?= $enJson['form']['updatePass']['labelAdress'] ?></label>
                     <input
                        name="email"
                        class="input--register"
                        type="email"
                        placeholder="<?= $enJson['form']['updatePass']['placeholderAdress'] ?>"
                        id="email"
                        />
                  </div>
                  <div>
                     <label class="label-form" for="password"><?= $enJson['form']['updatePass']['labelPassword'] ?></label>
                     <input
                        name="password"
                        class="input--register"
                        type="password"
                        placeholder="<?= $enJson['form']['updatePass']['placeholderPassword'] ?>"
                        id="password"
                        />
                  </div>
               </div>
               <div>
               </div>
               <div class="backtoback">
                  <button class="btn--register" id="update"><?= $enJson['form']['updatePass']['buttonUpdate'] ?></button>
               </div>
            </form>
         </div>