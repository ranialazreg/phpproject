<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="c.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script>let slideIndex = 1;
      showSlides(slideIndex);
      
      // Next/previous controls
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }
      
      // Thumbnail image controls
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
      
      function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
      }
      </script>
    <title>Document</title>
</head>
<body onload="currentSlide(1)">
    <header >
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
                <a class="nav-link mx-2 pt-3" href="#" style="color:#5c7c79">Home</a>
              </li>
              <li class="nav-item">
                <?php
                echo"
                <a class='nav-link mx-2 pt-3' href='insertion.php?email=' style='color:#5c7c79'>Products</a>
                "?>
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
     
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <section style=" display: flex;background-color: #fff9f0 ;margin-top:95px">
        <section class="  nouveaute" style="background-color: #fff9f0;display: flex;padding-top: 30px;">
          <section class="depart1" style="margin-left:70px" >
            <section style="display:flex;" >
              <div class="part1">
                <h3 style="color:#5c7c79;padding-top: 30px;">New Member</h3>
                <h4 style="color: #A1774D;font-family: 'Aleo', serif;">Get Extra Price Discount
                  Up To 75 % Off</h4>
                <button style="border-radius: 50px; background-color: #5c7c79;border: none;color: whitesmoke;"><a href="sinscrire.php" style="color:#fff9f0;text-decoration: none  ;">Sign up now</a></button>
                         </div>
                         <div class="etoile">
                          <img src="nouveauté/Sans titre (8).png" width="200px" height="200px"/>
                         </div>
            </section>
             <div class="part2" >
              <img src="nouveauté/MDM-GREEN-ADDICT.jpg.pagespeed.ce.pSVsf-oChY.jpg" width="500px" height="400px"/>
             </div>
          </section>
          <section class="depart2">
            <div >
              <img src="nouveauté/A.png"width="400px" height="400px"/>
            </div>
           <div style="background-color:#5c7c79 ;width:400px;height: 200px;text-align: center;">
            <h1 style="color: whitesmoke;font-family: 'Gloock', serif;padding-top: 50px;">Discount up to</h1>
            <h2 style="color: whitesmoke;font-family: 'Gloock'">50% off</h2>
          </div>
          </section>
        </section>
        <section style="padding-top: 30px;">
          <section class="depart3" >
            <section style="width:500px;background-color: #E7D4B3;height: 300px;">
<div style="display:flex">
  <div><h4 style="font-family: 'Gloock';color: #5c7c79;padding-top: 50px;padding-bottom: 10px;text-align:center">Aymen X meublatex</h4> 
    <h5 style="font-family: 'Aleo', serif;padding-left: 10px;font-size: 15px;text-align: center;padding-right: 10px;color:black">une grande sociéte de meuble reconnue partout dans le monde pour sa qualité et son profesionalisme</h5></div>
<img src="nouveauté/meublatex.png" width="300px" height="200px">
</div>
<section style="display: flex;">
  <div>
<img src="nouveauté/chaise.png" >
  </div>
  <div style="width:250px;height:400px;background-color: #5c7c79;">
    <h4 style="text-align:center;font-family: 'Gloock';padding-top: 50px;">Client Testimonial</h4>
    <img src="nouveauté/etoile.png" style="padding-left: 70px;padding-top:20px">
    <h3 style="text-align:center;font-family: 'Aleo';color: whitesmoke;font-size: 20px;padding-top: 30px;"> Vivez une agréable expérience avec notre service et notre qualité des produits luxes </h3>
    <button style="   ;border-radius: 50px; background-color: #E7D4B3;border: none;color: #5c7c79;margin-left: 70px;margin-top: 20px;" ><a href="sinscrire.php" style="color:#5c7c79;text-decoration: none  ;">Sign up now</a></button>
  </div>
</section>
          </section>
        </section>
      </section>
    </section>
