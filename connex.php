
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Formulaire avec CSS integre</title>
    <style>
      * {
        box-sizing: border-box;
        font-family: Arial, sans-serif;
      }

      body {
        margin: 150px;
        padding: 0;
        background-color: #f2f2f2;
      }

      form {
        background-color: #fff;
        max-width: 500px;
        margin: 20px auto;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

      label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
      }

      input[type="text"],
      input[type="email"],
      input[type="password"] {
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: none;
        background-color: #f5f5f5;
        color: #333;
        font-size: 16px;
      }

      input[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        border-radius: 5px;
        border: none;
        background-color: #007bff;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      input[type="submit"]:hover {
        background-color: #0062cc;
      }
    </style>
  </head>
  <body>
    <form action="" method="POST">

      <label for="email" >Login :</label>
      <input type="text" id="email" name="login"  required>

      <label for="motdepasse">Password :</label>
      <input type="password" id="motdepasse"  name="mdp"  required>
      <br>
      

      <input type="submit" value="OK">
      
    </form>
  </body>
</html>

<?php 
$server='localhost';
$username='root';
$password="";
$bdname="bd_exo2_tp4_php";
//creer une connection
$conn=new mysqli($server,$username,$password,$bdname);
/*if($conn->connect_error){
    echo 'Echec de connexion a la bd <br> ';
}else{echo 'connexion ok! <br>';}*/


function formulaireSoumis() {
  return isset($_POST) && !empty($_POST);
}

if(formulaireSoumis()){

  $login=$_POST['login'];
  $mdp=$_POST['mdp'];

  $req="SELECT * FROM users  WHERE login='$login' and mdp='$mdp' ";
  $res=$conn->query($req);
  if($res->num_rows == 1){
    $row= $res->fetch_assoc();
    
    if($row['login']=='abc' && $row['mdp']){
      header('location: liste.php');
    }
    else{
      echo "<br> Bienvenue Mr ".$row['prenom']." ".$row['nom']." .";
    }
  }
  else {
    $req="SELECT * FROM users  WHERE login='$login' ";
    $res=$conn->query($req);
    if($res->num_rows == 1){
      echo '<br> Votre  mot de passe est incorrect' ;
    }
    
  }


}



?>