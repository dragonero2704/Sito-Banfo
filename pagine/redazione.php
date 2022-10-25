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
  <title>Chi Siamo</title>
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

  <div class="cont_menu">
    <div class="header_menu clearfix">
      <div class="menu_logo">
        <a href="home.php"><img src="../immagini/misc/ilbanfotipo.png" alt=""></a>
      </div>
      <div class="menu_hamburger">
        <span onclick="openNav()">&#9776;</span>
      </div>
    </div>
  </div>

  <div class="banner_singolo_argomento">
    <img src="../immagini/misc/chisiamotop.png">
  </div>
  <!--============================================================================================================================-->

  <!-- Chi Siamo -->
  <div class="chisiamo_container">
    <div class="chisiamo_container_in">
      <div class="chisiamo_titolo">
        <h1 class="big-text"><span>Chi Siamo</span></h1>
      </div>
      <div class="chisiamo__immagine">
        <img src="../immagini/misc/redazione.jpg">
      </div>
      <div class="chisiamo_testo">
        <p class="normal-text">Il Banfo è il giornale scolastico del Liceo Scientifico e Classico A. Banfi di Vimercate. La tradizione viene portata avanti ormai dal 1980 e fino all’anno scorso, tra formati A4 e formati A5, i numeri venivano distribuiti per la classi sotto forma di giornali di carta. Con lo scoppio della pandemia anche il Banfo, come molte delle realtà scolastiche e non, si è dovuto reinventare. Nel corso del primo lockdown abbiamo quindi deciso di aprire un sito per continuare a tenere compagnia ai nostri lettori anche (e soprattutto) durante un periodo così particolare e difficile. <br>
          Una volta tornati a scuola, nel settembre del 2020, pensando alle complicazioni che la pandemia avrebbe inevitabilmente portato sulla distribuzione delle copie in carta ed all’impatto ambientale che può avere stampare così tante pagine, abbiamo convenuto che procedere online sarebbe stata la scelta migliore.<br>
          Un gruppo di ragazzi del Liceo delle Scienze applicate ha così creato questo sito.<br>
          La redazione del Banfo, tra chi si occupa di scrivere, chi di disegnare, chi di correggere, chi dei social e chi dell’impaginazione, è composta da studenti che si impegnano a portare nella quotidianità dei banfiani qualche interessante articolo di attualità, scienza, cinema, musica, letteratura e storia. Oltre a questo sul sito troverete anche vignette e disegni, novità ed eventi della nostra scuola e del nostro territorio.

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
      require_once('../data/db.php');
      $database = new Database();
      if (!empty($database->connerror)) {
        echo "<p>Errore di connessione " . $database->connerror['code'] . ":" . $database->connerror['message'] . "</p>";
      }

      $sql = "	SELECT codice, nome, cognome, professione, classe
                        FROM redazione
                        WHERE attivo = 1
                        ORDER BY cognome";
      $ris = $database->query($sql) or die("<p>Query fallita! " . $database->error['message'] . "</p>");
      if ($ris->num_rows > 0) {
        while ($row = $ris->fetch_assoc()) {
          $img_path = file_exists("../immagini/redazione/" . $row["nome"] . "_" . $row["cognome"] . ".jpg") ? "../immagini/redazione/" . $row["nome"] . "_" . $row["cognome"] . ".jpg" : "../immagini/redazione/user.jpg";
          echo "
                        
                            <div class='Red_singolo-membro'>
                                <div class='Red_singolo_membro_img'>
                                    <img src='" . $img_path . "'>
                                </div>
                                <div class='Red_contenitore_membro'>
                                    <h2>" . $row["nome"] . " " . $row["cognome"] . "</h2>
                                    <p class='Red_professione'>" . $row["professione"] . "</p>
                                    <p>" . $row["classe"] . "</p>
                                    <a href='membro.php?membro=" . $row["codice"] . "'><button class='il_mio_bottone'><span>Scopri di più  </span></button></a>
                                </div>
                            </div>
                       
                    ";
        }
      }
      ?>
    </div>


  </div>
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