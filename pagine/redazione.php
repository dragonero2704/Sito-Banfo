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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Chi Siamo</title>
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

    <div class="banner_singolo_argomento">
      <img src="../immagini/chisiamotop.png">
    </div>
<!--============================================================================================================================-->

<!-- Chi Siamo -->
<div class="chisiamo_container">
  <div class="chisiamo_container_in">
    <div class="chisiamo_titolo">
      <h1 class="big-text"><span>Chi Siamo</span></h1>
    </div>
    <div class="chisiamo__immagine">
      <img src="../immagini/redazione.jpg">
    </div>
    <div class="chisiamo_testo">
    <p class="normal-text">Il Banfo è il giornale scolastico del Liceo Scientifico e Classico A. Banfi di Vimercate. La tradizione viene portata avanti ormai dal 1980 e fino all’anno scorso, tra formati A4 e formati A5, i numeri venivano distribuiti per la classi sotto forma di giornali di carta. Con lo scoppio della pandemia anche il Banfo, come molte delle realtà scolastiche e non, si è dovuto reinventare. Nel corso del primo lockdown abbiamo quindi deciso di aprire un sito per continuare a tenere compagnia ai nostri lettori anche (e soprattutto) durante un periodo così particolare e difficile. <br>
Una volta tornati a scuola, nel settembre del 2020, pensando alle complicazioni che la pandemia avrebbe inevitabilmente portato sulla distribuzione delle copie in carta ed all’impatto ambientale che può avere stampare così tante pagine, abbiamo convenuto che procedere online sarebbe stata la scelta migliore.<br>
Un gruppo di ragazzi del Liceo delle Scienze applicate ha così creato questo sito.<br>
La redazione del Banfo, tra chi si occupa di scrivere, chi di disegnare, chi di correggere, chi dei social e chi dell’impaginazione, è composta da 29 studenti che si impegnano a portare nella quotidianità dei banfiani qualche interessante articolo di attualità, scienza, cinema, musica, letteratura e storia. Oltre a questo sul sito troverete anche vignette e disegni, novità ed eventi della nostra scuola e del nostro territorio.

</p>
    </div>
  </div>
</div>
<!-- Redazione -->
<div class="chisiamo_container">

    <div class="chisiamo_titolo">
      <h1 class=" big-text"><span>Redazione</span></h1>
    </div>
    <div class="Red_flex">
        <?php
            require('../data/db.php');
            $conn = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
            if($conn->connect_error){
                die("<p>Connessione al server non riuscita: ".$conn->connect_error."</p>");
            }
            $sql = "	SELECT codice, nome, cognome, professione, classe
                        FROM redazione
                        ORDER BY cognome";
            $ris = $conn->query($sql) or die("<p>Query fallita! ".$conn->error."</p>");
            if ($ris->num_rows > 0) {
                while($row = $ris->fetch_assoc()) {
                  if(file_exists("../immagini/".$row["nome"]."_".$row["cognome"].".jpg")){
                    echo "
                        
                            <div class='Red_singolo-membro'>
                                <div class='Red_singolo_membro_img'>
                                    <img src='../immagini/".$row["nome"]."_".$row["cognome"].".jpg'>
                                </div>
                                <div class='Red_contenitore_membro'>
                                    <h2>".$row["nome"]." ".$row["cognome"]."</h2>
                                    <p class='Red_professione'>".$row["professione"]."</p>
                                    <p>".$row["classe"]."</p>
                                    <a href='membro.php?membro=".$row["codice"]."'><button class='il_mio_bottone'><span>Scopri di più  </span></button></a>
                                </div>
                            </div>
                       
                    ";
                  }else{
                    echo "
                            <div class='Red_singolo-membro'>
                                <div class='Red_singolo_membro_img'>
                                    <img src='../immagini/user.jpg'>
                                </div>
                                <div class='Red_contenitore_membro'>
                                    <h2>".$row["nome"]." ".$row["cognome"]."</h2>
                                    <p class='Red_professione'>".$row["professione"]."</p>
                                    <p>".$row["classe"]."</p>
                                    <a href='membro.php?membro=".$row["codice"]."'><button class='il_mio_bottone'><span>Scopri di più  </span></button></a>
                                </div>
                            </div>
                      
                    ";
                  }
                    
                }
            }
            $conn->close();
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
