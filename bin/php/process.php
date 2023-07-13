<?php



require '../../vendor/autoload.php';


$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP(); // enable SMTP

$errors = [];

if (!empty($_POST)) {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    if (empty($nom)) {
        $errors[] = 'Nom is empty';
    }
    if (empty($prenom)) {
        $errors[] = 'Prenom is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }
    if (empty($telephone)) {
        $errors[] = 'Telephone is empty';
    } else if (!preg_match('/^[0-9]{10}+$/', $telephone)) {
        $errors[] = 'Telephone is invalid';
    }

    if (empty($sujet)) {
        $errors[] = 'Sujet is empty';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
        
    }

    $message = $nom . ' ' . $prenom . '<br>Email: ' . $email . '<br> Telephone: ' . $telephone . '<br><br>' . $sujet. '<br>' . $message;

    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587; // or 587
    $mail->IsHTML(true);
    $mail->Username = "francoisphpmailer@gmail.com";
    $mail->Password = "zqchsxxqfotgulpn";
    $mail->setFrom($email, $nom . ' ' . $prenom); // L'adresse email et le nom de l'expéditeur
    $mail->Subject = $sujet; // Le sujet de l'email
    $mail->Body = $message; // Le contenu du corps de l'email
    $mail->AddAddress("fbretillon@outlook.com");
    
}
if (!empty($errors)) {
    $allErrors = join('<br/>', $errors);
    $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
}

if ($mail->send()) {
    // L'envoi de l'email a réussi
    echo 'Email envoyé avec succès';
} else {
    // Une erreur s'est produite lors de l'envoi de l'email
    echo 'Erreur lors de l\'envoi de l\'email : ' . $mail->ErrorInfo;

}



?>