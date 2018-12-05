<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Orion webdesign</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="google-site-verification" content="rOZEYZLp0R_frz4wET1QqGRpOlf9iVVkWYjpWPSWcRw" />
</head>
<body>

  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
      <a href="#home" class="w3-bar-item" style="padding: 0;"><img src="images/logozonder.png" height="40"></a>
      <!-- Float links to the right. Hide them on small screens -->
      <div class="w3-right w3-hide-small" id="menuItems">
       <a href="#service" class="w3-bar-item btn" style="text-decoration:none;width:196px;">Wat doen wij?</a>
       <a href="#projects" class="w3-bar-item btn" style="text-decoration:none;width: 140px;">Projecten</a>
       <a href="#about" class="w3-bar-item btn" style="text-decoration:none;">Wie zijn wij?</a>
       <a href="#contact" class="w3-bar-item btn" style="text-decoration:none;">Contact</a>
     </div>

     <!-- Hamburger menu -->
     <div class="w3-right w3-bar-item" id="hamburgerIcon" onclick="showMenuItems('hamburgerMenuItems')" style="display: none;">
      <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
    </div>

    <div id="hamburgerMenuItems" class="w3-container w3-hide">
      <a href="#service" onclick="document.getElementById('hamburgerMenuItems').classList.remove('w3-show')" class="w3-bar-item hamburgerMenuLinks" style="text-decoration:none;width:100% !important;">Wat doen wij?</a>
      <a href="#projects" onclick="document.getElementById('hamburgerMenuItems').classList.remove('w3-show')" class="w3-bar-item hamburgerMenuLinks" style="text-decoration:none;width: 100% !important;">Projecten</a>
      <a href="#about" onclick="document.getElementById('hamburgerMenuItems').classList.remove('w3-show')" class="w3-bar-item hamburgerMenuLinks" style="text-decoration:none;width: 100% !important;">Wie zijn wij?</a>
      <a href="#contact" onclick="document.getElementById('hamburgerMenuItems').classList.remove('w3-show')" class="w3-bar-item hamburgerMenuLinks" style="text-decoration:none;width: 100% !important;">Contact</a>
    </div> 
    <!-- Einde hamburgermenu -->

  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-wide" id="home">
  <img id="headerImg" src="images/header.jpg" style="filter: brightness(0.3); max-height: calc(120vh + 56px);width: 100%;">
  <div class="w3-display-middle w3-margin-top w3-center">
    <img id="headerLogo" src="images/logowit.png" style="opacity: 1 !important;height: 180px;">
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <div class="w3-container w3-padding-32" id="service">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Wat doen wij?</h3>
    <div class="w3-row w3-margin-bottom">
      <div class="w3-panel w3-center w3-leftbar w3-sand">
        <p><i>          
          Wij zijn Daan & Romy en zijn twee enthousiaste studenten met verschillende achtergronden.<br/> Daan is als ICT'er technisch opgeleid en houd zich vooral bezig met hoe iets <i>werkt</i>,<br/> terwijl Romy met haar creatieve achtergrond zich bezig houd met hoe iets <i>oogt</i>.<br><br>Dit levert een gouden combinatie op voor het maken van websites,<br/> waarin beide aspecten belangrijk zijn om tot een mooi resultaat te komen. <br/><br/>En dat allemaal voor een zeer vriendelijk prijsje!</i></p>
      </div>      
    </div>
    <div class="w3-row">
      <div class="w3-col m12 l6 w3-margin-bottom">
       <img src="images/webdesign.png" style="height:100px; float:left; margin-right:20px;">
       <div class="titel">Webdesign</div>
       <div class="iconText">
         Een goed webdesign zorgt voor een professionele uitstraling. Maar nog belangrijker: het is een visitekaartje voor je organisatie. Een goed design dat aansluit bij je huisstijl zorgt voor een positieve eerste indruk.
       </div>
     </div>
     <div class="w3-col m12 l6 w3-margin-bottom">
       <img src="images/responsive.png" style="height:100px; float:left; margin-right:20px;">
       <div class="titel">Responsive</div>
       <div class="iconText">
         Een responsive design is een ontwerp dat er op elk apparaat goed uit ziet. Dus of je site nou bekeken wordt op computer, tablet of telefoonscherm: jouw website kan elk formaat aan! 
       </div> 
     </div> 
   </div>  
   <div class="w3-row">  
     <div class="w3-col m12 l6 w3-margin-bottom">
       <img src="images/domein.png" style="height:100px; float:left; margin-right:20px;">
       <div class="titel">Domeinnaam-registratie & hosting</div>
       <div class="iconText">
         Om je website online te kunnen benaderen, moet het gekoppeld zijn aan een adres waarop het te vinden is. Daarvoor huur je als het ware een adres. Wij kunnen dit voor een aantrekkelijk tarief allemaal voor je regelen, zodat je zelf niks meer hoeft te doen!
       </div> 
     </div>
     <div class="w3-col m12 l6 w3-margin-bottom">
       <img src="images/app.png" style="height:100px; float:left; margin-right:20px;">
       <div class="titel">Webapplicaties</div>
       <div class="iconText">
        Als je aan een 'gewone' site niet genoeg hebt, maken wij ook webapplicaties op maat. Klanten, voorraden, leden, in- en verkoop...Het maakt niet uit wat je wilt beheren, wij zorgen ervoor dat het makkelijk en overzichtelijk wordt via een op maat gemaakte webapplicatie!
      </div>
    </div> 
  </div>
  <div class="w3-row w3-margin-bottom">
    <div class="w3-panel w3-center w3-rightbar w3-sand">
        <p><i>          
          Nieuwsgierig geworden naar wat wij voor jou kunnen betekenen? <br/>Vul <a href="#contact">het contactformulier</a> in en we reageren zo snel mogelijk.<br/><br/> Daarnaast kun je ons altijd bellen, mailen of appen! De gegevens staan onderin deze pagina.</i></p>
      </div>    
  </div>
