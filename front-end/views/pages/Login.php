<?php 
$title ="login";
ob_start();
//require_once __DIR__ .'/../../../back-end/actions/login_action.php';
?>

 <div class="wrapper--register">
        <form class="form--register" action="/back-end/actions/login_action.php" method="POST">
            <h2>Please fill the form to connect:</h2>
            <?php if(isset($_SESSION['signup_error'])) { ?>
              <div style="color:red;">
                <?= $_SESSION['signup_error'] ?>
              </div>
            <?php 
                unset($_SESSION['signup_error']);
            } 
            ?>
            <label for="username">Adresse Email</label>
            <input
        
                class="input--register"
                type="text"
                placeholder="<?= $enJson['login']['form']['placeholderAdress'] ?>"
                id="mailLogin"
                name="username"
            />
            <label for="password"><?= $enJson['login']['form']['password'] ?></label>
            <input class="input--register"
                type="text"
                placeholder="Password"
                id="passwordLogin"
                name="password"
            />
            <input type="submit" id='submit' value='Connexion' >
            <br />
             <a href="index.php?name=Register"><?= $enJson['login']['form']['buttonToRegister'] ?></a>
        </form>
        <script>

        </script>
    </div>
<?php $pageName = ob_get_clean(); 
