<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-GKN4DGSBEF"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-GKN4DGSBEF');
  </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Il Banfo</title>
  <?php
    require_once('../components/head.php');
  ?>
</head>

<body>

  <!-- Menu di navigazione -->
  <section id="goHere">
  </section>
  <div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
      <a href="home.php">Home</a>
      <a href="nuoviarticoli.php">News</a>
      <a href="redazione.php">Chi Siamo</a>
      <div class="tdn">
        <a href="login.php">Redattore</a>
      </div>
    </div>
  </div>

  <!-- Da testare -->
  <!-- <div class="header_menu">
        <div class="menu_logo">
          <a href="index.php"><img src="../immagini/ilbanfotipo.png" alt=""></a>
        </div>
        <div class="menu_hamburger">
          <span onclick="openNav()">&#9776;</span>
        </div>
      </div> -->
  <!-- Da testare -RR -->
  <div class="cont_menu">
    <div class="header_menu clearfix">
      <div class="menu_logo">
        <a href="home.php"><img src="./immagini/ilbanfotipo.png" alt=""></a>
      </div>
      <div class="menu_hamburger">
        <span onclick="openNav()">&#9776;</span>
      </div>
    </div>
  </div>


  <!--============================================================================================================================-->
  <!-- Banner-videobackground -->
  <div class="banner">
    <img src="../immagini/bg2.jpg" alt="">
  </div>
  <!--============================================================================================================================-->
  <!-- sezione info  -->
  <!--============================================================================================================================-->
  <!-- Tabella argomenti  -->
  <div>
    <h1 class="big-text aligncenter">Argomenti</h1>
  </div>

  <div class="homeflex">
    
      <a href="argomento.php?argomento=Ambiente">
        
          <div class="argomenticard">
            <div id="Ambienteback" class="ingrandimento">
              <div class="argomenticontainer">
                <h2>Ambiente</h2>
                <p class="text-bold">There's no planet B. Cosa succederà se non ci attiviamo per salvare il nostro pianeta?</p>
              </div>
            </div>
          </div>
      
      </a>

      <a href="argomento.php?argomento=Attualità">
        
          <div class="argomenticard">
            <div id="attualitaback" class="ingrandimento">
              <div class="argomenticontainer">
                <h2>Attualità</h2>
                <p class="text-bold">Cosa succede nel mondo? Articoli per restare al passo con i tempi.</p>
              </div>
            </div>
          </div>
       
      </a>


      <a href="argomento.php?argomento=Cinema">
        
          <div class="argomenticard">
            <div id="cinemaback" class="ingrandimento">
              <div class="argomenticontainer">
                <h2>Cinema</h2>
                <p class="text-bold">Tutto ciò che la redazione vi consiglia di guardare.</p>
              </div>
            </div>
          </div>
      
      </a>

      <a href="argomento.php?argomento=Libri">
        
          <div class="argomenticard">
            <div id="libriback" class="ingrandimento">
              <div class="argomenticontainer">
                <h2>Libri</h2>
                <p class="text-bold">Consigli di lettura della redazione per quando avrete finito di leggere i libri delle vacanze.</p>
              </div>
            </div>
          </div>
   
      </a>


      <a href="argomento.php?argomento=Musica">
        
          <div class="argomenticard">
            <div id="musicaback" class="ingrandimento">
              <div class="argomenticontainer">
                <h2>Musica</h2>
                <p class="text-bold">Cosa aggiungere alla playlist "Brani preferiti" di Spotify.</p>
              </div>
            </div>
          </div>
    
      </a>

      <a href="argomento.php?argomento=Scienza">
        
          <div class="argomenticard">
            <div id="scienzaback" class="ingrandimento">
              <div class="argomenticontainer">
                <h2>Scienza</h2>
                <p class="text-bold">Dalle cellule all'universo, guardare il mondo con gli occhi della scienza.</p>
              </div>
            </div>

          </div>
      
      </a>

      <a href="argomento.php?argomento=Scuola">
        
          <div class="argomenticard">
            <div id="scuolaback" class="ingrandimento">
              <div class="argomenticontainer">
                <h2>Scuola</h2>
                <p class="text-bold">Banfi e BanfiOnline: tutto quello che riguarda il nostro istituto.</p>
              </div>
            </div>

          </div>
        
      </a>

      <a href="argomento.php?argomento=Sport">
        
          <div class="argomenticard">
            <div id="sportback" class="ingrandimento">
              <div class="argomenticontainer">
                <h2>Sport</h2>
                <p class="text-bold">Non rimanere indietro, corri con noi sui percorsi delle competizioni sportive più famose.</p>
              </div>
            </div>

          </div>
     
      </a>

      <a href="argomento.php?argomento=Storia">
        
          <div class="argomenticard">
            <div id="storiaback" class="ingrandimento">
              <div class="argomenticontainer">
                <h2>Storia</h2>
                <p class="text-bold">Un viaggio nel mare del Tempo: pillole di storia.</p>
              </div>
            </div>

          </div>
      
      </a>

      <a href="argomento.php?argomento=Varie">
        
          <div class="argomenticard">
            <div id="varieback" class="ingrandimento">
              <div class="argomenticontainer">
                <h2>Varie</h2>
                <p class="text-bold">Per quando le nostre menti non riescono a rientrare in una categoria.</p>
              </div>
            </div>

         
        </div>
      </a>

    
  </div>

  <!--============================================================================================================================-->

  <!-- News  -->
  <div>
    <h1 class="big-text aligncenter">News</h1>
  </div>

  <div class="homeflex">
    <?php
    require_once('../data/db.php');
    //   $conn = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
    //   if($conn->connect_error){
    //       die("<p>Connessione al server non riuscita: ".$conn->connect_error."</p>");
    //   }
    $database = new Database() or die("<p>Connessione al server non riuscita: " . $database->connerror['message'] . "</p>");
    
    $sql = "	SELECT DISTINCT collabora.codice_articolo as cod, DATE_FORMAT(articoli.data, '%d/%m/%Y') as data, collabora.codice_autore as autore, articoli.argomento as argomento, nome, cognome
                        FROM collabora JOIN articoli
                        ON collabora.codice_articolo=articoli.codice_articolo JOIN categorie
                        ON articoli.argomento=categorie.argomento JOIN redazione 
                        ON redazione.codice=collabora.codice_autore
                        WHERE collabora.ruolo IN ('Scrittore', 'Scrittrice')
                        ORDER BY DATE_FORMAT(articoli.data, '%Y/%m/%d') DESC
                        LIMIT 6";
    $ris = $database->query($sql) or die("<p>Query fallita! " . $database->error['message'] . "</p>");
    if ($ris->num_rows > 0) {
      while ($row = $ris->fetch_assoc()) {
        $articolo = fopen("../articoli/" . $row["cod"] . ".txt", "r");
        $titolo = fgets($articolo);
        $testo = fread($articolo, "450");
        for ($index = 0; $index < strlen($testo); $index++) {
          if ($testo[$index] == '\n') {
            $testo[$index] = ' ';
          }
        }

        fclose($articolo);
        echo "
                    <div class='news_elemento'>
                        <div class='news_titolo'>
                          <h2>" . $titolo . "</h2>
                        </div>

                        <div class='news_immagine'>
                          <div class='news_categoria'>
                            <h2>" . $row["argomento"] . "</h2><!-- Scritto dinamicamente con il database -->
                          </div>
                          <img src='../immagini/" . $row["cod"] . ".jpg'>
                          <div class='news_data_su_immagine top-left'>
                            <p><i style='margin-right:10px;' class='far fa-calendar-alt'></i>" . $row["data"] . "</p> <!-- Scritta dinamicamente con il database -->
                          </div>
                          <div class='news_autore bottom-center'>
                          <a href='membro.php?membro=" . $row["autore"] . "'><p>" . $row["nome"] . " " . $row["cognome"] . "</p></a>
                          </div>
                        </div>

                        <div class='news_introduzione'>
                          <p>" . $testo . "...</p>
                        </div>

                        <div class='news_bottone'>
                          <a href='articolo.php?articolo=" . $row["cod"] . "'><button class='il_mio_bottone'><span>Scopri di più  </span></button></a>
                        </div>
                    </div>
                    
                    ";
      }
    }
    ?>
  </div>

  <!-- ======================================================================================================================== -->
  <!-- Podcast -->
  <h1 class="big-text aligncenter">Podcast</h1>

  <iframe src="https://open.spotify.com/embed/show/0gKdcGHwE48SZsejAPCe5v?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>

  <!--============================================================================================================================-->

  <!-- Chi siamo -->

  <div class="chisiamo  mt-2">
    <div class="chisiamo__img ">
      <img src="../immagini/redazione.jpg">
    </div>
    <div class="chisiamo__content">
      <h2 class="big-text">Chi Siamo?</h2>
      <p class="text-justify">Il Banfo è il giornale scolastico del Liceo Scientifico e Classico A. Banfi di Vimercate. La tradizione viene portata avanti ormai dal 1980 e fino all’anno scorso, tra formati A4 e formati A5, i numeri venivano distribuiti per la classi sotto forma di giornali di carta. Con lo scoppio della pandemia anche il Banfo, come molte delle realtà scolastiche e non, si è dovuto reinventare. Nel corso del primo lockdown abbiamo quindi deciso di aprire un sito per continuare a tenere compagnia ai nostri lettori anche (e soprattutto) durante un periodo così particolare e ...
      </p>
      <a href="redazione.php"><button class="bottone_blue">Scopri di più</button></a>
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
            //   $conn = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);

            $sql = "	SELECT codice, nome, cognome, professione
                                FROM redazione
                                WHERE cognome<>'Banfo'
                                AND attivo=1
                                ORDER BY cognome";
            $ris = $database->query($sql) or die("<p>Query fallita! " . $conn->error['message'] . "</p>");
            if ($ris->num_rows > 0) {
              while ($row = $ris->fetch_assoc()) {
                $img_path = file_exists("../immagini/" . $row["nome"] . "_" . $row["cognome"] . ".jpg") ? "../immagini/" . $row["nome"] . "_" . $row["cognome"] . ".jpg" : "../immagini/user.jpg";

                echo "
                                <div class='swiper-slide'>
                                <div class='cardH'>
                                  <div class='layer'></div>
                                  <div class='content'>
                                    <div class='imgBx'>
                                      <img src='" . $img_path . "'>
                                    </div>
                                    <div class='details'>
                                      <a href='./membro.php?membro=" . $row["codice"] . "'>
                                        <h3>" . $row["nome"] . "<br>" . $row["cognome"] . "<br><span>" . $row["professione"] . "</span></h3>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            ";
              }
            }
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
        <a href="argomento.php?argomento=Eventi"><button class="bottone_blue">Scopri di più</button></a>
      </div>
    </div>
  -->
  <!--============================================================================================================================-->
  <!-- footer -->
  <?php
  require_once('../components/footer.php');
  ?>
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
        scrollTop: $('[id="' + $.attr(this, 'href').substr(1) + '"]').offset().top - smooth[1]
      }, smooth[2]);
      return false;
    });
  </script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

</body>

</html>