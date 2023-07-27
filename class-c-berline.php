<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mercedes-Benz Class C Berline</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="class-c-berline.css" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Raleway&family=Yeseva+One&display=swap" rel="stylesheet">

    </head>
    <body>
      <div class="background_image">
        <header id="Home">
          <div class="bg-img">
                <h1 class="head1" >Mercedes-Benz Class C Berline</h1>
                <h3 class="para1">Berlines</h3>
                <h3 class="price">500DH / Jour</h3>
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
            <p class="iconp">CARBURANT: ESSENCE</p>
            <img class="icon2" src="cars/icons/2.png" alt="image 1">
            <p class="iconp2">FRANCHISE: 100%</p>
            <img class="icon3" src="cars/icons/3.png" alt="image 1">
            <p class="iconp3">PORTES: 4</p>
            <img class="icon4" src="cars/icons/4.png" alt="image 1">
            <p class="iconp4">CLIM: OUI</p>
          </div>
        </header>

        <div id="Cars" class="cartxt">
          <h1 class="head3">Points forts de la Classe C Berline</h1>
          <br>
          <h2 class="head3">Découvrez un nouveau type de luxe.</h2>
          <br>
          <p class="para555">La Nouvelle Classe C Berline fait entrer le confort dans votre vie avec une élégance sportive, une technologie novatrice en matière de sécurité et un intérieur luxueux.</p>
          <br>
        </div>
        <div class="images">
          <div  class="image">
              <img src="cars/Class_c_berline/20211011-2048887260-2-MBC42749.jpg" alt="image1">
              <h3 class="heads1">Sécurité</h3>
              <ul>
                <li><p class="parap">ABS, BAS, ASR et ESP
                    Airbags frontaux, latéraux avant et rideaux
                    Allumage automatique des projecteurs
                    ATTENTION ASSIST - Détection de somnolence
                    Contrôle de la pression des pneus
                    Essuie-glaces avec capteur de pluie
                    Freinage d'urgence assisté actif
                    Feux de jour à LED
                    Feux de stop d'urgence adaptatifs clignotants
                    Indicateur dynamique de maintenance ASSYST
                    Pneus avec possibilité de roulage à plat</p></li>
                <br>
              </ul>
          </div>
          <div  class="image">
            <img src="cars/Class_c_berline/20211011-438778753-3-MBC55606.jpg" alt="Image 3">
            <h3 class="heads1">Confort</h3>
            <ul>
              <li><p class="parap">Affichage média central 11.9"
                Climatisation automatique THERMATIC bi-zone
                Dossiers arrière rabattables 40/20/40
                DYNAMIC SELECT - Programmes de conduite
                Écran conducteur digital 10.25’’
                Multimédia MBUX avec commandes vocales
                Ouverture indépendante du coffre
                Pack confort des sièges
                Pack Rétroviseurs
                 Rétroviseurs à commutation jour/nuit auto
                 Rétroviseurs rabattables électriquement</p></li>
              <br>
            </ul>
        </div>
        <div  class="image">
          <img src="cars/Class_c_berline/20211011-395027751-Design-Interieur.jpg" alt="image1">
          <h3 class="headss"class="heads1">Design</h3>
          <ul>
            <li><p class="parapp"class="parap">Ciel de pavillon en tissu noir
                Console centrale dans le ton noir brillant
                Éclairage d'ambiance à 64 couleurs
                Jantes alliage 17" à 5 branches [R69]
                Pack Avantgarde
                 Buses d’aération avec éléments chromés argentés
                 Calandre avec étoile Mercedes intégrée
                 Capot moteur avec bossages prononcés
                 Double sorties d’échappement décoratives chromées
                 Pare-chocs avant avec insert chromé
                 Volant sport multifonction en cuir</p></li>
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
              <option value="Cla">Mercedes-benz Class C Berline</option>
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
