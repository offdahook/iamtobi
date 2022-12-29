<?php 
    if(isset($_GET['email'])) {
        $paramEmail= $_GET["email"];
    }
    else {
        $paramEmail = "";
    }
    include_once 'header.php';
?>

<section id="login" class="center">    
    <form action="includes/login.inc.php" method="post">
        <h3>Login</h3>
        <input type="text" placeholder="user@domain.com" name="email" id="email" value="<?php echo $paramEmail;?>"></input>
        <input type="password" placeholder="Passwort" name="password" id="password">
            <div id="inside-input" class="text-link small-text"><a href="recoverpassword.php">Passwort vergessen?</a></div> 
        </input>         
        <input class="default-button color-primary small-text" type="submit" value="Log in" id="submit" name="submit"></input>
        <div class="text-link small-text "><a href="register.php">Noch nicht registriert?</a></div>
    </form>
</section>

<?php 
        include_once 'footer.php';
?>