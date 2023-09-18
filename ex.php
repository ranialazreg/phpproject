<?php
$servername='localhost';
$username='root';
$password='';
$dbname='log_in';
//$conn = instance de l'objet mysqli 
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){

    echo("echec de connection");
}
else{

   // echo("connection a été établi avec sucees");
}


//envoyer des donnes

$email= $_POST["email"];
$nom= $_POST["firstname"];
$pwd= $_POST["password"];
$prenom= $_POST["lastname"];
$adresse= $_POST["adresse"];
$tel= $_POST["tel"];
$t1= "INSERT INTO  client 
(lastname,firstname,email,password,adresse,tel) VALUES
('$nom','$prenom','$email' , '$pwd','$adresse','$tel')" ;

if($conn ->query($t1) ===true)
{
    echo("les données sont insérées 
    avec succès");
}

else{

    echo("vérifier les champs");
}

?>