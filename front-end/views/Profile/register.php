 <?php 
$title ="Register";
ob_start() ?>
<div>
        <form class="form--register" action="/back-end/actions/register_action.php" method="POST">
            <h2>Please fill the form to create an account :</h2>

            <label for="firstname"><?= $enJson['register']['form']['labelFirstName'] ?></label>
            <input
                class="input--register"
                type="text"
                placeholder="<?= $enJson['register']['form']['placeholderFirstName'] ?>"
                id="firstname"
            />
            <label for="lastname"><?= $enJson['register']['form']['labellastName'] ?></label>
            <input
                class="input--register"
                type="text"
                placeholder="<?= $enJson['register']['form']['placeholderLastName'] ?>"
                id="lastname"
            />
            <label for="dateofbirthday"><?= $enJson['register']['form']['labelBirthday'] ?></label>
            <input
                class="input--register"
                type="date"
                id="dateofbirthday"
            />
            <label for="email"><?= $enJson['register']['form']['labelAdress'] ?></label>
            <input
                class="input--register"
                type="text"
                placeholder="<?= $enJson['register']['form']['placeholderAdress'] ?>"
                id="email"
            />
            <label for="password"><?= $enJson['register']['form']['labelPassword'] ?></label>
            <input
                class="input--register"
                type="password"
                placeholder="<?= $enJson['register']['form']['placeholderPassword'] ?>"
                id="password"
            />
            <label for="confirm-passord"><?= $enJson['register']['form']['labelConfirmPassword'] ?></label>
            <input
                class="input--register"
                type="password"
                placeholder="<?= $enJson['register']['form']['placeholderConfirmPassword'] ?>"
                id="confirm-password"
            />
            <button class="btn--register"><?= $enJson['register']['form']['buttonRegister'] ?></button>
             <a href="/login"><?= $enJson['register']['form']['buttonToLogin'] ?></a>
        </form>
    </div>
    <?php $content = ob_get_clean(); 