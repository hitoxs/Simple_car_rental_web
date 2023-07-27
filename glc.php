<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mercedes-Benz GLC SUV</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="glc.css" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Raleway&family=Yeseva+One&display=swap" rel="stylesheet">

    </head>
    <body>
      <div class="background_image">
        <header id="Home">
          <div class="bg-img">
                <h1 class="head1" >Mercedes-Benz GLC SUV</h1>
                <h3 class="para1">SUV/Tout-Terrains</h3>
                <h3 class="price">600DH / Jour</h3>
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
            <p class="iconp2">FRANCHISE: 100%</p>
            <img class="icon3" src="cars/icons/3.png" alt="image 1">
            <p class="iconp3">PORTES: 4</p>
            <img class="icon4" src="cars/icons/4.png" alt="image 1">
            <p class="iconp4">CLIM: OUI</p>
          </div>
        </header>

        <div id="Cars" class="cartxt">
          <h1 class="head3">Points forts du GLC</h1>
          <br>
          <h2 class="head3">L'expression du luxe moderne.</h2>
          <br>
          <p class="para555">Des lignes épurées et des proportions uniques caractérisent le design du nouveau GLC SUV. L’avant sportif avec les bossages et la calandre Star de sa ligne AMG Line dégagent une sportivité élégante. L’intérieur exclusif et spacieux du nouveau GLC crée une atmosphère relaxante et confortable.</p>
          <br>
        </div>
        <div class="images">
          <div  class="image">
              <img src="cars/GLC/securtie.jpg" alt="image1">
              <h3 class="heads1">Sécurité</h3>
              <ul>
                <li><p class="parap">rideaux et avant latéraux, frontaux Airbags
                    conducteur le pour genoux Airbag
                    Assist Crosswind avec ESP et ASR, BAS, ABS
                    côte en démarrage au aide avec brake Adaptive
                    projecteurs des automatique Allumage
                    adaptatif route de feux Assistant
                    somnolence de Détection - ASSIST ATTENTION
                    pluie de Détecteur
                    actif assisté urgence’d Freinage
                    TIREFIT crevaison-anti Kit
                    pneus des pression la de Contrôle
                    autonome</p></li>
                <br>
              </ul>
          </div>
          <div  class="image">
            <img src="cars/GLC/confot.jpg" alt="Image 3">
            <h3 class="heads1">Confort</h3>
            <ul>
              <li><p class="parap">3,12 de instruments des Écran
                ‘‘9,11 de tactile média Écran
                MBUX Multimédia Système
                LINGUATRONIC vocales Commandes
                Smartphone pour fil sans Recharge
                RAuto Android® & CarPlay® Apple
                zone-bi automatique Climatisation
                chauffants avant Sièges
                conduite de programmes - SELECT DYNAMIC
                vitesse de limiteur et Régulateur
                électriquement rabattables extérieurs Rétroviseurs
                automatique nuit/jour commutation à Rétroviseurs
                Benz-Mercedes logo du Projection
                électrique-semi réglage à avant Sièges
                PACK-EASY électrique coffre de Hayon
                </p></li>
              <br>
            </ul>
        </div>
        <div  class="image">
          <img src="cars/GLC/desing.jpg" alt="image1">
          <h3 class="headss"class="heads1">Design</h3>
          <ul>
            <li><p class="parapp"class="parap">s 64 à ambiance’d Éclairage
                Nappa cuir en multifonction sport Volant
                argentés chromés éléments avec aération’d Buses
                foncé athermique Vitrage
                poli aluminium en toit de Rampes
                flux double façon échappements’d Sorties
                extérieur Avantgarde Pack
                intérieur Avantgarde Pack
                ARTICO similicuir en Sièges
                noir tissu en pavillon de Ciel
                losanges aspect décoratifs Inserts
                losanges en motif à centrale Console
                performances hautes LED Projecteurs
                ‘‘18 alliage J</p></li>
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
              <option value="Cla">Mercedes-benz SUV GLC</option>
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
