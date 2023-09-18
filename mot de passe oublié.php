<?php
$host="localhost"; // Nom d'hôte
$username="root"; // Nom d'utilisateur MySQL
$password=""; // Mot de passe MySQL
$db_name="log_in"; // Nom de la base de données

// Connexion à la base de données
$conn = mysqli_connect($host, $username, $password, $db_name);
if (mysqli_connect_errno()) {
  echo "Impossible de se connecter à MySQL : " . mysqli_connect_error();
  exit();
}

// Récupération de la valeur envoyée depuis le formulaire
$email = mysqli_real_escape_string($conn, $_POST['email']);

// Nom de la table
$tbl_name = "client";

// Récupération du mot de passe depuis la table où l'e-mail = $email
$sql = "SELECT password FROM $tbl_name WHERE email='$email'";
$result = mysqli_query($conn, $sql);

// Si l'adresse e-mail est trouvée, le nombre de lignes doit être égal à 1
$count = mysqli_num_rows($result);

// Si $count est égal à 1, récupération du mot de passe et envoi de l'e-mail
if($count == 1) {
  $rows = mysqli_fetch_array($result);
  $your_password = $rows['password'];

  // Envoi de l'e-mail
  $to = $email;
  $subject = "Votre mot de passe";
  $header = "From: votre nom <votre_email@example.com>";
  $message = "Votre mot de passe pour vous connecter à notre site web est : $your_password \n\n";
  $sentmail = mail($to, $subject, $message, $header);

  if($sentmail) {
    echo "Votre mot de passe a été envoyé à votre adresse e-mail.";
  } else {
    echo "Impossible d'envoyer le mot de passe à votre adresse e-mail. Veuillez réessayer plus tard.";
  }
} else {
  echo "L'adresse e-mail n'a pas été trouvée dans notre base de données.";
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);
?>