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
    <!-- <div class="spacer"></div> -->
        <h3>Login</h3>
        <input type="text" placeholder="user@domain.com" name="email" id="email" value="<?php echo $paramEmail;?>"></input>
        <input type="password" placeholder="Passwort" name="password" id="password">
            <div class="forgot-password">
                <a href="forgotpassword.php"><span>Passwort vergessen?</span></a>
            </div>
            <input type="submit" value="Log in" id="submit" name="submit"></input>
            <div class="create-account"><a href="register.php"><span>Noch nicht registriert?</span></a></div>
        </input>

    </form>
</section>

<?php 
        include_once 'footer.php';
?>