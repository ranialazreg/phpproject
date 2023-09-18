
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


        if(isset($_GET['id'])&& isset($_GET['action']) && !empty($_GET['action']) && !empty($_GET['id'])){
            $id=$_GET['id'];
            if($_GET['action']=='supprimer'){
                $req2="DELETE FROM produit WHERE id=$id";
                if($conn->query($req2)===true){
                    
                    echo "<script> alert('Suppression reussi !!!'); </script> ";
                    
                }
                else { 
                    echo "<script> alert('Echec de la suppression'); </script> ";
                }

            }

            if($_GET['action']=='modifier'){
                header('location: modif.php?id='.$_GET['id']);
            }
            
        }

        $req="SELECT * FROM produit ORDER BY id ASC ";
        $res=$conn->query($req);
        if($res->num_rows > 0){
            echo "<table border='1' align='center' style= 'width: 70%; '> <tr align='center'>  <td>Designation</td> <td>Prix</td> <td>Image</td>   </tr> ";
            while($row= $res->fetch_assoc()){
                $action1='supprimer';
                $action2='modifier';
                $lien= "images/".$row['image'];
                echo "<tr align='center'> <td>".$row['designation']."</td> <td>".$row['prix']."</td>
                <td><img src='$lien' alt='Image' style= 'height: 100px; width: 100px;' ></td> "; 
                echo "<td> <a href=\"?id=".$row['id']."&action=".$action1."\" onclick=\"return confirm('Voullez-vous vraiment supprimer?')\" >Supprimer </a> </td>
                <td><a href=\"?id=".$row['id']."&action=".$action2."\" onclick=\"return confirm('Voullez-vous vraiment modifier?')\" >Modifier </a></td> </tr> ";
                
            }
            echo "</table>";
            echo " <br> <br> <button align='center'> <a href='ajout.php'>Ajouter</a> </button>";

        }
        else{echo "Error"; }
        $conn->close();

        ?>