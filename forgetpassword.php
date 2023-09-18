<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$servername='localhost';
$username='root';
$password='';
$dbname='log_in';
//$conn = instance de l'objet mysqli
$conn=new mysqli(
    $servername,$username,$password,$dbname);
if($conn->connect_error){

    echo("echec de connection");
}
else{

  //  echo("connection a été établi avec sucees");
}
$email= $_POST["email"];
$result = $conn->query("SELECT COUNT(*) FROM client WHERE email='$email'");
$row = $result->fetch_row();
$email_count = $row[0];



if ($email_count > 0)
{
   
   
    $length = 5;

 
  $digits = "123456789";


  $resetcode = "";

 
  for ($i = 0; $i < $length; $i++) {
    $resetcode .= $digits[rand(0, strlen($digits) - 1)];
  }
 
  $t1="update client set resetcode='$resetcode' where email='$email'";
 
  if($conn ->query($t1) ===true)
  {
   
    $message = "Votre reset code est  $resetcode" ;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$email = $email;
$mail = new PHPMailer;
$mail->IsSMTP();
$mail->SMTPAuth = true;                
$mail->SMTPSecure = "ssl";      
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = "tncommersa@gmail.com";  
$mail->Password = "lizpyodxfzmdxcta";  
$mail->FromName = "Netta store";
$mail->AddAddress($email);
$mail->Subject = "Reset Password";
$mail->isHTML( TRUE );
$mail->Body =$message;
if($mail->send())
{
    echo '<script>
alert("We have e-mailed your password reset code!");
window.location.href = "verif.php";
</script>';
 
}
}
else
{
    echo '<script>
alert("We cant find a user with that email address");
window.location.href = "sinscrire.php";
</script>';
 
}
}
else
{
    echo '<script>
alert("We cant find a user with that email address");
window.location.href = "sinscrire.php";
</script>';
}



?>