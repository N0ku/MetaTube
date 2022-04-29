 <?php 
$title ="Register";
ob_start() ?>
<div>
        <form class="form--register" action="/back-end/actions/register_action.php" method="POST">
            <h2>Please fill the form to create an account :</h2>

            <label for="firstname">First Name</label>
            <input
                class="input--register"
                type="text"
                placeholder="First Name"
                id="firstname"
            />
            <p id="errorfirstname" class="error--register"></p>
            <label for="lastname">Last Name</label>
            <input
                class="input--register"
                type="text"
                placeholder="Last Name"
                id="lastname"
            />
            <p id="errorlastname" class="error--register"></p>
            <label for="dateofbirthday">Date of Birthday</label>
            <input
                class="input--register"
                type="date"
                id="dateofbirthday"
            />
            <p id="errordate" class="error--register"></p>
            <label for="email">Address Email</label>
            <input
                class="input--register"
                type="text"
                placeholder="Address Email"
                id="email"
            />
            <p id="erroremail" class="error--register"></p>
            <label for="password">Password</label>
            <input
                class="input--register"
                type="password"
                placeholder="Password"
                id="password"
            />
            <p id="errorpassword" class="error--register"></p>
            <label for="confirm-passord">Confirm Password</label>
            <input
                class="input--register"
                type="password"
                placeholder="Confirm Password"
                id="confirm-password"
            />
            <p id="errorconfirm" class="error--register"></p>
            <button class="btn--register">Register</button>
             <a href="/login">I have an account</a>
        </form>
    </div>
    <?php $content = ob_get_clean(); 