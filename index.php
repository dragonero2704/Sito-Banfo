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
  <title>Il Banfo</title>
  <link rel="icon" href="immagini/logo.png">
  <!-- Css del Normalize -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  <!-- Css dello Slider -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <!--Script per le icone di fontawesome-->
<script src="https://kit.fontawesome.com/bb4d7bec8d.js" crossorigin="anonymous"></script>
  <!-- Il nostro css -->
  <link rel="stylesheet" href="css/style.css">
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
      <a href="index.php">Home</a>
      <a href="pagine/nuoviarticoli.php">News</a>
      <a href="pagine/redazione.php">Chi Siamo</a>
    <div class="tdn">
         <a href="pagine/login.php">Redattore</a>
    </div>
    </div>
  </div>

      <!-- Da testare -->
      <!-- <div class="header_menu">
        <div class="menu_logo">
          <a href="index.php"><img src="immagini/ilbanfotipo.png" alt=""></a>
        </div>
        <div class="menu_hamburger">
          <span onclick="openNav()">&#9776;</span>
        </div>
      </div> -->
      <!-- Da testare -RR -->
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
    <!-- Banner-videobackground -->
    <div class="banner">
        <img src="immagini/bg2.jpg" alt="">
      </div>
  <!--============================================================================================================================-->
  <!-- sezione info  -->
  <!--============================================================================================================================-->
  <!-- Tabella argomenti  -->
  <div>
      <h1 class="big-text aligncenter">Argomenti</h1>
  </div>

  <div class="sezione_tabella">
    <div class="argomentirow">
      <a href="pagine/argomento.php?argomento=Ambiente">
      <div class="argomenticolumn">
        <div class="argomenticard">
          <div id="Ambienteback" class="ingrandimento">
            <div class="argomenticontainer">
              <h2>Ambiente</h2>
              <p class="text-bold">There's no planet B. Cosa succederà se non ci attiviamo per salvare il nostro pianeta?</p>
            </div>
          </div>
        </div>
      </div>
    </a>

    <a href="pagine/argomento.php?argomento=Attualità">
      <div class="argomenticolumn">
        <div class="argomenticard">
          <div id="attualitaback" class="ingrandimento">
            <div class="argomenticontainer">
              <h2>Attualità</h2>
              <p class="text-bold">Cosa succede nel mondo? Articoli per restare al passo con i tempi.</p>
            </div>
          </div>
        </div>
      </div>
</a>


<a href="pagine/argomento.php?argomento=Cinema">
      <div class="argomenticolumn">
        <div class="argomenticard">
          <div id="cinemaback" class="ingrandimento">
            <div class="argomenticontainer">
              <h2>Cinema</h2>
              <p class="text-bold">Tutto ciò che la redazione vi consiglia di guardare.</p>
            </div>
          </div>
        </div>
      </div>
</a>

<a href="pagine/argomento.php?argomento=Libri">
      <div class="argomenticolumn">
        <div class="argomenticard">
          <div id="libriback" class="ingrandimento">
            <div class="argomenticontainer">
              <h2>Libri</h2>
              <p class="text-bold">Consigli di lettura della redazione per quando avrete finito di leggere i libri delle vacanze.</p>
            </div>
          </div>
        </div>
      </div>
</a>


