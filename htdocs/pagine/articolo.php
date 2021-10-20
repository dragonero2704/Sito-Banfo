<!DOCTYPE html>

<html lang="en">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-GKN4DGSBEF"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-GKN4DGSBEF');
  </script>
  <?php
   $cod = $_GET["articolo"];
  $conn = new mysqli("localhost","studente","pass_studente_banfi","banfo");
  if($conn->connect_error){
      die("<p>Connessione al server non riuscita: ".$conn->connect_error."</p>");
  }
  $sql = "SELECT codice_articolo as codice, DATE_FORMAT(articoli.data, '%d/%m/%Y') as data, argomento, nome, cognome, autore
          FROM articoli JOIN redazione
          ON autore=codice
          WHERE codice_articolo = $cod";
  $ris = $conn->query($sql) or die("<p>Query fallita! ".$conn->error."</p>");
  if ($ris->num_rows > 0) {
    while($row = $ris->fetch_assoc()) {
        $articolo = fopen("../articoli/".$row["codice"].".txt", "r");
        $titolo = fgets($articolo);
        $testo = fread($articolo, filesize("../articoli/".$row["codice"].".txt"));
        fclose($articolo);
        $sql1 = "SELECT codice_articolo as codice, nome, cognome, autore2
                FROM articoli JOIN redazione
                ON autore2=codice
                WHERE codice_articolo = $cod";
        $ris1 = $conn->query($sql1) or die("<p>Query fallita! ".$conn->error."</p>");
   ?>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo "$titolo"; ?></title>
  <link rel="icon" href="../immagini/logo.png">

  <!-- Css del Normalize -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  <!-- Css dello Slider -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <!--Script per le icone di fontawesome-->
<script src="https://kit.fontawesome.com/bb4d7bec8d.js" crossorigin="anonymous"></script>
  <!-- Il nostro css -->
  <link rel="stylesheet" href="../css/style.css">
  <!--Font Lato  -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>


  <!-- Menu di navigazione -->
  <section id="goHere">
  </section>
  <div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
      <a href="../index.php">Home</a>
      <a href="nuoviarticoli.php">News</a>
      <a href="redazione.php">Chi Siamo</a>
      <div class="tdn">
           <a href="login.php">Redattore</a>
      </div>
    </div>
  </div>

  <div class="cont_menu">
      <div class="header_menu clearfix">
        <div class="menu_logo">
          <a href="../index.php"><img src="../immagini/ilbanfotipo.png" alt=""></a>
        </div>
        <div class="menu_hamburger">
          <span onclick="openNav()">&#9776;</span>
        </div>
      </div>
  </div>

<!--============================================================================================================================-->


<?php

          echo "
                <div class='contenitore_articolo_pagina'>
                <div class='immagine_del_mio_articolo'>
                  <img src='../immagini/".$row["codice"].".jpg'>
                </div>
                <div class='cont_titolo_articolo'>
                  <h2 class='med-text text-bold'>".$titolo."</h2>
                </div>

                <div class='intestazione_del_mio_articolo'>
                  <ul class='breadcrumb'>
                  <li><a href='../index.php'>Home</a></li>
                    <li><a href='argomento.php?argomento=".$row["argomento"]."'>".$row["argomento"]."</a></li>
                    <li>".$titolo."</li>
                  </ul>
                </div>
                <div class='testi_del_mio_articolo'>

                  <div class='cont_testo'>
                    <p class='normal-text'>".nl2br($testo)."</p>
                    <div class='data_e_firma'>
                      <p class='normal-text'>".$row["data"]."</p>
                    <a href='membro.php?membro=".$row["autore"]."'><p class='normal-text'>".$row["nome"]." ".$row["cognome"]."</p></a>";
                    ?>
                    <?php
                    if($ris1->num_rows > 0) {
                      while($row1 = $ris1->fetch_assoc()){
                      echo "<a href='membro.php?membro=".$row1["autore2"]."'><p class='normal-text'>".$row1["nome"]." ".$row1["cognome"]."</p></a>";
                    }
                  }?>
                  <?php
                  echo"
                    </div>
                  </div>

                </div>

              </div>
          ";
  }
}
?>


<!--============================================================================================================================-->
<!-- footer -->
<div class="wrapper">
    <div class="nested0">
      <div class="title">
        <h2>IL BANFO</h2>
      </div>
      <div class="arrow">
        <a class="smooth" href="#goHere"><span class="fas fa-chevron-circle-up"></span></a>
        </div>
      </div>
      <div class="left card">
        <h2  class="tw">Social:</h2>
        <div class="foot__conn">
          <div class="social">
            <a target="_blank" href="https://www.instagram.com/ilbanfo/"><span class="fab fa-instagram fa-2x"></span></a>
            <span class="text">@IlBanfo</span>
          </div>
        </div>
      </div>
      <div class="center card">
        <h2  class="tw">Dove Siamo:</h2>
        <div class="foot__conn">
          <div class="place">
            <a target="_blank" href="https://goo.gl/maps/3iN3kXD4J7tHWehG7"><span class="fas fa-map-marker-alt"></span></a>
            <span class="text">Via Adda, 6, Vimercate</span>
          </div>
        </div>
      </div>
      <div class="right card">
        <h2 class="tw">Contattaci:</h2>
        <div class="foot__conn">
          <div class="email">
            <a target="_blank" href="mailto:hotaru@duttatexbd.com"> <span class="fas fa-envelope"></span></a>
              <span class="text">hotaru@duttatexbd.com</span>
          </div>
        </div>
      </div>
      <div class="bottom">
     <span class="credit">Sito Realizzato da "Il Banfo" | </span>
     <span class="far fa-copyright"></span><span> 2021 Tutti i diritti riservati.</span>
    </div>
  </div>
<!--============================================================================================================================-->

<!-- Scripts -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
<script>
        var smooth = [$('a.smooth'), 100, 850];

        smooth[0].click(function() {
          $('html, body').animate({
            scrollTop: $('[id="' + $.attr(this, 'href').substr(1) + '"]').offset().top -smooth[1]
          }, smooth[2]);
          return false;
        });
</script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

</body>
</html>