</div>

<!-- Project Section -->
<div class="w3-container w3-padding-32" id="projects">
  <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Projecten</h3>


  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">DASE-training</div>
        <a href="http://www.dasetraining.nl/" target="_blank"><img src="images/dase.png" alt="House" style="width:100%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Autospuiterij</div>
        <img src="/w3images/house2.jpg" alt="House" style="width:100%">
      </div>
    </div>
  </div>
</div>

<!-- About Section -->
<div class="w3-container w3-padding-32" id="about">
  <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Wie zijn wij?</h3>

  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col l3 m6">
      <img src="/w3images/team1.jpg" alt="Daan" style="width:100%">
      <h3>Daan Franken</h3>
      <p class="w3-opacity">Developer</p>
      Mijn naam is Daan Franken (28) en zo'n 16 jaar geleden begon ik met het maken van (destijds erg simpele) websites. Uiteindelijk heb ik hier mijn studie van gemaakt, en heb over de jaren heen een hoop ervaring opgedaan. Ik ben vooral sterk in de technische kant van het maken van websites, terwijl Romy uitblinkt in de creatieve kant. Dat maakt ons als team erg sterk.
    </div>
    <div class="w3-col l3 m6">
      <img src="/w3images/team1.jpg" alt="Romy" style="width:100%">
      <h3>Romy Vermeulen</h3>
      <p class="w3-opacity">Designer</p>
      Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
    </div>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-padding-32" id="contact">
  <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
  <div class="w3-row">
    <div class="w3-col m12 l6">
      <div class="contactzin"><b>Vragen staat vrij!</b> <br/>Vul onderstaand formulier in en wij nemen zo snel mogelijk contact met je op.</div>
      <form method="POST" name="contactForm">
        <input class="w3-input w3-border" type="text" placeholder="Naam" required name="Name">
        <input class="w3-input w3-section w3-border" type="email" placeholder="Email" required name="Email">
        <input class="w3-input w3-section w3-border" type="text" placeholder="Onderwerp" required name="Subject">
        <textarea class="w3-input w3-section w3-border" type="text" id="tekst" placeholder="Tekst" required name="Comment"></textarea>
        <button class="w3-button w3-black w3-section" type="submit" name="contactSubmit">
          <i class="fa fa-paper-plane"></i> VERSTUUR!
        </button>
      </form>
    </div>

    <div class="w3-col m12 l6 w3-center">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d39396.42110861125!2d5.393017597634203!3d51.89242130313897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1snl!2snl!4v1539988590752" width="400" height="300" frameborder="0" w3 class="w3-grayscale" style="border:0" allowfullscreen></iframe>
    </div>

  </div>
</div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-black w3-padding-16" id="footer">
  <p id="footer">
    <i class="fa fa-mobile fa-lg" style="margin-right:15px; width:20px;" aria-hidden="true"></i><a href="tel:0642820571" style="text-decoration:none;">06 42820571</a><br/><br/>
    <i class="fa fa-mobile fa-lg" style="margin-right:15px; width:20px;" aria-hidden="true"></i><a href="tel:0615066050" style="text-decoration:none;">06 15066050</a><br/><br/>
    <i class="fa fa-envelope" style="margin-right:15px; width:20px;" aria-hidden="true"></i><a href="mailto:info@orion-webdesign.nl" target="_top" style="text-decoration:none;">info@orion-webdesign.nl</a><br/><br/>
    <i class="fa fa-globe" style="margin-right:15px; width:20px;" aria-hidden="true"></i><a href="http://www.orion-webdesign.nl" style="text-decoration: none">www.orion-webdesign.nl</a></p><br/><br/>
  </footer>

</body>
</html>


<!-- MODAL -->
<div id="modalFormSubmitted" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('modalFormSubmitted').style.display='none'" 
      class="w3-button w3-display-topright">&times;</span>
      <p>Je bericht is verzonden. We nemen zo snel mogelijk contact met je op!</p>
    </div>
  </div>
</div>
<!-- END MODAL -->

<?php
if(isset($_POST['contactSubmit']))
{
  $name = $_REQUEST['Name'];
  $emailadd = $_REQUEST['Email'];
  $mailSubject = $_REQUEST['Subject'];
  $message = $_REQUEST['Comment'];


  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->SMTPDebug = 2;
  $mail->Debugoutput = 'html';
  $mail->Host = "localhost";
  $mail->Port = 25;
  $mail->SMTPSecure = '';
  $mail->SMTPAutoTLS = false;
  $mail->SMTPAuth = true;
  $mail->Username = "info@orion-webdesign.nl";
  $mail->Password = "Or!on18";
  $mail->setFrom('info@orion-webdesign.nl', 'Daan Franken');
  $mail->addAddress('dgmfranken@gmail.com', 'Daan Franken');
  $mail->AddCC('romy_v123@hotmail.com', 'Romy Vermeulen');
  $mail->Subject = $mailSubject;
  $mail->msgHTML("Nieuw bericht van ".$name." via ".$emailadd.":<br/><br/>".$message);
  $mail->SMTPDebug = 0;
  if (!$mail->send()) 
  {
    echo "Mailer Error: " . $mail->ErrorInfo;
  }
  else
  {
    echo "<script>document.getElementById('modalFormSubmitted').style.display='block'</script>";
  }
}

if(isset($_GET['formSent']))
{
  echo '<script>document.getElementById("modalFormSubmitted").style.display="block"</script>';
}
?>

<script>
  function showMenuItems(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else { 
      x.className = x.className.replace(" w3-show", "");
    }
  }
</script>