<!-- Slideshow container -->
<div class="slideshow-container" style="margin-top:50px" id="product">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides    ">
    <div class="numbertext">1 / 3</div>
    <setion style="display:flex;margin-top: 30px" >
      <div style="width:300px;height: 450px">
        <img src="carousell/j.jpg" width="300px" height="400px" style="border-radius: 10px;">
        <h3 style=" text-align:center;font-family:'Gloock';font-size: 20px;padding-top: 20px;">un petit fouteuille lux pour salon</h3>
        <h5 style="text-align: center;font-family: 'Aleo';">Prix:200dt</h5>
      </div>
      <div style="width:300px;height: 450px;margin-left: 50px;">
        <img src="carousell/d.jpg" width="300px" height="400px" style="border-radius: 10px;">
        <h3 style=" text-align:center;font-family:'Gloock';font-size: 20px;padding-top: 20px;">mini fouteille lux</h3>
        <h5 style="text-align: center;font-family: 'Aleo';">Prix:150dt</h5>
      </div>
      <div style="width:300px;height: 450px;margin-left: 50px;">
        <img src="carousell/C.jpg" width="300px" height="400px" style="border-radius: 10px;">
        <h3 style=" text-align:center;font-family:'Gloock';font-size: 20px;padding-top: 20px;">une chaise pour salon</h3>
        <h5 style="text-align: center;font-family: 'Aleo';">Prix:100dt</h5>
      </div>
     </setion>
  </div>

  <div class="mySlides  ">
    <div class="numbertext">2 / 3</div>
    <setion style="display:flex;margin-top: 30px;" >
      <div style="width:300px;height: 450px">
        <img src="carousell/p.jpg" width="300px" height="400px" style="border-radius: 10px;">
        <h3 style=" text-align:center;font-family:'Gloock';font-size: 20px;padding-top: 20px;">une table pour salon</h3>
        <h5 style="text-align: center;font-family: 'Aleo';">Prix:2000dt</h5>
      </div>
      <div style="width:300px;height: 450px;margin-left: 50px;">
        <img src="carousell/m.jpg" width="300px" height="400px" style="border-radius: 10px;">
        <h3 style=" text-align:center;font-family:'Gloock';font-size: 20px;padding-top: 20px;">table d'entée pour décor</h3>
        <h5 style="text-align: center;font-family: 'Aleo';">Prix:1490dt</h5>
      </div>
      <div style="width:300px;height: 450px;margin-left: 50px;">
        <img src="carousell/o.jpg" width="300px" height="400px" style="border-radius: 10px;">
        <h3 style=" text-align:center;font-family:'Gloock';font-size: 20px;padding-top: 20px;">table avec miroir pour salon</h3>
        <h5 style="text-align: center;font-family: 'Aleo';">Prix:1500dt</h5>
      </div>
     </setion>
  </div>

  <div class="mySlides  ">
    <div class="numbertext">3 / 3</div>
    <setion style="display:flex;margin-top: 30px;" >
      <div style="width:300px;height: 450px">
        <img src="carousell/t.jpg" width="300px" height="400px" style="border-radius: 10px;">
        <h3 style=" text-align:center;font-family:'Gloock';font-size: 20px;padding-top: 20px;">salon style antique</h3>
        <h5 style="text-align: center;font-family: 'Aleo';">Prix:6000dt</h5>
      </div>
      <div style="width:300px;height: 450px;margin-left: 50px;">
        <img src="carousell/h.jpg" width="300px" height="400px" style="border-radius: 10px;">
        <h3 style=" text-align:center;font-family:'Gloock';font-size: 20px;padding-top: 20px;">salon large grise lux</h3>
        <h5 style="text-align: center;font-family: 'Aleo';">Prix:7000dt</h5>
      </div>
      <div style="width:300px;height: 450px;margin-left: 50px;">
        <img src="carousell/u.jpg" width="300px" height="400px" style="border-radius: 10px;">
        <h3 style=" text-align:center;font-family:'Gloock';font-size: 20px;padding-top: 20px;">luxury salon moyenne grise</h3>
        <h5 style="text-align: center;font-family: 'Aleo';">Prix:5000dt</h5>
      </div>
     </setion>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

  <section style="margin-bottom: 100px;display: flex;background-color: #5c7c79;width: 1200px;height: 500px;border-radius: 20px;margin-left: 150px;margin-top: 50px;box-shadow: -20px 30px 30px rgba(0,0,0,0.3);">
    <div style="width:450px;padding-left:50px;padding-top: 100px;"><h2 style="font-family: 'Gloock';font-size:40px;"> Une selection de meuble lux avec une qualité verifié</h2>
     <form action=""><button style="font-family: 'Aleo';border-radius: 50px; background-color: #E7D4B3;border: none;color: black;font-weight: bold;font-size: 20px;margin-left: 50px;margin-top: 80px;width:200px;height: 50px;"a>view more</button></form> </div>
   <div> <img src="sign up/sign.jpg" style="border-radius:30px;margin-top:+80px;margin-left:130px"></div>
  </section>
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted" id="contact" >
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" style="background-color: #fff9f0;">
    <!-- Left -->


   
        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h5 class="text-uppercase fw-bold mb-4" style="color:#5c7c79">
            Products
          </h5>
          <p style="color:black">
            <a href="#!" class="text-reset" style="text-decoration: none;">Fouteille</a>
          </p>
          <p style="color:black">
            <a href="#!" class="text-reset" style="text-decoration: none;">Salon</a>
          </p>
          <p style="color:black">
            <a href="#!" class="text-reset" style="text-decoration: none;">Chaise</a>
          </p>
          <p style="color:black">
            <a href="#!" class="text-reset" style="text-decoration: none;">Table</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h5 class="text-uppercase fw-bold mb-4" style="color:#5c7c79">
            Useful links
          </h5>
          <p style="color:black">
            <a href="#!" class="text-reset" style="text-decoration: none;">log in</a>
          </p>
          <p style="color:black">
            <a href="#!" class="text-reset" style="text-decoration: none;">acceuil</a>
          </p>
          <p style="color:black">
            <a href="#!" class="text-reset" style="text-decoration: none;">Product</a>
          </p>
          <p style="color:black">
            <a href="#!" class="text-reset" style="text-decoration: none;">inscription</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h5 class="text-uppercase fw-bold mb-4" style="color:#5c7c79">Contact</h5>
          <p style="color:black"><i class="fas fa-home me-3" ></i> Tunisia, Sousse</p>
          <p style="color:black">
            <i class="fas fa-envelope me-3"></i>
            meublatex@gmail.com
          </p>
          <p style="color:black"><i class="fas fa-phone me-3"></i> +216 99 284 707</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: #fff9f0;color:black;">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://taskweb.net/" style="text-decoration: none;">meublatex.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</body>
</html>