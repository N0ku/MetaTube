<?php
$title = "login";
ob_start()
?>
<div class="wrap--from">
    <form class="form--register" action="/back-end/actions/login_action" method="POST">
        <h2><?= $enJson['login']['form']['titleLogin'] ?></h2>
        <label for="mailLogin"><?= $enJson['login']['form']['adress'] ?></label>
        <input class="input--register" type="text" placeholder="<?= $enJson['login']['form']['placeholderAdress'] ?>" id="mailLogin" />
        <label for="password"><?= $enJson['login']['form']['password'] ?></label>
        <input class="input--register" type="password" placeholder="<?= $enJson['login']['form']['placeholderPassword'] ?>" id="passwordLogin" />
        <button class="btn--register"><?= $enJson['login']['form']['buttonLogin'] ?></button>
        <br />
        <a href="index.php?name=Register"><?= $enJson['login']['form']['buttonToRegister'] ?></a>
    </form>
</div>
<?php $pageName = ob_get_clean();
