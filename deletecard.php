<?php
$server='localhost';
$username='root';
$password="";
$bdname="users";
//creer une connection
$conn=new mysqli($server,$username,$password,$bdname);
/*if($conn->connect_error){
    echo 'Echec';
}
else{
    echo 'Success <br>';
}*/

$t2="update panier set quantite=0";
$conn ->query($t2);
header("Location:card.php"); 

?>