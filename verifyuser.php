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

<section id="login" class="center">     
    <form action="includes/verifyuser.inc.php" method="post">
        <h3>User verifizieren</h3>
        <input type="text" placeholder="user@domain.com" name="email" id="email" value="<?php echo $paramEmail;?>"></input>
        <input type="text" placeholder="Verifizierungs-Code eingeben" name="verificationcode" id="verificationcode" value="<?php echo $paramCode;?>">
        <input type="submit" value="Verifizieren" id="submit" name="submit"></input>
        <div class="text-link small-text "><a href="login.php?email=<?php echo $paramEmail;?>">Bereits registriert?</a></div>
    </form>
</section>

<?php 
        include_once 'footer.php';
?>