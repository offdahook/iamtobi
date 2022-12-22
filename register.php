<?php 
    include_once 'header.php';
?>

<section id="login" class="center">    
    <form action="includes/register.inc.php" method="post">    
        <h3>Register</h3>
        <input type="text" placeholder="Vorname" name="firstname" id="firstname"></input>
        <input type="text" placeholder="Nachname" name="lastname" id="lastname"></input>
        <input type="text" placeholder="Username" name="username" id="username"></input>
        <input type="text" placeholder="user@domain.com" name="email" id="email"></input>
        <input type="password" placeholder="Passwort" name="password" id="password"></input>
        <input class="default-button color-primary small-text" type="submit" value="Registrieren" id="submit" name="submit"></input>
        <div class="text-link small-text "><a href="login.php">mit existierendem Account anmelden</a></div>
    </form>
</section>

<?php 
        include_once 'footer.php';
?>