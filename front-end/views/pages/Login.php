<?php
$title = "login";
ob_start();
//require_once __DIR__ .'/../../../back-end/actions/login_action.php';
?>

<?php if (isset($_SESSION['connect']) == true) {
    header('Location: /index.php?name=Home');
} ?>
<div class="backform"></div>

<div class="wrap--form" style="margin-top: 100px">

    <form class="form--register" action="/back-end/actions/LoginAction.php" id="form" method="POST">
        <div class="close-form">
            <a href="/index.php?name=Home"><img src="./front-end/assets/img/Logo/x.svg" alt=""></a>

        </div>
        <h2><?= $enJson['form']['login']['titleLogin'] ?></h2>
        <?php if (isset($_SESSION['signup_error'])) { ?>
            <div style="color:red;">
                <?= $_SESSION['signup_error'] ?>
            </div>
        <?php
            unset($_SESSION['signup_error']);
        }
        ?>
        <label for="username"><?= $enJson['form']['login']['titleLogin'] ?></label>
        <input class="input--register" type="text" placeholder="<?= $enJson['form']['login']['adress'] ?>" id="mailLogin" name="username" />
        <label for="password"><?= $enJson['form']['login']['password'] ?></label>
        <input class="input--register" type="password" placeholder="<?= $enJson['form']['login']['placeholderPassword'] ?>" id="passwordLogin" name="password" />

        <input class="btn--register" type="submit" id='submit' value='<?= $enJson['form']['login']['buttonLogin'] ?>'>
        <div class="backtoback">
            <a href="index.php?name=Register"><?= $enJson['form']['login']['buttonToRegister'] ?></a>
        </div>

    </form>
</div>


<script>
    var data = [];
    data.push(document.getElementById('mailLogin'));
    data.push(document.getElementById('passwordLogin'));
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

                $(function() {
                    toastr.success('Hé, <b>ça marche !</b>', 'Test');
                });

            }

        }
    }
</script>
<?php $pageName = ob_get_clean();
