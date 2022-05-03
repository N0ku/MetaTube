<button class="buttonModale" onclick="document.getElementById('delete').style.display='block'">Delete Account</button>

<div id="delete" class="modal">
  
  <form class="modal-content" action="/back-end/actions/DeleteAccount.php">
    <span onclick="document.getElementById('delete').style.display='none'" class="close" title="Close Modal">&times;</span>
    <div class="container">
      <h1>Delete Account</h1>
      <p>Are you sure you want to delete your account?</p>

      <div class="clearfix">
        <button type="button" class="cancelbtn buttonModale" onclick="document.getElementById('delete').style.display='none'" >Cancel</button>
        <button type="button" class="deletebtn buttonModale" onclick="document.getElementById('delete').style.display='none'">Delete</button>
      </div>
    </div>
  </form>
</div>