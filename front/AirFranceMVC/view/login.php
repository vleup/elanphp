<section>
    <form action="security.php" id="login" method="post">
        <label for="email">Courriel</label>
        <input type="text" name="email">
        <label for="password">Mot de passe</label>
        <input type="password" name="password">
        <input type="submit" name="submitButton">
        
        <input type="hidden" value="<?= $csrf ?>" name="csrf_token">
    </form>
</section>