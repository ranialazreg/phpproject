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
$id=$_GET['id'];
$t2="update panier set quantite=quantite+1 where id_prod=$id";
$conn ->query($t2);
header("Location:card.php"); 

?>