<div class="container">
    <main>

        <form action="index.php?module=user&action=auth" method="post">
            <label>Username
                <input type="text" name="username" required>
            </label>
            <label>Mot de passe
                <input type="password" name="password" required>
            </label>
            <input type="submit" value="Login">
        </form>
    </main>
</div>