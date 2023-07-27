<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mercedes-Benz Class A</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="class-a.css" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Raleway&family=Yeseva+One&display=swap" rel="stylesheet">

    </head>
    <body>
      <div class="background_image">
        <header id="Home">
          <div class="bg-img">
                <h1 class="head1" >Mercedes-Benz Class A</h1>
                <h3 class="para1">Compacte</h3>
                <h3 class="price">400DH / Jour</h3>
                <a href="#reser"><button class="button2">Faire une réservation</button></a>
            <nav class="fixed-nav">
                <div class="logo">
                    <img src="cars/logo1.png" />
                </div>
                <ul class="list-item">
                    <li><a href="carrental.html">Home</a></li>
                    <li><a href="carrental.html#Cars">Nos voitures</a></li>
                    <li><a href="carrental.html#About">À propos de nous</a></li>
                    <li><a href="carrental.html#Contact">Nous contacter</a></li>
                </ul>
            </nav>
            <img class="icon1" src="cars/icons/1.png" alt="image 1">
            <p class="iconp">CARBURANT: DIESEL</p>
            <img class="icon2" src="cars/icons/2.png" alt="image 1">
            <p class="iconp2">FRANCHISE: 99%</p>
            <img class="icon3" src="cars/icons/3.png" alt="image 1">
            <p class="iconp3">PORTES: 4</p>
            <img class="icon4" src="cars/icons/4.png" alt="image 1">
            <p class="iconp4">CLIM: OUI</p>
          </div>
        </header>

        <div id="Cars" class="cartxt">
          <h1 class="head3">Points forts Classe A</h1>
          <br>
          <h2 class="head3">Elle vous va comme un gant.</h2>
          <br>
          <p class="para555">Les lignes de la nouvelle Classe A tendent toutes dans une même direction : de notre philosophie de design à la clarté sensuelle. Les surfaces sont encore plus épurées, les détails encore plus marquants. Le nouveau système multimédia MBUX intuitif a été conçu pour une seule personne au monde: vous. Chaque détail peut donc être parfaitement adapté à vos souhaits, votre style de conduite et vos besoins. Il suffit d'un geste de la main sur le pavé tactile, le volant ou, pour la toute première fois, sur le nouvel écran tactile.Grâce au tout nouveau système de commande vocale LINGUATRONIC, la nouvelle Classe A vous obéit au doigt et à l'oeil.</p>
          <br>
        </div>
        <div class="images">
          <div  class="image">
              <img src="cars/class_a/2.jpg" alt="image1">
              <h3 class="heads1">Sécurité</h3>
              <ul>
                <li><p class="parap">ESP, ASR, BAS, ABS
                     rideaux et avant latéraux, frontaux Airbags
                    projecteurs des automatique Allumage
                    fatigue de Détecteur - ASSIST ATTENTION
                    pneus des pression la de Contrôle
                    Tirefit anticrevaison Kit
                    vitesse de limiteur et Régulateur
                    électrique stationnement de Frein
                    actif assisté urgence’d Freinage</p></li>
                <br>
              </ul>
          </div>
          <div  class="image">
            <img src="cars/class_a/1.jpg" alt="Image 3">
            <h3 class="heads1">Confort</h3>
            <ul>
              <li><p class="parap">Climatisation automatique THERMATIC
                DYNAMIC SELECT - Programmes de conduite
                Écran média tactile 10,25’’
                Multimédia MBUX avec commandes vocales
                Pavé tactile de sélection
                Pack stationnement avec caméra de recul
                Essuie-glaces avec détecteur de pluie
                Dossiers arrière rabattables 40/20/40
                Double porte-gobelets</p></li>
              <br>
            </ul>
        </div>
        <div  class="image">
          <img src="cars/class_a/3.jpg" alt="image1">
          <h3 class="headss"class="heads1">Design</h3>
          <ul>
            <li><p class="parapp"class="parap">Pack Progressive
              Sièges confort en similicuir ARTICO / tissu
              Inserts décoratifs façon carbone
              Volant sport multifonction en cuir
              « Benz-Mercedes « seuil de Baguettes
              intérieur’d éclairage – visibilité Pack
              performances hautes LED Projecteurs
              [72R’’ [17 alliage Jante</p></li>
            <br>
          </ul>
      </div>
          
      </div>
        
     
              <div class="picture-item">
                  
              </div>
          </div>
      </div>



      <div class="aboutcar">   
      </div>

      
      <div id="reser" class="form-pic">
        <div class="reser">
          <h1>Faites votre réservation</h1>
        </div>
      <form method="post">
        <div class="elem-group">
          <label for="name">Votre nom</label>
          <input type="text" name="client_name" placeholder="xxxx xxxx" pattern=[A-Z\sa-z]{3,20} required>
        </div>
        <div class="elem-group">
          <label for="email">Vote E-mail</label>
          <input type="email" name="client_email" placeholder="xxxxxxxxxx@gmail.com" required>
        </div>
        <div class="elem-group">
          <label for="phone">Votre Phone</label>
          <input type="tel" name="client_phone" placeholder="0600000000" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
        </div>
        
        <div class="elem-group inlined">
          <label for="days">Combien de jours?</label>
          <input type="number" name="total_days" placeholder="2" min="1" required>
        </div>
        <div class="elem-group inlined">
          <label for="checkin-date">Date de départ</label>
          <input type="date"  name="checkin" required>
        </div>
        <div class="elem-group inlined">
          <label for="checkout-date">Date d'arrivée</label>
          <input type="date" name="checkout" required>
        </div>
        <div class="elem-group1">
          <label for="car-selection">Sélectionnez la voiture</label>
          <select  name="car_preference" required>
              <option value="">Choisissez la voiture dans la liste</option>
              <option value="Cla">Mercedes-benz Class A</option>
          </select>
        </div>
        <div class="elem-group2">
          <label for="message">Rien d'autre?</label>
          <textarea id="message" name="client_message" placeholder="Dites-nous tout ce qui pourrait être important."></textarea>
        </div>
        <button id="button1" type="submit" name="valider">Réserver ici</button>
      </form>
    </div>

    <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carrental";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['valider'])) {

    $name = $_POST['client_name'];
    $email = $_POST['client_email'];
    $phone = $_POST['client_phone'];
    $duration = $_POST['total_days'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $carselection = $_POST['car_preference'];
    $message = $_POST['client_message'];
    

    $sql = "INSERT INTO reservation (name, email, phone, duration, checkin, checkout, carselection, message, created_at) VALUES ('$name', '$email', '$phone', '$duration', '$checkin', '$checkout', '$carselection', '$message', NOW())";
    
    if ($conn->query($sql) === TRUE) {
        echo '<h2 class="saved">Reservation saved successfully</h2>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
      

        
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
      </div>

      <script src="script1.js"></script>
    </body>
</html>
