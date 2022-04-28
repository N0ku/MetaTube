<?php 
$title ="login";
ob_start() 
?><

 <div class="wrapper--register">
        <form class="form--register" action="hhttp://127.0.0.1:8081/actions/register_action" method="POST">
            <h2>Please fill the form to connect:</h2>
            <label for="username">Adress Email</label>
            <input
        
                class="input--register"
                type="text"
                placeholder="Address Email"
                id="mailLogin"
            />
            <label for="password">Password</label>
            <input class="input--register"
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
