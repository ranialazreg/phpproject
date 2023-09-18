

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    body{
    background: #fff9f0;
    min-height: 100vh;
    vertical-align: middle;
    display: flex;
    font-family: sans-serif;
    font-size: 0.8rem;
    font-weight: bold;
}
.title{
    margin-bottom: 5vh;
}
.card{
    margin: auto;
    max-width: 950px;
    width: 90%;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 1rem;
    border: transparent;
}
@media(max-width:767px){
    .card{
        margin: 3vh auto;
    }
}
.cart{
    background-color: #fff;
    padding: 4vh 5vh;
    border-bottom-left-radius: 1rem;
    border-top-left-radius: 1rem;
}
@media(max-width:767px){
    .cart{
        padding: 4vh;
        border-bottom-left-radius: unset;
        border-top-right-radius: 1rem;
    }
}
.summary{
    background-color: #E7D4B3;
    border-top-right-radius: 1rem;
    border-bottom-right-radius: 1rem;
    padding: 4vh;
    color: rgb(65, 65, 65);
}
@media(max-width:767px){
    .summary{
    border-top-right-radius: unset;
    border-bottom-left-radius: 1rem;
    }
}
.summary .col-2{
    padding: 0;
}
.summary .col-10
{
    padding: 0;
}.row{
    margin: 0;
}
.title b{
    font-size: 1.5rem;
}
.main{
    margin: 0;
    padding: 2vh 0;
    width: 100%;
}
.col-2, .col{
    padding: 0 1vh;
}
a{
    padding: 0 1vh;
}
.close{
    margin-left: auto;
    font-size: 0.7rem;
}
img{
    width: 3.5rem;
}
.back-to-shop{
    margin-top: 4.5rem;
}
h5{
    margin-top: 4vh;
}
hr{
    margin-top: 1.25rem;
}
form{
    padding: 2vh 0;
}
select{
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1.5vh 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247);
}
input{
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247);
}
input:focus::-webkit-input-placeholder
{
      color:transparent;
}
.btn{
    background-color: #000;
    border-color: #000;
    color: white;
    width: 100%;
    font-size: 0.7rem;
    margin-top: 4vh;
    padding: 1vh;
    border-radius: 0;
}
.btn:focus{
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    -webkit-box-shadow: none;
    -webkit-user-select: none;
    transition: none; 
}
.btn:hover{
    color: white;
}
a{
    color: black; 
}
a:hover{
    color: black;
    text-decoration: none;
}
 #code{
    background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253) , rgba(255, 255, 255, 0.185)), url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
    background-repeat: no-repeat;
    background-position-x: 95%;
    background-position-y: center;
}
</style>
<body>
<div class="card">
            <div class="row">
            <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col"><h4><b>Shopping Cart</b></h4></div>
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
                               $result22=$conn->query("SELECT COUNT(*) FROM panier  ");
                               $count22 = $result22->fetch_row()[0];
                               echo"
                            <div class='col align-self-center text-right text-muted'>$count22 items</div>
                            ";
                            ?>
                        </div>
                    </div>
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
         $prixtotale=
       $req="SELECT id_prod ,prix ,designation ,image ,quantite FROM panier ";
        $res=$conn->query($req);
        if($res->num_rows > 0){
            while($row= $res->fetch_assoc()){
                $img=$row['image'];
                $quantite=$row['quantite'];  
                $nom=$row['designation'];   
                $prix=$row['prix'];
                $id=$row['id_prod'];
                $prixtotale=$prix*$quantite;  
          echo"
          <div class='row border-top border-bottom'>
          <div class='row main align-items-center'>
              <div class='col-2'><img class='img-fluid' src='images/$img'></div>
              <div class='col'>
                  <div class='row '>$nom</div>
                 
              </div>
              <div class='col'>
                  <a href='moincard.php?id=$id'>-</a><a href='' class='border'>$quantite</a><a href='pluscards.php?id=$id'>+</a>
              </div>
              <div class='col'>$prixtotale DT<span class='close'></span></div>
          </div>
      </div>

          ";
            }
        }
       ?>
                
                    <div style='display:flex;'>

                    <div class="back-to-shop" ><a href="insertion.php?email=$username">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
                
                <div class="back-to-shop" style='padding-left:330px'><a href="deletecard.php">&rightarrow;</a><span class="text-muted">Annuler Achat</span></div>
                </div>
                    </div>
                   
                <div class="col-md-4 summary pt-5   ">
                    <div><h5><b>Summary</b></h5></div>
                    <hr>
                    <div class="row">
                        
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
                               $result22=$conn->query("SELECT COUNT(*) FROM panier  ");
                               $count22 = $result22->fetch_row()[0];
                               echo"
                               <div class='col' style='padding-left:0;'>$count22 items</div>
                            ";
                            ?>
                        <div class="col text-right"></div>
                    </div>
                    <form>
                        <p>SHIPPING</p>
                        <select><option class="text-muted">Standard-Delivery- 10.00 DT</option></select>
                      
                    </form>
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TOTAL PRICE</div>
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
    $somme=0;
      $req="SELECT prix,quantite FROM panier ";
        $res=$conn->query($req);
        if($res->num_rows > 0){
            while($row= $res->fetch_assoc()){
                $prix=$row['prix'];
                $quantite=$row['quantite'];     
                $prixtotale=$prix*$quantite; 
                $somme=$somme+$prixtotale;
            }
            $somme=$somme+10;
        }
            echo"<div class='col text-right'>$somme DT</div>";
            ?>
            </div>
                    <button class="btn" > <a>CHECKOUT</a> </button>
                    <button class="btn" style='margin-top:10px' > <a href="delete.php" style='color:white;text-decoration:none'>ANNULER</a> </button>

                </div>
            </div>
            
        </div>
</body>
</html>