<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}
//afficher les données de la table utilisateurs
$d2 = "SELECT * FROM utilisateurs";
//requte pour afficher les données de la table 
$result = $conn->query($d2);

if ($result->num_rows > 0) {
    //num_row Retourne le nombre de lignes dans le jeu de résultats
    //vérifier si la table contienne des données ou non
    while($row = $result->fetch_assoc()) {
        //fetch_assoc retourne une ligne de données de l'{} de resulat
        
        echo " <strong>  -id </strong>: " . $row["id"].  
         "<br>" ." <strong> - Email:  </strong> " . $row["email"].   "<br>".
         " <strong> - nom:</strong>  " . $row["nom"]. 
         "<br>" . " <strong> - pwd: </strong>  " . $row["pwd"]. "<br>";
    }
} else {
    echo "Aucun utilisateur enregistré dans la base de données.";
}

$conn->close();

?>