<button class="buttonModale" onclick="document.getElementById('delete').style.display='block'">Delete Account</button>

<div id="delete" class="modal">
  <span onclick="document.getElementById('delete').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Delete Account</h1>
      <p>Are you sure you want to delete your account?</p>

      <div class="clearfix">
        <button type="button" class="cancelbtn" onclick="document.getElementById('delete').style.display='none'" >Cancel</button>
        <button type="button" class="deletebtn" onclick="document.getElementById('delete').style.display='none'">Delete</button>
      </div>
    </div>
  </form>
</div>