<?php 
    include_once 'header.php';
?>

<section id="login" class="center">     
    <form>
        <h3>Password zurücksetzen</h3>
        <input type="text" placeholder="Registrierte E-Mail eingeben" name="email" id="email"></input>
        <input class="default-button color-primary small-text" type="submit" value="Passwort zurücksetzen" id="reset" name="reset"></input>
        <div class="text-link small-text "><a href="login.php">Zurück</a></div>
    </form>
</section>

<?php 
        include_once 'footer.php';
?>