<header >
    <div id = "footer_register">
        <script type="text/javascript" src="../javascript/regform.js"></script>

        <h1>Registration</h1>
        <ul>
            <li>Username should contain only digits, upper and lowercase letters and underscores</li>
            <li>Password must be at least 3 characters length</li>
            <li>The passwords must match</li>
        </ul>
        <form action="action_register.php" method="post">
            <input type="text" name="username" placeholder="username">
            <br>
            <input name="email" size="30" type="text" placeholder="email">
            <br>
            <input type="password" name="password" placeholder="password">
            <br>
            <input id="last_input" type="password" name="confirm" placeholder="confirm password">
            <br>
            <input type="button" value="Confirm"
                   onclick="return regform(this.form,
                            this.form.username,
                            this.form.email,
                            this.form.password,
                            this.form.confirm);">
            <input type="submit" name="cancel_btn" value="Cancel">
        </form>
    </div>
</header>