<a href="pagine/argomento.php?argomento=Musica">
      <div class="argomenticolumn">
        <div class="argomenticard">
          <div id="musicaback" class="ingrandimento">
            <div class="argomenticontainer">
              <h2>Musica</h2>
              <p class="text-bold">Cosa aggiungere alla playlist "Brani preferiti" di Spotify.</p>
            </div>
          </div>
        </div>
      </div>
    </a>

      <a href="pagine/argomento.php?argomento=Scienza">
        <div class="argomenticolumn">
          <div class="argomenticard">
            <div id="scienzaback" class="ingrandimento">
              <div class="argomenticontainer">
                <h2>Scienza</h2>
                <p class="text-bold">Dalle cellule all'universo, guardare il mondo con gli occhi della scienza.</p>
              </div>
            </div>

          </div>
        </div>
      </a>

      <a href="pagine/argomento.php?argomento=Scuola">
        <div class="argomenticolumn">
          <div class="argomenticard">
            <div id="scuolaback" class="ingrandimento">
              <div class="argomenticontainer">
                <h2>Scuola</h2>
                <p class="text-bold">Banfi e BanfiOnline: tutto quello che riguarda il nostro istituto.</p>
              </div>
            </div>

          </div>
        </div>
      </a>

      <a href="pagine/argomento.php?argomento=Sport">
        <div class="argomenticolumn">
          <div class="argomenticard">
            <div id="sportback" class="ingrandimento">
              <div class="argomenticontainer">
                <h2>Sport</h2>
                <p class="text-bold">Non rimanere indietro, corri con noi sui percorsi delle competizioni sportive più famose.</p>
              </div>
            </div>

          </div>
        </div>
      </a>

      <a href="pagine/argomento.php?argomento=Storia">
      <div class="argomenticolumn">
        <div class="argomenticard">
          <div id="storiaback" class="ingrandimento">
            <div class="argomenticontainer">
              <h2>Storia</h2>
              <p class="text-bold">Un viaggio nel mare del Tempo: pillole di storia.</p>
            </div>
          </div>

        </div>
      </div>
    </a>

    <a href="pagine/argomento.php?argomento=Varie">
      <div class="argomenticolumn">
        <div class="argomenticard">
          <div id="varieback" class="ingrandimento">
            <div class="argomenticontainer">
              <h2>Varie</h2>
              <p class="text-bold">Per quando le nostre menti non riescono a rientrare in una categoria.</p>
            </div>
          </div>

        </div>
      </div>
    </a>

    </div>
  </div>
  
  <!--============================================================================================================================-->

  <!-- News  -->
  <div>
      <h1 class="big-text aligncenter">News</h1>
    </div>

    <div class="container_news">
            <?php
              require('./data/db.php');
              $conn = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
              if($conn->connect_error){
                  die("<p>Connessione al server non riuscita: ".$conn->connect_error."</p>");
              }
              $sql = "	SELECT codice_articolo as cod, DATE_FORMAT(articoli.data, '%d/%m/%Y') as data, autore, articoli.argomento as argomento, nome, cognome
                        FROM articoli JOIN redazione
                        ON autore=codice JOIN categorie
                        ON articoli.argomento=categorie.argomento
                        ORDER BY DATE_FORMAT(articoli.data, '%Y/%m/%d') DESC
                        LIMIT 6";
              $ris = $conn->query($sql) or die("<p>Query fallita! ".$conn->error."</p>");
              if ($ris->num_rows > 0) {
                while($row = $ris->fetch_assoc()) {
                    $articolo = fopen("articoli/".$row["cod"].".txt", "r");
                    $titolo = fgets($articolo);
                    $testo = fread($articolo,"450");
                    for ($index=0; $index < strlen($testo); $index++) { 
                        if($testo[$index]=='\n'){
                          $testo[$index]=' ';
                        }
                    }

                    fclose($articolo);
                    echo "
                    <div class='news_elemento'>
                        <div class='news_titolo'>
                          <h2>".$titolo."</h2>
                        </div>

                        <div class='news_immagine'>
                          <div class='news_categoria'>
                            <h2>".$row["argomento"]."</h2><!-- Scritto dinamicamente con il database -->
                          </div>
                          <img src='immagini/".$row["cod"].".jpg'>
                          <div class='news_data_su_immagine top-left'>
                            <p><i style='margin-right:10px;' class='far fa-calendar-alt'></i>".$row["data"]."</p> <!-- Scritta dinamicamente con il database -->
                          </div>
                          <div class='news_autore bottom-center'>
                          <a href='pagine/membro.php?membro=".$row["autore"]."'><p>".$row["nome"]." ".$row["cognome"]."</p></a>
                          </div>
                        </div>

                        <div class='news_introduzione'>
                          <p>".$testo."...</p>
                        </div>

                        <div class='news_bottone'>
                          <a href='pagine/articolo.php?articolo=".$row["cod"]."'><button class='il_mio_bottone'><span>Scopri di più  </span></button></a>
                        </div>
                    </div>
                    
                    ";
                }
              }
              $conn->close();
            ?>
    </div>

  <!--============================================================================================================================-->

  <!-- Chi siamo -->

  <div class="chisiamo  mt-2">
    <div class="chisiamo__img ">
    <img src="immagini/redazione.jpg">
    </div>
    <div class="chisiamo__content ">
      <h2 class="big-text">Chi Siamo?</h2>
      <p class="text-justify">Il Banfo è il giornale scolastico del Liceo Scientifico e Classico A. Banfi di Vimercate. La tradizione viene portata avanti ormai dal 1980 e fino all’anno scorso, tra formati A4 e formati A5, i numeri venivano distribuiti per la classi sotto forma di giornali di carta. Con lo scoppio della pandemia anche il Banfo, come molte delle realtà scolastiche e non, si è dovuto reinventare. Nel corso del primo lockdown abbiamo quindi deciso di aprire un sito per continuare a tenere compagnia ai nostri lettori anche (e soprattutto) durante un periodo così particolare e ...
      </p>
      <a href="pagine/redazione.php"><button class="bottone_blue">Scopri di più</button></a>
    </div>
  </div>
  <!--============================================================================================================================-->

  <!-- Slider Redazione -->
  <div class="mt-2">
    <h1 class="big-text aligncenter">Redazione</h1>
  </div>

  <div class="contenitore_gigante">
    <div class="contenitore_gigante_dentro">

        <div class="testimonials">
          <!-- Swiper -->
          <div class="swiper-container">
            <div class="swiper-wrapper">
              
              <!-- Card 1 -->
                  <?php
                      require('./data/db.php');
                      $conn = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
                      if($conn->connect_error){
                          die("<p>Connessione al server non riuscita: ".$conn->connect_error."</p>");
                      }
                      $sql = "	SELECT codice, nome, cognome, professione
                                FROM redazione
                                WHERE cognome<>'Banfo'
                                AND attivo=1
                                ORDER BY cognome";
                      $ris = $conn->query($sql) or die("<p>Query fallita! ".$conn->error."</p>");
                      if ($ris->num_rows > 0) {
                        while($row = $ris->fetch_assoc()) {
                          if(file_exists("immagini/".$row["nome"]."_".$row["cognome"].".jpg")){
                            echo "
                                <div class='swiper-slide'>
                                <div class='cardH'>
                                  <div class='layer'></div>
                                  <div class='content'>
                                    <div class='imgBx'>
                                      <img src='immagini/".$row["nome"]."_".$row["cognome"].".jpg'>
                                    </div>
                                    <div class='details'>
                                      <a href='./pagine/membro.php?membro=".$row["codice"]."'>
                                        <h3>".$row["nome"]."<br>".$row["cognome"]."<br><span>".$row["professione"]."</span></h3>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            ";
                          }else{
                            echo "
                                <div class='swiper-slide'>
                                <div class='cardH'>
                                  <div class='layer'></div>
                                  <div class='content'>
                                    <div class='imgBx'>
                                      <img src='immagini/user.jpg'>
                                    </div>
                                    <div class='details'>
                                      <a href='./pagine/membro.php?membro=".$row["codice"]."'>
                                        <h3>".$row["nome"]."<br>".$row["cognome"]."<br><span>".$row["professione"]."</span></h3>
                                      </a>
                                    </div>
                                  </div>
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
        </div>
    </div>
  </div>

  <!--============================================================================================================================-->

  <!-- Eventi -->
<!--
  <div class="eventi mt-2b">
        <div class="eventi__title">
          <h2 class="big-text  tw">Eventi</h2>
        </div>
      <div class=" eventi__text">
          <p class="tw normal-text">Gli eventi imperdibili di questo mese: quello che accade intorno a noi</p>
        <a href="pagine/argomento.php?argomento=Eventi"><button class="bottone_blue">Scopri di più</button></a>
      </div>
    </div>
  -->
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
