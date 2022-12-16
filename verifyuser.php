<?php 
    if(isset($_GET['email'])) {
        $paramEmail= $_GET["email"];
    }
    else {$paramEmail = "";}
    if(isset($_GET['code'])) {
        $paramCode= $_GET["code"];
    }
    else {
        $paramCode = "";
    }
    include_once 'header.php';
?>

<div class="spacer"></div>

<section id="login" class="center">     
    <form action="includes/verifyuser.inc.php" method="post">
        <h3>User verifizieren</h3>
        <input type="text" placeholder="user@domain.com" name="email" id="email" value="<?php echo $paramEmail;?>"></input>
        <input type="text" placeholder="Verifizierungs-Code eingeben" name="verificationcode" id="verificationcode" value="<?php echo $paramCode;?>">
            <div class="forgot-password">
                <a href="#"><span>Keinen Code bekommen? Erneut senden.</span></a>
            </div>
            <input type="submit" value="Verify" id="submit" name="submit"></input>
            <div class="create-account"><a href="login.php?email=<?php echo $paramEmail;?>"><span>Bereits registriert?</span></a></div>
        </input>

    </form>
</section>

<?php 
        include_once 'footer.php';
?>