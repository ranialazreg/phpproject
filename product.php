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

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>
<script>
  $(document).ready(function() {
	var count = 0;
	$("a.add-to-cart").click(function(event) {
		count++;
		$("a.add-to-cart").addClass("size");
		setTimeout(function() {
			$("a.add-to-cart").addClass("hover");
		}, 200);
		setTimeout(function() {
			$("a.cart > span").addClass("counter");
			$("a.cart > span.counter").text(count);
		}, 400);
		setTimeout(function() {
			$("a.add-to-cart").removeClass("hover");
			$("a.add-to-cart").removeClass("size");
		}, 600);
		event.preventDefault();
	});
});
</script>
<style>
body {
  background-color:#fff9f0;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction:row;
}
.card {
  max-width: 30em;
  flex-direction: row;
  background-color:white;
  border: 0;
  box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.18);
  margin: 3em auto;
}
.card.dark {
  color: #fff;
}
.card.card.bg-light-subtle .card-title {
  color: dimgrey;
}

.card img {
  max-width: 25%;
  margin: auto;
  padding: 0.5em;
  border-radius: 0.7em;
}
.card-body {
  display: flex;
  justify-content: space-between;
}
.text-section {
  max-width: 60%;
}
.cta-section {
  max-width: 40%;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  justify-content: space-between;
  font-weight:bold;
}
.cta-section .btn {
  padding: 0.3em 0.5em;
  /* color: #696969; */
}
.card.bg-light-subtle .cta-section .btn {
  background-color: #898989;
  border-color: #898989;
}
@media screen and (max-width: 475px) {
  .card {
    font-size: 0.9em;
  }
}

</style>
<body>

<nav class="navbar navbar-expand-lg navbar-dark p-3 fixed-top" id="headerNav" style="background-color: #fff9f0;">
        <div class="container-fluid">
          <a class="navbar-brand d-block d-lg-none" href="#">
            <img src="/static_files/images/logos/logo_2_white.png" height="80" />
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto ">
              <li class="nav-item">
                <a class="nav-link mx-2 pt-3" href="acceuil.php" style="color:#5c7c79">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2 pt-3" href="#product" style="color:#5c7c79">Products</a>
              </li>
              <li class="nav-item d-none d-lg-block">
                <a class="nav-link mx-2" href="#">
                  <img src="logo.png" />
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2 pt-3" href="log in.php" style="color:#5c7c79">Log in</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link mx-2 pt-3" href="#contact" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#5c7c79">
                  Contact
                </a>
                <?php
                echo"
               <li class='nav-item'>
                <a class='nav-link mx-2 ' href='card.php' style='color:#5c7c79'  ><img src='panier.png'  alt=''><span style='color:white;border:2px solid black;background-color:black;border-radius:70%;margin-left:-10px  '>$count22</span></a>
              </li> "
              ?>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class=' container' style='margin-top:120px'>
<div class='row'>

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

        $req="SELECT id ,prix ,	designation ,	image ,quantite FROM produit ORDER BY id ASC ";
        $res=$conn->query($req);
        if($res->num_rows > 0){
            while($row= $res->fetch_assoc()){
                $action1='supprimer';
                $action2='modifier';
                $lien= "images/".$row['image'];
                $img=$row['image'];  
                $nom=$row['designation'];   
                $prix=$row['prix'];
                $id=$row['id'];  
          echo"
          <div class=col-4 >
<div class='card bg-primary-subtle mt-4'>
<img src='$lien' alt='Image' class='card-img-top'>    <div class='card-body'>
        <div class='text-section'>
          <h5 class='card-title fw-bold'>".$row['designation']."</h5>
        <p class='card-text'>Some quick example text to build on the cards content.</p>
      </div>
      <div class='cta-section'>
        <div>".$row['prix']."DT</div> 
        <a href='insertiondb?id=$id&img=$img&nom=$nom&prix=$prix' class='btn ' style='background-color:black;color:white;font-size:0.9em'  >Buy Now</a>
      </div>
    </div>
  </div>
  </div>
  
  ";
            }
          }
  ?>
  </div>
</body>
</html>