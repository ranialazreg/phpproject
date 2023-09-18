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
$nom=$_GET['nom'];
$prix=$_GET['prix'];
$id=$_GET['id'];
$img=$_GET['img'];
$emaiil=$_GET['email'];
$quantite=$_GET['quantite'];
$result22=$conn->query("SELECT COUNT(*) FROM panier  where id_prod=$id ");
  $count22 = $result22->fetch_row()[0];
if($count22 >0)
{
    $t2="update panier set quantite=quantite+1 where id_prod=$id";
    $conn ->query($t2);
    header("Location:insertion.php?email=$emaiil"); 
}
else{
$t1="INSERT INTO  panier 
(id_prod,prix,designation,image) VALUES
('$id','$prix','$nom','$img')" ;

if($conn ->query($t1))
{
    header("Location: insertion.php?email=$emaiil");
}
}

?>