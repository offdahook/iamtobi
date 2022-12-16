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
        <input type="submit" value="Registrieren" id="submit" name="submit"></input>
        <div class="create-account"><a href="login.php"><span>mit existierendem Account anmelden</span></a></div>
    </form>
</section>

<?php 
        include_once 'footer.php';
?>