<?php
include 'Data/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Car Rental</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="cartest.css" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Raleway&family=Yeseva+One&display=swap" rel="stylesheet">
        

    </head>
    <body>
      <div class="background_image">
        <header id="Home">
            <div class="bg-img">
                <h1 class="head1" >Louez une voiture aujourd'hui et explorez le monde</h1>
                <p class="para1">Découvrez la liberté de la route grâce à nos services de location de voitures abordables. Nous avons une large gamme de véhicules parmi lesquels choisir, y compris des options économiques, de luxe et familiales. Que vous planifiez un voyage en voiture, que vous ayez besoin d'une voiture fiable pour un voyage d'affaires ou que vous souhaitiez simplement explorer votre région, nous avons ce qu'il vous faut.</p>
               <a href="#Cars"><button class="button1">Découvrez les voitures</button></a>

               <form method="post" class="search-form">
                <input name="search" class="inputs" type="text" placeholder="Rechercher...">
                <button class="buttonsearch" name="submit" type="submit">Search</button>
                </form>
                <p class="php_para">
    <?php
    if(isset($_POST['submit']) && isset($_POST['search'])){
      $search=$_POST['search'];
  
      $sql="SELECT * FROM `cars` WHERE marque LIKE '$search' OR modele LIKE '$search'";
      $result=mysqli_query($con,$sql);
  
      if($result){
          if(mysqli_num_rows($result)>0){
              echo 'Nous avons votre voiture ';
              while($row=mysqli_fetch_assoc($result)){
                  $link = '';
                  switch ($row['modele']) {
                      case 'cla':
                          $link = 'cla.php';
                          break;
                      case 'class a':
                          $link = 'class-a.php';
                          break;
                      case 'class c berline':
                          $link = 'class-c-berline.php';
                          break;
                      case 'suv glc':
                          $link = 'glc.php';
                          break;
                  }
                  echo '<td><a href="'.$link.'">'.$row['modele'].'</a></td>';
              }
          } else {
              echo '<h2 class="datanot">Nous navons pas votre voiture désirée.</h2>';
          }
      }
  }
    ?>
                </p>

               <nav class="fixed-nav" >
              <div class="logo">
                <img src="cars/logo1.png" />
              </div>
              
              <ul class="list-item">
                <li><a href="#Home">Home</a></li>
                <li><a href="#Cars">Nos voitures</a></li>
                <li><a href="#About">À propos de nous</a></li>
                <li><a href="#Contact">Nous contacter</a></li>
              </ul>
            </nav>
        </div>
      </header>

        
        <div id="Cars" class="cartxt">
          <h1 class="head3">Découvrez nos voitures</h1>
          <br>
          <h2 class="head33">Nous avons</h2>
          <br>
          <br>
        </div>
        <div class="images">
          <div  class="image">
            <p>Coupés</p>
              <img class="isg" src="cars/cla/cla.png" alt="image1">
              <p>Cla</p>
              <p>400Dh / jour</p>
              <ul>
                <li class="detail">Sièges sport en similicuir ARTICO</li>
                <li class="detail">Eclairage d'ambiance 64 couleurs</li>
                <li class="detail">Widescreen Cockpit 10,25*</li>
                <li class="detail">Pack d'intégration pour smartphone</li>
                <br>
                <a href="cla.php"><button class="button-57" role="button"><span class="text">Celui-ci</span><span>Commandez maintenant</span></button></a>
              </ul>
          </div>
          <div class="image">
            <p>Berlines</p>
              <img class="isg" src="cars/Class_c_berline/c.png" alt="image2">
              <br>
              <p>Class C Berline</p>
              <p>500Dh / jour</p>
              <ul>
                <li class="detail">Sellerie en cuir Nappa </li>
                <li class="detail">Affichage tête-haute </li>
                <li class="detail">Assistant de feux de route Plus</li>
                <li class="detail">Sonorisation 3D Surround Burmester</li>
                <br>
                <a href="class-c-berline.php"><button class="button-57" role="button"><span class="text">Celui-ci</span><span>Commandez maintenant</span></button></a><br>
                <br>
              </ul>
          </div>
          <div  class="image">
            <p>Compacte</p>
              <img class="isg" src="cars/class_a/a.png" alt="image3">
              <p>Class A</p>
              <p>400Dh / jour</p>
              <ul>
                <li class="detail">Sièges sport</li>
                <li class="detail">Sièges avant avec fonction mémoires</li>
                <li class="detail">Toit ouvrant panoramique</li>
                <li class="detail">Pack AMG Line</li>
                <br>
              <a href="class-a.php"><button class="button-57" role="button"><span class="text">Celui-ci</span><span>Commandez maintenant</span></button></a>              </ul>
          </div>
          <div class="image">
            <p>SUV/Tout-Terrains</p>
              <img class="isg" src="cars/GLC/b.jpg" alt="image4">
              <p>GLC</p>
              <p>600Dh / jour</p>
              <ul>
                <li class="detail">AMG Line extérieur</li>
                <li class="detail">Keyless GO</li>
                <li class="detail">Régulation de distance</li>
                <li class="detail">Toit ouvrant panoramique </li>
                <br>
              <a href="glc.php"><button class="button-57" role="button"><span class="text">Celui-ci</span><span>Commandez maintenant</span></button></a>
              </ul>
          </div>
          
      </div>
      <br>
        <br>
        
        
        

        <div id="About" class="about-image">
          <h1 class="head2">À propos de nous</h1>
          <p class="para2">Notre entreprise est en activité depuis plus de 10 ans, fournissant des voitures de location de haute qualité aux clients de toute la région. Nous sommes fiers de notre service amical et professionnel et de notre engagement envers la satisfaction de nos clients.</p>
          <p class="para3">Nous proposons une large gamme de véhicules pour répondre aux besoins de tous nos clients. Que vous recherchiez une voiture économique pour un court trajet en ville ou un VUS de luxe pour une occasion spéciale, nous avons le véhicule parfait pour vous. Notre flotte est régulièrement révisée et bien entretenue, vous pouvez donc être sûr que votre voiture de location sera fiable et en excellent état.</p>
        </div>

        <form id="Contact">      
          <div>
            <h1 class="head7">Nous contacter !</h1>
            <br>
          <input name="name" type="text" class="feedback-input" placeholder="Nom" />   
          <input name="email" type="text" class="feedback-input" placeholder="Email" />
          <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
          <input type="submit" value="SUBMIT"/>
        </div>
        </form>
        
        <div class="image-container">
          <a href="https://www.facebook.com" target="blank"><img class="isg" src="cars/faac.png" alt="facebook"></a>
          <a href="https://www.twitter.com" target="blank"><img class="isg" src="cars/gma.png" alt="twitter"></a>
          <a href="https://www.instagram.com" target="blank"><img class="isg" src="cars/ins.png" alt="instagram"></a>
          <a href="https://www.pinterest.com" target="blank"><img class="isg" src="cars/pin.png" alt="pinterest"></a>
        </div>

        <div class="info">
          <h2>Phone</h1>
            <br>
          <p>+212605340268</p>
          <br>
          <h2>Email</h2>
          <br>
          <p>haitamishitoxs@gmail.com</p>
          <br>

        </div>


        <footer>
          <div class="footer">
            <div class="row">
              <ul>
                  <li><a href="#Contact">Nous contacter</a></li>
                  <li><a href="#Cars">Nos services</a></li>
                  <li><a href="#">Politique de confidentialité</a></li>
                  <li><a href="#">Termes et Conditions</a></li>
                  <li><a href="#">Carrière</a></li>
              </ul>
          </div>
          <div class="row">
          CARRENTAL Copyright © 2023 - All rights reserved || Designed By: Aberdaa 
          </div>
          </div>
          </footer>

          <script src="script.js"></script>
        </div>
    </body>
</html>