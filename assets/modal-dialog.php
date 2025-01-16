<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';

$first_name = "";
$surname = "";
$email = "";
$message = "";
$error = "";
$successful_send = "";
$message_class = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = $_POST["first_name"];
    $surname = $_POST["email"];
    $email = $_POST["surname"];
    $message = $_POST["message"];

    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $error = "Zprávu se nepodařilo odeslat. Prosím, napište platný email.";
        $message_class = "mail-error";
    }
    if($error === "") {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();                                
            $mail->Host       = '';         
            $mail->SMTPAuth   = true;                       
            $mail->Username   = '';         
            $mail->Password   = '';                   
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;
            
            $mail->CharSet = "UTF-8";
            $mail->Encoding = "base64";
        
            $mail->setFrom("");
            $mail->addAddress("");
            $mail->Subject = 'Zpráva z kontaktního formuláře na webu';
            $mail->Body    = "Jméno: {$first_name} {$surname}\nEmail klienta: {$email}\n\n{$message}\n\nEmail poslán z kontaktního formuláře na www.projekcestrouhal.cz.";
        
            $mail->send();
            $successful_send = "Zpráva byla úspěšně odeslána.";
            $message_class = "mail-success";
        } catch (Exception $e) {
            echo "Zpráva nebyla odeslána: ", $mail->ErrorInfo;
            $message_class = "mail-error";
        }
    }
}
?>

<!-- chybová hláška při odeslání zprávy -->
<?php if($error !== ""): ?>
    <div id="mail-error" class="container alert alert-dismissible fade show" role="alert" >
        <div class="row">
            <div class="col">
                <p><?= $error ?></p>
            </div>
            <div class="col-auto">
                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>

<!-- Hláška při úspěšném odeslání zprávy -->
<?php if($successful_send !== ""): ?>
    <div id="mail-success" class="container alert alert-dismissible fade show" role="alert">
        <div class="row">
            <div class="col">
                <p><?= $successful_send ?></p>
            </div>
            <div class="col-auto">
                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>

<!-- MODÁLNÍ DIALOG NA ODESÍLÁNÍ EMAILŮ -->
<div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="modal-contactLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-contactLabel">Napište nám!</h5>
                <button type="button" class="btn-lg close" data-bs-dismiss="modal" aria-label="Zavřít">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="recipient-firstname" class="col-form-label">Vaše křestní jméno:</label>
                            <input type="text" 
                                   name="first_name" 
                                   class="form-control" 
                                   id="recipient-firstname" 
                                   value="<?= $first_name ?>" 
                                   placeholder="Jméno" 
                                   required>
                        </div>
                        <div class="form-group col-6">
                            <label for="recipient-surname" class="col-form-label">Vaše příjmení:</label>
                            <input type="text" 
                                   name="email" 
                                   class="form-control" 
                                   id="recipient-surname" 
                                   value="<?= $surname ?>" 
                                   placeholder="Příjmení" 
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="recipient-email" class="col-form-label">Váš email:</label>
                        <input type="email" 
                               name="surname" 
                               class="form-control" 
                               id="recipient-email" 
                               value="<?= $email ?>" 
                               placeholder="email@email.cz" 
                               required>
                    </div>

                    <?php if($error !== ""): ?>
                    <div class="modal-mail-error">
                        <p><?= $error ?></p>
                    </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="message" class="col-form-label">Zpráva: </label>
                        <textarea class="form-control" 
                                  name="message" 
                                  id="message" 
                                  placeholder="Zpráva" 
                                  rows="5" 
                                  required><?= $message ?></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit">Odeslat zprávu</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('whatever')
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
</script>

