<section>
    <form action="?action=register" id="register" method="post">
        <label for="username">Nom d'utilisateur</label>
        <input type="text" name="username">
        <label for="email">Courriel</label>
        <input type="text" name="email">
        <label for="password1">Mot de passe</label>
        <input type="password" name="password1">
        <label for="password2">Confirmer mot de passe</label>
        <input type="password" name="password2">
        <input type="submit" id="submitButton">

        <input type="hidden" value="<?= $csrf ?>" name="csrf_token">
    </form>
</section>