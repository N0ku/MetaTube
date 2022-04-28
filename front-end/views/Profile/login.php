<?php 
   $title ="login";
   ob_start() 
   ?>
<div>
   <form class="form--register" action="http://93.16.2.231:8081/back-end/actions/login_action" method="post">
      <h2>Please fill the form to connect:</h2>
      <label for="username">Adress Email</label>
      <input
         class="input--register"
         type="text"
         placeholder="Address Email"
         id="mailLogin"
         />
      <label for="password">Password</label>
      <input
         class="input--register"
         type="password"
         placeholder="Password"
         id="passwordLogin"
         />
      <button class="btn--register">Login</button>
      <br />
      <a href="/register">I don't have any account</a>
   </form>
</div>
<?php $content = ob_get_clean();