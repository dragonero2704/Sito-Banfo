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
        $cod = $_GET["membro"];
        $conn = new mysqli("localhost","studente","pass_studente_banfi","banfo");
        if($conn->connect_error){
            die("<p>Connessione al server non riuscita: ".$conn->connect_error."</p>");
        }
        $sql = "SELECT nome, cognome, classe, professione
                FROM redazione
                WHERE codice = $cod";
        $ris = $conn->query($sql) or die("<p>Query fallita! ".$conn->error."</p>");
        if ($ris->num_rows > 0) {
          while($row = $ris->fetch_assoc()) {
    ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo "".$row["nome"]." ".$row["cognome"].""; ?></title>
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
<!-- Singola Persona -->
<?php
        echo "
            <div class='persona_contenitore  clearfix'>
                <div class='persona_card clearfix'>
                    <div class='persona_foto'>
                        <img src='../immagini/".$row["nome"]."_".$row["cognome"].".jpg'>
                    </div>

                    <div class='persona_generalita'>
                        <div class='persona_nome normal-text'>
                            <h2>".$row["nome"]." ".$row["cognome"]."</h2>
                        </div>
                        <div class='persona_testo normal-text'>
                            <h3>Classe:</h3>
                            <p>".$row["classe"]."</p>
                            <h3>Ruolo:</h3>
                            <p>".$row["professione"]."</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='chisiamo_titolo normal-text'>
              <h1><span>I miei articoli</span></h1>
            </div>
            <div class='container_news clearfix'>
              <div class='news_riga'>
        ";
    }
}

$sql = "SELECT codice_articolo as codice, DATE_FORMAT(data, '%d/%m/%Y') as data, argomento
        FROM articoli
        WHERE autore = $cod OR autore2=$cod
        ORDER BY DATE_FORMAT(data, '%Y/%m/%d') DESC";
$ris = $conn->query($sql) or die("<p>Query fallita! ".$conn->error."</p>");
if ($ris->num_rows > 0) {
    while($row = $ris->fetch_assoc()) {
        $articolo = fopen("../articoli/".$row["codice"].".txt", "r");
        $titolo = fgets($articolo);
        $testo = fread($articolo,"450");
        fclose($articolo);
        echo "
            <div class='news_colonna'>
                <div class='news_elemento'>
                    <div class='news_titolo'>
                        <h2>".$titolo."</h2>
                    </div>
                    <div class='news_immagine'>
                        <div class='news_categoria'>
                            <h2>".$row["argomento"]."</h2><!-- Scritto dinamicamente con il database -->
                    </div>
                    <img src='../immagini/".$row["codice"].".jpg'>
                    <div class='news_data_su_immagine top-left'>
                        <p><i style='margin-right:10px;' class='far fa-calendar-alt'></i>".$row["data"]."</p> <!-- Scritta dinamicamente con il database -->
                    </div>
                    </div>
                    <div class='news_introduzione'>
                        <p>".$testo."...</p>
                    </div>
                    <div class='news_bottone'>
                        <a href='articolo.php?articolo=".$row["codice"]."'><button class='il_mio_bottone'><span>Scopri di più  </span></button></a>
                    </div>
                </div>
            </div>
        ";
    }
}else {
  echo "Nessun articolo da visualizzare";
}
?>
</div>
</div>

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
            <a target="_blank" href="mailto:laredazionedelbanfo@gmail.com"> <span class="fas fa-envelope"></span></a>
              <span class="text">laredazionedelbanfo@gmail.com</span>
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

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
   <script>
     var swiper = new Swiper('.swiper-container', {
       effect: 'coverflow',
       grabCursor: true,
       centeredSlides: true,
       slidesPerView: 'auto',
       coverflowEffect: {
         rotate: 0,
         stretch: 0,
         depth: 0,
         modifier: 1,
         slideShadows: true,
       },
       loop: true,
     });
   </script>

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
