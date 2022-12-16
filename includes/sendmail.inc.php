<?php
    function sendMailVerification ($firstname, $lastname, $email, $mailVerificationCode){
        $to = $email;
        $subject = "Your Registration on iamtobi.de: Please verify your E-Mail";

        $message = "
            <html>
                <head>
                    <style>
                        strong{
                            font-weight:600px;
                        }
                        p {
                            padding:5px 0px;
                        }
                        code {
                            font-family: font-family: Arial, Helvetica, sans-serif;
                            font-size: 1.25 rem;
                            color: blue;
                        }
                    </style>
                    <title>Your Registration on iamtobi.de: Please verify your E-Mail</title>
                </head>
                <body>
                    <p>
                        Hello <strong>$firstname</strong>,<br>
                        please verify your E-Mail on iamtobi.de.<br><br>
                        <code>Your Code: $mailVerificationCode</code><br><br>
                        <a href='https://login.iamtobi.de/verifyuser.php?email=$email&code=$mailVerificationCode'><button>Click to verify</button></a><br><br>
                        Thank you and have fun!<br>

                        <strong>Notice: Your Registration will be canceled in 24 hours, if you don't verify the E-Mail.</strong>
                    </p>
                </body>
            </html>
        ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers. From is required, rest other headers are optional
        $headers .= 'From: <registration@iamtobi.de>' . "\r\n";

        mail($to,$subject,$message,$headers);
    }

?>