<button class="buttonModale" onclick="document.getElementById('update--form').style.display='block';" >View advanced settings</button>


<div id="update--form" class="modal">
    <form class="modal-content" enctype="multipart/form-data"  id="form" method="post" action="/back-end/actions/update_user.php">
        <div class="close-form">
            <a href="/index.php?name=Profile"><img src="./front-end/assets/img/Logo/x.svg" alt=""></a>
</div>
        <table>
        <tr>
                   <td >
                       <span>Your Username : </span>
                    </td>
                    <td>
                     <span>
                        <?= $_SESSION['user']['username'] ?> </span>
                       
                    </td>
                    <td> <input name="username" class="input--register" type="text" />
                    </td>
                </tr>
               <tr>
                   <td >
                       <span>Your Email : </span>
                    </td>
                    <td>
                     <span>
                        <?= $_SESSION['user']['email'] ?> </span>
                       
                    </td>
                    <td><input name="email" class="input--register" type="text" placeholder="New email" id="password"/>
                    </td>
                </tr>
                <tr>
                   <td >
                       <span>Your Birthday : </span>
                    </td>
                    <td>
                     <span>
                        <?= $_SESSION['user']['birthday'] ?> </span>
                       
                    </td>
                    <td> <input name="dateBirth" class="input--register" type="date" id="dateofbirthday" />
                    </td>
                </tr>
        </table>
        
               <div class="backtoback">
                  <button class="btn--register" id="update">Update your profile</button>
               </div>
            </form>
</div>
<script>
    

    

   $('input[type="file"]').on('change', (e) => {
      let that = e.currentTarget
      if (that.files && that.files[0]) {
         let reader = new FileReader()
         reader.onload = (e) => {
            $('#previewProfile').attr('src', e.target.result)
         }
         reader.readAsDataURL(that.files[0])
      }
   })

   

</script>

